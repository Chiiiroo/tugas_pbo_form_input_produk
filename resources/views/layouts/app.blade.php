<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern TechStore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-tighter">IT VOKASI UB SHOP</h1>
            <div class="space-x-6">
                <a href="{{ route('products.index') }}" class="hover:text-blue-600 transition">Catalog</a>
                <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">Add Product</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">
        @yield('content')
    </main>
</body>
</html>
