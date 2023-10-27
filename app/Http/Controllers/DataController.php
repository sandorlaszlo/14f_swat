<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    private $episodes = array();
    private $series = array();

    function __construct()
    {
        $this->episodes = Storage::json('public/SWAT.json');
        foreach ($this->episodes as $episode) {
            if (!in_array($episode["season"], $this->series))
                $this->series[] = $episode["season"];
        }
    }

    function index() {
        $data = [
            'episodes' => $this->episodes,
            'series' => $this->series,
        ];
        return view('home', $data);
    }

    function getAll() {
        return response()->json($this->episodes);
    }

    function show($id) {
        // dd($id);
        $foundEpisode = null;
        foreach ($this->episodes as $episode) {
            if ($episode["id"] == $id){
                $foundEpisode = $episode;
                break;
            }
        }
        // dd($foundEpisode);
        return view('episode', ['episode' => $foundEpisode]);
    }

    function showSeason(Request $request) {
        // dd($request->season);

        $episodesOfSeason = array();
        foreach ($this->episodes as $episode) {
            if ($episode["season"] == $request->season){
                $episodesOfSeason[] = $episode;
            }
        }

        $data = [
            'episodes' => $episodesOfSeason,
            'series' => $this->series,
        ];
        return view('home', $data);
    }

}
