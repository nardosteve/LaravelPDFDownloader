@extends('layouts.frontend-layout')

@section('content')

<div>
  <h1 class="text-center"><a href="{{ route('user-form') }}">< Back</a></h1>
</div>

<table class="table table-striped">
  <thead>
    <th scope="col">ID</th>
    <th scope="col">Full Name</th>
    <th scope="col">Address</th>
    <th scope="col">City</th>
    <th scope="col">Zip Code</th>
    <th scope="col">Created At</th>
    <th scope="col">Updated At</th>
    <th scope="col">Download</th>
  </thead>
  <tbody>
    @foreach($userData as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->full_name}}</td>
      <td>{{$user->street_address}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->zip_code}}</td>
      <td>{{$user->created_at }}</td>
      <td>{{$user->updated_at }}</td>
       <td><a href="{{ route('downloadPDF', $user->id) }}">Download PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection