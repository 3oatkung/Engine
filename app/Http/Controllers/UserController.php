<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Payment;

class UserController extends Controller
{
    public function getIndex(Request $request)
    {
    	$users = User::orderBy('id', 'DESC')->get();;
    	return view('user.userIndex',compact('users'));
    }
    
    public function getUser($id, Request $request)
    {
    	$users = User::where('id',$id)->get();
    	$user =  $users[0];
    	return view('user.userInfo',compact('user'));
    }
    
    public function editUser($id, Request $request)
    {
    	$users = User::where('id',$id)->get();
    	$user =  $users[0];
    	$user->name = $request->name;
    	$user->lastname = $request->lastname;
    	//$user->email = $request->email;
    	$user->save();
    	return redirect('/user');
    }
    
    public function deleteUser($id)
    {
    	$users = User::where('id',$id)->get();
    	$user =  $users[0]->delete();
    	return redirect('/user');
    }
    
    public function setMember($id)
    {
    	$users = User::where('id',$id)->get();
    	$users[0]->memberStatus = 'Member';
    	$users[0]->save();
    	return redirect('/user');
    }

    public function cancelMember($id, Request $request)
    {
    	$users = User::where('id',$id)->get();
    	$users[0]->memberStatus = '';
    	$users[0]->save();
        
        $payments = Payment::where('email',$users[0]->email)->get();
        $payment = $payments[0];
        $payment->delete();
        
    	return redirect('/user');
    }

  
}
