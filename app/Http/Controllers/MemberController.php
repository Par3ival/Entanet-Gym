<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        return view('members');

    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:members',
            'address' => 'required|max:255',
            'dob' => 'nullable|date|max:255',
            'tp' => 'nullable|max:255',
            'membership' => 'required|in:annual,monthly',
        ]);
        \App\Member::create($validatedData);

        return redirect()->to('/home?success=true');

    }

    public function show($id) 
    {

        $members1 = \App\Member::findOrFail($id);
        return view('editmember',['members1'=>$members1]);
    
    }

    public function edit(Request $request, $id)
    {
        $member = \App\Member::find($id);

        $member->fname = $request->input('fname');
        $member->lname = $request->input('lname');
        $member->email = $request->input('email');
        $member->address = $request->input('address');
        $member->dob = $request->input('dob');
        $member->tp = $request->input('tp');
        $member->membership = $request->input('membership');

        $member->save();
        return redirect()->to('/home?success=true');
        
        //\App\Member::update('update members set fname = ?,lname=?,email=?,address=?,dob=?,tp=?,membership where id = ?',[$fname,$lname,$email,$address,$dob,$tp,$membership,$id]);
    }
}