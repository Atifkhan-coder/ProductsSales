<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactus(Request $req)
     {
//validation...
        $this->validate($req,[
            'fname' => 'required',
            'lname' => 'required',
            'country' => 'required',
            'msg' => 'required',
        ]);
//Connect With DataBase...
    $store = new Contact;
    $store->fname=$req->fname;
    $store->lname=$req->lname;
    $store->country=$req->country;
    $store->msg=$req->msg;
    $store->save();
         return redirect('home')->with('success','Oh! Your Contact Message Saved Successfully');
    }
}
