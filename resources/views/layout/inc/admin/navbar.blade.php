
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
<div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center">  
  <a class="navbar-brand brand-logo" href="{{route('page_contant.index')}}">
    {{-- <img src="images/logo.svg" alt="logo"/> --}}
    <span style="margin-left:-70px">Admin </span>
  </a>
  <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/images/logo-mini.svg" alt="logo"/')}}"></a>
  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
    <span class="mdi mdi-sort-variant" style="padding: 10px"></span>
  </button>
</div>  
</div>
<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
<ul class="navbar-nav mr-lg-4 w-100">
  <li class="nav-item nav-search d-none d-lg-block w-100">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text" id="search">
          <i class="mdi mdi-magnify"></i>
        </span>
      </div>
      <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
    </div>
  </li>
</ul>
<ul class="navbar-nav navbar-nav-right">
  <li class="nav-item dropdown mr-1">
    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
      <i class="mdi mdi-message-text mx-0"></i>
      <span class="count"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
      <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
      <a class="dropdown-item">
        <div class="item-thumbnail">
            <img src="{{asset('admin/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
        </div>
        <div class="item-content flex-grow">
          <h6 class="ellipsis font-weight-normal">David Grey
          </h6>
          <p class="font-weight-light small-text text-muted mb-0">
            The meeting is cancelled
          </p>
        </div>
      </a>
      <a class="dropdown-item">
        <div class="item-thumbnail">
            <img src="{{asset('admin/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
        </div>
        <div class="item-content flex-grow">
          <h6 class="ellipsis font-weight-normal">Tim Cook
          </h6>
          <p class="font-weight-light small-text text-muted mb-0">
            New product launch
          </p>
        </div>
      </a>
      <a class="dropdown-item">
        <div class="item-thumbnail">
            <img src="{{asset('admin/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
        </div>
        <div class="item-content flex-grow">
          <h6 class="ellipsis font-weight-normal"> Johnson
          </h6>
          <p class="font-weight-light small-text text-muted mb-0">
            Upcoming board meeting
          </p>
        </div>
      </a>
    </div>
  </li>
  <li class="nav-item dropdown mr-4">
    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
      <i class="mdi mdi-bell mx-0"></i>
      <span class="count"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
      <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
      <a class="dropdown-item">
        <div class="item-thumbnail">
          <div class="item-icon bg-success">
            <i class="mdi mdi-information mx-0"></i>
          </div>
        </div>
        <div class="item-content">
          <h6 class="font-weight-normal">Application Error</h6>
          <p class="font-weight-light small-text mb-0 text-muted">
            Just now
          </p>
        </div>
      </a>
      <a class="dropdown-item">
        <div class="item-thumbnail">
          <div class="item-icon bg-warning">
            <i class="mdi mdi-settings mx-0"></i>
          </div>
        </div>
        <div class="item-content">
          <h6 class="font-weight-normal">Settings</h6>
          <p class="font-weight-light small-text mb-0 text-muted">
            Private message
          </p>
        </div>
      </a>
      <a class="dropdown-item">
        <div class="item-thumbnail">
          <div class="item-icon bg-info">
            <i class="mdi mdi-account-box mx-0"></i>
          </div>
        </div>
        <div class="item-content">
          <h6 class="font-weight-normal">New user registration</h6>
          <p class="font-weight-light small-text mb-0 text-muted">
            2 days ago
          </p>
        </div>
      </a>
    </div>
  </li>
  <li class="nav-item nav-profile dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
      <img src="{{asset('admin/images/faces/profile.png')}}" alt="profile"/>
      <span class="nav-profile-name"><span class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</span></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
      <a class="dropdown-item">
        <i class="mdi mdi-settings text-primary"></i>
        Settings
      </a>
      <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
        <div class="px-4">
        
            <div class="font-medium text-sm text-gray-500" style="font-size:10px">{{ Auth::user()->email }}</div>
        </div>
    </div>
    
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a  class="dropdown-item" href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit(); "style="display:inline-block;margin-top:-10px;padding:5px;margin-left:20px">
           <i class="mdi mdi-logout text-primary"></i>{{ __('Log Out') }}
        </a>
    </form>
  {{-- </a> --}}

  </div>
 
  </li>
</ul>
<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
  <span class="mdi mdi-menu"></span>
</button>
</div>
</nav>