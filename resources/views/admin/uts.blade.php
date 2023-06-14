@extends('layout')
@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Ruang UTS</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Admin Ruang UTS</li>
        </ol>
        <div class="card mb-4">
            {{-- <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div> --}}
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Ruang Ujian Tengah Semester
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Matakuliah</th>
                            <th>Dosen</th>
                            <th>Kelas</th>
                            <th>Ruangan</th>
                            <th>Acction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>01/03</td>
                            <td>Pemrograman Web</td>
                            <td>Sinta</td>
                            <td>201</td>
                            <td>111</td>
                            <td>
                                <a class="btn btn-success" href="#" role="button"><i class="bi bi-pencil-square"></i>tampil</a>
                                <a class="btn btn-primary" href="#" role="button"><i class="bi bi-pencil-square"></i>edit</a>
                                <a class="btn btn-danger" href="#" role="button"><i class="bi bi-pencil-square"></i>hapus</a>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection