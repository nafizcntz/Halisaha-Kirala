<?php ob_start(); 
session_start(); 
ob_end_flush();?>
<?php include "sabitseyler.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Üye Girisi</title>
</head>
<body >
   <?php
   if(isset($message)){
       echo '<label class="text-danger">'.$message.'</label>';
   }   
   ?>
     
    <?php
        function check_input($data) {
            $data = trim($data);
             $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";
        
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   

    $errors = "";
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kaydol'])) {
        $kullaniciAdiHata = check_input($_POST["kullaniciAdi"]);
        $adHata = check_input($_POST["ad"]);
        $soyadHata = check_input($_POST["soyad"]);
        $emailhata = check_input($_POST["email"]);
        $sifreHata = check_input($_POST["sifre"]);

        if (empty($adHata)) {
            $errors = $errors . "* First name is required<br>";
        }
        if (!preg_match("/^[a-zA-Z .]*$/", $adHata)) {
            $errors = $errors . "* Only letters and white space allowed<br>";
        }

        if (empty($soyadHata)) {
            $errors = $errors . "* Last name is required<br>";
        }
        if (!preg_match("/^[a-zA-Z .]*$/", $soyadHata)) {
            $errors = $errors . "* Only letters and white space allowed<br>";
        }

        if (empty($emailhata)) {
            $errors = $errors . "* Email is required<br>";
        }
        if (!filter_var($emailhata, FILTER_VALIDATE_EMAIL)) {
            $errors = $errors . "* Invalid email format<br>";
        }
        if (empty($sifreHata)) {
            $errors = $errors . "* sifre is required<br>";
        }    
    }
    ?>

<?php 
  
  $errors2="";
            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";
    $message="";
    if(isset($_POST["kullaniciAdi2"])){
    $kullaniciAdiHata2 = check_input($_POST["kullaniciAdi2"]);
    }
    if(isset($_POST["sifre2"])){
    $sifreHata2 = check_input($_POST["sifre2"]);
    }
    try{
        $connect=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if(isset($_POST["giris"])){
            if(empty($_POST["kullaniciAdi2"]) || empty($_POST["sifre2"])){
                $message='<label>ALL FIELDS ARE REQUIRED</label>';
            } 
            else{
                $query="SELECT * FROM kaydol WHERE kullaniciAdi=('$kullaniciAdiHata2') AND sifre=('$sifreHata2')";
                $statement = $connect->prepare($query);
                $statement->execute(
                        array(
                            'kullaniciAdi' => $_POST["kullaniciAdi2"],
                            'sifre' => $_POST["sifre2"]
                        ) 
                    );
                $count=$statement->rowCount();
                ob_start();
                if($count>0){
                    $_SESSION["kullaniciAdi"]=$_POST["kullaniciAdi2"];
                    
                    //header("Location:www.halisahakirala.tk/admin.php");
                    echo "<script> window.location = 'admin.php'</script>";
                    
                }        
                       
                else{
                    $errors2 = $errors2 . "Yanlıs Kullanıcı Adı veya Şifre Girdiniz"; 
                    session_destroy();
                }
                ob_end_flush();
            }            
        }   
    }
    catch(PDOException $error){
        $message=$error->getMessage();
    } 
    
    ?>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kaydol']) && strlen($errors) == 0) {
            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO kaydol (kullaniciAdi, ad, soyad, email, sifre)
                    VALUES ('$kullaniciAdiHata','$adHata', '$soyadHata', '$emailhata','$sifreHata')";
            $conn->exec($sql);
            echo "<script> alert('Kaydınız Tamamlandı') </script>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
    }
    ?>
    
    <table class="main">
        <td>
            <form  method = "post" action="<?php check_input($_SERVER['PHP_SELF']); ?>" >
                <table class="uyeGirisiTable">  
                    <tr>
                    <th colspan=2 style="text-align: center; font-size: 70px; ">Kaydol</th> 
                    </tr>

                    <tr>
                        <td>Kullanici Adi  </td> 
                        <td><input placeholder="Kullanıcı Adınız" type = "text" name = "kullaniciAdi" ></input></td>
                    </tr>
                    <tr>
                        <td>Adiniz  </td> 
                        <td><input placeholder="Adınız" type = "text" name = "ad" ></input></td>
                    </tr>
                    
                    <tr>
                        <td>Soyadiniz </td> 
                        <td><input placeholder="Soyadınız"type = "text" name = "soyad"  ></input></td>
                    </tr>

                    <tr>
                        <td>Email  </td>
                        <td> <input placeholder="Mailiniz" type = "text" name = "email"  ></input></td>
                    </tr>

                    <tr>
                        <td>Sifreniz  </td> 
                        <td> <input placeholder="Şifreniz" type = "password" name = "sifre"></input></td> 
                    </tr>
                    
                    <tr>
                        <td><input type="submit" style="width: 100px;   margin:auto; color: black;" value="Kaydol" name="kaydol" ></input></td>
                        <td><span style='color:  white; font-size: 20px;'><?php echo $errors ?></span></td> 
                    </tr>
                    
                </table> 
            </form>
        </td>

        <td>
            <form method = "post" action="">
                <table class="uyeGirisiTable">                  
                    <tr>
                    <th colspan=2 style="text-align: center; font-size: 70px; ">Giris</th> 
                    </tr>

                    <tr>
                        <td>Kullanici Adi  </td> 
                        <td><input placeholder="Kullanıcı Adınız" type = "text" name = "kullaniciAdi2" ></input></td>
                    </tr>              

                    <tr>
                        <td>Sifreniz  </td> 
                        <td> <input placeholder="Şifreniz" type = "password" name = "sifre2"></input></td> 
                    </tr>
                    
                    <tr>
                        <td><input type="submit" style="width: 100px;  margin:auto; color: black;" value="Giris" name="giris" ></input></td>
                        <td><span style='color:  white; font-size: 20px;'><?php echo $errors2 ?></span></td> 
                    </tr>                
                </table> 
            </form>
        </td>  
    </table>
 
</body>
</html>





 