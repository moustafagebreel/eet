 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/logo.png')}}" width="190" height="80" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto" style="padding-left:190px; font-weight:bold;font-size:18px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"style="color:#702c0c; font-size:17px;font-weight:bold">{{__('الرئيسية')}}</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  href="#"style="color:#702c0c; font-size:17px;font-weight:bold">{{__('تعرف علينا')}}</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="#" style="color:#702c0c; font-size:17px;font-weight:bold">{{__('خدماتنا')}}</a>
                          </li>
                          <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="#"style="color:#702c0c; font-size:17px;font-weight:bold" >{{__('مقالات')}}</a>
                          </li>
                           <!--
                            <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="">Add New Post</a></li>
                        
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                          </li>
                              -->
                        </ul>
                     
                          <button class="btn " type="submit" id="call-btn"style="border:1px solid #702c0c;float:right;">{{__('اتصل بنا')}}</button>
                  
                      </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="{{route('admin.index')}}"class="dropdown-item">Dashborad</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>