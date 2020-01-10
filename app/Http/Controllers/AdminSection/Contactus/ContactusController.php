<?php

namespace App\Http\Controllers\AdminSection\Contactus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contactus;
use File;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('sd');
        $data = Contactus::all();
        return view('admin.contact-us.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact-us.create');
        
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
        // dd($data);

            $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;

            $data1 = Contactus::create($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Contactus add successfully');
            }else{
            return redirect()->back()->with('messageError', 'Contactus Not added');

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
        $data = Contactus::find($id);
        return view('admin.contact-us.edit',compact('data'));
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
        
            $data = $request->validate(['title'=>'required','content'=>'required','logo'=>'required']);
            // dd($data);
            if($request->hasFile('logo')){
            $filename = $request->file('logo')->getClientOriginalName();
                $extension = $request->file('logo')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('logo')->storeAs('public/images',$fileNameToStore);
                $data['logo'] = $fileNameToStore;          
            }else{
                $file  = Contactus::find($id);
                $data['logo'] = $file->logo;            
            }
            $data1 = Contactus::where('id', $id)->update($data); 
            if ($data1) {
                return redirect()->back()->with('message', 'Contactus updated successfully');
            }else{
                return redirect()->back()->with('messageError', 'Contactus Not updated');

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
        $delete = Contactus::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
            
        }
    }
}
