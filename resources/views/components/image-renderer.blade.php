@if ($imageUrl)
    @if (!Str::startsWith($imageUrl, 'https'))
        <img src="{{ Storage::url($imageUrl) }}" alt="Image" height=100 width=100>
    @else
        <img src="{{ $imageUrl }}" alt="Image" height=100 width=100>
    @endif
@else
    <center><span class="badge badge-danger">No Image</span></center>
@endif
