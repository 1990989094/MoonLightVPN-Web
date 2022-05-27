<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingApiController extends Controller
{
    public function setting()
    {
        $setting = Setting::all();
        return response()->json($setting);
    }
}
