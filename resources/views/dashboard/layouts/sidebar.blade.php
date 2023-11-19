<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow {{Request::is('/dashboard')?'active':''}}" href="/dashboard" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class=" {{Request::is('/dashboard')?'active':''}}" href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a class=" {{Request::is('/dashboard/posts*')?'active':''}}" href="/dashboard/posts"> <i class="fa fa-book"></i> My Posts</a></li>
                </ul>
            </li>
            @can('admin')
             <h6 class=" sidebar-heading d-flex justify-content-between align-items-center px-3 pt-4 pb-1 text-muted">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-colum">
                <li class="nav-item">
                    <a class=" {{Request::is('/dashboard/categories*')?'active':''}}" href="/dashboard/categories"><i class="fa fa-plus-square-o"></i> Post Categories</a>
                </li>
            </ul>
            @endcan
            {{-- <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./layout-blank.html">Blank</a></li>
                    <li><a href="./layout-one-column.html">One Column</a></li>
                    <li><a href="./layout-two-column.html">Two column</a></li>
                    <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                    <li><a href="./layout-vertical.html">Vertical</a></li>
                    <li><a href="./layout-horizontal.html">Horizontal</a></li>
                    <li><a href="./layout-boxed.html">Boxed</a></li>
                    <li><a href="./layout-wide.html">Wide</a></li>
                    <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                    <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                </ul>
            </li>
            <li class="nav-label">Apps</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./email-inbox.html">Inbox</a></li>
                    <li><a href="./email-read.html">Read</a></li>
                    <li><a href="./email-compose.html">Compose</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Profile</a></li>
                    <li><a href="./app-calender.html">Calender</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./chart-flot.html">Flot</a></li>
                  
                </ul>
            </li>
            <li class="nav-label">UI Components</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>
                </a>
                
            </li> --}}
            
            
            
           
        </ul>
    </div>
</div>