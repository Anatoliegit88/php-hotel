<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body style="background-color: darkgray;">
  
<div class="container text-center m-5">
<table class="table">
  <thead class="table-dark">
  <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">Distance</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Hotel Belvedere</th>
      <td>Hotel Belvedere</td>
      <td>Si</td>
      <td>4</td>
      <td>10.4 km</td>
      
    </tr>
    <th scope="row">Hotel Futuro</th>
      <td>Hotel Futuro</td>
      <td>Si</td>
      <td>2</td>
      <td>2 km</td>
     
    </tr>
    <th scope="row">Hotel Rivamare</th>
      <td>Hotel Rivamare</td>
      <td>No</td>
      <td>1</td>
      <td>1 km</td>
     
    </tr>
    <th scope="row">Hotel Milano</th>
      <td>Hotel Milano</td>
      <td>Si</td>
      <td>2</td>
      <td>50 km</td>
     
    </tr>
    <th scope="row">Hotel Bellavista</th>
      <td>Hotel Bellavista</td>
      <td>No</td>
      <td>5</td>
      <td>5.5 km</td>
    
    </tr>
  </tbody>
</table>
</div>

  
  
  <?php
  
for ($i=0; $i<=5; $i++ ) {
}  
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $i=0;
    
    while ($i < count($hotels)) {
      $addHotel = $hotels [$i];
      var_dump($addHotel);
      $i++;
    };
    ?>
   

</body>
</html>




   

   
    
    
  