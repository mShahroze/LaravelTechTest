@extends('layouts.app')

@section('content')

<div class="flex flex-wrap">
    @foreach ($pictures as $picture)
    <div class="w-4/12 lg:w-3/12 p-2">
        <div class="rounded overflow-hidden bg-white border border-gray-200 p-4">
            <img class="w-full h-full" width="400px" height="400px" src="{{ Storage::url($picture->file_path)  }}" alt="Card image cap">
            <p class="mt-2 text-gray-500">{{ $picture->name }}</p>
            <div class="flex px-4 py-3 bg-gray-50 text-right sm:px-6 justify-between">
                <p class="mt-2 text-gray-500">{{ $picture->votes }} votes</p>
                <form action="/pictures/{{$picture->id}}/upvote" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Vote
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection