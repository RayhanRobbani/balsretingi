</main>
<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.home') }}">
                        <span>
                            <i class="nav-icon bi bi-house"></i>
                            <span class="nav-text">Home</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.transactions')}}">
                        <span>
                            <i class="nav-icon bi bi-laptop"></i>
                            <span class="nav-text">History</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <div class="nav-link">
                        <span class="theme-radial-gradient">
                            <i class="close bi bi-x"></i>
                            <img src="{{url('')}}/new/assets/img/centerbutton.svg" class="nav-icon" alt="" />
                        </span>
                        <div class="nav-menu-popover justify-content-between">
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('/user/deposit');">
                                <i class="bi bi-credit-card size-32"></i><span>Pay</span>
                            </button>
                            @if($general->balance_transfer)
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('{{ route('user.transfer.balance') }}');">
                                <i class="bi bi-arrow-up-right-circle size-32"></i><span>Send</span>
                            </button>
                            @endif
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('{{ route('user.withdraw') }}');">
                                <i class="bi bi-arrow-down-left-circle size-32"></i><span>Withdraw</span>
                            </button>
                            
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('https://t.me/igniters_lab');">
                                <i class="bi bi-telegram size-32"></i><span>Support</span>
                            </button>
                            
                            <button type="button" class="btn btn-lg btn-icon-text"
                                onclick="window.location.replace('/app.apk');">
                                <i class="bi bi-receipt size-32"></i><span>App</span>
                            </button>
                            
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://t.me/+5fUwZbQvsbE4ZGM1">
                        <span>
                            <i class="nav-icon bi bi-gift"></i>
                            <span class="nav-text">Community</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.logout')}}">
                        <span>
                            <i class="nav-icon bi bi-box-arrow-right"></i>
                            <span class="nav-text">Logout</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- Footer ends-->
