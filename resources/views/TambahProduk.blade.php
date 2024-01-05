<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{asset('/global.css')}}" />
    <link rel="stylesheet" href="{{asset('/TambahProduk.css')}}" />
    <link rel="stylesheet" href="{{asset('/Dasboard.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Font Awesome 5 Free:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="tambah-produk">
      <aside class="sidebar ulaccordionsidebar4">
        <div class="logo">
          <img src="{{asset('public/group-49@2x.png')}}" alt="logo">
          <h2>BUKIT TJAHAYA</h2>
        </div>
        <hr>
        
        <ul class="links">
          <li>
            <span class="material-symbols-outlined"><i class="fa fa-dashboard" style="font-size:18px; color: rgb(255, 255, 255);"></i></span>
            <a href="{{route('admin')}}">Dashboard</a>
          </li>
          <hr>
          <li>
            <span class="material-symbols-outlined"><i class="fa fa-gear" style="font-size:24px; color: rgb(254, 254, 254);"></i></span>
             <a href="{{route('admin.product')}}" class="sub-item">Produk</a>
          </li>
          <hr>
        </ul>
      </aside>
      <div class="divcontent-wrapper2">
        <div class="divcontent2">
          <div class="navnavbar2">
            <div class="ulnavbar-nav2">
              <div class="divtopbar-divider2"></div>
              <div class="auserdropdown2">
                <div class="adminbukittjahayacom1">admin@bukittjahaya.com</div>
                <img
                  class="undraw-profilesvg-icon2"
                  alt=""
                  src="{{asset('/public/undraw-profilesvg@2x.png')}}"
                />
              </div>
            </div>
          </div>
          <div class="divcontainer-fluid2">
            <div class="produk2">Produk</div>
            <div class="divcard2">
              <div class="divcard-header2">
                <a href="{{route('admin.product')}}">
                <div class="abtn4">
                  <div class="tambah">Kembali</div>
                </div></a>
              </div>
              <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="formh2d-5d1009c81">
                <div class="divform-group8">
                  <div class="nama2">Nama</div>
                  <input type="text" class="inputname1" name="nama">
                </div>
                <div class="divform-group8">
                  <div class="nama2">Harga</div>
                  <input type="number" class="inputname1" name="harga">
                </div>
                <div class="divform-group8">
                  <div class="nama2">Thumbnail</div>
                  <div class="inputthumbnail1">
                    <div class="input-group mb-3">
                      <input type="file" class="form-control" id="inputGroupFile02" name="upload">
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                  </div>
                </div>
                <div class="divform-group8">
                  <div class="nama2">Jumlah</div>
                      <input type="number" class="inputname1" name="jumlah">
                </div>
                <div class="divform-group15">
                  <div class="nama2">Deskripsi</div>
                  <textarea class="inputname1" name="deskripsi"></textarea>
                </div>
                <div>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footersticky-footer2">
          <div class="copyright-bukit2">Copyright © Bukit Tjahaya 2023</div>
        </div>
      </div>
    </div>
  </body>
</html>
