<?php

namespace App\Http\Controllers\AdminSection\Footer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterForContactus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('');
        $data = FooterContent::get();
        return view('admin.FooterContents.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.FooterContents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate(['heading'=>'required','url'=>'required']);
               
         FooterContent::create($data);
           return redirect()->back()->with('message', 'Slidebar add successfully');
           
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
        $data = FooterContent::find($id);
            return view('admin.FooterContents.edit',compact('data'));
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
    
       $data = $request->validate(['heading'=>'required','url'=>'required']);
        FooterContent::where('id', $id)->update($data); 
           
            return redirect()->back()->with('message', 'Footer updated successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = FooterContent::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
            
        }
    }
    public function terms(){
        // dd('dsf');
        return view('term-of-service');
    }
    public function services(){
        return view('privacy-policy');
        
    }
}
