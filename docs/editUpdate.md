### Step 1: Implement the Edit Method
Add a route for editing products in `routes/web.php`:
```php
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
```

Add the `edit` method in your `ProductController`:
```php
public function edit($id)
{
    $product = Product::find($id);
    return view('products.edit', compact('product'));
}
```

Create a view file `resources/views/products/edit.blade.php`:
```html
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $product->name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" value="{{ old('price', $product->price) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
```

### Step 2: Implement the Update Method
Add a route for updating products in `routes/web.php`:
```php
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
```

Add the `update` method in your `ProductController`:
```php
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'price' => 'required|numeric',
    ]);

    $product = Product::find($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->save();

    return redirect()->route('products.index')->with('success', 'Product updated successfully!');
}
```
