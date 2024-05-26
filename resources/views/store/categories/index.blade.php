@extends('store.dashbord.layouts.template')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Categories</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
        @if (session('success_message'))
            <div class="alert alert-success">{{ session('success_message') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->nom }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">View</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
