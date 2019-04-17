<?php


namespace App\Table;


use Core\Table\TableFactory;

class HotelTable extends TableFactory{
    protected $table = 'dim_hotels';

    public function getNameHotels() {
        return $this->query("
            SELECT   H.climatisation, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.internet = 1 
            GROUP BY H.internet 
           
        ");
    }

    public function getHotelsWithInternet() {
        return $this->query("
            SELECT  H.internet, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.internet = 1 
            GROUP BY H.internet
    
        ");
    }
    public function getHotelsWithoutInternet() {
        return $this->query("
            SELECT  H.internet, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.internet = 0
            GROUP BY H.internet    
        ");
    }

    public function getHotelsWithClim() {
        return $this->query("
             SELECT  H.climatisation, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.climatisation = 1
            GROUP BY H.climatisation   
            
        ");
    }

   public function getHotelsWithoutClim() {
        return $this->query("
            SELECT  H.climatisation, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.climatisation = 0
            GROUP BY H.climatisation   
        ");
   }

   public function getWithInternet_clim() {
       return $this->query("
            SELECT H.internet,  H.climatisation, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.internet = 1 AND H.climatisation = 1
            GROUP BY H.internet, H.climatisation   
        ");
   }
    public function getWithoutInternet_clim() {
        return $this->query("
            SELECT H.internet,  H.climatisation, AVG (fact.note) as moyenne
            FROM dim_hotels H, fact
            where H.id_hotel=fact.id_hotel AND H.internet = 0 AND H.climatisation = 0
            GROUP BY H.internet, H.climatisation   
        ");
    }


}