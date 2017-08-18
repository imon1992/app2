<?php

class Task2Controller extends BaseController
{

    public function showArtists()
    {

        $artists = Artist::all();
        return View::make('task2.artists',['artists'=>$artists]);
    }

    public function showAlbums($id)
    {

        $albums = Artist::find($id)->albums;
        return View::make('task2.albums',['albums'=>$albums]);
    }

    public function showTracks($id)
    {
        $tracks = Album::find($id)->tracks()->select('Name','TrackId')->get();
        $artist = Album::find($id)->artist->Name; 
        return View::make('task2.tracks',['tracks'=>$tracks,'artist'=>$artist]);
    }
    
    public function showTrackInfo($trackId)
    {
        $trackInfo = Track::find($trackId);
        $genre = Track::find($trackId)->genre->Name;
        $mediaType = Track::find($trackId)->mediaType->Name;

        return View::make('task2.trackInfo',['trackInfo'=>$trackInfo,'genre'=>$genre,'mediaType'=>$mediaType]);
    }
}
