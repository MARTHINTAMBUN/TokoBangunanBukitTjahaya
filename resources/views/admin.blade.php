<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{asset('/global.css')}}" />
    <link rel="stylesheet" href="{{asset('/Dasboard.css')}}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Font Awesome 5 Free:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="dasboard">
      <div class="ulaccordionsidebar4">
        <div class="hrsidebar-divider12"></div>
        <div class="hrsidebar-divider13"></div>
        <div class="hrsidebar-divider14"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <div class="buttonsidebartoggle4">
          <i class="fa fa-sign-out" style="font-size:36px"></i>
        </div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        <div class="anav-link12">
          <b class="dashboard4">Dashboard</b>
        </div>
        <a href="{{route('admin.product')}}">
        <div class="anav-link13">
          <b class="master-data4">Produk</b>
        </div></a>
        <div class="anav-link14">
          <b class="administrasi4">Administrasi</b>
        </div>
        <div class="asidebar-brand4">
          <b class="bukit-tjahaya4">BUKIT TJAHAYA</b>
          <img
            class="asidebar-brand-child2"
            alt=""
            src="./public/group-49@2x.png"
          />
        </div>
      </div>
      <div class="divcontent-wrapper4">
        <div class="divcontent4">
          <div class="navnavbar4">
            <div class="ulnavbar-nav4">
              <div class="divtopbar-divider4"></div>
              <div class="auserdropdown4">
                <div class="adminbukittjahayacom3">admin@bukittjahaya.com</div>
                <img
                  class="undraw-profilesvg-icon4"
                  alt=""
                  src="./public/undraw-profilesvg@2x.png"
                />
              </div>
            </div>
          </div>
          <div class="divcontainer-fluid4">
            <div class="hey-admin">Hey, admin</div>
            <div class="divrow">
              <div class="divcard5">
                <div class="divrow1">
                  <div class="divcol">
                    <b class="total-orders">TOTAL ORDERS</b>
                    <b class="rp-1234567-">2050</b>
                  </div>
                  <img
                    class="vector-icon"
                    alt=""
                    src="./public/vector@2x.png"
                  />
                </div>
              </div>
              <div class="divcard6">
                <div class="divrow1">
                  <div class="divcol1">
                    <b class="total-orders">total expenses</b>
                    <b class="rp-1234567-">Rp. 1.234.567,-</b>
                  </div>
                  <div class="div34"></div>
                </div>
              </div>
              <div class="divcard7">
                <div class="divrow1">
                  <div class="divcol2">
                    <b class="total-revenue">total REVENUE</b>
                    <b class="rp-1234567-">Rp. 1.234.567.89</b>
                  </div>
                  <div class="div34"></div>
                </div>
              </div>
              <div class="divcard8">
                <div class="divrow1">
                  <div class="divcol3">
                    <b class="total-orders">Pending Requests</b>
                    <b class="rp-1234567-">18</b>
                  </div>
                  <div class="div36"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footersticky-footer4">
          <div class="copyright-bukit4">Copyright © Bukit Tjahaya 2023</div>
        </div>
      </div>
    </div>
  </body>
</html>
