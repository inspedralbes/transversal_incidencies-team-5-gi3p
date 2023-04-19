<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="inici.css">
</head>
<body>
  <?php
  $username = $_POST['userid'];
  $pwd = $_POST['password'];
  if($username == 'alvaroph' and $pwd == '1234') {
    session_start();
    $_SESSION['sid']=session_id();
    $_SESSION['username']=$username;
    header("LOCATION: landing_page.php");

  } else {
    echo "Datos incorrectos";
  }
  ?>
</body>
</html>