<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Brand</title>
    <link rel="stylesheet" href="{{asset('assets/fonts/material-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
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
    @include('layouts.navbar')
    <main class="page product-page">
        <section class="clean-block clean-product dark" style="box-shadow: inset 0px 0px 19px;">
            <div class="container d-flex-h-100 align-items-center" id="homeBtnContainer">
                <div style="margin: auto;text-align: center;height: 100%;padding-top: 17px;"></div>
            </div>
            <div class="container" style="border-radius: 33px;"><a class="btn btn-primary align-items-center" role="button" id="homeBtn" style="margin: auto;height: 100%;background: rgba(137,137,137,0);font-size: 20px;border-radius: 120px;border-color: rgb(0,0,0);color: rgb(0,0,0);" href="{{route('home')}}"><i class="material-icons" style="font-size: 17px;">arrow_back</i>BACK</a>
                <div class="block-content" style="margin-top: 1px;">
                    <div class="product-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gallery">
                                    <div id="product-preview" class="vanilla-zoom">
                                        <div class="zoomed-image" style="background: url(&quot;{{ asset('uploads/barang/'.$product->gambar) }}&quot;) center / contain no-repeat, #fff;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info">
                                    <h3 style="font-weight: bold;">{{ $product->nama }}</h3>
                                    <p>{{ $product->deskripsi }}</p>
                                    <div class="price"><button class="btn btn-primary float-end" type="button" style="background: rgb(255,74,53);" data-bs-target="#modal-1" data-bs-toggle="modal"><i class="icon-basket"></i>Buy Now</button>
                                        <h3 style="color: rgb(115,168,62);">
                                            <span style="font-size: 20px;">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="summary">
                                        <h3 style="font-size: 18px;font-weight: bold;">Stock</h3>
                                        <p>{{ $product->jumlah }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button></div>
                <div class="modal-body">
                    <p>Do you want to go and finish your purchase for now?</p>
                </div>
                <div class="modal-footer d-xl-flex justify-content-xl-center"><button class="btn btn-primary" type="button" style="background: rgb(253,56,13);">Yes</button><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button></div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('assets/js/vanilla-zoom.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script src="{{asset('assets/js/Animated-Pretty-Product-List-v12-Animated-Pretty-Product-List.js')}}"></script>
    <script src="{{asset('assets/js/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1-Vertical-Nav.js')}}"></script>
</body>

</html>