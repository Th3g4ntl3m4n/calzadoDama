<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->word;
        return [

            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'Descripcion' => $this->faker->text(),
            'Precio' => $this->faker->randomFloat(2, 10, 100),
            'Stock' => $this->faker->numberBetween(0, 100)
        ];
    }
}

