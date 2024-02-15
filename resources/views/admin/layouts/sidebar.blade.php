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
                         <i class="menu-icon fa fa-cogs"></i>Home Page
                     </a>
                     <ul class="sub-menu children dropdown-menu ">

                         <li class="{{ request()->routeIs('home_section1.index') ? 'active' : '' }}">
                             <a href="{{ route('home_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 1
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('home_section2.index') ? 'active' : '' }}">
                             <a href="{{ route('home_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 2
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('home_section3.index') ? 'active' : '' }}">
                             <a href="{{ route('home_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 3
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('home_section4.index') ? 'active' : '' }}">
                             <a href="{{ route('home_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 4
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('home_section1.index') ? 'active' : '' }}">
                             <a href="{{ route('home_section5.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 5
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('home_section6.index') ? 'active' : '' }}">
                             <a href="{{ route('home_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 6
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown ">

                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false">
                         <i class="menu-icon fa fa-cogs"></i>About Page
                     </a>
                     <ul class="sub-menu children dropdown-menu ">

                         <li class="{{ request()->routeIs('about_section1.index') ? 'active' : '' }}">
                             <a href="{{ route('about_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 1
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('about_section2.index') ? 'active' : '' }}">
                             <a href="{{ route('about_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 2
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('about_section1.index') ? 'active' : '' }}">
                             <a href="{{ route('about_section3.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 3
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('about_section4.index') ? 'active' : '' }}">
                             <a href="{{ route('about_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 4
                             </a>
                         </li>


                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown ">

                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false">
                         <i class="menu-icon fa fa-cogs"></i>Get A Puppy Page
                     </a>
                     <ul class="sub-menu children dropdown-menu ">

                         <li class="{{ request()->routeIs('get_section1.index') ? 'active' : '' }}">
                             <a href="{{ route('get_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 1
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown ">

                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                         aria-expanded="false">
                         <i class="menu-icon fa fa-cogs"></i>Pups Available Page
                     </a>
                     <ul class="sub-menu children dropdown-menu ">

                         <li class="{{ request()->routeIs('available_section1.index') ? 'active' : '' }}">
                             <a href="{{ route('available_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 1
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('available_section2.index') ? 'active' : '' }}">
                             <a href="{{ route('available_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 2
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('available_section3.index') ? 'active' : '' }}">
                             <a href="{{ route('available_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 3
                             </a>
                         </li>
                         <li class="{{ request()->routeIs('available_section4.index') ? 'active' : '' }}">
                             <a href="{{ route('available_section1.index') }}">
                                 <i class="fa fa-puzzle-piece"></i>Section# 4
                             </a>
                         </li>

                     </ul>
                 </li>
                 <li class="menu-item-has-children dropdown ">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="menu-icon fa fa-cogs"></i>Planned Breed Page
                    </a>
                    <ul class="sub-menu children dropdown-menu ">

                        <li class="{{ request()->routeIs('breed_section1.index') ? 'active' : '' }}">
                            <a href="{{ route('breed_section1.index') }}">
                                <i class="fa fa-puzzle-piece"></i>Section# 1
                            </a>
                        </li>

                    </ul>
                </li>



             </ul>
         </div><!-- /.navbar-collapse -->
     </nav>
 </aside>
