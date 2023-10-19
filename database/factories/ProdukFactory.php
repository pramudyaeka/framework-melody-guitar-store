<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama_produk'=>fake()->randomElement(['Yamaha','Ibanez','Gibson','Scorpion','Fender','Cort']),
            'kategori_produk'=>fake()->randomElement(['Akustik','Elektrik']),
            'stok'=>fake()->unique->numberBetween(1,100),
            'harga'=>fake()->unique->numberBetween(100000,99999900),


        ];
    }
}
