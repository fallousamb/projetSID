<?php


namespace App\Table;


use Core\Table\TableFactory;

class HotelTable extends TableFactory{
    protected $table = 'dim_hotels';

    public function getNameHotels() {
        return $this->query("
            SELECT  H.num_hotel, H.nom as nom_hotel, fact.note as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel         
        ");
    }

    public function getHotelsWithInternet() {
        return $this->query("
            SELECT  H.num_hotel, H.nom as nom_hotel, fact.note as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.internet = 1      
        ");
    }

    public function getHotelsWithClim() {
        return $this->query("
            SELECT  H.num_hotel, H.nom as nom_hotel, fact.note as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.climatisation = 1      
        ");
    }

    public function getHotelsWithPiscine() {
        return $this->query("
            SELECT  H.num_hotel, H.nom as nom_hotel, fact.note as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.piscine = 1      
        ");
    }



}