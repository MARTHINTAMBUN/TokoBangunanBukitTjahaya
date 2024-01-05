<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Account-setting-or-edit-profile.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Animated-Pretty-Product-List-v12-Animated-Pretty-Product-List.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/back-btn.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/baguetteBox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Basic-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/List---Dropdown---Filter---black.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-Vertical-Nav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Soft-UI-Aside-Navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vanilla-zoom.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Vertical-Tabs.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-body clean-navbar navbar-light">
        <div class="container"><a class="navbar-brand logo" href="#"><img src="assets/img/Group%2071.png" width="55" height="41"></a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="#product">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a></li>
                </ul>
                <div class="float-start float-md-end mt-5 mt-md-0 search-area"><input class="float-start float-sm-end custom-search-input" type="search" placeholder="Search Products" style="border-width: 1px;border-style: solid;margin-right: 20px;padding: 0px 2px 1px;margin-top: -2px;border-radius: 26px;margin-left: 16px;padding-left: 10px;"></div><a class="btn btn-primary shadow" role="button" href="signup.html" style="background: rgba(55,99,244,0);border-radius: 0px;border-width: 0px;border-color: rgba(255,255,255,0);border-top-style: none;padding: 0;"></a>
            </div><a href="{{route('profile')}}"><img src="assets/img/user%202.png" width="40" height="40"></a>
        </div>
    </nav>
    <main class="page" style="margin-top: -77px;border-color: rgb(255,255,255);">
        <section class="clean-block about-us" style="box-shadow: inset 0px 0px 20px;color: rgb(255,255,255);">
            <div class="container-fluid" style="border-color: rgb(255,255,255);">
                <div class="row flex-column flex-sm-row wrapper min-vh-100">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-start bg-light py-3">
                        <div>
                            <ul class="nav nav-tabs flex-column" role="tablist" style="width: 25%!important;float: left;">
                                <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 20px;">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path>
                                        </svg>User Info</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" role="tab" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" style="font-size: 20px;">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"></path>
                                        </svg>log out</a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </ul>
                            <div class="tab-content" style="width: 75%!important;float: right;">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <p>Content for tab 1.</p>
                                    <div class="d-xl-flex align-items-xl-start container" style="margin-top: -40px;">
                                        <div class="row gutters">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                        <div class="account-settings">
                                                            <div class="user-profile">
                                                                <div class="user-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin"></div>
                                                                <h5 class="user-name">{{$user->name}}</h5>
                                                                <h6 class="user-email">{{$user->email}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                                                <div class="card h-100">
                                                    <div class="card-body">
                                                    <form action="{{url('profile-'.$user->id)}}" method="POST">
                                                        @csrf
                                                        <div class="row gutters">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                <h6 class="text-primary mb-2">Personal Details</h6>
                                                            </div>
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-group"><label class="form-label" for="fullName">Full Name</label><input type="text" class="form-control" id="fullName" placeholder="Ropal" value="{{$user->name}}" name="name"></div>
                                                            </div>
                                                            @if ($user->phone != null)
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-group"><label class="form-label" for="E-mail Address">Phone</label><input type="text" class="form-control" id="phone" value="{{$user->phone}}" name="phone"></div>
                                                            </div>
                                                            @else
                                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                                <div class="form-group"><label class="form-label" for="E-mail Address">Phone</label><input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone"></div>
                                                            </div>
                                                            @endif
                                                            

                                                        </div>
                                                        <div class="row gutters">
                                                            @if ($user->address != null)
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                <h6 class="text-primary mt-3 mb-2">Address</h6><textarea style="padding-right: 0px;width: 486px;height: 159px;" name="address">{{$user->address}}</textarea>
                                                            </div>
                                                            @else
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                <h6 class="text-primary mt-3 mb-2">Address</h6><textarea style="padding-right: 0px;width: 486px;height: 159px;" placeholder="add address here..." name="address"></textarea>
                                                            </div>
                                                            @endif
                                                        </div>
                                                        <div class="row gutters">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                                
                                                                <div class="d-lg-flex justify-content-lg-center text-right"><button class="btn btn-primary d-lg-flex justify-content-lg-center" type="submit" id="submit" name="submit" style="background: rgb(255,76,41);border-radius: 24px;">Save Changes</button></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center"></footer>
    <footer class="text-center py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <p class="text-muted my-2">Copyright&nbsp;© 2023&nbsp;BUKIT TJAHAYA<br><br></p>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg></div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"><a class="link-secondary" href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a class="link-secondary" href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('assets/js/vanilla-zoom.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script src="{{asset('assets/js/Animated-Pretty-Product-List-v12-Animated-Pretty-Product-List.js')}}"></script>
    <script src="{{asset('assets/js/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-Vertical-Nav.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>