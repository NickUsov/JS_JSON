<?php
if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $action = $_POST['action'];
} else {
    $login = $_GET['login'];
    $action = $_GET['action'];
}

// class myApi {
//     public $players;
//     public $countries;
//     public $cars;
//     public $languages;
//     _construct() {
//         $this->players = ['1'=>'Roger Ferer', '2'=>'Rafael Nadal', '3'=>'Pit Sampars'];
//         $this->countries = ['1'=>'Ukraine', '2'=>'France', '3'=>'Great Britain'];
//         $this->languages = ['1'=>'Java Script', '2'=>'C#', '3'=>'PHP'];
//         $this->cars = ['1'=>'Lada Sedan', '2'=>'Audi A8', '3'=>'BMW 753'];
//     }
// }

$reg_users = ['serega', 'dimon', 'Ajjano', 'nick_usov', 'lisopas', 'djan'];

if(in_array($login,$reg_users)) {
    if($action == 'players') {
        echo getPlayers();
    } elseif($action == 'countries') {
        echo getCountries();
    } elseif($action == 'languages') {
        echo getLanguages();
    } elseif($action == 'cars') {
        echo getCars();
    } else {
        echo 'false';
    }
} else {
    echo 'false';
}

function getPlayers() {
    $array = ['1'=>'Roger Ferer', '2'=>'Rafael Nadal', '3'=>'Pit Sampars'];
    return json_encode($array);
}

function getLanguages() {
    $array = ['1'=>'Java Script', '2'=>'C#', '3'=>'PHP'];
    return json_encode($array);
}

function getCountries() {
    $array = ['1'=>'Ukraine', '2'=>'France', '3'=>'Great Britain'];
    return json_encode($array);
}

function getCars() {
    $array = ['1'=>'Lada Sedan', '2'=>'Audi A8', '3'=>'BMW 753'];
    return json_encode($array);
}