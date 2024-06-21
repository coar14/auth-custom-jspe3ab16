@extends('mainLayout')

@section('page-title', 'Account Login')

@section('auth-content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label auth-labels">Username</label>
                                <input type="text" name="name" value="{{ old('username') }}" required class="form-control authtextbox">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label auth-labels">Password</label>
                                <input type="password" name="password" required class="form-control authtextbox">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>No account yet? <a href="{{ route('register') }}" class="text-primary">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
