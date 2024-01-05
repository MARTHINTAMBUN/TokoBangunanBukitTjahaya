<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="{{ asset('/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('/TabelProduk.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Font Awesome 5 Free:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="tabel-produk">
        <div class="ulaccordionsidebar3">
            <div class="hrsidebar-divider9"></div>
            <div class="hrsidebar-divider10"></div>
            <div class="hrsidebar-divider11"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <div class="buttonsidebartoggle3">
                    <i class="fa fa-sign-out" style="font-size:36px"></i>
                </div>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="{{ route('admin') }}">
                <div class="anav-link9">
                    <div class="div21"></div>
                    <b class="dashboard3">Dashboard</b>
                </div>
            </a>
            <div class="linav-item1">
                <div class="anav-link10">
                    <div class="div22"></div>
                    <div class="master-data3">Produk</div>
                    <div class="div23"></div>
                </div>
            </div>
            <div class="anav-link11">
                <div class="div22"></div>
                <div class="administrasi3">Administrasi</div>
                <div class="div23"></div>
            </div>
            <div class="asidebar-brand3">
                <div class="bukit-tjahaya3">Bukit Tjahaya</div>
                <div class="frame-div"></div>
                <img class="asidebar-brand-child1" alt="" src="{{ asset('/public/group-49@2x.png') }}" />
            </div>
        </div>
        <div class="divcontent-wrapper3">
            <div class="divcontent3">
                <div class="navnavbar3">
                    <div class="ulnavbar-nav3">
                        <div class="divtopbar-divider3"></div>
                        <div class="auserdropdown3">
                            <div class="list-data-produk">admin@bukittjahaya.com</div>
                            <img class="undraw-profilesvg-icon3" alt=""
                                src="{{ asset('/public/undraw-profilesvg@2x.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="divcontainer-fluid3">
                    <div class="produk4">Produk</div>
                    <div class="divcard4">
                        <div class="divcard-header3">
                            <div class="divd-flex3">
                                <b class="list-data-produk">List data Produk</b>
                                <a href="{{ route('admin.product.create') }}">
                                    <div class="abtn5">
                                        <div class="seng">Tambah Produk</div>
                                    </div>
                                </a>
                            </div>
                            <div class="formform-inline1">
                                <div class="search3">
                                    <div class="pseudo12">
                                        <div class="search4">Search</div>
                                    </div>
                                </div>
                                <div class="buttonbtn6">
                                    <div class="seng">Search</div>
                                </div>
                            </div>
                        </div>
                        <div class="divtable-responsive1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="100px" scope="col">#</th>
                                        <th width="360px" scope="col">Nama</th>
                                        <th width="250px" scope="col">Jumlah</th>
                                        <th width="300px" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>
                                            <div class="divd-flex4">
                                                <a href="{{ route('admin.product.edit', $item->id) }}">

                                                    <div class="abtn6">Edit</div>
                                                </a>
                                                <a href="{{ route('admin.product.delete', $item->id) }}">
                                                    <button class="buttonbtn7">Hapus</button>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="footersticky-footer3">
                <div class="copyright-bukit3">Copyright © Bukit Tjahaya 2023</div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</body>

</html>
