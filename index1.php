<?php
require_once __DIR__ . '/conect.php';

class API{
   function Select(){
    $db = new Connect();
    $users = array();
    $data = $db->prepare('select * from users');
    $data->execute();
    while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
        $users[$OutputData['id']]=array(
            'id' => $OutputData['id'],
            'name' => $OutputData['name'],
            'age' => $OutputData['age'],
        );
    }
    return json_encode($users);
   }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();





?>