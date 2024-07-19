<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Yazilar;

class BannerController extends Controller
{
    public function showBannerlar()
    {
        $bannerlar = Banner::all();
        return view('admin.bannerlar.bannerlar', compact('bannerlar'));
    }

    public function showHome()
    {
        $bannerlar = Banner::all();
        $yazilar = Yazilar::all(); // Yazılar ile ilgili verileri de ekleyin
        return view('site.home.home', compact('bannerlar', 'yazilar'));
    }

      
    public function showBannerEkleForm()
    {
        return view('admin.bannerlar.bannerekle');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'explanation' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        Banner::create($validatedData);

        return redirect()->route('admin.bannerlar.bannerlar')->with('success', 'Banner başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.bannerlar.bannerduzenle', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'explanation' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $banner = Banner::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath;
        } else {
            $validatedData['image'] = $banner->image;
        }

        $banner->update($validatedData);

        return redirect()->route('admin.bannerlar.bannerlar')->with('success', 'Banner başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('admin.bannerlar.bannerlar')->with('success', 'Banner başarıyla silindi.');
    }
}
