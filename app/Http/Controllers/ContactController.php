<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use Exception;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();
        return view('admin.contact', compact('contacts'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        try{
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();
            toastr()->success('تم ارسال الرسالة بنجاح');
            return redirect()->back();
        }catch(Exception $e){
            toastr()->error('حدث خطأ يرجي المحاوله مره اخري لاحقا');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($contact_id)
    {
        $contact = Contact::find($contact_id);
        if(!$contact){
            toastr()->error('هذة الرسالة غير موجودة');
            return redirect()->back();
        }
        $contact->delete();
        toastr()->success('تم حذف الرسالة بنجاح');
        return redirect()->back();
    }
}
