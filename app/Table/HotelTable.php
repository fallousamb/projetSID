<?php


namespace App\Table;


use Core\Table\TableFactory;

class HotelTable extends TableFactory{
    protected $table = 'dim_hotels';

    public function getNameHotels() {
        return $this->query("
            SELECT  H.nom as nom_hotel
            FROM dim_hotels H
        ");
    }

}