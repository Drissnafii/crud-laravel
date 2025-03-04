@extends('products.layout')
@section('content')
    <h2>List des produits</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success">إضافة منتج جديد</a>
    <table class="table table-bordered">
        <tr>
            <th>Numero</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">عرض</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">تعديل</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
