var drz;
function lihat(kata){
    if(kata.length==0){
        document.getElementById("kotaksugest").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="proses.php";
        drz.onreadystatechange=stateChanged;
        var params = "q="+kata;
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
            document.getElementById("kotaksugest").innerHTML = data;
            document.getElementById("kotaksugest").style.visibility = "";
        }else{
            document.getElementById("kotaksugest").innerHTML = "";
            document.getElementById("kotaksugest").style.visibility = "hidden";
        }
    }
}



function isi(kata){
    document.getElementById("kata").value = kata;
    document.getElementById("kotaksugest").style.visibility = "hidden";
    document.getElementById("kotaksugest").innerHTML = "";
}

