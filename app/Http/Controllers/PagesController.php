<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    
    //Home Page
    public function home(){
        return view('pages.home');
    }

    
    //About Page
    public function about(){
        return view('pages.about');
    }
    
    // Projects Page
    public function projects(){
        return view('pages.projects');
    }


    // Our Fleets Page
    public function fleets(){
        return view('pages.fleets');
    }

    // Careers Page
    public function career(){
    return view('pages.career');
    }


    public function sendCareer(Request $request)
    {
  
        $name = $request->input('name');
        $email= $request->input('email');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $msg_client =$request->input('message');
 
        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.career', array('name' => $name,'email'=>$email,'phone'=>$phone,'gender'=>$gender, 'msg_client'=>$msg_client ), function($message) use ($email, $name)
            {
                $message->from($email, $name);
                $message->to('joudi@webneoo.com')->subject('Message from Website');
            });
            \Session::flash('msg', 'Successfully sent!' );
            return redirect()->back();
        }
    }

    // E-Booking Page
     public function booking(){
        return view('pages.booking');
    }

    // sent eboooking
    public function sendBooking(Request $request)
   {
 
       $customer = $request->input('customer');
       $email= $request->input('email');
       $phone = $request->input('phone');
       $address = $request->input('address');
       $qty = $request->input('qty');
       $structure = $request->input('structure');
       $order_by = $request->input('order_by');
       $gender = $request->input('gender');
       $msg_client =$request->input('message');

       // if form is full
       if (! empty($_POST))
       {
           Mail::send('emails.booking', array('customer' => $customer,'address'=>$address,'email'=>$email,'phone'=>$phone,'gender'=>$gender,
            'qty'=>$qty, 'structure'=>$structure, 'order_by'=>$order_by, 'msg_client' => $msg_client ), function($message) use ($email, $customer)
                {
                    $message->from($email, $customer);
                    $message->to('joudi@webneoo.com')->subject('Message from Website');
                });
           \Session::flash('msg', 'Successfully sent!' );
           return redirect()->back();
       }
   }

    // Contact Page
    public function contact(){
    return view('pages.contact');
   }

   public function sendContactForm(Request $request)
   {
       $lastname = $request->input('lastname');
       $firstname = $request->input('firstname');
       $email = $request->input('email');
       $phone = $request->input('phone');
       $gender = $request ->input('gender');
       $subject =$request ->input('subject');
       $msg_client =$request ->input('message');

       // if form is full
       if (! empty($_POST))
       {
            Mail::send('emails.contact', array('lastname' => $lastname,'firstname'=>$firstname, 'email' => $email, 'phone' => $phone, 'gender' => $gender, 'subject' => $subject, 'msg_client' => $msg_client), function($message) use ($email, $lastname)
            {
                $message->from($email, $lastname);
                $message->to('joudi@webneoo.com')->subject('Message from Website');
            });
            \Session::flash('msg', 'Successfully sent!' );
            return redirect()->back();
       }
   }
}
