<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="#"><img class="brand-logo" alt="stack admin logo" src="{{ asset('backend/app-assets/images/logo/stack-logo-light.png')}}">
                        <h2 class="brand-text">Ecommerce</h2>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="feather icon-menu"></i></a></li>
                    <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                        <ul class="mega-dropdown-menu dropdown-menu row p-1">
                            <li class="col-md-4 bg-mega p-2">
                                <h3 class="text-white mb-1 font-weight-bold">Mega Menu Sidebar</h3>
                                <p class="text-white line-height-2">Candy canes bonbon toffee. Cheesecake dragée gummi bears chupa chups powder bonbon. Apple pie cookie sweet.</p>
                                <button class="btn btn-outline-white">Learn More</button>
                            </li>
                            <li class="col-md-5 px-2">
                                <h6 class="font-weight-bold font-medium-2 ml-1">Apps</h6>
                                <ul class="row mt-2">
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3" href="app-email.html" target="_blank"><i class="feather icon-mail font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Email</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3" href="app-chat.html" target="_blank"><i class="feather icon-message-square font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Chat</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mb-xl-3 mt-75 mt-xl-0" href="app-todo.html" target="_blank"><i class="feather icon-check-square font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-0">Todo</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0" href="app-kanban.html" target="_blank"><i class="feather icon-file-plus font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-50">Kanban</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0" href="app-contacts.html" target="_blank"><i class="feather icon-users font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-50">Contacts</p>
                                        </a></li>
                                    <li class="col-6 col-xl-4"><a class="text-center mb-2 mt-75 mt-xl-0" href="invoice-template.html" target="_blank"><i class="feather icon-printer font-large-1 mr-0"></i>
                                            <p class="font-medium-2 mt-25 mb-50">Invoice</p>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="font-weight-bold font-medium-2">Components</h6>
                                <ul class="row mt-1 mt-xl-2">
                                    <li class="col-12 col-xl-6 pl-0">
                                        <ul class="mega-component-list">
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-alerts.html" target="_blank">Alert</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-callout.html" target="_blank">Callout</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-buttons-basic.html" target="_blank">Buttons</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-carousel.html" target="_blank">Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-12 col-xl-6 pl-0">
                                        <ul class="mega-component-list">
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-dropdowns.html" target="_blank">Drop Down</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-list-group.html" target="_blank">List Group</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-modals.html" target="_blank">Modals</a></li>
                                            <li class="mega-component-item"><a class="mb-1 mb-xl-2" href="component-pagination.html" target="_blank">Pagination</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon feather icon-maximize"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon feather icon-search"></i></a>
                        <div class="search-input">
                            <input class="input" type="text" placeholder="Explore Stack..." tabindex="0" data-search="template-search">
                            <div class="search-input-close"><i class="feather icon-x"></i></div>
                            <ul class="search-list"></ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    
                    
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="avatar avatar-online"><img src="{{ asset('backend/app-assets/images/portrait/small/avatar-s-1.png')}}" alt="avatar">
                                <i></i>
                            </div><span class="user-name"> {{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{route('profile.edit')}}">
                                <i class="feather icon-user"></i> 
                                Edit Profile</a>
                                <a class="dropdown-item" href="app-email.html">
                                    <i class="feather icon-mail"></i> 
                                    My Inbox</a>
                                    <a class="dropdown-item" href="user-cards.html">
                                        <i class="feather icon-check-square"></i> 
                                        Task</a>
                                        <a class="dropdown-item" href="app-chat.html">
                                            <i class="feather icon-message-square"></i> 
                                            Chats</a>
                            <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ ('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
            </li>
            <li class=" nav-item"><a href=""><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
               
            </li>
           
            <li class=" nav-item"><a href="#"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Layouts">Layouts</span></a>
               
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">Starter kit</span><span class="badge badge badge-danger badge-pill float-right mr-2">New</span></a>
                
            </li>
           
            <li class=" nav-item"><a href="app-email.html"><i class="feather icon-mail"></i><span class="menu-title" data-i18n="Email Application">Email Application</span></a>
            </li>
            <li class=" nav-item"><a href="app-chat.html"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Chat Application">Chat Application</span></a>
            </li>
            <li class=" nav-item"><a href="app-todo.html"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Todo Application">Todo Application</span></a>
            </li>
            <li class=" nav-item"><a href="app-kanban.html"><i class="feather icon-file-plus"></i><span class="menu-title" data-i18n="Kanban Application">Kanban Application</span></a>
            </li>
            <li class=" nav-item"><a href="app-contacts.html"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
            </li>
            <li class=" nav-item"><a href="project-summary.html"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Project Summary">Project Summary</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-plus-square"></i><span class="menu-title" data-i18n="Calender">Calender</span></a>
                
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-file-text"></i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
                
            </li>
            <li class=" navigation-header"><span>Pages</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="Pages"></i>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-share"></i><span class="menu-title" data-i18n="Timelines">Timelines</span></a>
                
            </li>
            <li class=" nav-item"><a href="account-setting.html"><i class="feather icon-user-plus"></i><span class="menu-title" data-i18n="Account setting">Account setting</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Users">Users</span></a>
                
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-image"></i><span class="menu-title" data-i18n="Gallery">Gallery</span></a>
                
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-search"></i><span class="menu-title" data-i18n="Search">Search</span></a>
                
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-unlock"></i><span class="menu-title" data-i18n="Authentication">Authentication</span></a>
                
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Error">Error</span></a>
                
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-watch"></i><span class="menu-title" data-i18n="Coming Soon">Coming Soon</span></a>
                
            </li>
     
          
            <li class="disabled nav-item"><a href="#"><i class="feather icon-slash"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.ticksy.com/" target="_blank"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
            </li>
            <li class=" nav-item"><a href="https://pixinvent.com/stack-bootstrap-admin-template/documentation" target="_blank"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->