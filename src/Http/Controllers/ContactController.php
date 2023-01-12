<?php

namespace Amithk199610\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Amithk199610\Contact\Models\Contact;
use Amithk199610\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function save(Request $request)
    {

        $contact = Contact::create($request->all());
        $name = $request->firstname." ".$request->lastname;
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->subject,$request->country,$name));
        return redirect()->route('contact');
    }
}
