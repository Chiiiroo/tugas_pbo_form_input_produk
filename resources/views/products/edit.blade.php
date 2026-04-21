@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
    <h2 class="text-2xl font-bold mb-6">Edit Product: {{ $product->name }}</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT') <div>
            <label class="block text-sm font-medium text-gray-600">Product Name</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-600">Price</label>
            <input type="number" name="price" value="{{ old('price', $product->price) }}" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-600 mb-2">Current Image</label>
            <img src="{{ asset('storage/' . $product->image) }}" class="w-32 h-32 object-cover rounded-xl border mb-2">

            <label class="block text-sm font-medium text-gray-600">Change Image (Leave blank if no need to edit)</label>
            <input type="file" name="image" class="w-full mt-1 p-3 border rounded-xl">
        </div>

        <div class="flex gap-4">
            <button type="submit" class="flex-1 bg-blue-600 text-white p-3 rounded-xl font-semibold hover:bg-blue-700 transition">Update Product</button>
            <a href="{{ route('products.index') }}" class="flex-1 text-center bg-gray-100 p-3 rounded-xl font-semibold hover:bg-gray-200 transition">Cancel</a>
        </div>
    </form>
</div>
@endsection
