var drz;
function lihat(katain){
    if(kata.length==0){
        document.getElementById("crin").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="prosesin.php";
        drz.onreadystatechange=stateChanged;
        var params = "qin="+katain;
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function buatajax(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}

function stateChanged(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("crin").innerHTML = data;
            document.getElementById("crin").style.visibility = "";
        }else{
            document.getElementById("crin").innerHTML = "";
            document.getElementById("crin").style.visibility = "hidden";
        }
    }
}

function isi(katain){
    document.getElementById("katain").value = kata;
    document.getElementById("crin").style.visibility = "hidden";
    document.getElementById("crin").innerHTML = "";
}