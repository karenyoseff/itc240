<?php
$animal = array('dog', 'cat', 'fish', 'bird', 'iguana');
echo "You can adopt a " . $animal[0] . ", a " . $animal[1] . ", or a " . $animal[3] . " from the animal sanctuary.";
echo "<br>";


$statecaps = array("Washington" => "Olympia", "Oregon" => "Salem", "California" => "Sacramento", "Alaska" => "Juneau", "Hawaii" => "Honolulu", "Idaho" => "Boise", "Nevada" => "Carson City", "Arizona" => "Phoenix") ;
asort($statecaps);
print_r($statecaps);
echo "<br>";

$number = array(1,2,3,4,5,6);
$number[] = $number[5];
$number[5] = $number[4];
$number[4] = 42;
print_r($number);
echo "<br>";

$temp = array( 32, 47, 55, 30, 42, 39, 45);
$sum=0;
for ($i = 0; $i < count($temp) ; $i++) {
    $sum += $temp[$i];
}
$average = $sum / count($temp);
echo "Average temp this week " . $average . " Lowest temp : " . min($temp) . " Highest temp: " . max($temp); 

?>


