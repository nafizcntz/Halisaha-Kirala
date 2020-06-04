<?php ob_start();
session_start();
ob_end_flush();
?> 
<!DOCTYPE HTML>
<?php include "sabitseyler.php" ?>
<html>
<head>
<title>Üye Hali Sahalar</title>
<script>
        function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlDoc = this.responseXML;
            
            document.getElementById("saha0").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[0].childNodes[0].nodeValue;
            document.getElementById("il0").innerHTML = xmlDoc.getElementsByTagName("il")[0].childNodes[0].nodeValue;
            document.getElementById("ilce0").innerHTML = xmlDoc.getElementsByTagName("ilce")[0].childNodes[0].nodeValue;
            document.getElementById("sahaucreti0").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[0].childNodes[0].nodeValue;
            
            document.getElementById("saha1").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[1].childNodes[0].nodeValue;
            document.getElementById("il1").innerHTML = xmlDoc.getElementsByTagName("il")[1].childNodes[0].nodeValue;
            document.getElementById("ilce1").innerHTML = xmlDoc.getElementsByTagName("ilce")[1].childNodes[0].nodeValue;
            document.getElementById("sahaucreti1").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[1].childNodes[0].nodeValue;
           
            document.getElementById("saha2").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[2].childNodes[0].nodeValue;
            document.getElementById("il2").innerHTML = xmlDoc.getElementsByTagName("il")[2].childNodes[0].nodeValue;
            document.getElementById("ilce2").innerHTML = xmlDoc.getElementsByTagName("ilce")[2].childNodes[0].nodeValue;
            document.getElementById("sahaucreti2").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[2].childNodes[0].nodeValue;
            
            document.getElementById("saha3").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[3].childNodes[0].nodeValue;
            document.getElementById("il3").innerHTML = xmlDoc.getElementsByTagName("il")[3].childNodes[0].nodeValue;
            document.getElementById("ilce3").innerHTML = xmlDoc.getElementsByTagName("ilce")[3].childNodes[0].nodeValue;
            document.getElementById("sahaucreti3").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[3].childNodes[0].nodeValue;
            
            document.getElementById("saha4").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[4].childNodes[0].nodeValue;
            document.getElementById("il4").innerHTML = xmlDoc.getElementsByTagName("il")[4].childNodes[0].nodeValue;
            document.getElementById("ilce4").innerHTML = xmlDoc.getElementsByTagName("ilce")[4].childNodes[0].nodeValue;
            document.getElementById("sahaucreti4").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[4].childNodes[0].nodeValue;
            
            document.getElementById("saha5").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[5].childNodes[0].nodeValue;
            document.getElementById("il5").innerHTML = xmlDoc.getElementsByTagName("il")[5].childNodes[0].nodeValue;
            document.getElementById("ilce5").innerHTML = xmlDoc.getElementsByTagName("ilce")[5].childNodes[0].nodeValue;
            document.getElementById("sahaucreti5").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[5].childNodes[0].nodeValue;
            
            document.getElementById("saha6").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[6].childNodes[0].nodeValue;
            document.getElementById("il6").innerHTML = xmlDoc.getElementsByTagName("il")[6].childNodes[0].nodeValue;
            document.getElementById("ilce6").innerHTML = xmlDoc.getElementsByTagName("ilce")[6].childNodes[0].nodeValue;
            document.getElementById("sahaucreti6").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[6].childNodes[0].nodeValue;        
            
            document.getElementById("saha7").innerHTML = xmlDoc.getElementsByTagName("sahaadi")[7].childNodes[0].nodeValue;
            document.getElementById("il7").innerHTML = xmlDoc.getElementsByTagName("il")[7].childNodes[0].nodeValue;
            document.getElementById("ilce7").innerHTML = xmlDoc.getElementsByTagName("ilce")[7].childNodes[0].nodeValue;
            document.getElementById("sahaucreti7").innerHTML = xmlDoc.getElementsByTagName("sahaucreti")[7].childNodes[0].nodeValue;

        }
        };
        xhttp.open("POST", "halisahalistesi.xml", false);
        xhttp.send();
        }
        </script>
</head>

<body background="arka.png">    
    <div class="main">
        <p style="width:400px; height: 52px; margin:0 auto;text-align:center;font-size: 35px; color: rgb(39, 42, 43); background: rgba(255, 255, 255, 0.2); 
              backdrop-filter: blur(8px); "  > <u> Üye Halı Sahalarımız</u> </p>
        <table  class="blur">
            <tr>
                <td><img style="margin-top:10px;" src="haliSahaResim/resim0.png" height="90" width="125"></img></td>
                <td><p id="saha0"></p></td>
                <td><p id="il0"></p></td>
                <td><p id="ilce0"></p></td>
                <td><p id="sahaucreti0"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim1.png" height="90" width="125"></img></td>
                <td><p id="saha1"></p></td>
                <td><p id="il1"></p></td>
                <td><p id="ilce1"></p></td>
                <td><p id="sahaucreti1"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim2.png" height="90" width="125"></img></td>
                <td><p id="saha2"></p></td>
                <td><p id="il2"></p></td>
                <td><p id="ilce2"></p></td>
                <td><p id="sahaucreti2"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim3.png" height="90" width="125"></img></td>
                <td><p id="saha3"></p></td>
                <td><p id="il3"></p></td>
                <td><p id="ilce3"></p></td>
                <td><p id="sahaucreti3"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim4.png" height="90" width="125"></img></td>
                <td><p id="saha4"></p></td>
                <td><p id="il4"></p></td>
                <td><p id="ilce4"></p></td>
                <td><p id="sahaucreti4"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim5.png" height="90" width="125"></img></td>
                <td><p id="saha5"></p></td>
                <td><p id="il5"></p></td>
                <td><p id="ilce5"></p></td>
                <td><p id="sahaucreti5"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim6.png" height="90" width="125"></img></td>
                <td><p id="saha6"></p></td>
                <td><p id="il6"></p></td>
                <td><p id="ilce6"></p></td>
                <td><p id="sahaucreti6"></p></td>
            </tr>
            <tr>
                <td><img src="haliSahaResim/resim7.png" height="90" width="125"></img></td>
                <td><p id="saha7"></p></td>
                <td><p id="il7"></p></td>
                <td><p id="ilce7"></p></td>
                <td><p id="sahaucreti7"></p></td>
            </tr>
        </table>
         <script>loadDoc();</script>
    </div>
 </body>
 
</html>
