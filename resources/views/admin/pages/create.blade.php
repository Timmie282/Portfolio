@extends('layouts.app')

@section('content')

    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add item
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label>Naam pagina:</label>
                                    <input type="text" name="titel" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Slug pagina:</label>
                                    <input type="text" name="Slug" class="form-control">
                                </div>
                                <br>
                                <br>
                            </div>

                            <label>Welke pagina:</label><br>
                            <select name="page_format" class="form-control">
                                <option value="home">Home</option>
                                <option value="about">About</option>
                                <option value="projecten">Projecten</option>
                                <option value="contact">Contact</option>
                            </select>
                            <br>
                            <label>Image:</label><br>
                            <input name="image" type="file"><br>
                            <label>Pagina nummer:</label><br>

                            <select name="nav_format" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <br>

                            <label>Content pagina:</label>
                            <textarea style="height: 200px;" name="content_inhoud"></textarea>
                            <input type="submit" name="submit" class="form-control"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

