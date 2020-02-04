<?php

namespace BlackOps;

class jugadores
{

    public function GetPlayers()
    {
        $lista = array();

        $player = new jugador(1, 'Jose');
        array_push($lista, $player);

        $player = new jugador(2, 'Victor');
        array_push($lista, $player);

        $player = new jugador(3, 'David');
        array_push($lista, $player);

        $player = new jugador(4, 'Pedro');
        array_push($lista, $player);

        $player = new jugador(5, 'Eiker');
        array_push($lista, $player);

        return $lista;
    }

}
