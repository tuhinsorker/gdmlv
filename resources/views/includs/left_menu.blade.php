<nav class="sidebar sidebar-bunker">
    <div class="sidebar-header">

        <a href="{{ url('/home') }}" class="sidebar-brand">
            <img src="{{ (@appSetting()->app_logo) ? asset('images/'.@appSetting()->app_logo) : url('avatar.png')  }}" >
            {{-- <span class="sidebar-brand_text">{{ appSetting()->title }}</span> --}}
        </a>
        
    </div><!--/.sidebar header-->

    <div class="profile-element d-flex align-items-center flex-shrink-0">

        <div class="avatar online">
            <img src="assets/dist/img/avatar-1.jpg" class="img-fluid rounded-circle" alt="">
        </div>
        
        <div class="profile-text">
            <h6 class="m-0">{{ Auth::User()->name}}</h6>
            <span>{{ Auth::User()->email}}</span>
        </div>

    </div><!--/.profile element-->

    <form class="search sidebar-form" action="#" method="get" >
        <div class="search__inner">
            <input type="text" class="search__text" placeholder="Search...">
            <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
        </div>
    </form><!--/.search-->
    
    <div class="sidebar-body">
        <nav class="sidebar-nav">
            <ul class="metismenu">

                <li class="dashboard"><a href="{{ url('/home') }}"><i class="typcn typcn-home-outline"></i>Dashboard</a></li>

                <li class="outlet">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-home-outline"></i>
                        Outlets
                    </a>
                    <ul class="nav-second-level outlet-mm">
                        <li><a href="{{url('/outlet')}}">Outlet Dashboard</a></li>
                        <li><a href="{{url('/outlet/type')}}">Outlet Type</a></li>
                        <li><a href="{{url('/outlet/channel')}}">Outlet Channel</a></li>
                        <li><a href="{{ url('/outlet/outlt_list') }}">Outlet List</a></li>
                    </ul>
                </li>

                <li class="client">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-user"></i>
                        Clients
                    </a>
                    <ul class="nav-second-level client-mm">
                        <li><a href="{{url('client')}}">Client List</a></li>
                    </ul>
                </li>

                <li class="users">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-user"></i>
                        Users
                    </a>
                    <ul class="nav-second-level users-mm">
                        <li><a href="{{route('user.index')}}"> User List</a></li>
                        <li><a href="{{route('device-request')}}"> Device Request</a></li>
                        <li><a href="{{route('login-logout-log')}}"> Login Logout Log</a></li>
                        <li><a href="{{route('login-logout-count')}}"> Login Logout Count</a></li>
                    </ul>
                </li>

                <li class="setting">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-cog-outline"></i>
                        Settings
                    </a>
                    <ul class="nav-second-level setting-mm">
                        <li><a href="{{url('setting/app_setting')}}">  Application Setting</a></li>
                        <li><a href="{{route('lang.index')}}"> Language</a></li>

                        <li><a href="{{url('location')}}"> Location Setting</a></li>
                        <li><a href="{{url('setting/group-location')}}"> Group Location</a></li>
                        <li><a href="{{url('setting/teams')}}"> Team List</a></li>

                        <li><a href="{{url('setting/bank-list')}}"> Bank List</a></li>
                        <li><a href="{{url('setting/payment-type')}}"> Payment Type</a></li>

                        
            
                        <li  class="roles'">
                            <a class="has-arrow" href="#" aria-expanded="false">Role Permission</a>
                            <ul class="nav-third-level">
                                <li><a href="{{route('roles.index')}}" class="roles">Manage Role</a></li>
                                <li><a href="{{ route('user.assign.role') }}" class="">User Assign Role</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div><!-- sidebar-body -->
</nav>