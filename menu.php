<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>menu</title>
<link href="images/Style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
</head>

<body>
<div id="myjquerymenu" class="jquerycssmenu"><ul >
    <li><a href="index.php">Home</a></li>
    <li><a href="content_profile.php">Profile</a></li>
	<li><a href="content_artikel.php">Artikel</a></li>
    <li><a href="#">Agenda</a>
        <ul>
            <li><a href="content_agenda_kauman.php">Mardiwaluya Kauman</a></li>
            <li><a href="content_agenda_rampal.php">Mardiwaluya Rampal</a></li>       
        </ul>
    </li>
    <li><a href="#">Galeri</a>
	    <ul>
            <li><a href="content_galeri_kauman.php">Mardiwaluya Kauman</a></li>
            <li><a href="content_galeri_rampal.php">Mardiwaluya Rampal</a></li>       
        </ul>	
	</li>
    <li><a href="#">Rubrik Kesehatan Online</a>
	    <ul>
            <li><a href="registrasi.php">Pendaftaran Anggota</a></li>
            <li><a href="loginuser.php">Login Anggota</a></li>  
			<li><a href="pasien_bertanya_dokter_menjawab.php">Pasien Bertanya Dokter Menjawab</a></li>      
        </ul>	
	</li>
	<li><a href="kontak.php">Kontak</a>
	<li>
</ul><?php 
		  if(isset($_SESSION['agent_cek_in']) || ($_SESSION['agent_cek_in']==md5($_SERVER['HTTP_USER_AGENT'])) ){
		  //connect to database
		  include 'con_rs.php';
		  //get the user name
		  $query="select * from user where email='".$_SESSION['user_id']."'";
		  $result=mysql_query($query);
		  $row=mysql_fetch_array($result);
		  echo '<div class="marque">< '.$row['email'];
		  echo ' ><a href="logout.php" title="Logout" class="marque">Logout</a></div>';
				} ;
		  ?></li></div>
</body>
</html>
