#Those are the steps...

1. php artisan make:migration create_products_table --create=products
-> than i should run the migration by "php artisan migrate"

2. php artisan make:model Product

3. php artisan make:controller ProductController --resource --model=Product

4. php artisan make:seeder ProductSeeder

than i should go to the new seeder and answert some data in the run () methode like this =>

```php
public function run(): void
{
    \App\Models\Product::create([
        'name' => 'Laptop de Gaming Super Rapide',
        'price' => 1500,
        'description' => 'Un ordinateur portable puissant pour les jeux et le travail.',
    ]);

    \App\Models\Product::create([
        'name' => 'Écran 4K Ultra HD',
        'price' => 350,
        'description' => 'Un écran magnifique pour une expérience visuelle immersive.',
    ]);

    // ... Vous pouvez ajouter d'autres Product::create(...) ici ...
}
```
or 
5. php artisan make:factory ProductFactory --model=Product

```php
<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Définissez ici les attributs et leurs valeurs fictives
        ];
    }
}
```

THAN => => Définir les attributs fictifs dans definition() - Utiliser Faker (Leçon n°3c :  Le générateur de réalité fictive)

````php
public function definition(): array
{
    return [
        'name' => $this->faker->sentence(3), // Génère une phrase aléatoire de 3 mots pour le nom
        'price' => $this->faker->randomFloat(2, 10, 1000), // Génère un prix aléatoire entre 10 et 1000, avec 2 décimales
        'description' => $this->faker->paragraph(3), // Génère un paragraphe aléatoire de 3 phrases pour la description
    ];
}

````
