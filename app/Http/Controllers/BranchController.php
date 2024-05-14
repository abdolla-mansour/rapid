<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use Exception;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();
        return view('admin.branch', compact('branches'));
    }

    public function landing(){
        $branches = Branch::all();
        return view('branches',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBranchRequest $request)
    {
        try{
            $branch = new Branch();
            $branch->name = $request->name;
            $branch->map_link = $request->map_link;
            $branch->address = $request->address;
            $branch->email = $request->email;
            $branch->phone = $request->phone;
            $branch->save();
            toastr()->success('تم انشاء الفرع بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('حدث خطأ ما حاول مرة اخري');
            return redirect()->back();
        }

    }
    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateBranchRequest $request)
    {
        try{
            $branch = Branch::find($id);
            $branch->name = $request->name;
            $branch->map_link = $request->map_link;
            $branch->address = $request->address;
            $branch->email = $request->email;
            $branch->phone = $request->phone;
            $branch->save();
            toastr()->success('تم تعديل الفرع بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('حدث خطأ ما حاول مرة اخري');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($branch_id)
    {
        try{
            $branch = Branch::find($branch_id);
            if(!$branch){
                return redirect()->back()->withErrors('الفرع غير موجود');
            }
            $branch->delete();
            toastr()->success('تم حذف الفرع بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('حدث خطأ ما حاول مرة اخري');
            return redirect()->back();
        }
    }
}
