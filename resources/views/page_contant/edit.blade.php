@extends('layout.admin')
@section('css')
<link rel="stylesheet" href="{{asset('css/page_contant_edit.css')}}">

@endsection


@section('content')
<div class="edit-page">
<div class="row">
    <div class="col-md-9 offset-md-2">
        <form action="{{route('page_contant.update',$users->id)}}" method="POST">
            @csrf
            @method('PUT')
           
            <div class="form-group">
                <h2> {{__('Edit User')}}</h2>
                
        
            </div>
            <div class="form-group">
                <input type="text" name="name" value="{{$users->name}}" class="form-control"> 
                <input type="text" name="email" value="{{$users->email}}" class="form-control"> 
                <input type="text" name="password" value="{{$users->password}}" class="form-control"> 
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