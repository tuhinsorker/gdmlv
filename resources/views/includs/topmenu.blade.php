<nav class="navbar-custom-menu navbar navbar-expand-xl m-0">
    <div class="sidebar-toggle-icon" id="sidebarCollapse">
        sidebar toggle<span></span>
    </div><!--/.sidebar toggle icon-->
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Toggler -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-expanded="true" aria-label="Toggle navigation"><span></span> <span></span></button>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="typcn typcn-social-dribbble top-menu-icon"></i>Buyer's & Style <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="typcn typcn-point-of-interest-outline top-menu-icon"></i>Management</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle material-ripple" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="typcn typcn-weather-stormy top-menu-icon"></i>Salary Rule
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Salary Break Down</a></li>
                    <li><a class="dropdown-item" href="#">Salary Head</a></li>
                    <li><a class="dropdown-item" href="#">Bonus Types</a></li>
                    <li><a class="dropdown-item" href="#">Bonus Allocation</a></li>
                    <li><a class="dropdown-item" href="#">Bonus Rule</a></li>
                    <li><a class="dropdown-item" href="#">Bonus Stamp Charge</a></li>
                    <li><a class="dropdown-item" href="#">OverTime Setting</a></li>
                    <li><a class="dropdown-item" href="#">Absent Planing</a></li>
                    <li><a class="dropdown-item" href="#">Salary Head Planning</a></li>
                    <li><a class="dropdown-item" href="#">Salary Benefits</a></li>
                    <li><a class="dropdown-item" href="#">Spot Award</a></li>
                    <li><a class="dropdown-item" href="#">Salary Payment Mode</a></li>
                    <li><a class="dropdown-item" href="#">Attendances Late Planning</a></li>
                    <li><a class="dropdown-item" href="#">Salary Planning</a></li>
                    <li><a class="dropdown-item" href="#">Holiday Allowance Settings</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                    <i class="typcn typcn-leaf top-menu-icon"></i>Account Manager
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar-icon d-flex">
        <ul class="navbar-nav flex-row align-items-center">
            
            <li class="nav-item dropdown user-menu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <!--<img src="assets/dist/img/user2-160x160.png" alt="">-->
                    <i class="typcn typcn-user-add-outline"></i>
                </a>
                <div class="dropdown-menu" >
                    <div class="dropdown-header d-sm-none">
                        <a href="" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="user-header">
                        <div class="img-user">
                            <img src="assets/dist/img/avatar-1.jpg" alt="">
                        </div><!-- img-user -->
                        <h6>Naeem Khan</h6>
                        <span>example@gmail.com</span>
                    </div><!-- user-header -->
                    <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="typcn typcn-key-outline"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                  
                </div><!--/.dropdown-menu -->
            </li>
        </ul><!--/.navbar nav-->

        <div class="nav-clock">
            <div class="time">
                <span class="time-hours"></span>
                <span class="time-min"></span>
                <span class="time-sec"></span>
            </div>
        </div><!-- nav-clock -->
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="typcn typcn-th-menu-outline"></i>
    </button>
</nav>