@extends('layouts.app')

@section('content')
<h2 class="text-3xl font-bold mb-8">All Products</h2>
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($products as $product)
    <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300">
        <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-48 object-cover rounded-xl mb-4">
        <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
        <p class="text-blue-600 font-bold mb-4">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

        <div class="flex gap-2">
            <a href="{{ route('products.edit', $product->id) }}" class="flex-1 text-center bg-gray-100 py-2 rounded-lg hover:bg-gray-200">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="flex-1">
                @csrf @method('DELETE')
                <button type="submit" class="w-full bg-red-50 text-red-600 py-2 rounded-lg hover:bg-red-100" onclick="return confirm('Yakin hapus?')">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
