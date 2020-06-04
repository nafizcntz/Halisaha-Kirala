<?php ob_start();
session_start();
$temp=0;
if ( isset( $_SESSION['kullaniciAdi'] ) ) {
  
} 
else {
    header("Location: uyegirisi.php");
    session_destroy();
    $temp=1;
}
 if ($temp==1){session_start();}
ob_end_flush();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Maç Kirala</title>
<?php include "sabitseyler.php" ?>
<script src="randevu.js">
</head>
<body>

<script>
        function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlDoc = this.responseXML;
        }
        };
        xhttp.open("POST", "halisahalistesi.xml", false);
        xhttp.send();
        }
    </script>

    

    
        <form method="post" >
        <table class = "main" style="margin-top: 100px; border-spacing:50px; background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(8px);">
                <tr>
                    <td>İl Seçiniz </td>
                    <td><select name="iller" id="iller"  style= "display: block;" onchange='IlceGetir(this.value)'></select></td>
                </tr>
                <tr>
                    <td>İlçe Seçiniz </td>
                    <td><select name="ilceler" id="ilceler"  style="display: block; width: 100px;" onchange='sahaGetir(this.value)'></select></td>
                </tr>
                <tr>
                    <td>Saha Seçiniz </td>
                    <td><select name="sahalar" id="sahalar" style="display: block; width: 150px;" onchange='tarihSaatSec(this.value)'></select></td>
                </tr>
                <tr>
                    <td>Tarih Seçiniz </td>
                    <td><input type="date"id="tarih" name="tarih"></td>
                </tr>
                <tr>
                    <td>Saat Seçiniz </td>
                    <td><input type="number" min="7" max="24"></td>
                </tr>

               <tr>
                    <td><input onclick="<?php ?>"style="margin:auto;" type="submit" value="Randevu Oluştur" name="randevu"></td>
               </tr>
               </table>
           
        </form> 
   
        

    <script>
        loadDoc();
        IlGetir();
    </script>
    
 </body>
 
</html>

<?php   
        function check_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $kullanici = "";
        if(isset($_SESSION["kullaniciAdi"])){
            $kullanici = check_input($_SESSION["kullaniciAdi"]);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['randevu'])) {
            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";
            
            $iller = check_input($_POST["iller"]);
            $ilceler = check_input($_POST["ilceler"]);
            $sahalar = check_input($_POST["sahalar"]);
            $kiralamaTarihi = check_input($_POST["tarih"]);
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO kiralananlar (kullaniciAdi, il, ilce, sahaadi, kiralamaTarihi)
                        VALUES ('$kullanici','$iller', '$ilceler', '$sahalar', '$kiralamaTarihi')";
                $conn->exec($sql);
                echo "<script> alert('Randevunuz oluşturuldu')</script>";
                
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }
    ?>