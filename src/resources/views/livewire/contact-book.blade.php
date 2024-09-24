<div>
    <input type="text" wire:model.live="search" placeholder="Введите имя для поиска" />

    @if(count($contacts) > 0)
        <ul>
            @foreach($contacts as $contact)
                <li>{{ $contact->name }}</li>
            @endforeach
        </ul>
    @else
        <p>Контакты не найдены.</p>
    @endif
</div>
