var sahalar = null;

function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlDoc = this.responseXML;
            sahalar = xmlDoc;
            
        }
    };
    xhttp.open("POST", "halisahalistesi.xml", false);
    xhttp.send();
}

function IlGetir(){
    var options = "<option ></option>";
    var iller = [];
    for(var i = 0; i < sahalar.getElementsByTagName("sahaadi").length;i++){
        iller.indexOf(sahalar.getElementsByTagName("il")[i].childNodes[0].nodeValue) == -1 ? iller.push(sahalar.getElementsByTagName("il")[i].childNodes[0].nodeValue) : null;
    }
    
    for(var i = 0; i < iller.length;i++){
        options += "<option value="+iller[i]+">"+iller[i]+"</option>"
    }

    document.getElementById("iller").innerHTML = options;
}

function IlceGetir(il){
    var options = "<option ></option>";
    var ilceler = [];
    for(var i = 0; i < sahalar.getElementsByTagName("sahaadi").length;i++){
        if(sahalar.getElementsByTagName("il")[i].childNodes[0].nodeValue == il)
            ilceler.indexOf(sahalar.getElementsByTagName("ilce")[i].childNodes[0].nodeValue) == -1 ? ilceler.push(sahalar.getElementsByTagName("ilce")[i].childNodes[0].nodeValue) : null;
    }

    for(var i = 0; i < ilceler.length;i++){
        options += "<option value="+ilceler[i]+">"+ilceler[i]+"</option>"
    }

    document.getElementById("ilceler").innerHTML = options;
    document.getElementById('ilceler').style.display='block';
}
function sahaGetir(ilce){
    var options= "<option ></option>";
    var sahaisimleri=[];
    for(var i=0;i<sahalar.getElementsByTagName("sahaadi").length;i++){
        if(sahalar.getElementsByTagName("ilce")[i].childNodes[0].nodeValue==ilce)
            sahaisimleri.push(sahalar.getElementsByTagName("sahaadi")[i].childNodes[0].nodeValue);
    }
    for(var i=0;i<sahaisimleri.length;i++){
        options+="<option value="+sahaisimleri[i]+">"+sahaisimleri[i]+"</option>";
    }

    document.getElementById('sahalar').innerHTML = options;
    document.getElementById('sahalar').style.display='block';
}
function tarihSaatSec(sahaismi1){
    var saat;
    var Inputs;
    var bigun=24*3600*1000;
    var d=new Date();
    var now=d.getDate();
    var seven=d.getDate()+7;
   
    
    
    Inputs="<input type='date' ><select>";
    for(saat=7;saat<=24;saat++){
        Inputs+="<option value="+saat+">"+saat+"</option>";
    }
    Inputs+="</select>";
    document.getElementById('tarih').innerHTML=Inputs;
    
}
