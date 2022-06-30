<?php

//Симульция (Обычно список данных извлекается программным кодом, например из БД)
$people = [
    array("FirstName" => "Ivan", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 260000),
    array("FirstName" => "Andrey", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 270000),
    array("FirstName" => "Sasha", "LastName" => "Fedorov", "City" => "Moscow", "Salary" => 150000),
    array("FirstName" => "Ivan", "LastName" => "Sergeev", "City" => "Moscow", "Salary" => 10000),
    array("FirstName" => "Jora", "LastName" => "Nebaev", "City" => "Moscow", "Salary" => 200000),
    array("FirstName" => "Sasha", "LastName" => "Bobrov", "City" => "Moscow", "Salary" => 15000)
];

//Фильтруем данные по первым буквам фамилии
$letters = strtolower($_REQUEST["letters"]);

$results = [];
foreach($people as $person) {
    if (str_starts_with(strtolower($person["LastName"]), $letters)) {
        array_push($results, $person);
    }
}

//Отправим извлеченные данные в формате JSON
echo json_encode($results);