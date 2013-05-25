<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />

    <title>Welcome: MarkThis! Online Gradebook</title>
</head>

  <body>
    <h1>Sign up!</h1>
    <form id="signup" method="post" action="http://technestudios.com/markthis1.php">
      <h3>First Name: <input name="first_name" /></h3>
      <h3>Last Name: <input name="last_name" /></h3>
      <h3>Email: <input name="teacher_email" /></h3>
      <h3>School: <input name="school" /></h3>
      <h3>Desired username: <input name="teacher_username" /></h3>
  <?php
    $pass = array();
    
    function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
   $password=implode($pass); //turn the array into a string
   return $password;
}

randomPassword();


?>
      <input type="submit" />
    </form>
  </body>
</html>
