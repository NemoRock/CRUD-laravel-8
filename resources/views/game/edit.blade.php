@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать игру</h1>
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
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('game.update', $game->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="name" value="{{$game->name}}" class="form-control" placeholder="Название">
                    </div>
                    <div class="form-group">
                        <input type="text" name="studio_developer" value="{{$game->studio_developer}}" class="form-control" placeholder="Студия разработчик">
                    </div>

                    <div class="form-group">
                        <select class="genres" name="genres[]" multiple="multiple"  data-placeholder="Выберите жанр"  style="width: 100%;">
                            @foreach( $genres as $genre)
                                @if(in_array($genre->id, $genreGame, false))
                                    <option value="{{$genre->id}}" selected>{{$genre->genre}}</option>
                                @else
                                    <option value="{{$genre->id}}" >{{$genre->genre}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">

                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
