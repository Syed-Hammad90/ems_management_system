@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lead Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $lead->client_name }}
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $lead->email }}</p>
            <p><strong>Phone Number:</strong> {{ $lead->phone_number }}</p>
            <p><strong>Product:</strong> {{ $lead->product }}</p>
            <p><strong>Amount:</strong> {{ $lead->amount }}</p>
            <p><strong>Description:</strong> {{ $lead->description }}</p>
            <a href="{{ route('leads.edit', $lead) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('leads.destroy', $lead) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection