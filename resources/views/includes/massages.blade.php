
<style>
.arert1{
    width:90%;
    height:80px;
    border-radius:5px;
    transition:1s;
}
</style>
@if ($errors->any())
<div class="alert alert-danger arert1">
<ul>
   
    @foreach ($errors ->all() as $error)
    <li>{{$error}}</li>  
    @endforeach
</ul>
</div> 
@endif
@if(session('status'))
<div class="alert alert-success arert1" style="">
    {{session('status')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger arert1">
    {{session('error')}}
    <i class="fa fa-check" aria-hidden="true" ></i>
</div>
@endif