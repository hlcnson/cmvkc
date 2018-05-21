{{-- Left Sidebar - style you can find in sidebar.scss --}}
<aside class="left-sidebar">
    {{-- Sidebar scroll --}}
    <div class="scroll-sidebar">
        {{-- User profile --}}
        <div class="user-profile">
            {{-- User profile image --}}
            <div class="profile-img"> 
                <img src="{{asset('backend/images/users/profile.png')}}" alt="user"/>
                {{-- This is blinking heartbit --}}
                <div class="notify setpos"> 
                    <span class="heartbit"></span> 
                    <span class="point"></span> 
                </div>
            </div>
            {{-- End User profile image --}}
            {{-- User profile text --}}
            <div class="profile-text">
                <h5>{{Auth::user()->name}}</h5>
                <h6>
                    @can('Quản trị hệ thống')
                        Quản trị
                    @endcan
                </h6>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <i class="mdi mdi-settings"></i>
                </a>
                <a href="app-email.html" class="" data-toggle="tooltip" title="Email">
                    <i class="mdi mdi-gmail"></i>
                </a>
                <a href="pages-login.html" class="" data-toggle="tooltip" title="Logout">
                    <i class="mdi mdi-power"></i>
                </a>
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <!-- text-->
                    <div class="dropdown-divider"></div>
                    <!-- text-->
                    <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    <!-- text-->
                </div>
            </div>
            {{-- End User profile text --}}
        </div>
        
        {{-- Sidebar navigation --}}
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>

                <li class="nav-small-cap">QUẢN TRỊ</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Người dùng</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Danh sách</a></li>
                        <li><a href="#">Thêm người dùng</a></li>
                        <li><a href="{{route('role.index')}}">Vai trò người dùng</a></li>
                        <li><a href="#">Thêm vai trò</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Bài viết <span class="label label-rouded label-danger pull-right">25</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-cards.html">Danh mục</a></li>
                        <li><a href="ui-user-card.html">Thêm bài viết</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- End Sidebar navigation --}}
    </div>
    {{-- End Sidebar scroll --}}
</aside>
{{-- End Left Sidebar - style you can find in sidebar.scss --}}