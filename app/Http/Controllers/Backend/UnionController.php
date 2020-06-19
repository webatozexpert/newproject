<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Division;
use App\Model\District;
use App\Model\Upazila;
use App\Model\Union;
use App\Http\Requests\ UnionRequest;

class UnionController extends Controller
{

     public function view(){
        $data['allData'] = Union::all();
       
        return view('backend.union.view-union',$data);
    }
    public function add(){
        $data['divisions'] = Division::all();
        return view('backend.union.add-union',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
          
            'name'=>'required|unique:unions,name'
           
        ]);
        $data = new Union();
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
          $data ->upazila_id = $request->upazila_id;
        $data ->name = $request->name;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('unions.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = Union::find($id);
        $data['divisions'] = Division::all();
       return view('backend.union.add-union',$data);
    }
    public function update(UnionRequest $request,$id){
          $this->validate($request,[
          
           'name'=>'required|unique:unions,name'
        ]);
        $data = Union::find($id);
        $data ->division_id = $request->division_id;
         $data ->district_id = $request->district_id;
         $data ->upazila_id = $request->upazila_id;
        $data ->name = $request->name;
       
         $data->updated_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('unions.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $union = Union::find($id);
        
        $union -> delete();
         return redirect()->route('unions.view')->with('success','Data Delete successfull');
    }
}
