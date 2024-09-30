<div class="search" style="display: flex; align-items: center; flex-direction: column; justify-content: center">
    <div class="container" style="width: 100%;">
        <input type="text" wire:model.live="search" placeholder="Введите имя для поиска"
           style="width: 500px; border-radius: 5px; margin: 10px auto "/>

    @if(count($contacts) > 0)
        <ul>
            @foreach($contacts as $contact)
                <li class="mb-4" >
                    <a href="{{route('contact', $contact)}}">{{ $contact->name }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Контакты не найдены.</p>
    @endif
    </div>
</div>
