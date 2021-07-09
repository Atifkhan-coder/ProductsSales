<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Business;
class BusinessController extends Controller
{
//Add Business...
     public function addbusiness(Request $req)
     {
//validation...
        $this->validate($req,[
            'title' => 'required|alpha|min:3|max:25',
            'type' => 'required|min:3|max:50',
            'accountnumber' => 'required|max:15|min:15'
        ]);
//Connect With DataBase...
    $addbusiness = new Business;
    $addbusiness->title=$req->title;
    $addbusiness->type=$req->type;
    $addbusiness->accountnumber=$req->accountnumber;
    $addbusiness->user_id = auth()->user()->id;
    $addbusiness->save();
         return redirect('category')->with('success','Business Created Successfully');
    }
}
