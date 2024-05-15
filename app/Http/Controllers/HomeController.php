<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Branch;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\HomeSetting;
use App\Models\RateSetting;
use App\Models\AboutSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $services = Service::all();
        $setting = Setting::first();
        $about = AboutSetting::first();
        $first_image = HomeSetting::first();
        $home = HomeSetting::orderBy('id', 'asc')->get()->skip(1);
        return view('welcome', [
            'services' => $services,
            'setting' => $setting,
            'about' => $about,
            'first_image' => $first_image,
            'home' => $home
        ]);
    }
    function about(){
        $services = Service::all();
        $clients = Client::orderBy('id', 'desc')->take(7)->get();

        $services = Service::all();
        $setting = Setting::first();
        $about = AboutSetting::first();
        $home = HomeSetting::all();
        $rate = RateSetting::all();
        return view('about', [
            'services' => $services,
            'clients' => $clients,
            'setting' => $setting,
            'about' => $about,
            'home' => $home,
            'rate' => $rate
        ]);
    }
    function branch(){
        $services = Service::all();
        $branches = Branch::all();
        $setting = Setting::first();
        return view('branches',compact('services','branches','setting'));
    }
    function contactus(){
        $services = Service::all();
        return view('contactus',compact('services'));
    }
    function project(){
        $services = Service::all();
        $projects = Project::all();
        $setting = Setting::first();
        return view('projects',compact('services','projects','setting'));
    }
    function project_show($id){
        $services = Service::all();
        $project = Project::find($id);
        return view('project-details',compact('services','project'));
    }
    function news(){
        $services = Service::all();
        $news = News::get();
        $setting = Setting::first();
        return view('news',compact('services','news','setting'));
    }
    function news_show($id){
        $services = Service::all();
        $news = News::find($id);
        return view('news-details',compact('services','news'));
    }
    function gallery(){
        $services = Service::all();
        return view('gallery',compact('services'));
    }
    function service_show($id){
        $services = Service::all();
        $service_data = Service::find($id);
        $setting = Setting::first();
        return view('service_deletails', [
            'services' => $services,
            'setting' => $setting,
            'service_data' => $service_data,
        ]);
    }
}
