<div id="sidebar" class="active ">
    <div class="sidebar-wrapper active ps ps--active-y" style="top: 112px; overflow: scroll;">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                   <i class="bi bi-bell-fill"></i> <a href="{{ route('home') }}"><img src="{{ URL::to('admin/assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item active">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                           
                            <span>Name: <span class="fw-bolder">mohammed</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-success">Admin</span>
                           
                           
                        </div>
                    </div>
                </li>

                <li class="sidebar-item">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>Chnage Password</span>
                    </a>
                </li>

                
                   
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>User Control</span>
                        </a>
                        <ul class="submenu">
                           
                            <li class="submenu-item">
                                <a href="">User Activity Log</a>
                            </li>
                            <li class="submenu-item">
                                <a href="">Activity Log</a>
                            </li>
                        </ul>
                    </li>
             
                
              
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Notifications</span>
                    </a>
                    <ul class="submenu">
                        
                        <li class="submenu-item active">
                            <a href="">Show Notification</a>
                        </li>
                        
                    </ul>
                </li>



                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Comments</span>
                    </a>
                    <ul class="submenu">
                        
                        <li class="submenu-item active">
                            <a href="">Show Comment</a>
                        </li>
                       
                    </ul>
                </li>



                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Portfolio</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="">Add Portfolio</a>
                        </li>
                        <li class="submenu-item active">
                            <a href="">Show Portfolios</a>
                        </li>
                        <li class="submenu-item active">
                            <a href="">Edit Portfolio</a>
                        </li>
                    </ul>
                </li>
                
            


                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Messages</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="">View Message</a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                       
                        <i class="bi bi-chat-left-quote-fill"></i>
                        <span>Clients Say</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="">View Says</a>
                        </li>
                    </ul>
                </li>
             

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-pen-fill"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="">Add Blogs</a>
                        </li>
                        <li class="submenu-item">
                            <a href="">View Blogs</a>
                        </li>
                        <li class="submenu-item">
                            <a href="">Edit Blogs</a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item">
                    <a href="" class='sidebar-link'>
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>