@extends('layout')
@section('title')
    AddGame
@endsection
@section('content')
<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">AddGames </h2>
    </div>

    <form action="{{route('upload')}}" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20">
      @csrf
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
          <label for="game_namee" class="block text-sm font-semibold leading-6 text-black">Game name</label>
          <div class="mt-2.5">
            <input type="text" name="game_name" id="game_name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="game_price" class="block text-sm font-semibold leading-6 text-black">Price</label>
          <div class="mt-2.5">
            <input type="text" name="game_price" id="game_price" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="game_url_video" class="block text-sm font-semibold leading-6 text-black">Link Video</label>
          <div class="mt-2.5">
            <input type="text" name="game_url_video" id="game_url_video" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="game_img_logo" class="block text-sm font-semibold leading-6 text-red-600">ImageLogo</label>
          <div class="mt-2.5">
            <input type="file" name="game_img_logo" accept="image/*" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
          </div>
          <div class="sm:col-span-2">
            <label for="game_img" class="block text-sm font-semibold leading-6 text-red-600">ImageBackground</label>
            <div class="mt-2.5">
              <input type="file" name="game_img" accept="image/*" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
            </div>
        </div>
        <div class="sm:col-span-2">
          <label for="game_detail" class="block text-sm font-semibold leading-6 text-green-600">Detail</label>
          <div class="mt-2.5">
            <textarea name="game_detail" id="game_detail" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
      </div>
      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>
  </div>
@endsection