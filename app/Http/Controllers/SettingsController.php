<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.settings', ['setting' => $setting]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'site_name' => ['bail', 'required', 'string', 'max:50'],
            'contact_number' => ['required', 'numeric'],
            'contact_email' => ['required', 'email'],
            'address' => ['required']
        ]);
        $setting = Setting::first();
        $setting->site_name = $request->site_name;
        $setting->contact_number = $request->contact_number;
        $setting->contact_email = $request->contact_email;
        $setting->address = $request->address;
        $setting->save();
        return redirect()->route('settings.index')
            ->with('toast_success', 'Settings successfully updated');
    }
}
