<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;
use App\Models\Yazilar;
use App\Models\Banner; // Correct import of Yazilar model
use App\Models\Menuler;

class AdminUserController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.giris');
    }

    public function showAdminler()
    {
        $adminUsers = AdminUser::all();
        return view('admin.kullanicilar.adminler', compact('adminUsers'));
    }

    public function showAdminEkleForm()
    {
        return view('admin.kullanicilar.adminekle');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        } else {
            $errors = ['email' => 'E-posta veya şifre hatalı.'];
            return redirect()->route('admin.login')->withErrors($errors);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function showDashboard()
    {
        $userCount = AdminUser::count();
        $articleCount = Yazilar::count();
        $bannerCount = Banner::count();
        $menuCount = Menuler::count();
        return view('admin.dashboard', compact('userCount', 'articleCount' , 'bannerCount' , 'menuCount' ,));
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:adminusers,email',
            'password' => 'required|min:6|confirmed',
        ]);

        AdminUser::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.kullanicilar.adminler')->with('success', 'Admin kullanıcısı başarıyla oluşturuldu.');
    }

    public function edit($id)
    {
        $adminUser = AdminUser::find($id);
        return view('admin.kullanicilar.adminduzenle', compact('adminUser'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'nullable|min:6|confirmed',
        ]);

        $adminUser = AdminUser::find($id);
        $adminUser->name = $request->input('name');
        $adminUser->email = $request->input('email');

        if ($request->filled('password')) {
            $adminUser->password = Hash::make($request->input('password'));
        }

        $adminUser->save();

        return redirect()->route('admin.kullanicilar.adminler')->with('success', 'Admin updated successfully');
    }

    public function destroy($id)
    {
        $adminUser = AdminUser::findOrFail($id);
        $adminUser->delete();

        return redirect()->route('admin.kullanicilar.adminler')->with('success', 'Admin kullanıcısı başarıyla silindi.');
    }
}
