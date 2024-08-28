@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Online Sales Managers</h1>

    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>


    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} ({{ $user->email }}) - Online <a href="{{ route('admin.sale.edit' , $user->id) }}">Edit</a> | <a href="{{ route('admin.sale.delete' , $user->id) }}">Delete</a> </li>
        @endforeach
    </ul>
</div>
@endsection
