<html>
<head>
<link rel="stylesheet" type="text/css" href="style/webstyle.css">
</head>
<div align="center">
  <img id="logo" src="res/QA_logo.png">
</div>
<div id="user_info" align="center">
<form method="POST" action="php/checkuser.php">
    <input type="text" name="myUsername" placeholder="username" required="required"></input>
    <input type="password" name="myPassword" placeholder="password" required="required"></input> <br><br>
  <input class="myButton" type="submit" name="submit" value="Log-In"></input>
  <button class="myButton" onclick="window.location='createaccountPage.php'">Create</button>
</form>
</div>
</html>
