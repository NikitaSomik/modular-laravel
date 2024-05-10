<?php

declare(strict_types=1);

namespace Modules\Product\Database\Factories;

use Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'price_in_cents' => random_int(100, 1000),
            'stock' => random_int(1, 10),
        ];
    }
}
