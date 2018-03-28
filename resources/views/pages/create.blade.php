@extends('layouts.app')

@section('content')
    <form action="{{ route('post-create-announce') }}" method="POST">
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <fieldset>
            <legend>Add announce</legend>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="body-text">Body Text</label>
                <textarea class="form-control" id="body-text" rows="3" name="body" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
@stop

@section('js')

@stop