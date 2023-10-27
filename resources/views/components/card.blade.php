{{-- @dd($episode) --}}

<div class="card">
    @if ($episode["image"] != null)
        <img src="{{ $episode["image"]["original"] }}" class="card-img-top" alt="...">
    @endif

    <div class="card-body">
        <h5 class="card-title">{{ $episode["name"] }}</h5>
        <p class="card-text">{!! $episode["summary"] !!}</p>
        <a href="{{ $episode["url"] }}" class="btn btn-primary">Go to webpage...</a>
        <a href="/episodes/{{ $episode["id"] }}" class="btn btn-success">Details...</a>
    </div>
</div>
