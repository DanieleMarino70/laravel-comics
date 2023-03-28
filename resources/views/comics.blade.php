@extends('layouts.app');

@section('comic-content')

<div class="comics-content">
    <div class="content">
        <div class="jumbotron">
            
        </div>
            <div class="container">
                <div class="row row-cols-lg-6 row-cols-md-4">
                    @foreach ($comics as $comic)
                    <div class="col">
                        <div class="col-content d-flex flex-column">
                            <div>
                                <img src= {{ $comic['thumb'] }} alt="" class="img-fluid">
                            </div>
                            <div>
                                <h4>{{ $comic['series'] }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</div>
@endsection