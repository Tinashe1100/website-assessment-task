<x-dashboard>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-group">
                @foreach ($items as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item->item_name }}
                        <span class="badge bg-primary rounded-pill">{{ $item->item_availabilty }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-dashboard>
