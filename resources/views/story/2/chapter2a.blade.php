@extends('layouts/chapter')

@section('content')

<link rel="stylesheet" href="{{ URL::asset('css/battleship.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<p><h2>Visby</h2></p>

<p>Als het schip Visby nadert, wordt het aangevallen door piraten! Hier komt een zeeslagspelletje.</p>
<div id="main">
    <div class="board">
      <div class="displays">
        <div class="top">
          <ul class="grid"></ul>
        </div>
        <div class="bottom">
          <ul class="grid"></ul>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="topPanel">
        <div class="layout">
          <div class='buttons one'>One-Player</div>
          <div class='buttons multi'></div>
        </div>
      </div>
      <div class='console'>
        <span class='text'></span></div>
    </div>
  </div>



<p>Na de slag neemt de protagonist een scheepsmaat mee naar de ziekenhuiskerk.</p>

<p>Protagonist ontmoet een Finse handelaar die hem info geeft over Visby: een herdistributiestad die wordt lastiggevallen door piraten.</p>

<p>De protagonist slaat schapenhuiden in, deze wil de kapitein verkopen in Riga.</p>

<p>De boot is beschadigd tijdens het gevecht, en nu moet hij gerepareerd worden:</p>


<canvas id="canvas"></canvas>

<div style="display:none" id="progressdiv">
<p>Uiteindelijk gaat hij weer het schip in en gaat door naar Riga</p>
<p><a href="/chapters/2/setsail">Vaar naar Riga</a></p>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('js/ajax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/battleship.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slidegame.js') }}"></script>
@endsection