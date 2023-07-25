<table class="table table-striped">
              <thread>
                <th>
                  <td>IndicatorNo</td>
                  <td>Topic</td>
                  <td>Indicator</td>
                  <td>Indicator Name</td>
                  <td>Unit</td>
                </th>
        </thread>
<?php
require_once __DIR__ . '/conect.php';

class API{
   function Select(){
    $db = new Connect();
    $populationanalysis = array();
    $data = $db->prepare('select * from populationanalysis');
    $data->execute();
    while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
        $populationanalysis[$OutputData['IndicatorNo']] = array(
            'IndicatorNo' => $OutputData['IndicatorNo'],
            'Topic' => $OutputData['Topic'],
            'Indicator' => $OutputData['Indicator'],
            'Indicator Name' => $OutputData['Indicator Name'],
            'Unit' => $OutputData['Unit'],
        );
    }
    
    $encoded_data = json_encode($populationanalysis);
    file_put_contents('db.json',$encoded_data);
    $db_json_data = file_get_contents('db.json');
    $decoded_data = json_decode($db_json_data,true);
    if(count($decoded_data)!=0){
      foreach($decoded_data as $dcd_data){
        ?>
            
                <tr>
                  <td><?php echo $dcd_data['IndicatorNo']?></td>
                  <td><?php echo $dcd_data['Topic']?></td>
                  <td><?php echo $dcd_data['Indicator']?></td>
                  <td><?php echo $dcd_data['Indicator Name']?></td>
                  <td><?php echo $dcd_data['Unit']?></td>
                </tr>  
            </table>
        <?php
      }
    }
   }
}

$API = new API;
header('Content-Type: application/json');
echo $API->Select();
?>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>