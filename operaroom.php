<?php include 'connect.php';?>
<?php include 'pat.php';?>
<?php include 'lvlauth.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital Dr. Pablo Acosta Ortiz</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
</head>
<script type="text/javascript" src="js/rightde.js"></script>
<body>
  <?php include_once('navbar.php');?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">HPAO<br /><small style="font-size:20px">Sistema Administrativo de Hospitales del Edo. Apure</small></h1></div>

</div>
</div>
<br />


<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="roomavi.php"><strong>Habitaciones Disponibles</strong></a></li>

</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Habitaciones Disponibles</h3></div>
<br />
<center>
  <form action="">
    <button name="submit" class="btn"  onclick="btnClick();" >Refresh</button>
  </form><br>
  <?php include 'romc.php'; ?>
<table style=""    border="0" width="550">
<tr>
  <td style="border: 5px solid black" id="r1" height="100"><center>Habitación No: 1</center></td>
  <td style="border: 5px solid black" id="r2" height="100"><center>Habitación No: 2</center></td>
  <td style="border: 5px solid black" id="r3" height="100"><center>Habitación No: 3</center></td>
  <td style="border: 5px solid black" id="r4" height="100"><center>Habitación No: 4</center></td>
  <td style="border: 5px solid black" id="r5" height="100"><center>Habitación No: 5</center></td>
</tr>
<tr>

  <td style="border: 5px solid black" id="r6" height="100"><center>Habitación No: 6</center></td>
  <td style="border: 5px solid black" id="r7" height="100"><center>Habitación No: 7</center></td>
  <td style="border: 5px solid black" id="r8" height="100"><center>Habitación No: 8</center></td>
  <td style="border: 5px solid black" id="r9" height="100"><center>Habitación No: 9</center></td>
  <td style="border: 5px solid black" id="r10"height="100"><center>Habitación No: 10</center></td>
</tr>

</table>
</center>
<br>
<center>
  <table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
  <thead>
  <tr>
  <th valign=""><strong>S.No</strong></th>
  <th><strong>Habitación ID</strong></th>
  <th><strong>Habitación Nombre</strong></th>
  <th><strong>Doctor de habitación</strong></th>
  <th><strong>Habitación Disponible</strong></th>
  <th><strong>Limpieza Hora de la Mañana</strong></th>
  <th><strong>Limpieza Hora de la Tarde</strong></th>
  <th></th>
  </tr>
  </thead>
  <tbody>
  <?php
  $count=1;
  $sel_query="SELECT * FROM `hospi_room`";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  <tr valign="middle">
      <td  align="left"><strong><?php echo $count; ?></strong> </td>
      <td  align="left"><?php echo $row["room_id"]; ?></td>
      <td  align="left"><?php echo $row["room_name"]; ?></td>
      <td  align="left"><?php echo $row["room_doc"]?></td>
  	  <td  align="left"><?php echo $row["room_avilabl"]; ?></td>
      <td  align="left"><?php echo $row["rc_time_mo"]; ?></td>
      <td  align="left"><?php echo $row["rc_time_ev"]; ?></td>
      <td  align="center"><a href="roomup.php?id=<?php echo $row["room_id"]; ?>" name="ad">Actualizar Información de la Habitación</a></td>

  </tr>

  <?php
  $count++; } ?>
  </tbody>
  </table>
</center>
</div>
</div>
</div>
<br>






<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/rooma.js"></script>


</body>
<footer>

</footer>
</html>
