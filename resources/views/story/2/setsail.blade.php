@extends('layouts/setsail')

@section('content')
        <p><h1 class="sailtext">Onderweg naar Riga</h1></p>
    <p class="sailtext">
                Wat een avonturen.. Je kan het nog bijna niet geloven wat je allemaal hebt meegemaakt! Nu varen jullie naar de eindbestemming van deze reis; Riga. 
                Nog voordat je hem iets over Riga kan vragen, begint Jan vol enthousiasme te vertellen “Zo een mooi stad is dit {{ Auth::user()->name }} , vol prachtige gebouwen! 
                Een heel bekend gebouw is het <i> Zwarthoofdenhuis </i> ,  een Gildehuis voor Duitse kooplieden.” 
                “Wat is een gildehuis?” vraag ik aan hem. “Dat vertel ik je wel wanneer we aangekomen zijn!” 
    </p>
    <div class="button-container">
        <button type="button" class="continue" onclick="loadDoc('GET', '/storeriga', nextChapter, '/chapters/3')">Arriveer in Riga</button>
    </div>
        </div>
@endsection

<script src="{{ URL::asset('js/ajax.js') }}"></script>