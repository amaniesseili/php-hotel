<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  <title>Elenco Hotel</title>
</head>
<body>

<?php

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

?>
<!-- ------  step 1 : stampare i dati degli hotel   ------------ -->

<?php
/*foreach ($hotels as $hotel){
  echo "Nome: "  . $hotel[ "name"] . "<br>"; 
  echo "Descrizione:" . $hotel["description"] . "<br>";
  echo "Parcheggio: " . ($hotel['parking'] ? 'Sì' : 'No') . "<br>";   // se $hotel[parking]è true stampa sì
  echo "Voto: " . $hotel['vote'] . "<br>";
  echo "Distanza dal centro: " . $hotel['distance_to_center'] . "<br>";

}*/

?>
<!-- ------------------------------------------------------------------------ -->
<!-- ------  step 2 : vedere i dati degli hotel in una tabella   ------------ -->
<div class="container">
        <h1 class="mt-5">Elenco Hotel</h1>
        <table class="table mt-5 mb-5">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro </th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($hotels as $hotel) {
                    echo "<tr>";
                    echo "<td>" . $hotel['name'] . "</td>";
                    echo "<td>" . $hotel['description'] . "</td>";
                    echo "<td>" . ($hotel['parking'] ? 'Sì' : 'No') . "</td>";
                    echo "<td>" . $hotel['vote'] . "</td>";
                    echo "<td>" . $hotel['distance_to_center'] . "</td>";
                    echo "</tr>";
                }

                ?> 

            </tbody>
        </table>
            <!-- ------------------------------------------------------------------------ -->
            <!-- ------  step 3 : Bonus - filtro per parking  ------------ -->
            <form method="GET" action="">
                <label for="parking">Filtra per Parcheggio: </label>
                <input type="checkbox" name="parking">

                <button type="button" class="btn btn-outline-success ms-5">Applica Filtro</button>



    </form>
    </div>






  
</body>
</html>