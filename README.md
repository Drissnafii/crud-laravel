#Those are the steps...

1. php artisan make:migration create_products_table --create=products
-> than i should run the migration by "php artisan migrate"

2. php artisan make:model Product

3. php artisan make:controller ProductController --resource --model=Product

public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
    ]);

    Product::create($request->all());

    return redirect()->route('products.index')
                     ->with('success', 'تم إنشاء المنتج بنجاح.');
}
