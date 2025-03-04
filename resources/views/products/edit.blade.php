@extends('products.layout')

@section('content')
<div class="space-y-8 p-4 bg-mc-panel border-4 border-mc-border rounded-xl relative">
    <div class="absolute top-4 right-4 w-32 h-32">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="animate-bounce">
            <g fill="#8B4513">
                {/* Craftsman/Villager body */}
                <rect x="22" y="20" width="20" height="30" />
                {/* Arms */}
                <rect x="15" y="25" width="10" height="5" />
                <rect x="39" y="25" width="10" height="5" />
                {/* Head */}
                <rect x="22" y="10" width="20" height="10" />
            </g>
            <g fill="#DEB887">
                {/* Face details */}
                <rect x="26" y="14" width="4" height="2" />
                <rect x="34" y="14" width="4" height="2" />
            </g>
        </svg>
    </div>

    <div class="border-b-2 border-mc-border pb-4 mb-6">
        <h1 class="text-4xl font-bold text-mc-text tracking-wider">
            Edit Item in Crafting Table
        </h1>
    </div>

    @if ($errors->any())
        <div class="bg-red-600 text-mc-text p-4 rounded-lg mb-6 border-2 border-mc-border">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-mc-text mb-2">Item Name</label>
            <input
                type="text"
                name="name"
                id="name"
                value="{{ old('name', $product->name) }}"
                class="w-full px-3 py-2 bg-mc-background text-mc-text border-2 border-mc-border rounded focus:outline-none focus:ring-2 focus:ring-mc-button"
            >
        </div>

        <div class="mb-4">
            <label for="description" class="block text-mc-text mb-2">Item Description</label>
            <textarea
                name="description"
                id="description"
                rows="4"
                class="w-full px-3 py-2 bg-mc-background text-mc-text border-2 border-mc-border rounded focus:outline-none focus:ring-2 focus:ring-mc-button"
            >{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="price" class="block text-mc-text mb-2">Stack Size</label>
            <input
                type="text"
                name="price"
                id="price"
                value="{{ old('price', $product->price) }}"
                class="w-full px-3 py-2 bg-mc-background text-mc-text border-2 border-mc-border rounded focus:outline-none focus:ring-2 focus:ring-mc-button"
            >
        </div>

        <div class="flex justify-between items-center">
            <button
                type="submit"
                class="px-6 py-2 bg-mc-button text-mc-text rounded-lg hover:bg-mc-button-hover transition-colors"
            >
                Update in Crafting Table
            </button>
            <div class="text-mc-text italic">
                Crafting will modify item properties
            </div>
        </div>
    </form>
</div>

<style>
    .text-pixelated {
        font-family: 'Minecraft', monospace;
        letter-spacing: 0.5px;
    }
</style>
@endsection
