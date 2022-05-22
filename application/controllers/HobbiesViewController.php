<?php

require 'application/controllers/BaseViewController.php';
require_once 'application/views/core/View.php';
require 'application/config/hobbies.php';
require 'application/core/Models/HobbieHolder.php';

class HobbiesViewController extends ViewController {

    private $hobbies = [];

    function index() {
        $data = new HobbieHolder;

        for ($i=0; $i < 3; $i++) { 
            array_push($this->hobbies, createHobbie($i, $data->nameHobbies[$i], $data->descriptionHobbies[$i], $data->picHobbies[$i]));
        }

        return new View($this->route, $this->hobbies);
    }
}