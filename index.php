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
 
function generatePassword($length=9, $strength=0) {
  $vowels = 'aeuy';
	$consonants = 'bdghjmnpqrstvz';
	if ($strength & 1) {
		$consonants .= 'BDGHJLMNPQRSTVWXZ';
	}
	if ($strength & 2) {
		$vowels .= "AEUY";
	}
	if ($strength & 4) {
		$consonants .= '23456789';
	}
	if ($strength & 8) {
		$consonants .= '@#$%';
	}
 
	$password = '';
	$alt = time() % 2;
	for ($i = 0; $i < $length; $i++) {
		if ($alt == 1) {
			$password .= $consonants[(rand() % strlen($consonants))];
			$alt = 0;
		} else {
			$password .= $vowels[(rand() % strlen($vowels))];
			$alt = 1;
		}
	}
	return $password;
}
 
?>
      <input type="submit" />
    </form>
  </body>
</html>
