@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl ">{{ $todo->title }} </h1>
    </div>

    <div class="py-1">
        Description: {{ $todo->description }}
    </div>
    <div class="py-1">
        AssignedTo: {{ $todo->assigned_to }}

    </div>

    <div class="py-1">

        Date: {{ $todo->updated_at }}

    </div>

    <div class="py-1">
        Priority: {{ $todo->priority }} </div>

    <div class="py-1">
        Duration: {{ $todo->duration }} </div>






    <a href="/" class="m-5 py-1 px-1 border bg-blue-400 curser-pointer rounded text-white">
        Back
    </a>
@endsection
