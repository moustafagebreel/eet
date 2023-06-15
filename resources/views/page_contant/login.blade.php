@extends('layout.master')
@section('css')
<link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

@endsection
@section('content')
<div class="all">
<table>
  <tr>
<td>
<div class="login">
  <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
      @csrf
	  <h4  style=" color:rgb(234, 234, 241);">{{__('Login')}}</h4>
     
		  <div class="form-group first">
			<label for="Email">Email</label>
			<input type="email" name="email" placeholder="your-email@gmail.com" required=""  class="form-control">
		  </div>

		  <div class="form-group last mb-3">
			<label for="password">Password</label>
			<input type="password" name="password"  placeholder="Your Password" required="" class="form-control" id="password">

		  </div>
		  <br>
		  <button type="submit" value="submit"  class="btn btn-block btn-primary">login</button>
		   <br>
		 
		  <a href="{{route('page_contant.create')}}" class="btn btn-block btn-primary">Sign up</a>
		

		</form>
</div>
</td>

<td>
  <div class="content" style="background-image: url('{{asset('frontend/images/bg.jpg')}}');">
  
  </div>
  </td>
  <td>
</tr>


</table>
</div>{{-- div has all content --}}

@endsection