<nav class="sidebar sidebar-bunker">
    <div class="sidebar-header">

        <a href="{{ url('/home') }}" class="sidebar-brand">
            <img class="sidebar-brand_icon" src="{{ (appSetting()->app_logo) ? asset('images/'.appSetting()->app_logo) : url('avatar.png')  }}" >
            <span class="sidebar-brand_text">{{ appSetting()->title }}</span>
        </a>
        
    </div><!--/.sidebar header-->

    <div class="profile-element d-flex align-items-center flex-shrink-0">
        <div class="avatar online">
            <img src="assets/dist/img/avatar-1.jpg" class="img-fluid rounded-circle" alt="">
        </div>
        <div class="profile-text">
            <h6 class="m-0">Naeem Khan</h6>
            <span>example@gmail.com</span>
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
                        <li><a href="{{url('/outlet/type')}}">Outlet Type</a></li>
                        <li><a href="{{url('/outlet/channel')}}">Outlet Channel</a></li>
                        <li><a href="{{ url('/outlet') }}">Outlet List</a></li>
                    </ul>
                </li>

                <li class="client">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn-adjust-brightness"></i>
                        Clients
                    </a>
                    <ul class="nav-second-level client-mm">
                        <li><a href="{{url('client')}}">Client List</a></li>
                    </ul>
                </li>

                <li class="setting">
                    <a class="has-arrow material-ripple" href="#">
                        <i class="typcn-adjust-brightness"></i>
                        Settings
                    </a>
                    <ul class="nav-second-level setting-mm">
                        <li><a href="{{url('setting/app_setting')}}">Application Setting</a></li>
                        <li><a href="{{url('setting/language_setting')}}">Language</a></li>
                    </ul>
                </li>

                
            </ul>
        </nav>
    </div><!-- sidebar-body -->
</nav>