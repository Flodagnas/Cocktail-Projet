@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div>
    <a href="/login">Login</a><br>
    <a href="/register">Register</a><br>
    <a href="/logout">Logout</a><br>
    <br>
    <a href="Alcools">Alcools</a><br>
    <a href="Fruits">Fruits</a><br>
    <a href="Sirops">Sirops</a><br>
    <a href="Softs">Softs</a><br>
    <a href="Verres">Verres</a><br>
</div>

@endsection
