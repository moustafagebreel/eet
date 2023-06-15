@extends('layout.admin')
@section('css')
<link rel="stylesheet" href="{{asset('css/page_contant_edit.css')}}">

@endsection


@section('content')
<div class="edit-page">
<div class="row">
    <div class="col-md-9 offset-md-2">
        <form action="{{route('product.update',$product->id)}}" method="POST">
        
            @csrf
            @method('PUT')
           
            <div class="form-group">
                <h2 style="float:right;"> {{__('Edit Product')}}</h2>
            </div>
            <div class="form-group">
                <input type="text" name="name" value="{{$product->name}}" class="form-control"> 
                <input type="text" name="slug" value="{{$product->slug}}" class="form-control"> 
                <input type="text" name="price" value="{{$product->price}}" class="form-control"> 
                <input type="text" name="prand" value="{{$product->prand}}" class="form-control"> 
                <input type="text" name="size" value="{{$product->size}}" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <button  id="button"type="submit" class="btn"  value="">Update</button>
            </div>


        </form>

    </div>


</div>
</div>
@endsection