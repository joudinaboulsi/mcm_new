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
        $email_client = $request->input('email');
        $phone = $request->input('phone');
        $gender = $request ->input('sex');
        $msg_client =$request ->input('message');
 
        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.career', array('name' => $name,'email'=>$email_client,'phone'=>$phone,'sex'=>$gender, 'message'=>$msg_client ), function($message) use ($email_client, $name)
            {
                $message->from($email_client, $name);
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
       $email_client = $request->input('email');
       $phone = $request->input('phone');
       $address = $request->input('address');
       $qty = $request->input('qty');
       $structure = $request->input('structure');
       $order_by = $request->input('order_by');
       $gender = $request ->input('sex');
       $msg_client =$request ->input('message');

       // if form is full
       if (! empty($_POST))
       {
           Mail::send('emails.booking', array('customer' => $customer,'address'=>$address,'email'=>$email_client,'phone'=>$phone,'sex'=>$gender,
            'qty'=>$qty, 'structure'=>$structure, 'order_by'=>$order_by, 'message'=>$msg_client ), function($message) use ($email_client, $customer)
           {
               $message->from($email_client, $customer);
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
       $lastname = $request->input('last_name');
       $firstname = $request->input('first_name');
       $email_client = $request->input('email');
       $phone = $request->input('phone');
       $gender = $request ->input('sex');
       $msg_client =$request ->input('message');

       // if form is full
       if (! empty($_POST))
       {
           Mail::send('emails.contact', array('last_name' => $lastname,'first_name'=>$firstname,'email'=>$email_client,'phone'=>$phone,'sex'=>$gender,
           'message'=>$msg_client ), function($message) use ($email_client, $firstname)
           {
               $message->from($email_client, $firstname);
               $message->to('joudi@webneoo.com')->subject('Message from Website');
           });
           \Session::flash('msg', 'Successfully sent!' );
           return redirect()->back();
       }
   }
}
