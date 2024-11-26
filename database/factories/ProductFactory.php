<?php

namespace Database\Factories;

use App\Enums\ProductStatusEnum;
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
        $article = $this->faker->sentence(rand(3, 8), true);
        $name = $this->faker->name();
        $status = $this->faker->randomElement(ProductStatusEnum::cases());
        $json_data = json_encode([
            'Color' => $this->faker->hexColor(),
            'Size' => $this->faker->numberBetween(5, 15),
            'Shape' => $this->faker->word(),
            'Texture' => $this->faker->word(),
        ]);
        $createdAt = $this->faker->dateTimeBetween('-3 months',
            '-2 months');

        return [
            'article' => $article,
            'name' => $name,
            'status' => $status,
            'data' => $json_data,
            'category_id' => rand(1, 10),
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
        ];
    }
}
