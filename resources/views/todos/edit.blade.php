@extends('todos.layout')
@section('content')

    <h1 class="text-2xl">Update Todo </h1>
    <x-alert />
    <form method="post" action={{ route('todo.update', $todo->id) }} class="py-5">

        @csrf
        @method('patch')
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" value="{{ $todo->title }}" />
        </div>
        <div class="py-1">
            <textarea placeholder="Description" name="description"
                class="p-2 rounded border">{{ $todo->description }}</textarea>
        </div>
        <div class="py-1">
            <input type="text" name="assigned_to" class="py-2 px-2 border rounded" placeholder="Assigned_to"
                value="{{ $todo->assigned_to }}" />
        </div>
        <div class="py-1">
            <input type="text" name="priority" class="py-2 px-2 border rounded" value="{{ $todo->priority }}"
                placeholder="Priority" />
        </div>

        <div class="py-1">
            <input type="text" name="duration" class="py-2 px-2 border rounded" value="{{ $todo->duration }} "
                placeholder="Duration" />
        </div>
        <div class="py-1">

            <input type="submit" value="Update" class="p-2 border rounded" />
        </div>
    </form>

    <a href="/" class="m-5 py-1 px-1 border bg-blue-400 curser-pointer rounded text-white">
        Back
    </a>

@endsection
