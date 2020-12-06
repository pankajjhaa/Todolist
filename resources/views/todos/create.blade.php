@extends('todos.layout')

@section('content')

    <h1 class="text-2xl">What do you need to do </h1>
    <x-alert />
    <form method="post" action="{{ route('todo.store') }}" class="py-5">

        @csrf
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title" />
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="Description"></textarea>
        </div>
        <div class="py-1">
            <input type="text" name="assigned_to" class="py-2 px-2 border rounded" placeholder="Assigned_to" />
        </div>
        <div class="py-1">
            <input type="text" name="priority" class="py-2 px-2 border rounded" placeholder="Priority" />
        </div>

        <div class="py-1">
            <input type="text" name="duration" class="py-2 px-2 border rounded" placeholder="Duration" />
        </div>


        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded" />
        </div>
    </form>

    <a href="/" class="m-5 py-1 px-1 border bg-blue-400 curser-pointer rounded text-white">
        Back
    </a>
@endsection
