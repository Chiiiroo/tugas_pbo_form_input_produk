@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
    <h2 class="text-2xl font-bold mb-6">Add New Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-600">Product Name</label>
            <input type="text" name="name" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600">Price</label>
            <input type="number" name="price" class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600">Product Image</label>
            <input type="file" name="image" class="w-full mt-1 p-3 border rounded-xl">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-xl font-semibold hover:bg-blue-700 transition">Save Product</button>
    </form>
</div>
@endsection

