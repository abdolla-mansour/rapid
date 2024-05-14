<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::get();
        return view('admin.news', compact('news'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        try{
            $news = new News;
            $news->title = $request->title;
            $news->image = $request->image->store('news','public');
            $news->content = $request->content;
            $news->save();
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('تم الحفظ بنجاح');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        try{
            $news->title = $request->title;
            if($request->hasFile('image')){
                Storage::disk('public')->delete($news->image);
                $news->image = $request->image->store('news', 'public');
            }
            $news->content = $request->content;
            $news->save();
            toastr()->success('تم التعديل بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('تم التعديل بنجاح');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($news_id)
    {
        $news = News::find($news_id);
        if(!$news){
            toastr()->error('هذا الخبر غير موجود');
            return redirect()->back();
        }
        Storage::disk('public')->delete($news->image);
        $news->delete();
        toastr()->success('تم الحذف بنجاح');
        return redirect()->back();
    }
}
