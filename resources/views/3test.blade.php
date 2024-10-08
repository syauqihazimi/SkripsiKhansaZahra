<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="template/assets/css/main/app.css">
    <link rel="stylesheet" href="template/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="template/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="template/assets/images/logo/favicon.png" type="image/png">
    
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="{{route('3test')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-title">Grafik</li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Lulus</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item">
                        <a href="{{route('test')}}"class="submenu-link">
                            Jenis Kelamin
                        </a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_jurusan') }}"class="submenu-link">Jurusan</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_kategori_ipk') }}"class="submenu-link">Indeks Predikat Kumulatif</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_nilai_bahasa') }}"class="submenu-link">Nilai Bahasa</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_tahun_lulus') }}"class="submenu-link">Tahun Lulus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_jenis_seleksi') }}"class="submenu-link">Jenis seleksi</a>
                    </li>
                   <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_provinsi') }}"class="submenu-link">Provinsi</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_kota') }}"class="submenu-link">Kota</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_jenis_sekolah') }}"class="submenu-link">Jenis Sekolah</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_lulus_jurusan_sekolah') }}"class="submenu-link">Jurusan Sekolah</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Aktif</span>
                </a>
                <ul class="submenu ">
                <li class="submenu-item">
                        <a href="{{route('jumlah_mahasiswa_lulus_kelamin')}}"class="submenu-link">
                            Jenis Kelamin
                        </a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_jurusan') }}"class="submenu-link">Jurusan</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_kategori_ipk') }}"class="submenu-link">Indeks Predikat Kumulatif</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_nilai_bahasa') }}"class="submenu-link">Nilai Bahasa</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_jenis_seleksi') }}"class="submenu-link">Jenis seleksi</a>
                    </li>
                   <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_provinsi') }}"class="submenu-link">Provinsi</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_kota') }}"class="submenu-link">Kota</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_jenis_sekolah') }}"class="submenu-link">Jenis Sekolah</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ route('jumlah_mahasiswa_aktif_jurusan_sekolah') }}"class="submenu-link">Jurusan Sekolah</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Layouts</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="layout-default.html">Default Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-1-column.html">1 Column</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-rtl.html">RTL Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-horizontal.html">Horizontal Menu</a>
                    </li>
                </ul>
            </li>
            
            <li class="sidebar-title">Forms &amp; Tables</li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>Form Elements</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-element-input.html">Input</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-input-group.html">Input Group</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-select.html">Select</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-radio.html">Radio</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-checkbox.html">Checkbox</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-textarea.html">Textarea</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="form-layout.html" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Form Layout</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-journal-check"></i>
                    <span>Form Validation</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-validation-parsley.html">Parsley</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Form Editor</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-editor-quill.html">Quill</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-ckeditor.html">CKEditor</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-summernote.html">Summernote</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-tinymce.html">TinyMCE</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Table</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Datatables</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="table-datatable.html">Datatable</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
                    </li>
                </ul>
            </li>
                        
            <li class="sidebar-item  ">
                @auth
                <form action="{{route('logout')}}" method="post">
                @csrf
                    <button class="btn btn-danger">Logout</button></form>
                @endauth
            </li>
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Alert</h3>
                        <p class="text-subtitle text-muted">A pretty helpful component to show emphasized information to the user</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Alert</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('dashboard') }}">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-bi bi-pin-angle"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Angkatan</h6>
                                        <h6 class="font-extrabold mb-0">{{$tahun_angkatan_terbanyak}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">    
                    <a href="{{ route('dashboard') }}">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Mahasiswa</h6>
                                        <h6 class="font-extrabold mb-0">{{ $jumlah_mahasiswa }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </a>
                </div>            
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('dashboard') }}">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Aktif</h6>
                                        <h6 class="font-extrabold mb-0">{{$jumlah_mahasiswa_aktif}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <a href="{{ route('dashboard') }}">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Lulus</h6>
                                        <h6 class="font-extrabold mb-0">{{$jumlah_mahasiswa_lulus}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <form method="post" action="{{ url('dashboard')}}" id="filter-form">
                        @csrf
                            <div class="card-body">
                                <div class="chartCard">
                                    <div class="chartBox">
                                            <div class="box">
                                                <canvas id="BarChartSumAng2"width="600" height="400"></canvas>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="template/assets/js/bootstrap.js"></script>
    <script src="template/assets/js/app.js"></script>
    
</body>

</html>
