@extends('layouts.default')
@section('content')

    <div class="contacts">
        <div class="container mx-auto px-4">
            <h1 class="contacts__title">
                Ваши контакты
            </h1>
            <div class="contacts__inner">
                <div class="contacts__items">
                    @foreach($contacts as $contact)
                        <div class="contacts__item mb-6">
                            <a href="{{route('contact', ['contact' =>$contact])}}"
                               class="contacts__item-name text-lg block">
                                {{$contact->name}}
                            </a>
                            <a class="contacts__item-phone" href="tel:{{$contact->phone}}">
                                {{$contact->phone}}
                            </a>
                            <p class="contacts__item-story">
                                {{$contact->story}}
                            </p>
                        </div>
                        <div class="underline h-4 bg-sky-400">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
