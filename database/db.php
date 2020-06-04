<!-- //////////////////////////////////halisaha DATABASE OLUŞTURMAK-->
    <?php /*
          $servername = "localhost";   
            $username = "root";
            $password = "";
           
          $sql;
          try {
            $conn = new PDO("mysql:host=$servername", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE DATABASE IF NOT EXISTS halisaha";
            $conn->exec($sql);
          echo "<script>alert('DataBase Oluşturuldu')</script>";
          } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          $conn = null;
        */
    ?>

<!-- ///////////////////////////////////kaydol TABLOSU OLUŞTURMAK-->
   <?php
     /*
            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS kaydol (
                kullaniciAdi VARCHAR(10) PRIMARY KEY,
                ad VARCHAR(30) NOT NULL,
                soyad VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                sifre VARCHAR(16) NOT NULL,
                kayitTarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script>alert('Kaydol Tablosu Oluşturuldu')</script>";
        } 
        catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
   */
    ?> 

<!-- //////////////////////////////////////kiralananlar TABLOSU OLUŞTURMAK-->
<?php   
    /*
            $servername = "localhost";   
            $username = "root";
            $password = "";
            $dbname = "halisaha";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql to create table
            $sql = "CREATE TABLE kiralananlar (
                 kullaniciAdi VARCHAR(10) NOT NULL,
                il VARCHAR(30) NOT NULL,
                ilce VARCHAR(30) NOT NULL,
                sahaadi VARCHAR(50) NOT NULL,
                kiralamaTarihi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "<script>alert('Kiralanan Tablosu Oluşturuldu')</script>";
        } 
        catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        */

    ?>