<nav class="sidebar sidebar-bunker">

    <div class="sidebar-header">
        <a href="" class="sidebar-brand">
            <img class="sidebar-fav" src="{{ (@appSetting()->favicon) ? asset('public/'.@appSetting()->favicon) : url('avatar.png')  }}" alt="">
            <img class="sidebar-logo" src="{{ (@appSetting()->app_logo) ? asset('public/'.@appSetting()->app_logo) : url('avatar.png')  }}" alt="">
        </a>
    </div>


    <div class="profile-element d-flex align-items-center flex-shrink-0">

        <div class="avatar online">
            <img src="{{url('public/assets/dist/img/avatar-1.jpg')}}" class="img-fluid rounded-circle" alt="">
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

                <li class="dashboard"><a href="{{ url('/home') }}"><i class="typcn typcn-adjust-brightness"></i>Dashboard</a></li>

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
                        <i class="typcn typcn-group-outline"></i>
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


                <li class="products">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-point-of-interest-outline"></i>
                        Products
                    </a>
                    <ul class="nav-second-level products-mm">
                        <li><a href="{{route('product-category.index')}}"> Product Category</a></li>
                        <li><a href="{{route('products.index')}}"> Product List</a></li>
                        <li><a href="{{route('posms-item.index')}}"> POSMs List</a></li>
                    </ul>
                </li>

                <li class="visitprocess">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-location-outline"></i>
                        Visit Process
                    </a>
                    <ul class="nav-second-level visitprocess-mm">
                        <li><a href="{{route('visit-dashboard.index')}}"> Dashboard</a></li>
                        <li><a href="{{route('route-plane.index')}}"> Route Plane</a></li>
                        <li><a href="{{route('schedule.index')}}"> Schedule </a></li>
                        <li><a href="{{route('exception-visit.index')}}"> Exception Visit </a></li>

                    </ul>
                </li>

                <li class="images">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-group-outline"></i>
                        Visited Images
                    </a>
                    <ul class="nav-second-level images-mm">
                        <li><a href="{{route('images.index')}}">Image List</a></li>
                    </ul>
                </li>

                <li class="brif"><a href="{{ route('brifs.index') }}"><i class="typcn typcn-adjust-brightness"></i>Brifs</a></li>


               
                <li class="setting">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-cog-outline"></i>
                        Settings
                    </a>

                    <ul class="nav-second-level setting-mm">
                        <li><a href="{{url('setting/app_setting')}}">  Application Setting</a></li>
                        {{-- <li><a href="{{route('lang.index')}}"> Language</a></li> --}}
                        <li><a href="{{url('location')}}"> Location Setting</a></li>
                        <li><a href="{{url('group-location')}}"> Group Location</a></li>
                        <li><a href="{{url('teams')}}"> Team List</a></li>
                        <li><a href="{{route('banks.index')}}"> Bank List</a></li>
                        <li><a href="{{route('payment-types.index')}}"> Payment Type</a></li>
                    </ul>
                </li>

                <li class="roles">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn typcn-group-outline"></i>
                        Role Permission
                    </a>
                    <ul class="nav-second-level roles-mm">
                        <li><a href="{{route('roles.create')}}" class="roles">Add Role</a></li>
                        <li><a href="{{route('roles.index')}}" class="roles">Role List</a></li>
                        <li><a href="{{ route('user.assign.role') }}" class="">User Assign Role</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div><!-- sidebar-body -->
</nav>