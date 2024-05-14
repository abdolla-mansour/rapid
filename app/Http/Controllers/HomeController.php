<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Client;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    function index(){
        $services = Service::all();
        return view('welcome',compact('services'));
    }
    function about(){
        $services = Service::all();
        $clients = Client::orderBy('id', 'desc')->take(7)->get();
        return view('about',compact('services','clients'));
    }
    function branch(){
        $services = Service::all();
        $branches = Branch::all();
        return view('branches',compact('services','branches'));
    }
    function contactus(){
        $services = Service::all();
        return view('contactus',compact('services'));
    }
    function project(){
        $services = Service::all();
        $projects = Project::all();
        return view('projects',compact('services','projects'));
    }
    function project_show($id){
        $services = Service::all();
        $project = Project::find($id);
        return view('project-details',compact('services','project'));
    }
    function news(){
        $services = Service::all();
        $news = News::get();
        return view('news',compact('services','news'));
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
        return view('service_deletails',compact('services','service_data'));
    }
}
