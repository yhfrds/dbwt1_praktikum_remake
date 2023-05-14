<?php
$famousMeals = [
    1 => ['name' => 'Currywurst mit Pommes', 'winner' => [2001, 2003, 2007, 2010, 2020]],
    2 => ['name' => 'Hähnchencrossies mit Paprikareis', 'winner' => [2002, 2004, 2008]],
    3 => ['name' => 'Spaghetti Bolognese', 'winner' => [2011, 2012, 2017]],
    4 => ['name' => 'Jägerschnitzel mit Pommes', 'winner' => 2019]
];

foreach ($famousMeals as $number => $meal) {
    echo $number, ".", $meal['name'], '<br>';
    echo '&nbsp;&nbsp;&nbsp;';
    if (is_array($meal['winner'])) {
        $sortedWinner = $meal['winner'];
        rsort($sortedWinner);
        echo implode(", ", $sortedWinner);
    } else {
        echo $meal['winner'];
    }
    echo "<br>";
}