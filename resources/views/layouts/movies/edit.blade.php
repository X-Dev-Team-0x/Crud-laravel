@extends('layouts.app')

@section('title','Create')

@section('content')


<!-- component -->
<div class="relative flex  text-gray-800 antialiased flex-col justify-center overflow-hidden bg-white py-6 sm:py-12">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
      <span class="text-2xl font-light ">Edit movies</span>
      <div class="mt-4 bg-white shadow-md rounded-lg text-left">
        <div class="h-2 bg-purple-400 rounded-t-md"></div>
        <div class="px-8 py-6 ">
            <form action="{{ route('upd4te',['id' => $movie->id]) }}" method="POST">

            @csrf
          <label class="block font-semibold">Title</label>
          <input type="text" name="title" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" value="{{ $movie->title }}">
          <label class="block mt-3 font-semibold">Author</label>
          <input type="text" name="author" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" value="{{ $movie->author }}">
          <label class="block mt-3 font-semibold">Description</label>
          <textarea  name="description" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" >{{ $movie->description }}</textarea>

            <div class="flex justify-between items-baseline">
              <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 flex items-center justify-center mx-auto">Edit</button>
            </div>
        </form>
        </div>
    </div>
  </div>

@endsection
