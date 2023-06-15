@extends('layout.admin')
@section('css')
<link rel="stylesheet" href="{{asset('css/subtree.css')}}">
<style>
</style>

  @section('content')


  <div class="row" dir="rtl"style=" margin-top:20px">
  
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="mr-md-3 mr-xl-5">
            <h2> Product Manager</h2>
            <p class="mb-md-0">البيانات الخاصة بكل مستخدم </p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            {{-- <p class="text-primary mb-0 hover-cursor">Analytics</p> --}}
          </div>
        </div>
        <a class="d-flex justify-content-between align-items-end flex-wrap"> 
            <a href="{{route('product.create')}}"><button type="button" class="btn btn-outline-info btn-icon-text" style="margin-right:-170px;position:fixed;margin-top:30px">
                Add User  <i class="mdi mdi-plus btn-icon-prepend"></i>                                                    
                
                </button></a>


    
        </div>
      </div>
    </div>

  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Users</h4>
        <p class="card-description">
          Add class <code>.table-bordered</code>
        </p>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
            
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold">Name</th>
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold"> Discription</th>
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold"> Price</th>
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold">Size</th>
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold">Prand</th>
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold"> Edit</th>
                <th style="color:rgb(91, 33, 146);text-aline:center;font-weight:bold"> Delete</th>
              </tr>
            </thead>


            <tbody>
            @foreach ($product as $product)
            <!-- first foreach -->
              <tr>
              

                  <td > {{$product->name}} </td>

                  <td  > {{$product->slug}} </td>
                  <td style="width:90px;font-size:10px"> {{$product->price}} </td>
                  <td  > {{$product->size}} </td>
                  <td style="width:90px;font-size:10px"> {{$product->prand}} </td>
                

                  <td style="width:60px">
                    <a href="{{route('product.edit',$product->id)}}" > <button  type="button" class="btn btn-inverse-success btn-rounded btn-icon" style="margin-top:-10px;">
                     
                        <i class="mdi mdi mdi-pen btn-icon-append"></i>                          
                      </button></a>
                    </td>
                    
                    <td style="width:60px">
                      <form action="{{route('product.destroy',$product->id)}}" method="POST" >
                        @method('DELETE')
                        @csrf
                        <button  type="submit" class="btn btn-inverse-danger btn-rounded btn-icon"style="padding:-20px;">
                 
                          <i class="mdi mdi-delete btn-icon-append" ></i>                          
                        </button>
                 
                      </form>
                    </td>
              </tr>
     
              @endforeach
            </tbody>
      
          </table>
        </div>
      </div>
    </div>
  </div>


  @endsection