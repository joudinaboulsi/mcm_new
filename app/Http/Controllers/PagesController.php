<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use SEO;
use SEOMeta;



class PagesController extends Controller
{
    
    //Home Page
    public function home(){
        $url = url()->current();
        SEO::setTitle('Concrete Solutions | High-Quality Concrete Products', false);
        SEO::setDescription('Explore our range of high-quality concrete products for construction projects. Our concrete solutions are durable, reliable, and designed to meet your needs.');
        SEOMeta::setKeywords('Concrete, concrete products, construction, building materials, construction materials');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('abouts/truck-mixers.jpg'); 

        return view('pages.home');
    }

    
    //About Page
    public function about()
    {
        $url = url()->current();
        SEO::setTitle('Mcm concrete - About Us | Expert Concrete Solutions and Services', false);
        SEO::setDescription('EDiscover Mcm concrete , a trusted leader in the concrete industry in the Middle East and Gulf countries
        (Lebanon, UAE and KSA). With 15 years of experience, we specialize in delivering expert concrete solutions and services. Learn more about our team, mission, and commitment to quality craftsmanship.');
        SEOMeta::setKeywords('Concrete, concrete products, construction, building materials, construction materials');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('abouts/truck-mixers.jpg'); 

        return view('pages.about');
    }
    
    // Projects Page
    public function projects()
    {
        $url = url()->current();
        SEO::setTitle('Mcm Concrete Projects | Showcase of Expert Concrete Work', false);
        SEO::setDescription('Explore our portfolio of exceptional concrete projects at [Your Company Name]. From stunning driveways to intricate stamped concrete designs, our experts bring craftsmanship and innovation to every project. Get inspired and envision the possibilities for your next concrete endeavor.');
        SEOMeta::setKeywords('Concrete, concrete products, construction, building materials, construction materials');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('abouts/truck-mixers.jpg'); 


        return view('pages.projects');
    }


    // Our Fleets Page
    public function fleets()
    {
        $url = url()->current();
        SEO::setTitle('Mcm Concrete Fleets | Reliable and Efficient Concrete Transportation', false);
        SEO::setDescription('Discover our reliable and efficient concrete fleets at Mcm-Concrete. Our fleet of specialized vehicles ensures prompt and professional transportation of concrete materials. With a focus on safety and timely delivery, we provide the concrete solutions you can trust for your construction projects.');
        SEOMeta::setKeywords('Concrete, concrete products, construction, building materials, construction materials');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('abouts/truck-mixers.jpg'); 
        return view('pages.fleets');
    }

    // Careers Page
    public function career()
    {
        $url = url()->current();
        SEO::setTitle('Concrete Careers,Join Our Team: Concrete Careers and Job Opportunities', false);
        SEO::setDescription('Explore exciting career opportunities in the concrete industry with our company. Join our team and build a rewarding future in concrete careers. We offer a range of job opportunities, including concrete technicians, project managers, and construction supervisors. Discover growth prospects, competitive compensation, and a supportive work environment. Take the first step towards a fulfilling concrete career and apply today.');
        SEOMeta::setKeywords('Concrete careers, Job opportunities, Concrete industry jobs , Employment in concrete
        Concrete technicians,  Construction supervisors, Project managers,  Concrete job openings,   Career growth in concrete, Competitive compensation,  Work environment, Concrete employment prospects, Concrete industry professionals, Concrete job applications, Join our team');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('abouts/truck-mixers.jpg'); 
        return view('pages.career');
    }


    public function getCareerForm(Request $request)
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
                $message->to('joudi@webneoo.com')->subject('Career Request from Website');
            });
            \Session::flash('msg', 'Successfully sent!' );
            return redirect()->back();
        }
    }

   
    // Contact Page
    public function contact()
    {
        $url = url()->current();
        SEO::setTitle('Contact concrete experts in Lebanon, KSA, UAE| High-Quality Concrete Products', false);
        SEO::setDescription('Contact our expert concrete contractors in Lebanon, KSA, and UAE for top-quality concrete services. Our reliable team specializes in concrete installation, repair, and construction, catering to the unique needs of these markets. Reach out to us today to discuss your concrete project and benefit from our exceptional expertise in the Lebanon, KSA, and UAE concrete industries.');
        SEOMeta::setKeywords('Concrete, concrete products, Concrete services, Lebanon market, UAE market, construction, building materials, construction materials, Concrete specialists, Expert team, Concrete solutions');
        SEO::opengraph()->setUrl($url);
        SEO::setCanonical($url);
        SEO::opengraph()->addProperty('type', 'article');
        SEO::addImages('abouts/truck-mixers.jpg'); 

        return view('pages.contact');
   }

    //Get the contact form details and send the mail
    public function getContactForm(Request $request)
    {
       $lastname = $request->input('lastname');
       $firstname = $request->input('firstname');
       $email = $request->input('email');
       $phone = $request->input('phone');
       $gender = $request->input('gender');
       $subject =$request->input('subject');
       $msg_client =$request->input('message');

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
