@extends('layouts.auth')
@section('title', 'Masuk')
@section("content")
<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-light">
                        <a href="/">
                            <span><img src="{{asset('assets/images/smp_logo.png')}}" alt="" height="100"></span>
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <x-alert name="error-login" message="Gagal - Username atau Password salah"></x-alert>
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Masuk</h4>
                            <p class="text-muted mb-4">Masukkan username dan password akun anda untuk melanjutkan.</p>
                        </div>
                        <x-form :action="route('login')">
                            <div class="form-group">
                                <label for="emailaddress">Username</label>
                                <x-input name="username" placeholder="Masukkan Username anda" autofocus></x-input>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <x-input name="password" type="password" placeholder="Masukkan Password anda" :visible-old="false"></x-input>
                            </div>
                            <div class="form-group mb-3">
                                <x-checkbox name="remember" label="Ingat Status Masuk ?"></x-checkbox>
                            </div>
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Masuk </button>
                            </div>
                        </x-form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
