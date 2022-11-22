@extends('layouts.frontend-layout')

@section('content')

    <div class="mb-5">
        <h1 class="text-center">Download PDF <a href="{{ route('user-data') }}">All Data</a></h1>
        <hr>
    </div>

    <form method="POST" action="{{ route('saveuserdata.store') }}" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="row mb-3">
            <div class="col-6">
                <label for="full_name_id" class="control-label">Full Name</label>
                <input type="text" class="form-control" id="full_name_id" name="full_name" placeholder="John Deer">
            </div>

            <div class="col-6">
                <label for="street1_id" class="control-label">Street Address 1</label>
                <input type="text" class="form-control" id="street1_id" name="street_address" placeholder="Street address, P.O. box, company name, c/o">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-6">
                <label for="city_id" class="control-label">City</label>
                <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
            </div>

            <div class="col-6">
                <label for="zip_id" class="control-label">Zip Code</label>
                <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
            </div>
        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary">Save!</button>
        </div>
    </form>

@endsection