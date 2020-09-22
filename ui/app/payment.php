<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>ML API</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
 
</head>

<body>
 <div class="login">
	<h1>PAYMENT</h1>

    <form action="second.php" method="post">
		<input type="text" name="name" placeholder="Name" required="required" />
		<input type="number" name="phone" placeholder="Phone_no" required="required" />
		<input type="text" name="bank" placeholder="Bank" required="required" />
		
    	<input type="number" name="account_no" placeholder="account_no" required="required" />
        <input type="password" name="cvv" placeholder="CVV" required="required" />

        <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
    </form>

   <br>
   <br>

 </div>


</body>
</html>
