<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        
        <link type="text/css" rel="stylesheet" href="style.css">
      <!--  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    
    </head>
    <body>
        <div class="menu">
            <ul>
                <li><a href="bizkimiz.php">Biz Kimiz</a></li>
                <li><a href="harita.php">Harita</a></li>
                <li><a href="mackirala.php">Maç Kirala</a></li>
                <li><a href="uyehalisahalar.php">Üye Halı Sahalar</a></li>
                <li><a id = "na" href="uyegirisi.php">
                <?php 
                if ( isset( $_SESSION['kullaniciAdi'] ) ) {
                    echo "<script>document.getElementById('na').href=('admin.php'); </script>";
                    echo $_SESSION["kullaniciAdi"]; }
                else {  
                    echo "Üye Girişi";
                }
                ?></a></li>
            </ul>
        </div>
        <div class="footer" style="heigth: 100px; width:1000px;">
            <ul style="margin-left: 40px;">
                <li>  
                    <a href="https://www.linkedin.com/in/demirerdem/">
                        <img src="ikon/linkedin.png" width="30px" height="30px" alt="resim bulunamadi">                    
                    </a>
                </li>

                <li>
                    <a href="https://www.instagram.com/nafizcntz/?hl=tr">
                        <img src="ikon/insta.png" width="30px" height="30px" alt="resim bulunamadi">
                    </a>
                </li>

                <li>
                    <a href="https://tr-tr.facebook.com/zuck">
                        <img src="ikon/facebook.png" width="30px" height="30px" alt="resim bulunamadi">
                    </a>
                </li>

                <li>
                    <a href="https://twitter.com/ekrem_imamoglu">
                        <img src="ikon/twitter.png" width="36px" height="30px" alt="resim bulunamadi">
                    </a>
                </li>
                
                <li style="margin-left: 110px; width: 400px;">
                    2020 © HaliSaha All Right Reserved
                </li>
            </ul>
        </div>
    </body>
</html>
