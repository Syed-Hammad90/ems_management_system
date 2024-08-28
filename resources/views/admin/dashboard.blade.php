@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>


    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <a href="{{ route('admin.sale.create') }}" class="btn btn-primary">Create Sales Manager</a>
    <a href="{{ route('admin.sale.all') }}" class="btn btn-info">View Online Users</a>
    <!-- Additional Dashboard Content -->

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-success">Logout</button>
    </form>
</div>
@endsection
