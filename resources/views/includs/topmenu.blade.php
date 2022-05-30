 <!--Navbar-->
 <nav class="navbar-custom-menu navbar navbar-expand-xl m-0">
    <div class="sidebar-toggle-icon" id="sidebarCollapse">
        sidebar toggle<span></span>
    </div>
    <!--/.sidebar toggle icon-->
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Toggler -->
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-expanded="true" aria-label="Toggle navigation"><span></span> <span></span></button>
    </div>
    <div class="navbar-icon d-flex">
        <ul class="navbar-nav flex-row align-items-center">
            <li class="nav-item dropdown quick-actions">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="typcn typcn-th-large-outline"></i>
                </a>
                <div class="dropdown-menu">
                    <div class="nav-grid-row row">
                        <a href="#" class="icon-menu-item col-4">
                            <i class="typcn typcn-cog-outline d-block"></i>
                            <span>Settings</span>
                        </a>
                        <a href="#" class="icon-menu-item col-4">
                            <i class="typcn typcn-group-outline d-block"></i>
                            <span>Users</span>
                        </a>
                        <a href="#" class="icon-menu-item col-4">
                            <i class="typcn typcn-puzzle-outline d-block"></i>
                            <span>Components</span>
                        </a>
                        <a href="#" class="icon-menu-item col-4">
                            <i class="typcn typcn-chart-bar-outline d-block"></i>
                            <span>Profits</span>
                        </a>
                        <a href="#" class="icon-menu-item col-4">
                            <i class="typcn typcn-time d-block"></i>
                            <span>New Event</span>
                        </a>
                        <a href="#" class="icon-menu-item col-4">
                            <i class="typcn typcn-edit d-block"></i>
                            <span>Tasks</span>
                        </a>
                    </div>
                </div>
            </li>
            <!--/.dropdown-->
            <li class="nav-item">
                <a class="nav-link" href="#" id="btnFullscreen"><i class="full-screen_icon typcn typcn-arrow-move-outline"></i></a>
            </li>
            <li class="nav-item dropdown notification">
                <a class="nav-link dropdown-toggle badge-dot" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="typcn typcn-bell"></i>
                </a>
                <div class="dropdown-menu">
                    <h6 class="notification-title">Notifications</h6>
                    <p class="notification-text text-muted">You have 2 unread notification</p>
                    <div class="notification-list">
                        <a href="#" class="notification text-reset d-flex new">
                            <div class="img-user flex-shrink-0"><img src="assets/dist/img/avatar.png" alt=""></div>
                            <div class="notification-body">
                                <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
                                <span class="text-muted"><i class="me-1 fst-normal" role="img" aria-label="Emoji">💬</i> Just Now</span>
                            </div>
                        </a>
                        <!--/.media -->
                        <a href="#" class="notification text-reset d-flex new">
                            <div class="img-user flex-shrink-0 online"><img src="assets/dist/img/avatar2.png" alt=""></div>
                            <div class="notification-body">
                                <h6><strong>Joyce Chua</strong> replied to your comment : "Hello world 😍"</h6>
                                <span class="text-muted">Mar 13 04:16am</span>
                            </div>
                        </a>
                        <!--/.media -->
                        <a href="#" class="notification text-reset d-flex d-grid">
                            <div class="img-user flex-shrink-0"><img src="assets/dist/img/avatar3.png" alt=""></div>
                            <div class="notification-body">
                                <div class="h6"><strong>Althea Cabardo</strong> commented
                                    <blockquote class="mb-0">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                                </div>
                                <span class="text-muted">Mar 13 02:56am</span>
                            </div>
                        </a>
                        <!--/.media -->
                        <a href="#" class="notification text-reset d-flex">
                            <div class="img-user flex-shrink-0"><img src="assets/dist/img/avatar4.png" alt=""></div>
                            <div class="notification-body">
                                <h6><strong>Adrian Monino</strong> added new comment on your photo <span class="badge bg-success">Review</span></h6>
                                <span class="text-muted">Mar 12 10:40pm</span>
                            </div>
                        </a>
                        <!--/.media -->
                    </div>
                    <!--/.notification -->
                    <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                </div>
                <!--/.dropdown-menu -->
            </li>
            <!--/.dropdown-->
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
                        <h6>{{ Auth::user()->name }}</h6>
                        <span>{{ Auth::user()->email }}</span>
                    </div><!-- user-header -->
                    <a href="{{route('user-profile')}}" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
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
        </ul>
        <!--/.navbar nav-->
        <div class="nav-clock">
            <div class="time">
                <span class="time-hours"></span>
                <span class="time-min"></span>
                <span class="time-sec"></span>
            </div>
        </div>
        <!-- nav-clock -->
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="typcn typcn-th-menu-outline"></i>

</button>
</nav>

