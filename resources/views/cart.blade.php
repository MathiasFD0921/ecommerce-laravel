<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tu Bolsa | TechNext</title>
</head>
<body class="bg-[#f5f5f7] p-10 font-sans text-[#1d1d1f]">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-end mb-10">
            <h1 class="text-4xl font-bold tracking-tight">Tu Bolsa.</h1>
            <a href="{{ route('shop') }}" class="text-blue-600 font-semibold hover:underline">Seguir comprando</a>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-200">
            @if(session('cart'))
                @php $total = 0 @endphp
                <div class="space-y-6">
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <div class="flex items-center justify-between border-b border-gray-100 pb-6">
                            <div class="flex items-center gap-6">
                                <img src="{{ $details['image'] }}" class="w-24 h-24 object-cover rounded-2xl">
                                <div>
                                    <h3 class="text-lg font-bold">{{ $details['name'] }}</h3>
                                    <p class="text-gray-500 text-sm">Cantidad: {{ $details['quantity'] }}</p>
                                </div>
                            </div>
                            <span class="text-xl font-semibold">${{ number_format($details['price'] * $details['quantity'], 2) }}</span>
                        </div>
                    @endforeach
                    <div class="pt-6 flex justify-between items-center text-2xl font-bold">
                        <span>Total:</span>
                        <span class="text-blue-600">${{ number_format($total, 2) }}</span>
                    </div>
                    <button class="w-full bg-black text-white py-4 rounded-2xl font-bold text-lg mt-6 hover:bg-gray-900 transition shadow-lg">Finalizar Compra</button>
                </div>
            @else
                <div class="text-center py-20">
                    <p class="text-gray-400 text-lg italic">Tu carrito está vacío.</p>
                </div>
            @endif
        </div>
    </div>
</body>
</html>