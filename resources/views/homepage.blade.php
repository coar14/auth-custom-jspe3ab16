@extends('mainLayout')

@section('page-title', 'Main Landing Page')

@section('page-content')

    <div class="container text-center">
        <h1 class="my-4">Welcome to the Site</h1>
        {{-- <a href="{{ route('logout') }}">Logout</a> --}}
        <form action="{{ route('/logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                Logout
            </button>
        </form>
    </div>
@endsection
