@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">ID</th>
              <th class="px-4 py-3">TITLE</th>
              <th class="px-4 py-3">AUTHOR</th>
              <th class="px-4 py-3">DESCRIPTION</th>
              <th class="px-4 py-3">CREATED</th>
              <th class="px-4 py-3">UPDATED</th>
              <th class="px-4 py-3">ACTIONS</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($movies as $row)

            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full" src="https://picsum.photos/200/300/?random" alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold text-black">{{ $row->id }}</p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-ms font-semibold border">{{ $row->title }}</td>
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{ $row->author }} </span>
              </td>

            <td class="px-4 py-3 text-sm border">{{ $row->description }}</td>


            <td class="px-4 py-3 text-sm border">{{ $row->created_at }}</td>

            <td class="px-4 py-3 text-sm border">{{ $row->updated_at }}</td>


            <td class="py-3 px-6 text-center border">
                <div class="flex item-center justify-center">
                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>


                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                        <a href="{{ route('3dit', ['id' => $row->id]) }}">
                            <button  class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                                </button>
                            </a>
                    </div>


                    <form method="POST" action="{{ route('destroy', $row->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>
                </div>
            </td>

            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </section>

@endsection

