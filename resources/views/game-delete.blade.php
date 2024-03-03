@extends('layout')
@section('title')
    DeleteGames
@endsection
@section('content')
<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Name</th>
              <th class="px-4 py-3">Price</th>
              <th class="px-4 py-3">Delete</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($DataG as $item)
            <tr class="text-gray-700">
                <td class="px-4 py-3 border">
                  <div class="flex items-center text-sm">
                    <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                      <img class="object-cover w-full h-full rounded-full" src="{{asset($item->game_img)}}" alt="" loading="lazy" />
                      <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                    </div>
                    <div>
                      <p class="font-semibold text-black">{{$item->game_name}}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-ms font-semibold border">{{$item->game_price}} $</td>
                <td class="px-4 py-3 text-sm border">
                    <button><a href="{{route('game-delete',$item->id)}}"><i class="ri-delete-bin-5-line"></i></a></button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection