@extends('layouts/setsail')

@section('content')

            <p><h1 class="sailtext">Onderweg naar Lubeck</h1></p>
    <p class="sailtext">"Wat een wind he?" roept Jan, terwijl hij je het schip rondleidt. Je ziet Groningen steeds kleiner worden terwijl jullie wegvaren. "Ben je al eens eerder in Lubeck geweest?"
            "Ik geloof van niet" antwoord je. Jan houdt maar niet op met praten. "Lubeck is de plaats waar onze handelssamenwerking is onstaan!
            Al vanaf de 12e eeuw hebben ze economische verdragen gemaakt met andere steden. Heel goed voor de handel. Daarom doen wij er als Groningers ook aan mee. Ze kopen hier onder andere heel erg veel stoffen in.
            De "Koningin van de Hanze" noemen ze deze stad ook wel."</p>
        <div class="button-container"><button type="button" class="continue" onclick="loadDoc('GET', '/storelubeck', nextChapter, '/chapters/1')">Arriveer in Lubeck</button></div>

 @endsection

 <script src="{{ URL::asset('js/ajax.js') }}"></script>