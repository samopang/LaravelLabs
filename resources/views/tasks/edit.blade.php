@extends('layouts.app')

@section('content')
  <div>
    <h2>Task Editer</h2>
    @if ($task)
    <div>
      {!! Form::open([
        'action' => [
          'TasksController@update', $task->id
        ],
        'method' => 'POST',
        'class'  => 'form-horizontal'
      ]) !!}
      {{ Form::text('name', $task->name, [
        'class' => 'form-control'
      ]) }}
      {{ Form::hidden('_method', 'PUT') }}
      {{ Form::hidden('id', $task->id) }}
      {{ Form::submit('Update', [
        'class' => 'btn btn-primary'
      ]) }}
      {!! Form::close() !!}
    </div>
    @else
    <p>Not found.</p>
    @endif
    <a href="/tasks" class="btn btn-secondary">Cancel</a>
  </div>
@endsection