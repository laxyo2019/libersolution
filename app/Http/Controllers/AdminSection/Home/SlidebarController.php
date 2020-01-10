<?php

namespace App\Http\Controllers\AdminSection\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use App\Models\Admin\Home;

class SlidebarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Home::all();
        // dd($data);
        return view('admin.home.slidebar-contents.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.home.slidebar-contents.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(['contents'=>'required','file'=>'required']);

            $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;

            $data1 = Home::create($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Slidebar add successfully');
            }else{
            return redirect()->back()->with('messageError', 'Slidebar Not added');

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
        $data = Home::find($id);
        return view('admin.home.slidebar-contents.edit',compact('data'));
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
        
            // return redirect()->back();
            $data = $request->validate(['contents'=>'required','file'=>'required']);

            $filename = $request->file('file')->getClientOriginalName();
                $extension = $request->file('file')->getClientOriginalExtension();
                $fileNameToStore = $filename;              
                $path = $request->file('file')->storeAs('public/images',$fileNameToStore);
                $data['file'] = $fileNameToStore;

            $data1 = Home::where('id',$id)->update($data);
            if ($data1) {
            return redirect()->back()->with('message', 'Slidebar update successfully');
            }else{
            return redirect()->back()->with('messageError', 'Slidebar update added');

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
        $delete = Home::destroy($id);
        if($delete){
           return redirect()->back()->with('message', 'Record deleted successfully');
          
        }
    }
}
