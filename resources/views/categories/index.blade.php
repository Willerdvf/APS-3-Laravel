@extends('layouts.app')

@section('content')
    <h2>Categorias</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome *</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <button type="submit">Cadastrar Categoria</button>
    </form>

    <h3>Lista de categorias cadastradas</h3>
    @if($categories->isEmpty())
        <p>Nenhuma categoria cadastrada até o momento.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Criado em</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description ?? '—' }}</td>
                        <td>{{ $category->created_at?->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
