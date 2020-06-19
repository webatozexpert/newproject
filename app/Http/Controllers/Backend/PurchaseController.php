<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Supplier;
use App\Model\unit;
use App\Model\Category;
use App\Model\Purchase;
use DB;
use App\ProductCat;


use Auth;

class PurchaseController extends Controller
{


      public function testfunction(){

    $data=DB::table('Products')->get();

    return view('selectview',compact('data'));
    }
    public function prodfunct(){

            $prod=ProductCat::all();//get data from table
            return view('productlist',compact('prod'));//sent data to view

        }

        public function findProductName(Request $request){


            //if our chosen id and products table prod_cat_id col match the get first 100 data

            //$request->id here is the id of our chosen option id
            $data=Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
            return response()->json($data);//then sent this data to ajax success
        }


        public function findPrice(Request $request){

            //it will get price if its id match with product id
            $p=Product::select('price')->where('id',$request->id)->first();

            return response()->json($p);
        }





























    public function view(){
        $data['allData'] = Purchase::orderBy('date','desc')->orderBy('id','desc')->get();
       
        return view('backend.purchase.view-purchase',$data);
    }
    public function add(){
        $data['suppliers'] = Supplier::all();
        $data['units'] = Unit::all();
        $data['categories'] = Category::all();
        return view('backend.purchase.add-purchase',$data);
    }
    public function store(Request $request){
        $this->validate($request,[
        	
            'supplier_id'=>'required',
            'category_id'=>'required',
            'name'=>'required',
            'unit_id'=>'required',
            'quantity'=>'required',
           
        ]);
        $data = new Purchase();
        $data ->supplier_id = $request->supplier_id;
        $data ->category_id = $request->category_id;
        $data ->name = $request->name;
       
        $data ->unit_id = $request->unit_id;
        $data ->quantity = $request->quantity;
         $data->created_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/purchase_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('purchases.view')->with('success','Data Added successfull');
    }
    public function edit($id){
        $data['editData'] = Purchase::find($id);
         $data['suppliers'] = Supplier::all();
        $data['units'] = Unit::all();
        $data['categories'] = Category::all();
       return view('backend.purchase.edit-purchase',$data);
    }
    public function update(Request $request,$id){
          $this->validate($request,[
            
            'supplier_id'=>'required',
            'category_id'=>'required',
            'name'=>'required',
            'unit_id'=>'required',
            'quantity'=>'required',
           
        ]);
         $data = Purchase::find($id);
    
          $data ->supplier_id = $request->supplier_id;
        $data ->category_id = $request->category_id;
        $data ->name = $request->name;
       
        $data ->unit_id = $request->unit_id;
        $data ->quantity = $request->quantity;
         $data->updated_by = Auth::user()->id;
        if ($request->file('image')){
             $file = $request->file('image');
             @unlink(public_path('upload/purchase_images/'.$data->image));
             $filename =date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/purchase_images'), $filename);
             $data['image']= $filename;
         }
        $data->save();
       
        return redirect()->route('purchases.view')->with('success','Data Updated successfull');
    }
    public function delete($id){
        $purchase = Purchase::find($id);
        if(file_exists('public/upload/purchase_images/' . $purchase->image) AND!empty($purchase->image)){
        unlink('public/upload/purchase_images/'.$purchase->image);
        }
        $purchase -> delete();
         return redirect()->route('purchases.view')->with('success','Data Delete successfull');
    }
}
