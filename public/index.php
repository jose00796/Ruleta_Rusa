<?php

namespace BlackOps;

require "../vendor/autoload.php";


$player = new jugadores();
$gun = new revolver();

Log::SetLogger(new Html_Logger);

$lista = $player->GetPlayers();

Log::Info( "<center><h1>Ruleta Rusa</h1></center>");

foreach ($lista as $player) {
    Log::Info( $player->GetID().' - '.$player->GetName().'<br>');
}

echo "<hr>";
$gun->Position();

foreach ($lista as $player) {
    Log::Info( '<p>'.$player->GetId().' - '.$player->GetName().' Se dispone a Dispararse<br>');
    $gun->Shoot($player);
    echo "<hr>";
}