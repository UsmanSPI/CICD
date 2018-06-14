<?php

require __DIR__.'/vendor/autoload.php';

?>
<h1>Production Server</h1>

<?php

$validatePassword = new ValidatePassword();
$password = "12345";

if($validatePassword->validateLength($password)){
	echo "The length of the password <b>".$password."</b> is enough";
}else{
	echo "The length of the password <b>".$password."</b> is not enough"; 
}
