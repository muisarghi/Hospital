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

function lihat2(kata2){
    if(kata2.length==0){
        document.getElementById("kotaksugest2").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="prosesin.php";
        drz.onreadystatechange=stateChanged2;
        var params = "q2="+kata2;
		
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function lihat3(kata3){
    if(kata3.length==0){
        document.getElementById("kotaksugest3").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="prosesio.php";
        drz.onreadystatechange=stateChanged3;
        var params = "q3="+kata3;
		
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function lihat4(kata4){
    if(kata4.length==0){
        document.getElementById("kotaksugest4").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="prosesnn.php";
        drz.onreadystatechange=stateChanged4;
        var params = "q4="+kata4;
		
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function lihat5(kata5){
    if(kata5.length==0){
        document.getElementById("kotaksugest5").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="prosesno.php";
        drz.onreadystatechange=stateChanged5;
        var params = "q5="+kata5;
		
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function lihato(katao){
    if(katao.length==0){
        document.getElementById("kotaksugesto").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="proseso.php";
        drz.onreadystatechange=stateChangedo;
        var params = "qo="+katao;
		
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function lihatnormal(katanormal){
    if(katanormal.length==0){
        document.getElementById("kotaksugestnormal").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="normal.php";
        drz.onreadystatechange=stateChangednormal;
        var params = "qnormal="+katanormal;
		
        drz.open("POST",url,true);
        //beberapa http header harus kita set kalau menggunakan POST
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        drz.setRequestHeader("Content-length", params.length);
        drz.setRequestHeader("Connection", "close");
        drz.send(params);
    }
}

function lihatoperasi(kataoperasi){
    if(kataoperasi.length==0){
        document.getElementById("kotaksugestoperasi").style.visibility = "hidden";
    }else{
        drz = buatajax();
        var url="operasi.php";
        drz.onreadystatechange=stateChangedoperasi;
        var params = "qoperasi="+kataoperasi;
		
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

function stateChanged2(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugest2").innerHTML = data;
            document.getElementById("kotaksugest2").style.visibility = "";
        }else{
            document.getElementById("kotaksugest2").innerHTML = "";
            document.getElementById("kotaksugest2").style.visibility = "hidden";
        }
    }
}

function stateChanged3(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugest3").innerHTML = data;
            document.getElementById("kotaksugest3").style.visibility = "";
        }else{
            document.getElementById("kotaksugest3").innerHTML = "";
            document.getElementById("kotaksugest3").style.visibility = "hidden";
        }
    }
}

function stateChanged4(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugest4").innerHTML = data;
            document.getElementById("kotaksugest4").style.visibility = "";
        }else{
            document.getElementById("kotaksugest4").innerHTML = "";
            document.getElementById("kotaksugest4").style.visibility = "hidden";
        }
    }
}

function stateChanged5(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugest5").innerHTML = data;
            document.getElementById("kotaksugest5").style.visibility = "";
        }else{
            document.getElementById("kotaksugest5").innerHTML = "";
            document.getElementById("kotaksugest5").style.visibility = "hidden";
        }
    }
}

function stateChangedo(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugesto").innerHTML = data;
            document.getElementById("kotaksugesto").style.visibility = "";
        }else{
            document.getElementById("kotaksugesto").innerHTML = "";
            document.getElementById("kotaksugesto").style.visibility = "hidden";
        }
    }
}
function stateChangednormal(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugestnormal").innerHTML = data;
            document.getElementById("kotaksugestnormal").style.visibility = "";
        }else{
            document.getElementById("kotaksugestnormal").innerHTML = "";
            document.getElementById("kotaksugestnormal").style.visibility = "hidden";
        }
    }
}
function stateChangedoperasi(){
var data;
    if (drz.readyState==4 && drz.status==200){
        data=drz.responseText;
        if(data.length>0){
            document.getElementById("kotaksugestoperasi").innerHTML = data;
            document.getElementById("kotaksugestoperasi").style.visibility = "";
        }else{
            document.getElementById("kotaksugestoperasi").innerHTML = "";
            document.getElementById("kotaksugestoperasi").style.visibility = "hidden";
        }
    }
}
function isi(kata){
    document.getElementById("kata").value = kata;
    document.getElementById("kotaksugest").style.visibility = "hidden";
    document.getElementById("kotaksugest").innerHTML = "";
}

function isi2(kata2){
    document.getElementById("kata2").value = kata2;
    document.getElementById("kotaksugest2").style.visibility = "hidden";
    document.getElementById("kotaksugest2").innerHTML = "";
}

function isi3(kata3){
    document.getElementById("kata3").value = kata3;
    document.getElementById("kotaksugest3").style.visibility = "hidden";
    document.getElementById("kotaksugest3").innerHTML = "";
}

function isi4(kata4){
    document.getElementById("kata4").value = kata4;
    document.getElementById("kotaksugest4").style.visibility = "hidden";
    document.getElementById("kotaksugest4").innerHTML = "";
}

function isi5(kata5){
    document.getElementById("kata5").value = kata5;
    document.getElementById("kotaksugest5").style.visibility = "hidden";
    document.getElementById("kotaksugest5").innerHTML = "";
}
function isio(katao){
    document.getElementById("katao").value = katao;
    document.getElementById("kotaksugesto").style.visibility = "hidden";
    document.getElementById("kotaksugesto").innerHTML = "";
}
function isinormal(katanormal){
    document.getElementById("katanormal").value = katao;
    document.getElementById("kotaksugestnormal").style.visibility = "hidden";
    document.getElementById("kotaksugestnormal").innerHTML = "";
}
function isioperasi(kataoperasi){
    document.getElementById("kataoperasi").value = katao;
    document.getElementById("kotaksugestoperasi").style.visibility = "hidden";
    document.getElementById("kotaksugestoperasi").innerHTML = "";
}