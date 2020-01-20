<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Admin\Home;
use App\Models\Admin\ProductAndServicesModel;
use App\Models\Admin\PlatformAndFrameworkModel;
use App\Models\Admin\Aboutus;
use App\Models\Admin\ProductmastModel;
use App\Models\Admin\ServicemastModel;
use App\Models\Admin\FooterContent;
use App\Models\Contactus;
use App\Models\Admin\Logos\HeaderLogosModel;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $this->middleware('auth');

        return view('admin.index');
          
        // return view('layouts.app',compact('headerLogo'));
    }

    public function show()
    {
        //
    }
    public function logout(Request $request) {
            Auth::logout();
            return redirect('/');
    }

    public function home()
    {
        $slideData = Home::all();
        $productAndServices = ProductAndServicesModel::all();
        $platformAndFramework = PlatformAndFrameworkModel::all();
        $headerLogo = HeaderLogosModel::all();
        Session()->put('headerLogo',$headerLogo);

        $footer = FooterContent::all();
        
        Session()->put('footer',$footer);
        
        
            return view('home',compact('slideData','productAndServices','platformAndFramework','footer'));
    }
    public function aboutus()
    {
        $slideData = Home::all();
        $aboutData = Aboutus::all();
            return view('aboutus',compact('slideData','aboutData'));
    }
    public function contactus()
    {
        $slideData = Home::all();
        $contactData = Contactus::all();
            return view('contactus',compact('slideData','contactData'));
    }
    public function career()
    {
        $slideData = Home::all();
            return view('career',compact('slideData'));
    }
    public function products()
    {
        $slideData = Home::all();
        $productsData = ProductmastModel::all();
        // dd($productsData)
            return view('products',compact('slideData','productsData'));
    }
    public function services()
    {
        // dd('');
        $slideData = Home::all();
        $servicesData = ServicemastModel::all();
            return view('services',compact('slideData','servicesData'));
    }
    public function viewProduct($id)
    {    

        $productData = ProductmastModel::where('id',$id)->first();
        $slideData = Home::all();
            return view('view-product-details',compact('productData','slideData'));
    }
    public function viewService($id)
    {    
        $serviceData = ServicemastModel::where('id',$id)->first();
        $slideData = Home::all();

            return view('view-services-details',compact('serviceData','slideData'));
    }

    public function viewProduct1($id)
    {    

        $productData = ProductAndServicesModel::where('id',$id)->first();
        $slideData = Home::all();
            return view('view-product-details',compact('productData','slideData'));
    }
    public function viewService1($id)
    {    
        $serviceData = PlatformAndFrameworkModel::where('id',$id)->first();
        $slideData = Home::all();

            return view('view-services-details',compact('serviceData','slideData'));
    }


    public function headerLogo()
    {    
        $headerLogo = HeaderLogosModel::first();

            return view('layouts.app',compact('headerLogo'));
    }

    // public function headerLogo(Request $request){
    //         $ids = $request->id;
    //        Session::put('ids',$ids);
    // }
}
