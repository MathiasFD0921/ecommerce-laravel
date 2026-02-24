<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
    <title>TechNext Store</title>
</head>
<body class="bg-[#f5f5f7] text-[#1d1d1f]">
    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Tech<span class="text-blue-600">Next</span></h1>
            <a href="{{ route('cart') }}" class="bg-black text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-gray-800 transition shadow-lg">
                🛒 Carrito ({{ is_array(session('cart')) ? count(session('cart')) : 0 }})
            </a>
        </div>
    </nav>

    <header class="relative bg-black h-[400px] flex items-center overflow-hidden">
        <div class="absolute inset-0 opacity-50">
            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?w=1600" class="w-full h-full object-cover">
        </div>
        <div class="relative max-w-7xl mx-auto px-6 w-full text-white">
            <h2 class="text-6xl font-extrabold tracking-tight">El futuro es hoy.</h2>
            <p class="text-xl text-gray-300 mt-2">Descubre la nueva línea de productos TechNext.</p>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-16">
        <h3 class="text-3xl font-bold mb-10">Nuestras Novedades</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($products as $product)
                <div class="group bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-gray-100 flex flex-col">
                    <img src="{{ $product->image }}" class="h-64 w-full object-cover">
                    <div class="p-8 flex flex-col grow text-center">
                        <h4 class="text-xl font-bold mb-2">{{ $product->name }}</h4>
                        <p class="text-sm text-gray-500 mb-6 line-clamp-2">{{ $product->description }}</p>
                        <div class="mt-auto">
                            <span class="block text-2xl font-semibold mb-4">${{ number_format($product->price, 2) }}</span>
                            <a href="{{ route('add.to.cart', $product->id) }}" class="w-full block bg-blue-600 text-white py-3 rounded-2xl font-bold hover:bg-blue-700 transition">
                                Añadir al carrito
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20 bg-white/50 rounded-3xl border-2 border-dashed border-gray-300">
                    <p class="text-gray-400 text-lg">No hay productos disponibles actualmente.</p>
                    <p class="text-sm font-mono mt-2 text-blue-500">Tip: Ejecuta php artisan db:seed</p>
                </div>
            @endforelse
        </div>
    </main>
</body>
</html>