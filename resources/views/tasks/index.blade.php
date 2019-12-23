@extends('layouts.app')
<!-- TODO: Existing Tasks -->
@section('content')
    @include('tasks.add')
    <h1>{{ $title }}</h1>
    <div>
        @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
            <li>
                <a href="/tasks/{{ $task->id }}/edit">{{ $task->name }}</a>
                <br/>
                <small>{{ $task->created_at }}</small>
                {!! Form::open([
                    'action' => [
                        'TasksController@destroy',
                        $task->id
                    ],
                    'method' => 'POST',
                    'class' => 'float-right'
                ]) !!}
                {{ csrf_field() }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', [
                    'class' => 'btn btn-danger'
                ]) }}
                {!! Form::close() !!}
            </li>
            @endforeach
        </ul>
        @else
        <p>No Tasks Found.</p>
        @endif
    </div>
@endsection