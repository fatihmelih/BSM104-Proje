<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FME - İletişim</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js/script.js"></script>
    <script>
    
    </script>
  </head>
<body>
<div class="header">
<p><a href="index.html">Fatih Melih Ersoy</a></p>
<ul>
    <li><a href="login.php">Giriş Yap</a></li>
    <li><a href="iletisim.php" class="active">İletişim</a></li>
    <li><a href="mirasimiz.html">Mirasımız</a></li>
    <li><a href="sehir.html">Şehrim</a></li>
    <li><a href="cv.html">CV</a></li>
    <li><a href="index.html">Hakkında</a></li>
  </ul>
</div>

  <div class="ortayazi" style="float: center;padding-right: 40%;padding-top:5%">
    <form name="iletisimFormu" action="iletisimbilgileri.php" method="POST" style="text-align:right" onsubmit="return iletisimKontrol()">
      Ad : <input type="text" name="ad" value="" placeholder="Ad"><br/><br/>
      Soyad : <input type="text" name="soyad" value="" placeholder="Soyad"><br/><br/>
      Cinsiyet : <input type="radio" name="cinsiyet" value="erkek">
      <label for="erkek">Erkek</label>
      <input type="radio" name="cinsiyet" value="kadın">
      <label for="kadın">Kadın</label><br><br>
      Sitemizi nasıl keşfettiniz? <br>
      <input type="checkbox" name="kesif" value="Ödev olduğu için">
      <label> Ödev</label>
      <input type="checkbox" name="kesif" value="Tavsiye">
      <label> Tavsiye</label>
      <input type="checkbox" name="kesif" value="Medya">
      <label> Medya</label><br><br>
      Mail : <input type="email" name="mail" value="" placeholder="Mail"><br/> <br/>
      Telefon Numarası : <input type="number" name="telefon" value="" placeholder="Telefon No"><br/><br/>
      Parola : <input type="password" name="parola" value="" placeholder="Parola"><br/><br/>
      Mesaj : <textarea name="mesaj" rows="10" cols="30"></textarea><br><br>
      <input type="submit" name="Submit">
  </form> 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>