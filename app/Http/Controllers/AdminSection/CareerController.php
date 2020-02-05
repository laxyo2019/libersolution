<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Home;
use App\Models\CareerModel;
use DB;
use File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $slideData = Home::all();
        return view('career',compact('slideData'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(['name'=>'required', 'phone'=>'required','email'=>'required','Message'=>'required']);

        $filename        = $request->file('file')->getClientOriginalName();
        $extension       = $request->file('file')->getClientOriginalExtension();
        $fileNameToStore = $filename;          
        //$path            = $request->file('file')->storeAs('public/career-docs',$fileNameToStore);
        $path            = $request->file('file')->store('career-docs', 'public');
        $data['file']    = $fileNameToStore;
        $data1           = CareerModel::create($data);

        if ($data1) {
            $content = File::get('storage/'.$path);
            
            $applicantData = array(
                'data' => $data,
                'file' => $content,
                'exe' => $extension,
            );

            Mail::to('kishankewat@gmail.com')->send(new SendMailable($applicantData));

            return redirect()->back()->with('message', 'Career send successfully');
        }else{
            return redirect()->back()->with('messageError', 'Career Not added');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = CareerModel::destroy($id);
         if($delete){
               return redirect()->back()->with('message', 'Record deleted successfully');
                
         }
    }

    public function careerAdmin(){
       $careerData = CareerModel::all();
        return view('admin.career.index',compact('careerData'));
    }

    public function downloadDocs($id){

        $docs = CareerModel::first()
                      ->where('id', $id)
                      ->first();
        return Storage::download('public/career-docs/'.$docs->file);
  }
}
