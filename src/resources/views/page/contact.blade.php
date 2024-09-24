@extends('layouts.default')
@section('content')

    <div class="contact">
        <div class="container mx-auto px-4">
            <h1 class="contact__title">
                Контакт {{$contact->name}}
            </h1>
            <div class="contact__inner">
                <div class="contact__item mb-6">
                    <a class="contact__item-name text-lg block">
                        {{$contact->name}}
                    </a>
                    <a class="contact__item-phone" href="tel:{{$contact->phone}}">
                        {{$contact->phone}}
                    </a>
                    <p class="contact__item-story">
                        {{$contact->story}}
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
