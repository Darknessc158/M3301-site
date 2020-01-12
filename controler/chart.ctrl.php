
 <?php


 //Best practice is to create a separate file for handling connection to database

   $database = 'mysql:host=soysauceduck99.ddns.net;dbname=scale';
   $user = 'admincave';
   $password = 'cave';
   try{
     $db = new PDO($database, $user, $password);
   } catch (Exception $e){
     die('Erreur : ' . $e->getMessage());
   }
   $stmt = $db->prepare("SELECT * FROM visitors_table");
   $stmt ->execute();
   $json = [];
   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
     extract($row);
     $json[] = $visitor_ip;
   }
   echo json_encode($json);

$stmt = $db->query("SELECT COUNT(visitor_ip) as nb, DAY(visitor_date), MONTH(visitor_date), YEAR(visitor_date)
FROM visitors_table
GROUP BY DAY(FROM_UNIXTIME(visitor_date)),MONTH(FROM_UNIXTIME(visitor_date)), YEAR(FROM_UNIXTIME(visitor_date))");
$json2 = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
  extract($row);
  echo $visitor_date;
}

 ?>
 <!DOCTYPE HTML>
 <html>
 <head>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  </head>
  <body>
    <canvas id="myChart">
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
       // The type of chart we want to create
       type: 'line',

       // The data for our dataset
       data: {
           labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
           datasets: [{
               label: 'My First dataset',
               backgroundColor: 'rgb(255, 99, 132)',
               borderColor: 'rgb(255, 99, 132)',
               data: [0, 10, 5, 2, 20, 30, 45]
           }]
       },

       // Configuration options go here
       options: {}
    });
    </script>


    </canvas>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 </body>
 </html>
