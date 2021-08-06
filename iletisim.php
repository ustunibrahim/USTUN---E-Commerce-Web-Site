<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/180cc0b7f9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
</head>
<body>
    <section id="menu">
        <div id="logo"><i class="fab fa-umbraco" id="ikn"></i>USTUN</div>
        <nav>
            <a href="index.php"><i class="fas fa-home ikon"></i>Ana Sayfa</a>
            <a href="urunler.php"><i class="fab fa-product-hunt ikon"></i>Ürünler</a>
            <a href="iletisim.php"><i class="fas fa-at ikon active"></i>İletişim</a>
        </nav>
    </section>
    <section id="iletisim">
        <div class="container"></div>
        <h3 id="h3iletisim">İletişim</h3>
        <form action="iletisim.php" method="post">
        <div id="iletisimopak">
            <div id="formgroup">
                <div id="solform">
                    <input type="text" name="isim" placeholder="Ad-Soyad" required class="formcontrol">
                    <input type="text" name="tel" placeholder="Telefon Numarası" required class="formcontrol">
                </div>
                <div id="sagform">
                    <input type="email" name="mail" placeholder="Mail Adresi" required class="formcontrol">
                    <input type="text" name="konu" placeholder="Ürün Adı ve Özellikleri" required class="formcontrol">
                </div>
                <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Adres Bilgileriniz" required class="formcontrol"></textarea>
                <input type="submit" value="Gönder">
            </div>
            <div id="adres">
                <h4 id="adresbaslik">Adres:</h4>
                <br>
                <p class="adresp">Bahçelievler Mahallesi</p>
                <br>
                <p class="adresp">297. Sokak</p>
                <br>
                <p class="adresp">Ankara/Gölbaşı</p>
                <br>
                <p class="adresp">05555555555</p>
                <br>
                <p class="adresp">Mail:ustunibrahim32@gmail.com</p></div>
            </div>
            </form>
            <div id="social">
                <a href="https://www.linkedin.com/in/ibrahimüstün9732" target="_blank"><i class="fab fa-linkedin icon"></i></a>
                <a href="https://twitter.com/ustunibrahim_" target="_blank"><i class="fab fa-twitter-square icon"></i></a>
                <a href="https://www.instagram.com/ustunibrahim_/" target="_blank"><i class="fab fa-instagram icon"></i></a>
            </div>
            
            <footer>
                <div id="copyright">2021 | Tüm Hakları Saklıdır</div>
               
            </footer>
        </div>
    </section>
</body>
</html>
<?php 
include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
$adsoyad=$_POST["isim"];
$telefon=$_POST["tel"];
$email=$_POST["mail"];
$konu=$_POST["konu"];
$mesaj=$_POST["mesaj"];

$ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
if($baglan->query($ekle)===TRUE)
{
    echo"Başarılı bir şekilde gönderildi.";
}
else{
    echo"Hata oluştu";
}
}

?>