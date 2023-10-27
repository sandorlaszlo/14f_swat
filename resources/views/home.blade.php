<x-layout>

    <div class="container">
        <h1>Episodes</h1>

        <form class="mb-3" action="/show-season" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-1"><label class="form-label" for="season">Season: </label></div>
                <div class="col-md-3"><select class="form-select" name="season" id="season">
                    @foreach ($series as $season)
                        <option value="{{ $season }}">{{ $season }}</option>
                    @endforeach
                </select></div>
                <div class="col-md-1"><input class="btn btn-primary" type="submit" value="Show"></div>
            </div>
        </form>

        <div class="row">
            @foreach ($episodes as $episode)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <x-card :episode="$episode"></x-card>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
