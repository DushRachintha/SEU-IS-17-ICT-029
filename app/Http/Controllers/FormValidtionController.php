<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormValidtionController extends Controller
{
    public function createUserForm(Request $request) {
        return view('form');
      }
    
      // Store Form data in database
      public function UserForm(Request $request) {
        $this->validate($request, [
            'name' =>'required',
            'username'  =>'required',
            'Date of birth'=>'required',
            'email' => 'required|email',
            'phone'=>'required',
            'NIC'=> 'required',
            'Gender'=>'required',
            'Password'=>'required',
            'Reenter password'=>'required'
        ]);

        Form::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
    }
}
