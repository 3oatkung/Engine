<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Payment;
use App\User;
use Mail;
use Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{

    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'amount' => 'required',
            'date' => 'required',
            'time' => 'required',
        ]);
    }

    public function getReportPaymentForm()
    {
        return view('payment.paymentForm');
    }

    public function createPayment(Request $request)
    {
         $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'amount' => 'required',
            'date' => 'required',
            'time' => 'required',
            ]);


        $payment = new Payment();
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->amount = $request->amount;
        $payment->checked = false;
        $payment->date = $request->date;
        $payment->time = $request->time;
        $payment->method = $request->paymentMethod;
        $payment->save();

        $this->setMember($request->email);
        $this->sentPaymentEmail($payment);
        $this->sentPurchasedEmail($payment);
        return view('payment.thankyou');
    }

    public function paypalPaymentSuccess()
    {
        return view('payment.paymentForm');
    }

    public function getPaymentIndex()
    {
        $payments = Payment::orderBy('id', 'DESC')->get();
        return view('payment.paymentIndex', compact('payments'));
    }

    public function deletePayment($id)
    {
        $payments = Payment::where('id',$id)->get();
        $payment = $payments[0];
        $payment->delete();
        return redirect('/showPayments');
    }

    public function checkedPayment($id)
    {
        $payments = Payment::where('id',$id)->get();
        $payment = $payments[0];
        $payment->checked = "checked";
        $payment->save();

        $users = User::where('email',$payment->email)->get();
        if(count($users)>0)
        {
            $user = $users[0];
            $user->checked = "checked";
            $user->save();
            
        }
        return redirect('/showPayments');
    }

    public function uncheckedPayment($id)
    {
        $payments = Payment::where('id',$id)->get();
        $payment = $payments[0];
        $payment->checked = "";
        $payment->save();

        $users = User::where('email',$payment->email)->get();
        if(count($users)>0)
        {
            $user = $users[0];
            $user->checked = "";
            $user->save();
            
        }
        return redirect('/showPayments');
    }

    public function setMember($email)
    {
        $users = User::where('email',$email)->get();
        if(count($users)>0)
        {
            $users[0]->memberStatus = 'Member';
            $users[0]->save();   
        }

    }

    public function sentPaymentEmail($payment)
    {
        $emailInfo = [];
        $emailInfo['name'] = $payment->name;
        $emailInfo['email'] = $payment->email;
        $emailInfo['date'] = $payment->date;
        $emailInfo['time'] = $payment->time;
        $emailInfo['method'] = $payment->method;
        Mail::send('emails.paymentEmail',$emailInfo, function($message) use($emailInfo) 
        {
            $message->to('admin@exvertise.com')->subject('eXvertise : แจ้งการชำระเงินจากลูกค้า');
        });
    }

    public function sentPurchasedEmail($payment)
    {
        $emailInfo = [];
        $emailInfo['name'] = $payment->name;
        $emailInfo['email'] = $payment->email;
        $emailInfo['date'] = $payment->date;
        $emailInfo['time'] = $payment->time;
        $emailInfo['method'] = $payment->method;
        Mail::send('emails.purchasedEmail',$emailInfo, function($message) use($emailInfo) 
        {
            $message->to($emailInfo['email'])->subject('eXvertise : ขอบคุณสำหรับการสั่งซื้อ');
        });
    }



}
