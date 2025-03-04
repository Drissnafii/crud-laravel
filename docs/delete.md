### Step 3: Implement the Delete Method
Add a route for deleting products in `routes/web.php`:
```php
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
```

Add the `destroy` method in your `ProductController`:
```php
public function destroy($id)
{
    $product = Product::find($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
}
```

Add a delete button in your `resources/views/products/index.blade.php` (or wherever you list the products):
```html
<form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
```

### Summary
Now you have implemented the full CRUD operations for your products:
- **Create:** Adds a new product to the database.
- **Read:** Displays the list of products.
- **Update:** Allows editing of an existing product.
- **Delete:** Deletes a product from the database.
