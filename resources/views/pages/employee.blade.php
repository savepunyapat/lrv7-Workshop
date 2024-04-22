@extends('layouts.master_template')
@section('title') Employees @endsection
@section('content')
<div class="jumbotron">
    <h1 class="display-3">
        Employees
    </h1>
    <p class="lead">This is employees page</p>
</div>
<div>
    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-white">
                <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Employee Gender</th>
                <th>Employee Email</th>
                <th>Employee Phone</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <th>{{ $employee->fullname }}</th>
                <th>{{ $employee->gender }}</th>
                <th>{{ $employee->email }}</th>
                <th>{{ $employee->tel }}</th>
                <th>{{ $employee->age }}</th>
                <th>{{ $employee->address }}</th>
            </tr>
            @endforeach
        </tbody>
    </table> 
    {{ $employees->links() }}
</div>
@endsection
