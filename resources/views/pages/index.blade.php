@extends('layouts.app')

{{--{{ dd($data) }}--}}

@section('content')
    @foreach($data as $announce)
        <div class="card announce">
            <div class="card-body">
                <h4 class="card-title"><a href="{{ route('get-announce', $announce['id']) }}">{{ $announce['title'] }}</a></h4>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">{{ $announce['body'] }}</p>
            </div>
        </div>
    @endforeach
@stop

@section('js')
    <script>
        console.log('from index console');
    </script>
@stop

