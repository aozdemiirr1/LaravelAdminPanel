<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Yazilar;

class YazilarController extends Controller
{
    public function showYazilar()
    {
        $yazilar = Yazilar::all();
        return view('admin.yazilar.yazilar', compact('yazilar'));
    }
    

    public function showYaziEkleForm()
    {
        return view('admin.yazilar.yaziekle');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        Yazilar::create($validatedData);

        return redirect()->route('admin.yazilar.yazilar')->with('success', 'Yazı başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        $yazi = Yazilar::find($id);
        return view('admin.yazilar.yaziduzenle', compact('yazi'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $yazi = Yazilar::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        } else {
            $validatedData['image'] = $yazi->image;
        }

        $yazi->update($validatedData);

        return redirect()->route('admin.yazilar.yazilar')->with('success', 'Yazı başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $yazi = Yazilar::findOrFail($id);
        $yazi->delete();

        return redirect()->route('admin.yazilar.yazilar')->with('success', 'Yazı başarıyla silindi.');
    }
}
