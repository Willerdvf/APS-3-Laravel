@extends('layouts.app')

@section('content')
    <h2>Produtos</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome *</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="price">Preço *</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" required>
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <button type="submit">Cadastrar Produto</button>
    </form>

    <h3>Lista de produtos cadastrados</h3>
    @if($products->isEmpty())
        <p>Nenhum produto cadastrado até o momento.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Descrição</th>
                    <th>Criado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                        <td>{{ $product->description ?? '—' }}</td>
                        <td>{{ $product->created_at?->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
