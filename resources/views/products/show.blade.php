<h1>Product Details</h1>
<p><strong>Name:</strong> {{ $product->name }}</p>
<p><strong>Price:</strong> ${{ $product->price }}</p>
<a href="{{ route('products.index') }}">Back to Products</a>
<a href="{{ route('products.edit', $product->id) }}">Edit Product</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Product</button>
</form>
