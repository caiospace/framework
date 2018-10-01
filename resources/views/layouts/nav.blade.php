<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
            <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                    <i class="search-icon ti-search pdd-right-10"></i>
                    <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
            </li>
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
            </li>
        </ul>
        <ul class="nav-right">
            <li class="notifications dropdown">
                <span class="counter bgc-red">3</span>
                <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                    <i class="ti-bell"></i>
                </a>

                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB">
                        <i class="ti-bell pR-10"></i>
                        <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                    </li>
                    <li>
                        <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                            <li>
                                <a href="" class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                    <div class="peer mR-15">
                                        <img class="w-3r bdrs-50p" src="/images/1.jpg" alt="">
                                    </div>
                                    <div class="peer peer-greed">
                                        <span>
                                            <span class="fw-500">John Doe</span>
                                            <span class="c-grey-600">liked your <span class="text-dark">post</span>
                                            </span>
                                        </span>
                                        <p class="m-0">
                                            <small class="fsz-xs">5 mins ago</small>
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pX-20 pY-15 ta-c bdT">
                        <span>
                            <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications
                                <i class="ti-angle-right fsz-xs mL-10"></i>
                            </a>
                        </span>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <img class="w-2r bdrs-50p" src="{{ auth()->user()->avatar }}" alt="">
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-grey-900">{{ Auth::guard('admin')->user()->first_name . " " .  Auth::guard('admin')->user()->last_name }}</span>
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                    <li>
                        <a href="{{ route('admin.admin-user.detail') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-settings mR-10"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('admin.logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-power-off mR-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
