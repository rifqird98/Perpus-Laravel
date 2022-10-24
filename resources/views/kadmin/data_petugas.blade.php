@extends('layout.main')

<!-- CONTENT HEADER -->

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Petugas</h1>
            </div>
            
            <div class="col-sm-8">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data</a></li>
                    <li class="breadcrumb-item active">Data Petugas</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- ISI KONTEN -->
<div class="container text-center">
    <div class="row justify-content-start">
        <div class="col">
        <h1><i class="fa-solid fa-user-tie"></i> DATA PETUGAS</h1>
        <input type="search" name="" placeholder="Cari..." class="form-control light-table-filter mt-3" data-table="table-hover">
            <table class="table table-hover table-striped mt-4">
                <thead>
                    <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">55</th>
                            <td>Jhon</td>
                            <td>L</td>
                            <td>Malang</td>
                    </tr>
                    <tr>
                        <th scope="row">65</th>
                            <td>Ari Gunawan</td>
                            <td>L</td>
                            <td>haha</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>      
@endsection
