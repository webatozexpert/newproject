<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazila;
use App\Http\Requests\ UpazilaRequest;

class UpazilaController extends Controller
{
    public function view(){
        $data['allData'] = Upazila::all();
       
        return view('backend.upazila.view-upazila',$data);
    }
    public function add(){
        $data['divisions'] = Division::all();
        return view('backend.upazila.add-upazila',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
          
            'name'=>'required|unique:upazilas,name'
           
        ]);
        $data = new Upazila();
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
        $data ->name = $request->name;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('upazilas.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = Upazila::find($id);
        $data['divisions'] = Division::all();
       return view('backend.upazila.add-upazila',$data);
    }
    public function update(UpazilaRequest $request,$id){
          $this->validate($request,[
          
           'name'=>'required|unique:upazilas,name'
        ]);
        $data = Upazila::find($id);
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
        $data ->name = $request->name;
       
         $data->updated_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('upazilas.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $upazila = Upazila::find($id);
        
        $upazila -> delete();
         return redirect()->route('upazilas.view')->with('success','Data Delete successfull');
    }
}
