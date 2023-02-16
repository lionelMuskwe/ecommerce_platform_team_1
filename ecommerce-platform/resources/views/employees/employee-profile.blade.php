@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $employee->name }}'s Profile</h1>
        <p>Email: {{ $employee->email }}</p>
        <p>Phone: {{ $employee->phone }}</p>
        <p>Address: {{ $employee->address }}</p>
        <p>Role: {{ $employee->role }}</p>
    </div>
@endsection
