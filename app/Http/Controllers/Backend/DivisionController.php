<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Division;
use Auth;
use App\Http\Requests\DivisionRequest;

class DivisionController extends Controller
{
    public function view(){
        $data['allData'] = Division::all();
       
        return view('backend.division.view-division',$data);
    }
    public function add(){
        
        return view('backend.division.add-division');
    }
    public function store(Request $request){
        $this->validate($request,[
        	
            'name'=>'required|unique:divisions,name'
           
        ]);
        $data = new division();
       
        $data ->name = $request->name;
       
         $data->created_by = Auth::user()->id;
       
        $data->save();
       
        return redirect()->route('divisions.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = division::find($id);
       return view('backend.division.add-division',$data);
    }
    public function update(DivisionRequest $request,$id){
          $this->validate($request,[
        	
           'name'=>'required|unique:divisions,name'
        ]);
         $data = division::find($id);
    
         $data ->name = $request->name;
         $data->updated_by = Auth::user()->id;
      
        $data->save();
       
        return redirect()->route('divisions.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $division = division::find($id);
        
        $division -> delete();
         return redirect()->route('divisions.view')->with('success','Data Delete successfull');
    }
}
