
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicles Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>No Plate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->car_model }}</td>
                                    <td>{{ $vehicle->quantities }}</td> 
                                    <td>{{ $vehicle->no_plate }}</td> 
                                    <td>
                                     <a href="{{route('vehicles.show', $vehicle) }}" 
                                        class="btn btn-info btn-sm">                                       
                                         show
                                    </a>
                                        <a href="{{ route ('vehicles.edit', $vehicle) }}" 
                                        class="btn btn-info btn-sm">                                       
                                         edit
                                    </a>
                                    <a href="{{route('vehicles.destroy', $vehicle) }}" 
                                        class="btn btn-info btn-sm"     
                                        onclick="confirm('Are you sure you want to delete this vehicle?') || event.preventDefault();">                                 
                                         delete
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
