<?php

namespace app\models;

use app\models\Model; 

class Country extends Model {

    protected $table = 'countries';

    // Get all countries
    public function getAllCountries() {
        $query = "SELECT * FROM countries";
        return $this->fetchAll($query);
    }

    // Get countries by name search
    public function getCountriesByName($name) {
        $query = "SELECT * FROM countries WHERE country_name LIKE :name";
        return $this->fetchAllWithParams($query, ['name' => '%' . $name . '%']);
    }
}

?>