@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-3">
                                Pagina's bewerken
                            </div>
                            <div class="col-6"></div>
                            <div class="col-3">
                                <a href="{{ route('admin.pages.create') }}" class="float-right">
                                    <button type="button" class="btn btn-primary btn-sm">Create Pagina</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">pagina</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->pages_title }}</td>
                                    <td>{{ $page->pages_slug }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.edit', $page->pages_id) }}" class="float-left">
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                        </a>
                                        <a href="{{ route('admin.pages.show', $page->pages_id) }}" class="float-left">
                                            <button type="button" class="btn btn-success btn-sm">Show</button>
                                        </a>
                                        <form action="{{ route('admin.pages.destroy', $page->pages_id) }}" method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

