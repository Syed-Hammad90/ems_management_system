@extends('layouts.app')

@section('content')

<div class="container vh-100 d-flex flex-column justify-content-between align-items-center">
    <div class="w-100 text-center">
        <h1 class="h3 text-primary mt-5">USER DASHBOARD</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show w-100 mt-3" role="alert">
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show w-100 mt-3" role="alert">
            <strong>Error:</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="w-100 text-center mb-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</div>

@endsection
