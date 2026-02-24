<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Asegúrate de que esta línea esté aquí

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tus productos
        Product::create([
            'name' => 'Auriculares Nebula Pro',
            'description' => 'Cancelación de ruido activa y sonido espacial de 360 grados para una inmersión total.',
            'price' => 249.99,
            'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500&q=80'
        ]);

        Product::create([
            'name' => 'Reloj Horizon GT',
            'description' => 'Diseño minimalista con batería de 14 días y monitoreo de salud avanzado.',
            'price' => 199.50,
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&q=80'
        ]);

        Product::create([
            'name' => 'Cámara Lumix S5',
            'description' => 'Captura tus mejores momentos con una resolución 4K profesional y enfoque ultra rápido.',
            'price' => 899.00,
            'image' => 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=500&q=80'
        ]);

        Product::create([
            'name' => 'Teclado Mecánico Neon',
            'description' => 'Switches rojos para una escritura suave y retroiluminación RGB personalizable.',
            'price' => 120.00,
            'image' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=500&q=80'
        ]);
    }
}