@extends('layout.admin')
        <!-- START DATA -->
@section ('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1"style="color: black;">ID</th>
                            <th class="col-md-3"style="color: black;">Nama</th>
                            <th class="col-md-4"style="color: black;">Email</th>
                            <th class="col-md-2"style="color: black;">No.Telp</th>
                            <th class="col-md-2"style="color: black;">Alamat</th>
                            <th class="col-md-2"style="color: black;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Ambar Setyawati</td>
                            <td>ambarsetyawati@gmail.com</td>
                            <td>089609799182</td>
                            <td>Sucen Triharjo Sleman</td>
                            <td>
                                 <div style="display: flex; gap: 5px;">
                                     <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                     <a href="#" class="btn btn-danger btn-sm">Del</a>
                                 </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: black;">002</td>
                            <td>Nurul Hidayah</td>
                            <td>nurul@gmail.com</td>
                            <td>089609799992</td>
                            <td>Sucen Triharjo Sleman</td>
                            <td>
                                 <div style="display: flex; gap: 5px;">
                                     <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                     <a href="#" class="btn btn-danger btn-sm">Del</a>
                                 </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
          </div>
          <!-- AKHIR DATA -->
     </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
</div>
@endsection

     