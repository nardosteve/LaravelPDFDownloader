@extends('layouts.frontend-layout')

@section('content')

<table class="table table-bordered">
      <thead>
        <th scope="col">ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Zip Code</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
      </thead>
      
      <tbody>
        <tr>
          <td>{{ $pdfData->id }}</td>
          <td>{{ $pdfData->full_name }}</td>
          <td>{{ $pdfData->street_address }}</td>
          <td>{{ $pdfData->city }}</td>
          <td>{{ $pdfData->zip_code }}</td>
          <td>{{ $pdfData->created_at }}</td>
          <td>{{ $pdfData->updated_at }}</td>
        </tr>
      </tbody>
</table>

@endsection