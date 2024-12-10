@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">
            @auth
                Welcome to Your Dashboard, {{ Auth::user()->name }}!
            @else
                Welcome to the Dashboard!
            @endauth
        </h1>

        <!-- Quick Stats Section -->
        <div class="row mb-4">
            <!-- Total Products Card -->
            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h3 class="card-title">Total Products</h3>
                        <p class="card-text">{{ \App\Models\Product::count() }}</p>
                    </div>
                </div>
            </div>

            <!-- Total Sales Card -->
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h3 class="card-title">Total Sales</h3>
                        <p class="card-text">{{ $totalSales ?? 'N/A' }}</p> <!-- Placeholder for total sales -->
                    </div>
                </div>
            </div>

            <!-- New Orders Card -->
            <div class="col-md-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h3 class="card-title">New Orders</h3>
                        <p class="card-text">{{ \App\Models\Order::where('status', 'new')->count() }}</p> <!-- New orders count -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest Products Section -->
        <div class="mb-4">
            <h3>Latest Products</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\Product::latest()->take(5)->get() as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Manage Products Button -->
        <a href="{{ route('products.index') }}" class="btn btn-primary">Manage Products</a>
    </div>
@endsection
