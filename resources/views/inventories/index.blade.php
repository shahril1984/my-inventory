
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventories Index') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->id }}</td>
                                    <td>{{ $inventory->name }}</td>
                                    <td>{{ $inventory->quantities }}</td>  
                                    <td>{{ $inventory->user->name }}- {{ $inventory->user->email }}</td>
                                    <td>
                                        <a href="{{route('inventories.show', $inventory) }}" 
                                        class="btn btn-info btn-sm">                                       
                                         show
                                    </a>
                                        <a href="{{ route ('inventories.edit', $inventory) }}" 
                                        class="btn btn-info btn-sm">                                       
                                         edit
                                    </a>
                                    <a href="{{route('inventories.destroy', $inventory) }}" 
                                        class="btn btn-info btn-sm"     
                                        onclick="confirm('Are you sure you want to delete this inventory?') || event.preventDefault();">                                 
                                         delete
                                    </a>
                                    </td>
                                    <td>
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
