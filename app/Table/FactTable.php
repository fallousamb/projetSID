<?php


namespace App\Table;


use Core\Table\TableFactory;

class FactTable extends TableFactory {
    protected $table = 'fact';


    /**
     *@return array
     */
    public function getLast(){
        return $this->query("
            SELECT  dim_hotels.nom as nom_hotel, F.note
            FROM fact F
            LEFT JOIN dim_hotels
              ON F.id_hotel = dim_hotels.num_hotel
            
       ");

    }

}