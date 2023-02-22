@extends('layout.app')

@section('title')Вхід@endsection

@section('content')
    @include('partials.header')
    <section class="flex justify-center items-center h-screen">
        <div class="max-w-md w-full bg-black rounded p-6 space-y-4">
            <div class="mb-4">
                <p class="text-gray-400">Вітаю!</p>
                <h2 class="text-xl font-bold text-white">Увійдіть у свій акаунт</h2>
            </div>
            <div>
                <input class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600" type="text" placeholder="Email">
            </div>
            <div>
                <input class="w-full p-4 text-sm bg-gray-50 focus:outline-none border border-gray-200 rounded text-gray-600" type="text" placeholder="Пароль">
            </div>
            <div>
                <button class="w-full py-4 bg-blue-600 hover:bg-blue-700 rounded text-sm font-bold text-gray-50 transition duration-200">Увійти</button>
            </div>
            <div class="flex items-center justify-between">
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection

