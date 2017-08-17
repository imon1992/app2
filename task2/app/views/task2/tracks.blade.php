<ul>
    @foreach($tracks as $track)
        <li><p><a href="{{URL::to('track/'.$track->TrackId)}}">{{$track->Name}} </a> {{$artist}} </p></li>
    @endforeach
</ul>
