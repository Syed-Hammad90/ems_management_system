@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lead</h1>
    <form action="{{ route('leads.update', $lead) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client_name">Client Name</label>
            <input type="text" name="client_name" class="form-control" value="{{ $lead->client_name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $lead->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" value="{{ $lead->phone_number }}" required>
        </div>
        <div class="form-group">
            <label for="product">Product</label>
            <input type="text" name="product" class="form-control" value="{{ $lead->product }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" class="form-control" value="{{ $lead->amount }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $lead->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Lead</button>
    </form>
</div>
@endsection