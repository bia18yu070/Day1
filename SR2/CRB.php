<?php
 
 $source  = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js');
var_dump(json_decode($source, true));
//Фильтруем данные по первым буквам фамилии
$letters = strtolower($_REQUEST["letters"]);

$results = [];
foreach($source as $name) {
    if (str_starts_with(strtolower($name["Name"]), $letters)) {
        array_push($results, $name);
    }
}

//Отправим извлеченные данные в формате JSON
echo json_encode($results);