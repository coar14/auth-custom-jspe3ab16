@extends('mainLayout')

@section('page-title', 'Account Registration')

@section('auth-content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="card-title text-center mb-4">Register</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label auth-labels">Username</label>
                                <input type="text" name="name" value="{{ old('username') }}" required class="form-control authtextbox">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label auth-labels">Email</label>
                                <input type="email" name="email" class="form-control auth-textbox">
                                <div class="form-check">
                                    <input type="checkbox" name="generate_email" class="form-check-input" id="generateEmail">
                                    <label class="form-check-label" for="generateEmail">Generate</label>
                                </div>
                                @error('email')
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
                            <div class="form-group mb-4">
                                <label class="form-label auth-labels">Confirm Password</label>
                                <input type="password" name="password_confirmation" required class="form-control authtextbox">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
