<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Tablosu</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/180cc0b7f9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<section id="menu">
    <div id="logo"><i class="fab fa-umbraco" id="ikn"></i>USTUN</div>
    <nav>
        <a href="index.php"><i class="fas fa-home ikon active"></i>Ana Sayfa</a>
        <a href="urunler.php"><i class="fab fa-product-hunt ikon"></i>Ürünler</a>
        <a href="iletisim.php"><i class="fas fa-at ikon"></i>İletişim</a>
    </nav>
</section>
<table id="customers">
<tr>
<th>Ürün Adı</th>
<th>Fiyatı</th>
<th>Boyutu</th>
<th>Renk</th>
<th>Adet</th>
</tr>

</body>
</html>


<?php
session_start();
include ("urunbaglanti.php");
$sec="Select * From uruntablosu";
$sonuc=$urunbaglanti->query($sec);

if($sonuc->num_rows>0)
{
  while($cek=$sonuc->fetch_assoc())
  {
    echo"
    <tr>
    <td>".$cek['urunadi']."</td>
    <td>".$cek['urunfiyati']."</td>
    <td>".$cek['urunboyutu']."</td>
    <td>".$cek['urunrengi']."</td>
    <td>".$cek['urunadedi']."</td>
    </tr>";
  }
}

else
{
  echo "Veri tabanında veri bulunamadı.";
}


?>
</table>