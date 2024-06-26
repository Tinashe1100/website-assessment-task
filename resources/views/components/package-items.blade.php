@props(['packageItems'])

<ul class="list-unstyled text-start row gy-2">
    @foreach ($packageItems as $item)
        <li class="col-12 {{ $item->item_availability ? 'text-primary' : 'text-secondary' }}">
            <i class="bi bi-check-circle"></i>
            {{ $item->item_name }}
        </li>
    @endforeach
</ul>
