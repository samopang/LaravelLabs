<!-- Bootstrap Boilerplate... -->
<div class="panel-task">
    <!-- Display Validation Errors -->
    @include('messages.errors')

    <!-- New Task Form -->
    {!! Form::open([
        'action' => 'TasksController@store',
        'method' => 'POST',
        'class'  => 'form-horizontal'
    ]) !!}
    {{-- csrf Protection: Adding The CSRF Token To A Form --}}
        {{ csrf_field() }}  

        <!-- Task Name -->
        <div class="form-group col-sm-6">
            {{ Form::text('name', '', [
                'class' => 'form-control',
                'placeholder' => 'add a new task here'
            ]) }}
        </div>

        <!-- Add Task Button -->
        <div class="form-group col-sm-offset-3 col-sm-6">
            <i class="fa fa-plus"></i>
            {{ Form::submit('Add Task', [
                'class' => 'btn btn-primary'
            ]) }}
        </div>
    </form>
    {!! Form::close() !!}
</div>