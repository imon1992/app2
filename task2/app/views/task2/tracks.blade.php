<ul>
    @foreach($tracks as $track)
        <li><p><a href="{{URL::to('track/'.$track->TrackId)}}">{{$track->Name}} </a> {{$track->Composer}} </p></li>
    @endforeach
</ul>