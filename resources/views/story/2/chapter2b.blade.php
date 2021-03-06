@extends('layouts/chapter')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/danzig.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hanoi.css') }}">
<link href="{{ asset('css/memory.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="danzig-head-image" class="head-image">
    <img class="parchment-border" src="/images/chapters/parchment-top.png">
</div>

<div class="chapter-title">gdansk</div>


<p>"{{ Auth::user()->name }}! Wakker worden, snel!" Je slaat je ogen open. Jan staat over je heen gebogen. "Was je in slaap gevallen? Daar hebben we nu geen tijd voor. Kijk maar, we zijn aangekomen in Gdansk!"</p>

<p>Slaperig kijk je om je heen. Dan slaan je ogen wagenwijd open. Je lag zo diep te slapen, dat je helemaal niet doorhad dat het schip niet meer op open zee is. Jullie zijn in een haven! En wat voor een... Overal om je heen liggen grote schepen, ertussen varen allemaal kleine bootjes. Op de kade staan rijen met grote pakhuizen en zie je een wirwar van mensen door elkaar heen lopen.</p>

<p>"Kijk, zie je die toren? Met die kraan eraan? Daar gaan we uitladen. Wat een gezicht hè! Een knap staaltje vakmanschap, het is een van de modernste kraantorens in Europa!'</p>

<p>Je kijkt naar de toren die Jan aanwijst. Wat een vreemde constructie! Het zijn eigenlijk twee torens met een houten kraan ertussen, en daar beneden.. Wat zijn dat? Het lijken wel grote hamsterwielen.</p> 

<p>"Hoe dan?", vraag je. "Hoe werken die hamsterwielen daaronderaan?" Jan kijkt je versuft aan. Hij zegt: "Wat? Ham.. hamsterwielen? Wat zeg je soms toch ook rare dingen." Dat is ook zo! Hamsters komen niet uit Europa, Jan heeft geen idee waar ik het over heb.</p>

<div class="container">
        <div class="view-poll">
                <picture> <img src="/images/chapters/treadmillcrane.jpg"  width="300px" alt="Hamsterwielen in middeleeuwse kraantorens"> </picture>
                <i>Hamsterwiel in middeleeuwse kraan</i>
                <br>
              </div>
            </div>



<p>Je wijst naar de hamsterwielen. "Ik bedoel die twee grote wielen daar, onderaan de torens. Waar zijn die voor?" Jans ogen beginnen te glimmen. "Die worden gebruikt om zware spullen omhoog te takelen. Kijk, de wielen zijn verbonden met kabels. Er gaan mensen in staan, en als zij gaan lopen dan wordt de vracht op dat platform daar omhoog getakeld! Maar wacht maar, je zult het zo zelf wel zien."</p>

<p>Je kijkt over de reling terwijl het schip aanmeert naast de kraantoren. Je ziet nu inderdaad dat er mensen in de hamsterwielen staan, vier per wiel. Ze beginnen langzaam te bewegen. Een platform dat aan de kabels hangt beweegt naar beneden, tot het vlak boven het dek hangt.</p>

<p>"Zo!", zegt Jan. "Tijd om aan de slag te gaan. Zie je deze stapel kisten? Die moeten opgestapeld worden op het platform. Let op, ze zijn heel zwaar! Vooral die onderop. Zorg ervoor dat je nooit een grotere kist op een kleinere kist zet. Er is nog wat vrije ruimte daar links van de stapel, daar kun je ook wat neerzetten terwijl je de kisten overstapelt naar het platform."</p>

<div id="hanoi-parent">

    <table id='hanoi-table' border="0" cellspacing=0 cellpadding=0>
        
        <tr>
            <td colspan=5 id="hanoi-instructions">
                <form name='disp'>
                    <textarea id="hanoi-textarea" name='message' wrap=virtual rows=2 cols=40></textarea>
                </form>
            </td>
        </tr>
        <script src="/js/hanoi.js"></script>
</div>

<br>
@if(Auth::user()->progression->danzighanoi == true)
<div id="complete-hanoi" class="game-completed"><div id="text-padding">Ik heb dit spel al eens gespeeld, ik wil door met het verhaal!</div></div>
@endif

<div style="display:none" id="sub-content">

<p>"Goed gedaan, {{ Auth::user()->gender }}. Je bent sterker dan je lijkt! Kom, we kunnen de rest van het uitladen aan de rest overlaten. Wij moeten die zware kisten nu snel afleveren."</p>

