<?php

namespace App\Http\Controllers\AdminSection\About;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Aboutus;
use File;

class AboutUsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        $data = Aboutus::all();
            return view('admin.about-us.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-us.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = $request->validate(['title'=>'required','content'=>'required','logo'=>'required']);
            $filename = $request->file('logo')->getClientOriginalName();
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename;              
            $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
            $data['logo'] = $fileNameToStore;

            $data1 = Aboutus::create($data);
            if ($data1) {
                return redirect()->back()->with('message', 'Aboutus add successfully');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Aboutus::find($id);
            return view('admin.about-us.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
            $data = $request->validate(['title'=>'required','content'=>'required']);
            
            if($request->hasFile('logo')){
            $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;          
            }else{
                $file  = Aboutus::find($id);
                $data['logo'] = $file->logo;            
            }
            $data1 = Aboutus::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Aboutus updated successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Aboutus::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
            
        }
    }
}
