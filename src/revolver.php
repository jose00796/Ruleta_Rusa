<?php

namespace BlackOps;

class revolver implements arma
{
    protected $PosBullet;
    protected $Bullet;
    protected $success = false;

    public function Position()
    {
        $this->PosBullet = rand(1,5);
        return $this->PosBullet;
    }
  
    public function Shoot(jugador $guy)
    {
        $this->Bullet++;
        $this->NextBullet();
    }

    public function NextBullet()
    {
        if ($this->PosBullet != $this->Bullet) {
            
            $this->success = false;
            
            Log::Info("<p> Jugador salvado de Leche Nojoda");
        }
        
        elseif ($this->PosBullet == $this->Bullet) {
            
            $this->success = true;
            $this->GameOver();
        }
    }

    public function GameOver()
    {
        if ($this->success == true) {
    
            Log::Info("<p> Se ha matado por Wuebon, Gracias por jugar :)");
            exit();
        }
    }
}
