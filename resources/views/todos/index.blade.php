@extends('todos.layout')
@section('content')


    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All Your Todos</h1>

        <a href="/todos/create" class="mx-5  py-2 text-blue-700 curser-pointer rounded text-white">
            <span class="fas fa-plus-circle " />
        </a>

    </div>


    <ul class="my-5">
        <x-alert />
        @if ($todos->count() > 0)


            @foreach ($todos as $todo)
                <li class="flex justify-between p-2">

                    <div>
                        @include('todos.completeButton')

                    </div>
                    @if ($todo->completed)
                        <p class="line-through">{{ $todo->title }}</p>
                    @else
                        <a> {{ $todo->title }}</a>
                    @endif

                    <div>

                        <a href="{{ route('todo.show', $todo->id) }}"">
                                                                <span class=" fas fa-eye px-2 " />
                                                            </a>
                                                            
                                                            <a href=" {{ '/todos/' . $todo->id . '/edit' }}"
                            class="mx-5 py-1 px-1 text-orange-600 cursor-pointer rounded text-white">
                            <span class="fas fa-pen text-orange-400 px-2 " />
                        </a>
                        <a href="{{ route('pdfview', ['todo' => $todo->id, 'download' => 'pdf']) }}"
                            class="mx-5 text-voilet-400 py-2  curser-pointer ">

                            <i class="fa fa-download" aria-hidden="true"></i>
                        </a>

                        <span class="fas fa-times text-red-700 px-2 cursor-pointer "
                            onClick="event.preventDefault();
                                                                                                                                                                                                                                                                                                if(confirm('Are you really want to delete')){
                                                                                                                                                                                                                                                                                                    document.getElementById('form-delete-{{ $todo->id }}').submit() }" />
                    </div>


                    <form style="display: none" id="{{ 'form-delete-' . $todo->id }}" method="post"
                        action="{{ route('todo.delete', $todo->id) }}">
                        @csrf
                        @method('delete')
                    </form>



                </li>
            @endforeach

        @else
            <p> No task available plz create one</p>
        @endif
    </ul>

@endsection
