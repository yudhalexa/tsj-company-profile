<?php

namespace App\Http\Controllers\Frontsite;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\portfolioEmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

     public function sendEmail(Request $request)
    {
        {
             $this->validate($request, [
                'name'     =>  'required',
                'email'  =>  'required|email',
                'phone' => 'required',
                'message' =>  'required'
             ]);

             $data = array(
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'message' => $request->message,
             );

             Mail::to('admin@bukukasir.my.id')->send(new portfolioEmail($data));
            return back()->with('success', 'Thanks for contacting us!');
        }

    }

}
