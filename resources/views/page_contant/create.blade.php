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
  <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
      @csrf
	  <h4  style=" color:rgb(234, 234, 241);">{{__('Add New User')}}</h4>
      <div class="form-group">
		<label for="Username">Username</label>
          <input type="text" id="name" name="name"  class="form-control">
		 
		  <div class="form-group first">
			<label for="Email">Email</label>
			<input type="email" name="email" placeholder="your-email@gmail.com" required=""  class="form-control">
		  </div>

		  <div class="form-group last mb-3">
			<label for="password">Password</label>
			<input type="password" name="password"  placeholder="Your Password" required="" class="form-control" id="password">

		  </div>
		  <div class="form-group last mb-3">
			<label for="password-confirm">password-confirm</label>
			<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

		  </div>
		  
		  <div class="d-flex mb-5 align-items-center">
			<label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
			  <input type="checkbox" checked="checked"/>
			  <div class="control__indicator"></div>
			</label>
			<span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
		  </div>
		  <button type="submit" name="register" value="submit"  class="btn btn-block btn-primary">Sign up</button>
		  <br>
		  <a href="{{route('page_contant.login')}}"  class="btn btn-block btn-primary">login</a>
		  <!-- <button type="submit" value="submit"  class="btn btn-block btn-primary"> Sign up</button> -->

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