@extends('layouts.default')
@section('content')
    <div class="contactform">
        <div class="container mx-auto px-4 ">
            <form class="" method="POST" action="{{ route('contact-edit', ['contact' => $contact]) }}">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Имя</label>
                    <input type="text" id="name" name="name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           value="{{$contact->name}}" required/>
                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Номер телефона</label>
                    <input type="text" id="phone" name="phone" value="{{$contact->phone}}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           required/>
                </div>
                <div class="mb-5">
                    <label for="desc" class="block mb-2 text-sm font-medium text-gray-900">Описание</label>
                    <input type="text" id="desc" name="story" value="{{$contact->story}}"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                           required/>
                </div>
                <input type="submit" value="Сохранить" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            </form>
        </div>
    </div>

@endsection
