<div>

    @if(empty($filename))
        <img src="{{ asset('images/noimage.png') }}" class="w-10">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}">
    @endif

</div>
