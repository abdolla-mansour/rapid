<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Setting;
use App\Models\HomeSetting;
use App\Models\RateSetting;
use App\Models\AboutSetting;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings', [
            'setting' => Setting::first(),
            'about_setting' => AboutSetting::first(),
            'home_settings' => HomeSetting::all(),
            'rate_settings' => RateSetting::all(),
            'company_profile' => CompanyProfile::first(),
        ]);
    }

    public function home_create(Request $request)
    {
        $request->validate([
            'home_image' => 'required|image',
            'image_name' => 'required|string',
        ]);

        try {

            // dd(storage_path('app/public/settings'));

            $image_name = uniqid() . '.' . $request->file('home_image')->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());

            $my_image = $manager->read($request->home_image)->cover(1349, 450);

            $my_image->save(storage_path('app/public/settings/' . $image_name));

            // $img = $request->home_image->store('settings', 'public');
            // Image::make($img);
            // $img = $img->resize(1349, 450);

            HomeSetting::create([
                'home_image' => 'settings/' . $image_name,
                'image_name' => $request->image_name
            ]);

            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        } catch (Exception $e) {

            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function home_update($id, Request $request)
    {
        $request->validate([
            'home_image' => 'image',
            'image_name' => 'required|string',
        ]);

        try {
            $home = HomeSetting::findOrFail($id);

            $home->image_name = $request->image_name;

            if ($request->hasFile('home_image')) {
                Storage::disk('public')->delete($home->home_image);
                $img = $request->home_image->store('settings', 'public');
                $home->home_image = $img;
            }

            $home->save();

            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        } catch (Exception $e) {

            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function home_delete($id)
    {
        try {
            $home = HomeSetting::findOrFail($id);

            Storage::disk('public')->delete($home->home_image);

            $home->delete();

            toastr()->success('تم الحذف بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function about_update(Request $request)
    {
        $request->validate([
            'how_ar_we' => 'required|string',
            'vision' => 'required|string'
        ]);

        try {

            $about = AboutSetting::first();

            $about->how_ar_we = $request->how_ar_we;
            $about->vision = $request->vision;

            $about->save();

            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function another_update(Request $request)
    {
        $request->validate([
            'facebook' => 'required|string',
            'linkedin' => 'required|string',
            'tweeter' => 'required|string',
            'instagram' => 'required|string',
            'snapchat' => 'required|string',
            'tiktok' => 'required|string',
            'whatsapp' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'head_office' => 'required|string',
        ]);

        try {

            $another = Setting::first();

            $another->facebook = $request->facebook;
            $another->linkedin = $request->linkedin;
            $another->tweeter = $request->tweeter;
            $another->instagram = $request->instagram;
            $another->snapchat = $request->snapchat;
            $another->tiktok = $request->tiktok;
            $another->whatsapp = $request->whatsapp;
            $another->email = $request->email;
            $another->phone = $request->phone;
            $another->head_office = $request->head_office;

            $another->save();

            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }


    public function rate_create(Request $request)
    {
        $request->validate(['rate' => 'required|string']);
        try {

            RateSetting::create(['rate' => $request->rate]);

            toastr()->success('تم الإنشاء بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function rate_update($id, Request $request)
    {
        $request->validate(['rate' => 'required|string']);
        try {


            $rate = RateSetting::findOrFail($id);

            $rate->rate = $request->rate;
            $rate->save();

            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function rate_delete($id)
    {
        try {
            RateSetting::findOrFail($id)->delete();

            toastr()->success('تم الحذف بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return redirect()->back();
        }
    }

    public function profile_update(Request $request)
    {
        $request->validate([
            'profile_name' => ['required', 'file'],
        ]);

        try {
            $company = CompanyProfile::first();
            Storage::disk('my_disk')->delete($company->profile_name);
            $name = uniqid() . '.' . $request->file('profile_name')->getClientOriginalExtension();
            $request->file('profile_name')->move(public_path('storage/profile'), $name);

            $company->profile_name = $name;
            $company->save();

            toastr()->success('تم الإضافه بنجاح');
            return redirect()->back();
        } catch (Exception $e) {
            toastr()->error('حدث خطا ما');
            return $e->getMessage();
            return redirect()->back();
        }
    }
}
