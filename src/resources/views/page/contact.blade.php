@extends('layouts.default')
@section('content')

    <div class="contact">
        <div class="container mx-auto px-4">
            <h1 class="contact__title">
                Контакт {{$contact->name}}
            </h1>
            <div class="flex">
                <a href="{{route('contact-edit-show', ['contact' => $contact])}}">Редактировать|</a>
                <form method="POST" action="{{route('contact-delete', ['contact' => $contact])}}">
                    @csrf
                    <input type="submit" value="Удалить" style="cursor: pointer;">
                </form>
            </div>

            <div class="contact__inner mt-4">
                <div class="contact__item mb-6">
                    <a class="contact__item-name block mb-2">
                        Name <br> <strong>{{$contact->name}}</strong>
                    </a>
                    <a class="contact__item-phone mb-2" href="tel:{{$contact->phone}}">
                        Phone <br> <strong>{{$contact->phone}}</strong>
                    </a>
                    <p class="contact__item-story mb-2">
                        Story <br> {{$contact->story}}
                    </p>
                </div>
            </div>
        </div>
    </div>



@endsection
