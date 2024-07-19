<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menuler;

class MenulerController extends Controller
{
    public function showMenuler()
    {
        $menuler = Menuler::all();
        return view('admin.menuler.menuler', compact('menuler'));
    }

    public function showMenuEkleForm()
    {
        return view('admin.menuler.menuekle');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'menuname' => 'required|string|max:255',
            'downname' => 'required|string',
            'href' => 'required|string',
        ]);


        Menuler::create($validatedData);

        return redirect()->route('admin.menuler.menuler')->with('success', 'Menü başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        $menu = Menuler::find($id);
        return view('admin.menuler.menuduzenle', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'menuname' => 'required|string|max:255',
            'downname' => 'required|string',
            'href' => 'required|string',
        ]);

        $menu = Menuler::find($id);

        $menu->update($validatedData);

        return redirect()->route('admin.menuler.menuler')->with('success', 'Menü başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $menu = Menuler::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.menuler.menuler')->with('success', 'Menü başarıyla silindi.');
    }
}
