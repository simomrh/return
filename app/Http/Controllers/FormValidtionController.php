<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Form;


class FormValidtionController extends Controller
{
// Create Form
public function createUserForm(Request $request) {
    return view('form');
  }


  public function UserForm(Request $request) {


      $this->validate($request, [

          'message' => 'required'
       ]);

       $message = $request->message;

       $req = new Request();
       $req->request->add(['msg'=>$message]);

       $rslt = \App\Http\Controllers\ReturnController::checkRequest($req);


      //Form::create($request->all());
      return back()->with('success', 'Your form has been submitted. Msg : '.$rslt);
  }

}
