<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class SettingController extends Controller
{
    use UploadAble;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('setting');
    }

    public function update(Request $request)
    {
        if ($request->has('app_logo') && ($request->file('app_logo') instanceof UploadedFile)) {

            if (config('settings.app_logo') != null) {
                $this->deleteOne(config('settings.app_logo'));
            }
            $logo = $this->uploadOne($request->file('app_logo'), 'img');
            Setting::set('app_logo', $logo);
        }
        else {

            $keys = $request->except('_token');

            foreach ($keys as $key => $value)
            {
                Setting::set($key, $value);
            }
        }
        return redirect()->back()->with('success', 'Settings Updated');
    }
}
