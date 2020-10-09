<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
 if(isset($_POST['username'])){
	 $uname=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="select *from admin where user='".$uname."'and password='".$password."' limit 1";
	 $result=mysql_query($sql);
	 if(mysql_num_rows($result)==1)
	 {
		 echo "SUCESSFUL LOGIN !!!!";
		 echo "<br><br>";
		 echo "<hr>";
		  echo "<a href='index.html'>CLICK HERE TO VIEW DETAILS</a>";
 
		 exit();
	 }
	 else
	 {
		 echo "INVALID LOGIN"; 
		 echo "<br><br>";
		 echo "<a href = 'login.php'> CLICK HERE TO GO BACK</a>";
		 exit();
	 }
 }
 ?>
 


<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width:100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;
    border-radius:25%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 8px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Login Form</h2>

<form  method="POST" action="#">
  <div class="imgcontainer">
    <img src="1112.jpg" alt="Avat" class="avat">
  </div>

  <div class="container">
    <label><b>adminname</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	
        
    <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
	<br>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="home.html">
    <button type="button" class="cancelbtn">Cancel</button></a>
    
  </div>
</form>

</body>
</html>
