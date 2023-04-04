<div class="sidebar-wrap  sidebar-pushcontent">
    <!-- Add overlay or fullmenu instead overlay -->
    <div class="closemenu text-muted">Close Menu</div>
    <div class="sidebar dark-bg">
        <!-- user information -->
        <div class="row my-3">
            <div class="col-12 ">
                <div class="card shadow-sm bg-opac text-white border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-44 rounded-15">
                                    <img src="assets/img/user1.jpg" alt="">
                                </figure>
                            </div>
                            <div class="col px-0 align-self-center">
                                <p class="mb-1">{{ Auth::user()->username }}</p>
                                <p class="text-muted size-12 btn btn-sm btn-primary">
                                    {{ Auth::user()->plan['name'] ?? 'No Plan' }}</p>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-44 btn-light"><a href="{{ route('user.logout') }}">
                                        <i class="bi bi-box-arrow-right"></i></a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-opac text-white border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="display-4">{{ Auth::user()->balance + 0 }}</h1>
                                </div>
                                <div class="col-auto">
                                    <p class="text-muted">Wallet Balance</p>
                                </div>
                                <div class="col text-end">
                                    <p class="text-muted"><a href="{{ route('user.deposit') }}">+ Top up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- user emnu navigation -->
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('user.home') }}">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door"></i></div>
                            <div class="col">Dashboard</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-person"></i></div>
                            <div class="col">Account</div>
                            <div class="arrow"><i class="bi bi-plus plus"></i> <i class="bi bi-dash minus"></i>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link" href="{{ route('user.profile.setting') }}">
                                    <div class="avatar avatar-40 rounded icon"><i class="bi bi-calendar2"></i></div>
                                    <div class="col">Profile</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a></li>
                            <li><a class="dropdown-item nav-link" href="{{ route('user.change.password') }}">
                                    <div class="avatar avatar-40 rounded icon"><i class="bi bi-calendar-check"></i>
                                    </div>
                                    <div class="col">Password Change</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a></li>
                            @if ($general->balance_transfer)
                                @if (auth()->user()->can_transfer_balance)
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ route('user.transfer.balance') }}">
                                            <div class="avatar avatar-40 rounded icon">
                                                <i class="bi bi-calendar-check"></i>
                                            </div>
                                            <div class="col">Balance Transfer</div>
                                            <div class="arrow">
                                                <i class="bi bi-chevron-right"></i>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.deposit') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-chat-text"></i></div>
                            <div class="col">Deposit</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.withdraw') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-bell"></i></div>
                            <div class="col">Cashout</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plans') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-newspaper"></i></div>
                            <div class="col">Plan</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.ptc.index') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-palette"></i></div>
                            <div class="col">Task <i class="bi bi-star-fill text-warning small"></i></div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>

                    @if ($general->user_ads_post)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.ptc.ads') }}" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-chat-text"></i></div>
                                <div class="col">Ad Post</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.referred') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="col">Refer <span class="badge bg-info fw-light">new</span></div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.commissions') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-file-earmark-text"></i></div>
                            <div class="col">Refer Earn <span class="badge bg-info fw-light">new</span></div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}" tabindex="-1">
                            <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                            <div class="col">Logout</div>
                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<main class="h-100">
    <!-- Header -->
    <header class="header position-fixed">
        <div class="row">
            <div class="col-auto">
                <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                    <i class="bi bi-list"></i>
                </a>
            </div>
            <div class="col align-self-center text-center">
                <div class="logo-small">
                    <img src="assets/img/logo.png" alt="">
                    <h5>{{ $general->site_name }}</h5>
                </div>
            </div>
            <div class="col-auto">
                <a href="#" target="_self" class="btn btn-light btn-44">
                    <i class="bi bi-bell"></i>
                    <span class="count-indicator"></span>
                </a>
            </div>
        </div>
    </header>
    <!-- Header ends -->
