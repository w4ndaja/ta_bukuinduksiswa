@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Beranda Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Beranda</h4>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Beranda</h2>
            </div>
            <div class="card-body">
                <div class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Viery</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Annas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Firman</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
@endsection
