<?php
//ЦИКЛЫ!!!
$numbers = [1, 2, 3, 44, 5];
//echo $numbers [4];
foreach($numbers as $x) {
    echo "$x<br />";
}

// $people = [
// ["Yuri", "Moscow"],
// ["Evgen", "Keningsberg"],
// ["Alex", "Moscow"],
// ["Danchik", "Odessa"]
// ];

// $i = 1;
// foreach($people as $person) {
//     $name = $person[0];
//     $city = $person[1];
//     echo "$i. $name from $city <br />";
//     $i = $i + 1;
// }

// $person1 = array("FirstName" => "Ivan", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 260000);
// echo $person1['FirstName']." ".$person1['LastName']." ".$person1['City']." ".$person1['Salary'];

$people = [
    array("FirstName" => "Ivan", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 260000),
    array("FirstName" => "Andrey", "LastName" => "Balashov", "City" => "Moscow", "Salary" => 270000),
    array("FirstName" => "Sasha", "LastName" => "Fedorov", "City" => "Moscow", "Salary" => 150000)
];

foreach($people as $person) {
    echo $person['FirstName']." ".$person['LastName']." ".$person['City']." ".$person['Salary']."<br />"; //foreach - это цикл

}