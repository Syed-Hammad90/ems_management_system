@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leads</h1>
    <a href="{{ route('leads.create') }}" class="btn btn-primary">Add New Lead</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
                <tr>
                    <td>{{ $lead->client_name }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>{{ $lead->phone_number }}</td>
                    <td>{{ $lead->product }}</td>
                    <td>{{ $lead->amount }}</td>
                    <td>
                        <a href="{{ route('leads.show', $lead) }}" class="btn btn-info">View</a>
                        <a href="{{ route('leads.edit', $lead) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('leads.destroy', $lead) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection