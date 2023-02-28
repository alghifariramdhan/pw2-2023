<?php
  $a_fruits = [
    ["ID"=> 1,"Name"=>"Semangka", "color" => "Merah", "stock" => "40", "price" => 25000, "description" => "Semangka dengan kandungan air yang banyak"],
    ['ID'=> 2,"Name"=>"Anggur", "color" => "Ungu", "stock" => "10", "price" => 30000, "description" => "Buah berwarna ungu yang segar"],
    ['ID'=> 3,"Name"=>"jeruk", "color" => "orange", "stock" => "50", "price" => 10000, "description" => "Buah yang kaya dengan vitamin c"],
    ['ID'=> 4,"Name"=>"Melon","color"=>"Hijau","stock"=>"35","price"=> 160000,"description"=>"Buah Melon yang berwarna Hijau"],
    ['ID'=> 5,"Name"=>"Belimbing","color"=>"Kuning","stock"=>"60","price"=> 75000,"description"=>"Buah Belimbing yang berbentuk seperti Bintang"],
   ];
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
         
        <?php
          foreach($a_fruits as $fruit)
          {
            echo'<tr>';
            echo'<td>'.$fruit['ID'].'</td>';
            echo'<td>'.$fruit['Name'].'</td>';
            echo'<td>'.$fruit['color'].'</td>';
            echo'<td>'.$fruit['stock'].'</td>';
            echo'<td>'.$fruit['price'].'</td>';
            echo'<td>'.$fruit['description'].'</td>';  
            echo'</tr>';  
          }
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>