<?php ob_start();
session_start();
ob_end_flush(); 
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Profil</title> 
    <?php include "sabitseyler.php" ?>
</head>
<body >
<?php 

function check_input($data) {
    $data = trim($data);
     $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_SESSION["kullaniciAdi"])){
    $kullaniciAdiHata2 = check_input($_SESSION["kullaniciAdi"]);
}
    $servername = "localhost";   
    $username = "root";
    $password = "";
    $dbname = "halisaha";
    $message="";
 
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare(" SELECT kullaniciAdi,ad,soyad,email,sifre FROM kaydol WHERE kullaniciAdi=('$kullaniciAdiHata2')");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //$stmt->setFetchMode(PDO::FETCH_NUM);
        while ($row = $stmt->fetch()) {
        $kullaniciAdiGoster = $row['kullaniciAdi']  ;
        $adGoster = $row['ad']  ;
        $soyadGoster = $row['soyad']  ;
        $emailGoster = $row['email']  ;
        $sifreGoster = $row['sifre']  ;

        }

        } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        }
        $conn = null;
///////////////////////////////////////////////////kiralananlar
        function getir($a){
            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";
            $message="";
            if(isset($_SESSION["kullaniciAdi"])){
                $kullaniciAdiHata2 = check_input($_SESSION["kullaniciAdi"]);
            }
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $stmt2 = $conn->prepare(" SELECT kullaniciAdi,il,ilce,sahaadi,kiralamaTarihi FROM kiralananlar WHERE kullaniciAdi=('$kullaniciAdiHata2')");
            $stmt2->execute();
            $stmt2->setFetchMode(PDO::FETCH_NUM);
            //$stmt->setFetchMode(PDO::FETCH_NUM);
              $all = $stmt2->fetchAll();
    
            
            for ($row = 0;$row < sizeof($all);$row++) {
                echo $all[$row][$a] . "<br>";
                
            }
        }       
?>
    <table class="main">
    
            <td>
                <table class="profilTable" style="margin-left: 100px;">
                    <tr>
                        <th colspan=2 style="text-align: center; font-size: 70px; ">Profil</th>            
                    </tr>
                    <tr>
                        <th>Kullanıcı Adı</th>
                        <td> <?php echo "$kullaniciAdiGoster";      ?>  </td>
                    </tr>
                    <tr>
                        <th>Adı</th>
                        <td><?php echo "$adGoster";      ?> </td>
                    </tr>
                    <tr>
                        <th>Soyadı</th>
                        <td><?php echo "$soyadGoster";      ?> </td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?php echo "$emailGoster";      ?> </td>
                    </tr>
                    <tr>
                        <th>Sifre</th>
                        <td><?php echo "$sifreGoster";      ?>  </td>
                    </tr>
                </table>
            </td>


            <td>
                <table class="profilTable">        
                    <th colspan=4 style="text-align: center; font-size: 70px; ">Kiralanan Sahalar</th>
                    <tr>                       
                        <th>Tarih</th>
                        <th>İL</th>
                        <th>İlçe</th>
                        <th>Saha Adı</th>
                    </tr>
                    <tr>
                        <td> <?php getir(4);   ?></td>
                        <td> <?php getir(1);   ?></td>
                        <td> <?php getir(2);   ?></td>
                        <td> <?php getir(3);   ?></td>
                      
             
                    </tr>
                </table>
            </td>
    </table>
    <div class="main"> 
        <button class="main" style="width: 100px; height: 50px; color: black;" onclick="window.location.href='cikis.php'"> Çıkış</button>
    </div>
  
</body>
</html>

