<?php

namespace Database\Factories;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'harga_total'=>fake()->unique->numberBetween(100000,99999900),
            'produk_id'=>Produk::all()->random()->id,
            //
        ];

    }
}
