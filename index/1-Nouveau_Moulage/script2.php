<?php
require '../../vendor/autoload.php';
$success = 0;
$msg = "Une erreur est survenue (script.php)";
$data = [];
$bdd = new PDO('mysql:host=localhost:3306;dbname=traca;charset=utf8', 'root', '');
$types = empty($_GET['types']) ? 'tool' : $_GET['types']; 
    
if ($types === 'tool'){
    $table = 't_tools';
    $foreign = 'programId';
}
$query = $bdd->prepare("SELECT * FROM $table WHERE $foreign = ?");
$query->execute([$_GET['filter']]);
$items = $query->fetchAll();
//var_dump($items);
header('content-Type: application/json');
echo json_encode(array_map(function($item){
return[
        'value' => $item['ID'], 
        'label' => $item['desOutillage'],
        'toolSap' => $item['numOtSap']
    ];
}, $items));
?>
