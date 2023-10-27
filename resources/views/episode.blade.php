<x-layout>

    <div class="container">
        <h2>{{ $episode["name"] }}</h2>
        <h3>Season {{ $episode["season"] }}, episode {{ $episode["number"] }}</h3>
        <img style="max-width: 100%" src="{{ $episode["image"]["original"] }}" alt="">
        <div>
            <p><b>Airdate:</b> {{ $episode["airdate"] }}  {{ $episode["airtime"] }}</p>
            <p><b>Rating:</b> {{ $episode["rating"]["average"] }}</p>
            <p><b>Runtime:</b> {{ $episode["runtime"] }}</p>
        </div>
        <div>
            {!! $episode["summary"] !!}
        </div>
        <div>

        </div>
    </div>

</x-layout>