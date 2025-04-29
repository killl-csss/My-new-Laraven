@extends ('layouts.master')
@section('content')
<div class="row mt-2">
    <div class="col-md-12">
        <h1> Products Page</h1>
        <p>Welcome, {{ auth()->user()->name }} (Role: {{ auth()->user()->role }})</p>
        <a href="{{ route('products.create') }}" class="btn btn-primary">New Product</a>
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
        <div class="mt-2">
            @if(session(key:'success'))
            <p>{{ session(key:'success') }}</p>
            @endif
        </div>
    </div>
</div>
<div class="row mt-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->qty }}</td>
        <td class="text-center">
            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="btn btn-info">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

    </table>
</div>
</div>
@endsection
