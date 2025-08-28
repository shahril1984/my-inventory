@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Show') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value ="{{ $vehicle->car_model }}"class="form-control" id="name" name="name" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" value ="{{ $vehicle->quantities }}" class="form-control" id="quantity" name="quantity" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="no_plate" class="form-label">No Plate</label>
                            <input type="text" value ="{{ $vehicle->no-plate }}" class="form-control" id="no-plate" name="no_plate" readonly>
                        </div>
                         
                                        <a href="{{ route ('vehicles.index') }}" 
                                        class="btn btn-secondary">                                       
                                         back to Vehicles Index
                                    </a>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection