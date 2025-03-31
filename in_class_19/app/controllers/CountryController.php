<?php

namespace app\controllers;

use app\models\Country;

class CountryController {

    // Fetch countries based on search query
    public function getCountries() {
        $countryModel = new Country();
        $query = !empty($_GET['name']) ? $_GET['name'] : null;

        if ($query) {
            $countries = $countryModel->getCountriesByName($query);
        } else {
            $countries = $countryModel->getAllCountries();
        }

        // Return the results as JSON
        echo json_encode($countries);
        exit();
    }
}

?>