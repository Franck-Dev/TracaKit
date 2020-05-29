<?php
//echo json_encode($_GET);
require 'vendor/autoload.php';
$success = 0;
$msg = "Une erreur est survenue (kitTable.php)";
$data = [];
$bdd = new PDO('', '', '');

$types = empty($_GET['types']) ? 'tool' : $_GET['types']; 
    
if ($types === 'tool'){
    $table = 't_kit';
    $foreign = 'IdMoulage';
}
$query = $bdd->prepare("SELECT * FROM $table WHERE $foreign = ?");
$query->execute([$_GET['filter']]);
$items = $query->fetchAll();
header('content-Type: application/json');
echo json_encode(array_map(function($item){
return[
        'value' => $item['ID'], 'label' => $item['desOutillage']
    ];
}, $items));
?>