<p>Je loopt achter Jan aan van het schip af, de kade op. Daar zet een gespierde man net de laatste kist die je zojuist op het platform hebt gezet, op een platte kar. "Dzięki!" zegt Jan tegen de man. "Kom op {{ Auth::user()->name}}, help me deze kar duwen!"</p>

<p>Samen met Jan duw je de kar door de drukke straten. Al snel komen jullie aan bij een gigantische bouwplaats. "Nu moeten we die architect zien te vinden..." mompelt Jan. Hij praat met een van de werkers in een taal die je niet kent. De werker loopt weg, en komt al snel terug met een belangrijk uitziende man. "Ah, zijn dit de bouwmaterialen uit Groningen?" vraagt hij.</p>

<p>Je had niet verwacht dat er hier iemand Nederlands zou spreken. "Komt u uit Nederland meneer?" vraag je verbaasd. De man kijkt je glimlachend aan. "De jeugd tegenwoordig weet ook niets van hun vaderland.." zegt hij tegen Jan. Dan zegt hij tegen jou: "Ik kom inderdaad uit Nederland. Ik ben architect, en ik ben hier om de hoofdarchitect Heinrich Ungaredin mee te helpen met het bouwen van de mooiste kerk in Europa. Nederlandse architecten zijn erg gewild in het buitenland. Wist je dat niet?"</p>


<div class="container">
        <div class="view-poll">
                <picture>  <img id="contruction-img" src="/images/chapters/construction.jpg" alt="Middeleeuwse bouwplaats" width="400px"> </picture>
                <i>Middeleeuwse bouwplaats</i> <br>
        
              </div>
            </div>


<p>Je had geen idee. Je wilt meer vragen, maar dan zegt Jan: "Maar goed, genoeg gekletst! Het is tijd om naar de handelsmarkt te gaan. Volg mij!" Je volgt Jan naar de drukke handelsplaats vlakbij de haven. Hij zegt: "Laten we kijken hoeveel we hier kunnen krijgen voor onze spullen, misschien kunnen we ons ruim nog wat beter vullen als we slim handelen!"
    </p>
    <p>
        Samen lopen jullie naar een goed gevulde, grote kraam met een grijnzende dikke man erachter.
        "Welkom vrienden, welkom! Kijk gerust naar mijn waren... Als ik het niet heb, dan is het nergens in Gdansk te vinden!" bulderde de man.
        Je kijkt je ogen uit, de kraam is volgeladen met allerlei spullen:
        Koper en vis uit Zweden, stof uit Nederland en België, vachten uit Visby, hout en hars uit Riga, graan en honing uit Rusland en Polen en zelfs grote brokken zout genaamd 'potas'.
    </p>
    <p>
        Je strekt je hand uit om een mooi groot stuk koper beter te bekijken en stoot per ongeluk tegen de kraam! Hij wankelt twee keer en stort in onder het gewicht van alle spullen!
        "Wat doe je nou?!" roept de marskramer vol ongeloof. "Kijk nou, alles ligt door elkaar!"
        Jan en jij kijken elkaar aan vol schrik, wat een ellende.
        "Het spijt me ontzettend meneer! We ruimen het gelijk op!"</p>
        <p>Alle koopwaar van de marskramer ligt door elkaar! Zoek de juiste spullen hieronder bij elkaar:</p>
    
    <div id="memory-container">
    <div id="game"></div>
    </div>
  <br>
    @if(Auth::user()->progression->danzigmemory == true)
    <div id="second-progress-container">
        <div id="complete-test" class="game-completed"><div id="text-padding">Ik heb dit spel al eens gespeeld, ik wil door met het verhaal!</div></div>
    </div>
    @endif
    
    <div style="display:none" id="progressdiv">
            <p> De marskramer haalt opgelucht adem, zijn koopwaar ligt er weer goed bij. 
                    "Laten we meteen onze koopwaar voor Riga inslaan." oppert Jan. </p>
            <p>Jullie slaan samen van alles in en slepen het op de platte kar weer terug naar het schip. Als alles is uitgeladen, kruip je uitgeput onder een deken in een hoek van het ruim. Vlak voor je in slaap valt, hoor je de kapitein nog roepen: "Hijs de masten! Beman het kraaiennest! Bemanning, het is tijd om uit te varen naar onze eindbestemming: Riga!"</p>
            <div class="travel-center">
            <button type="button" id="button-d" class="button" onclick="loadDoc('GET', '/storesetsail3', nextChapter, '/chapters/2/setsail')">Vaar naar Riga</button>
            </div>
        </div>
</div>
<div id="chapter-bottom-div">
    </div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hanoiprogress.js') }}"></script>
<script src="{{ asset('js/memory.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/visbyeffect.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection