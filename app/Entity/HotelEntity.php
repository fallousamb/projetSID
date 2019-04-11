<?php


namespace App\Entity;


use Core\Entity\Entity;

class HotelEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=hotel.show&id=' . $this->id;
    }

}