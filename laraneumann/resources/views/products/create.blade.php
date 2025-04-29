@extends ('layouts.master')
@section('content')
<div class="row mt-2">
    <div class="col-md-12">
    <h1> Create Product </h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Product</a>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-8">
        <h2>Create Product</h2>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Enter Product Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group mt-2">
                <label for="description">Enter Product Price</label>
                <textarea name="description" class="form-control" id="description"></textarea>
            </div>
            <div class="form-group mt-2">
                <label for="qty">Enter HASH</label>
                <input type="number" name="qty" class="form-control" id="qty" required>
            </div>
            <div class="form-group mt-2">
                <label for="price"></label>
                <input type="number" step="0.01" name="price" class="form-control" id="price" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Save Entry</button>
        </form>
    </div>
</div>
@endsection
