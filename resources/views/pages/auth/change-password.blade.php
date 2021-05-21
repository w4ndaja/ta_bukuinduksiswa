@extends('layouts.auth')
@section('title', 'Ganti Password')
@section('content')
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="{{route('home')}}">
                            <span><img src="{{asset('assets/images/smp_logo.png')}}" alt="" height="120"></span>
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Ganti Password</h4>
                        </div>

                        <x-alert name="error" type="danger"></x-alert>
                        <x-alert name="success" type="info">
                            <a href="{{route('home')}}" class="btn btn-warning ml-1">Kembali</a>
                        </x-alert>

                        <x-form :action="route('changepassword.confirm')" method="PATCH">
                            <div class="form-group mb-3">
                                <label for="emailaddress">Password Lama</label>
                                <x-input type="password" name="old_password" placeholder="Masukkan password lama anda" :visible-old="false"></x-input>
                            </div>
                            <div class="form-group mb-3">
                                <label>Password Baru</label>
                                <x-input type="password" name="password" placeholder="Masukkan password baru anda" :visible-old="false"></x-input>
                            </div>
                            <div class="form-group mb-3">
                                <label>Konfirmasi Password Baru</label>
                                <x-input type="password" name="password_confirmation" placeholder="Konfirmasi password baru anda" :visible-old="false"></x-input>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit">Ganti</button>
                            </div>
                        </x-form>
                    </div> <!-- end card-body-->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a href="{{url()->previous()}}" class="text-muted ml-1"><b>Back</b></a>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
