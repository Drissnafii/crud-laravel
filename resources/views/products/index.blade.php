@extends('products.layout')

@section('content')
<div class="space-y-8 p-4 bg-mc-panel border-4 border-mc-border rounded-xl">
    <div class="flex justify-between items-center mb-6 border-b-2 border-mc-border pb-4">
        <h2 class="text-4xl font-bold text-mc-text tracking-wider">
            Inventory Management
        </h2>
        <a href="{{ route('products.create') }}" class="px-4 py-2 bg-mc-button text-mc-text rounded-lg hover:bg-mc-button-hover transition-colors flex items-center space-x-2">
            <span>+ Add Item</span>
        </a>
    </div>

    <div class="overflow-y-auto max-h-[500px] border-4 border-mc-border rounded">
        <table class="w-full">
            <thead class="bg-mc-button text-mc-text sticky top-0 z-10">
                <tr>
                    @php
                        $headers = ['ID', 'Item Name', 'Stack Size', 'Description', 'Actions'];
                    @endphp
                    @foreach($headers as $header)
                        <th class="px-4 py-3 text-left border-2 border-mc-border">
                            {{ $header }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="even:bg-mc-background/30 odd:bg-mc-panel/30 hover:bg-mc-button/20 transition-colors">
                    <td class="px-4 py-3 border-2 border-mc-border">
                        <span class="text-pixelated">#{{ $product->id }}</span>
                    </td>
                    <td class="px-4 py-3 border-2 border-mc-border">
                        {{ $product->name }}
                    </td>
                    <td class="px-4 py-3 border-2 border-mc-border">
                        {{ $product->price }}
                    </td>
                    <td class="px-4 py-3 border-2 border-mc-border">
                        {{ Str::limit($product->description, 50) }}
                    </td>
                    <td class="px-4 py-3 border-2 border-mc-border">
                        <div class="flex space-x-2">
                            <a href="{{ route('products.show', $product->id) }}" class="bg-green-600 px-2 py-1 rounded hover:bg-green-700 transition-colors">
                                View
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-600 px-2 py-1 rounded hover:bg-yellow-700 transition-colors">
                                Edit
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 px-2 py-1 rounded hover:bg-red-700 transition-colors">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .text-pixelated {
        font-family: 'Minecraft', monospace;
        letter-spacing: 0.5px;
    }
</style>
@endsection
