<?php
    /*if( $_GET && $_GET['user_found'] && $_GET['user_found']==true){
    }
    if($_GET && $_GET['invalid_no']==true){
    }*/
    
    foreach ($_GET as $key => $value) {
        if ($key == 'user_found' && $value) {
            echo "<h1>User Exists</h1>";   
        }
    	if ($key == 'invalid_no' && $value) {
            echo "<h1>Enter Valid Mobile No </h1>";
    	}
    }

    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Gourmet</title>
</head>

<body>
	<form action="/Gourmet/add_user.php" method="post" required >
		name <input type="text" name="name"required ><br>
		password <input type="text" name="pswd"required ><br>
		Town <input type="text" name="town"required ><br>
        mobile no: +91 <input type="text" name="mobno"required ><br>
        <input type="submit" value="Submit">
	</form>
</body>

</html>