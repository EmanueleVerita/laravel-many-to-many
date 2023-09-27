@extends('layouts.app')

@section('page-title', 'All Tags')

@section('main-content')
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <th scope="row">
                                {{ $tag->id }}
                            </th>
                            <td>
                                {{ $tag->title }}
                            </td>
                            <td>
                                {{ $tag->slug }}
                            </td>
                            <td>
                                <a href="{{ route('admin.tags.show' , ['tags' => $tag->id]) }}" class="btn btn-primary">
                                    Vedi
                                </a>
                                <a href="{{ route('admin.tags.show' , ['tags' => $tag->id]) }}" class="btn btn-warning">
                                    Modifica
                                </a>

                                <form action="{{ route('admin.tags.destroy' , ['tags' => $tag->id]) }}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        Elimina
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection