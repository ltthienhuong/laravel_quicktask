<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <form action="{{url('task/'.$task->id) }} " method="POST">
            {{csrf_field() }}
            {{ method_field('PATCH') }}
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" value= "{{$task->name}}">
                </div>
            </div>
            
            <!-- edit Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-warning">
                        <i class="fa fa-plus"></i> Update
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Tasks -->
@endsection