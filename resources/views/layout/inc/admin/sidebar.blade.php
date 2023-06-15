
<nav class="sidebar sidebar-offcanvas" id="sidebar" >
   <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('page_contant.index')}}">
          <i class="mdi mdi-home menu-icon"style="font-size:23px;color:rgb(37, 54, 209)"></i>
          <span class="menu-title"style="font-size:15px;color:rgb(37, 54, 209);padding:15px">Dashboard</span>
        </a> <
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('page_contant.index2')}}">
          <i class="mdi mdi-home menu-icon"style="font-size:23px;color:rgb(37, 54, 209)"></i>
          <span class="menu-title"style="font-size:15px;color:rgb(37, 54, 209);padding:15px">Visit Site</span>
        </a> <
      </li>
    
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"style="font-size:23px;color:rgb(37, 54, 209)"></i>
          <span class="menu-title"style="font-size:15px;color:rgb(37, 54, 209);padding:15px">تحكم ف الصفحات</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('page_contant.index')}}"> All Users </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('page_contant.create')}}">Add New User</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('product.index')}}"> All Product </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('product.create')}}">Add New Product</a></li>
         
          </ul>
        </div>
        
      </li>
     
     
    
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi  mdi-comment menu-icon"style="font-size:23px;color:rgb(37, 54, 209)"></i>
          <span class="menu-title"style="font-size:15px;color:rgb(37, 54, 209);padding:15px">التعليقات</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"style="font-size:23px;color:rgb(37, 54, 209)"></i>
          <span class="menu-title"style="font-size:15px;color:rgb(37, 54, 209);padding:15px">إداره المستخدمين </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('page_contant.create')}}"> إضافه مستخدم  </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('page_contant.index')}}">كل المستخدمين </a></li>
            {{-- <li class="nav-item"> <a class="nav-link" href="#"> البروفايل </a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> Lockscreen </a></li> --}}
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=procode">
          <i class="mdi mdi-database-plus menu-icon"style="font-size:23px;color:rgb(37, 54, 209)"></i>
          <span class="menu-title"style="font-size:15px;color:rgb(37, 54, 209);padding:15px">قاعدالبيانات</span>
        </a>
      </li>
    </ul>
  </nav>