<!DOCTYPE html>
<html>
<head>
    
    <title>Web Page Design</title>
    <style>
        footer {
            background-color: #252525;
            color: #fff;
            text-align: center;
            padding: 10px;
          }
          
    </style>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
   

    
    <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <img src="logo.png" alt="logo"/>
    <a class="navbar-brand"><b>DESIRE INNOVATIONS</b></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active"  href="index.php" id="navbarPopulationAnalysis"><b>POPULATION ANALYSIS</b></a>
        </li>
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active" href="movie.php" id="navbarMoviesList"><b>MOVIES LIST</b></a>
        </li>
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active" href="about.html" id="navbarservices" ><b>ABOUT US</b></a>
        </li>
        &emsp;&emsp;&emsp;&emsp;
        <li class="nav-item">
          <a class="nav-link active" href="contact.html" id="navbarContact Us"><b>CONTACT US</b></a>
        </li>
      </ul>
      <form class="d-flex" action="index.php" method="post">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
        <button class="btn btn-outline-success active" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>
<table class="table table-striped">
              
                <tr>
                  <td><b>Indicator No</td>
                  <td><b>Topic</td>
                  <td><b>Indicator</td>
                  <td><b>Indicator Name</td>
                  <td><b>Unit</td>
                </tr>
        
        
<?php
require_once __DIR__ . '/conect.php';

class API{
   function Select(){
    $db = new Connect();
    $populationanalysis = array();
    if(isset($_POST['search']))
    {
      $data1=$db->prepare('select * from populationanalysis where IndicatorNo like "%'.$_POST['search'].'%"');
      $data1->execute();
      $data2=$db->prepare('select * from populationanalysis where Topic like "%'.$_POST['search'].'%"');
      $data2->execute();
      $data3=$db->prepare('select * from populationanalysis where Indicator like "%'.$_POST['search'].'%"');
      $data3->execute();
      $data4=$db->prepare('select * from populationanalysis where IndicatorName like "%'.$_POST['search'].'%"');
      $data4->execute();
      $data5=$db->prepare('select * from populationanalysis where Unit like "%'.$_POST['search'].'%"');
      $data5->execute();
      
      while($OutputData = $data1->fetch(PDO::FETCH_ASSOC)){
        $populationanalysis[$OutputData['IndicatorNo']] = array(
            'IndicatorNo' => $OutputData['IndicatorNo'],
            'Topic' => $OutputData['Topic'],
            'Indicator' => $OutputData['Indicator'],
            'IndicatorName' => $OutputData['IndicatorName'],
            'Unit' => $OutputData['Unit'],
  
  
        );
    }  
    while($OutputData = $data2->fetch(PDO::FETCH_ASSOC)){
      $populationanalysis[$OutputData['IndicatorNo']] = array(
          'IndicatorNo' => $OutputData['IndicatorNo'],
          'Topic' => $OutputData['Topic'],
          'Indicator' => $OutputData['Indicator'],
          'IndicatorName' => $OutputData['IndicatorName'],
          'Unit' => $OutputData['Unit'],


      );
  }
  while($OutputData = $data3->fetch(PDO::FETCH_ASSOC)){
    $populationanalysis[$OutputData['IndicatorNo']] = array(
        'IndicatorNo' => $OutputData['IndicatorNo'],
        'Topic' => $OutputData['Topic'],
        'Indicator' => $OutputData['Indicator'],
        'IndicatorName' => $OutputData['IndicatorName'],
        'Unit' => $OutputData['Unit'],


    );
}
while($OutputData = $data4->fetch(PDO::FETCH_ASSOC)){
  $populationanalysis[$OutputData['IndicatorNo']] = array(
      'IndicatorNo' => $OutputData['IndicatorNo'],
      'Topic' => $OutputData['Topic'],
      'Indicator' => $OutputData['Indicator'],
      'IndicatorName' => $OutputData['IndicatorName'],
      'Unit' => $OutputData['Unit'],


  );
}
while($OutputData = $data5->fetch(PDO::FETCH_ASSOC)){
  $populationanalysis[$OutputData['IndicatorNo']] = array(
      'IndicatorNo' => $OutputData['IndicatorNo'],
      'Topic' => $OutputData['Topic'],
      'Indicator' => $OutputData['Indicator'],
      'IndicatorName' => $OutputData['IndicatorName'],
      'Unit' => $OutputData['Unit'],


  );
}  
    }
    else{
    $data = $db->prepare('select * from populationanalysis');
    $data->execute();
    while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
        $populationanalysis[$OutputData['IndicatorNo']] = array(
            'IndicatorNo' => $OutputData['IndicatorNo'],
            'Topic' => $OutputData['Topic'],
            'Indicator' => $OutputData['Indicator'],
            'IndicatorName' => $OutputData['IndicatorName'],
            'Unit' => $OutputData['Unit'],


        );
    }
  }
    
    $encoded_data = json_encode($populationanalysis);
    file_put_contents('db.json',$encoded_data);
    $db_json_data = file_get_contents('db.json');
    $decoded_data = json_decode($db_json_data,true);
    if(count($decoded_data)!=0){
      $c=0;
      foreach($decoded_data as $dcd_data){
        if($c==0)
        {
          $c=1;
        }
        else{
        ?>
            
            <tr>
                  <td><?php echo $dcd_data['IndicatorNo']?></td>
                  <td><?php echo $dcd_data['Topic']?></td>
                  <td><?php echo $dcd_data['Indicator']?></td>
                  <td><?php echo $dcd_data['IndicatorName']?></td>
                  <td><?php echo $dcd_data['Unit']?></td>
                </tr>  
                
           
            
        <?php
      }
    }
   }
}
}
$API = new API;
//header('Content-Type: application/json');
$API->Select();
?>

</table>

<footer>
    <p>Genius is one percent inspiration and ninety-nine percent perspiration.</p>
    <cite title="Source Title">Thomas Edison</cite>
    <p>&copy; 2023 My Web App. All rights reserved.</p>
  </footer>
</body>
</html>
