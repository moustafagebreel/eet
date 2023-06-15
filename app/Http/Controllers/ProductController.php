<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
       $product=Product::all();
      
       return view('product.index',compact('product'));
    }
 
    public function create()
    {
        $product=Product::all();
        
        return view('product.create',compact('product'));
        
    }
    
    public function store(Request $request)
    {
      
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'size'=>'required',
            'prand'=>'required',
            'price'=>'required',
        
   ]);
            $product=new Product();
            $product->name=$request->name;
            $product->slug=$request->slug;
            $product->price=$request->price;
            $product->prand=$request->prand;
            $product->size=$request->size;
            $product->save();
            return redirect('product/index')->with('status','the user is added');
            
 }
   
    public function edit($id)
    {
        $product=Product::find($id);
      
        return view('product.edit',compact('product'));
    }

    public function show($id)
    {
        //
    } 

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'size'=>'required',
            'prand'=>'required',
            'price'=>'required',
        
   ]);
            $product=Product::find($id);
            $product->name=$request->name;
            $product->slug=$request->slug;
            $product->price=$request->price;
            $product->prand=$request->prand;
            $product->size=$request->size;
            $product->save();
           return redirect('product/')->with('status','the user is Updated');
            
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $send=Product::where('id',$id)->first();
        $send->delete();
    return back()->with('status','Done Product Delete');
    }
    
}




