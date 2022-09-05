@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Поиск по жанру</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">
                            <a href="{{ route('main.index') }}">Главная страница</a>
                        </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('genre.search', (request()->genre->id)??0) }}" method="get" >
            <!-- Small boxes (Stat box) -->
                @csrf
            <div class="row">

                    <div class="form-group d-flex flex-row p-2">
                        <div class="form-group">
                            <select class="genres"  name="genre"  data-placeholder="Выберите жанр" style="width: 100%;">
                                <option disabled selected value></option>

                                @foreach( $genres as $genre)
                                    <option  value="{{($genre->id)}}"  >{{$genre->genre}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary ml-2" value="Поиск">
                        </div>
                    </div>
            </div>

            @if(count ($searchGames))

                <p>Результаты поиска: </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Студия разработчик</th>
                                    <th>Жанр</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($searchGames as $game)
                                    <tr>
                                        <td>{{$game->id}}</td>
                                        <td><a href="{{route('game.show', $game->id)}}">{{$game->name}}</a></td>
                                        <td>{{$game->studio_developer}}</td>
                                        <td>{{$game->genres()->pluck('genre')->implode(', ')}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    {{ $searchGames->appends(Request::all())->links() }}
                </div>
            </div>
            @endif
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
