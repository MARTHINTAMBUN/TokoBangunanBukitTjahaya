<nav class="navbar navbar-expand-md sticky-top navbar-shrink py-3 navbar-light" id="mainNav" style="box-shadow: 0px 7px 20px;">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon" style="border-radius: -14%;background: rgba(55,99,244,0);"><img src="{{asset('assets/img/Group%2071.png')}}" width="55" height="41"></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="#product">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a></li>
            </ul>
            <div class="float-start float-md-end mt-5 mt-md-0 search-area"><input class="float-start float-sm-end custom-search-input" type="search" placeholder="Search Products" style="border-width: 1px;border-style: solid;margin-right: 20px;padding: 0px 2px 1px;margin-top: -2px;border-radius: 26px;margin-left: 16px;padding-left: 10px;"></div><a class="btn btn-primary shadow" role="button" href="signup.html" style="background: rgba(55,99,244,0);border-radius: 0px;border-width: 0px;border-color: rgba(255,255,255,0);border-top-style: none;padding: 0;"></a>
        </div><a href="{{route('profile')}}"><img src="{{asset('assets/img/user%202.png')}}" width="40" height="40"></a>
    </div>
</nav>