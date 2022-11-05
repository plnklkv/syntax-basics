<?php
$dinosaurs = [
    'name' => 'Виды динозавров',
    'type_dino' => [
        'predators' => [
            'tyranozaurs' => 'Тиранозавр:<br>68—65 млн. лет назад',
            'spinosaurus' => 'Спинозавр:<br>100—93 млн. лет назад'
        ],
        'herbivores' => [
            'brachiosaurus' => 'Брахиозавр:<br>около 160 млн. лет назад',
            'stegosaurus' => 'Стегозавр:<br>155-145 млн. лет назад'
        ],
        'flying' =>
            ['pterodactyl' => 'Птеродактиль:<br>около 155-145 млн. лет назад']
    ]
];
$dinosaurs['type_dino']['predators'] += ['carnotaurus' => 'Карнотавр:<br>около 98 - 90млн. лет назад'];
?>

<html>
<head>
    <title><?= $dinosaurs['name'] ?></title>
</head>

<body>
<h1><?= $dinosaurs['name'] ?></h1>

<h2><?= 'Хищники' ?></h2>
<p><?php foreach ($dinosaurs['type_dino']['predators'] as $index => $dino) {
        echo $dino . '<br>';
    } ?></p>

<h2><?= 'Травоядные' ?></h2>
<p><?php foreach ($dinosaurs['type_dino']['herbivores'] as $index => $dino) {
        echo $dino . '<br>';
    } ?></p>

<h2><?= 'Летающие' ?></h2>
<p><?php foreach ($dinosaurs['type_dino']['flying'] as $index => $dino) {
        echo $dino . '<br>';
    } ?></p>
</body>
</html>

<?php
echo '<br>' . '<pre>';
print_r($dinosaurs);
echo '<pre>';