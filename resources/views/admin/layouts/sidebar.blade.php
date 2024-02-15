 <!-- Left Panel -->
 <aside id="left-panel" class="left-panel">
     <nav class="navbar navbar-expand-sm navbar-default">
         <div id="main-menu" class="main-menu collapse navbar-collapse">
             <ul class="nav navbar-nav">
                 <li class="active">
                     <a href="#"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                 </li>
                <li class="menu-item-has-children dropdown {{ request()->routeIs('about.*') ? 'show' : '' }}">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-cogs"></i>Pages
                    </a>
                    <ul class="sub-menu children dropdown-menu {{ request()->routeIs('about.*') ? 'show' : '' }}">
                        <li>
                            <a href="{{ route('home.index') }}">
                                <i class="fa fa-puzzle-piece"></i>Home Page
                            </a>
                        </li>
                        <li class="{{ request()->routeIs('about.*') ? 'active' : '' }}">
                            <a href="{{ route('about.index') }}">
                                <i class="fa fa-puzzle-piece"></i>About Page
                            </a>
                        </li>
                    </ul>
                </li>

                 {{-- <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Roles</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><a href="{{route('roles.index')}}">
                             <i class="fa fa-puzzle-piece"></i>Roles</li>
                            </a>

                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Permissions</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><a href="{{route('permission.index')}}">
                             <i class="fa fa-puzzle-piece"></i>Permissions</li>
                            </a>

                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Users</a>
                     <ul class="sub-menu children dropdown-menu">
                         <li><a href="{{route('users.index')}}">
                             <i class="fa fa-puzzle-piece"></i>Users</li>
                            </a>

                     </ul>
                 </li> --}}

             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
