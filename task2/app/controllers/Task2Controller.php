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
        $tracks = Album::find($id)->tracks()->select('Name','Composer')->get();
        return View::make('task2.tracks',['tracks'=>$tracks]);
    }
    
    public function showTrackInfo()
    {
        return 'track infro';
    }
}
