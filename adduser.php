<!DOCTYPE html>
<html>
<head>
	<title>Add new  user</title>
   <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
*{
	height:auto;
	overflow: hidden;
  padding:0px;
}
<script type="text/javascript">
    
  </script>
	.btndanger1{
  display: inline-block;
  border-radius: 4px;
  width: 120px;
  height: 30px;
  background-color: darkgreen;
  font-size: 20px;
  background-color: lightblue;
  padding: 0px;
}

.btndanger1:hover{
  background-color: skyblue;
  cursor: pointer;
}
.btn{
	
	background-color: black;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
     
      font-size: 20px;
      margin: 10px 10px;
      border-radius: 60px;
}
.list-home{
      padding-left: 1100px;
	 
    }
	.buttons .btn{
    padding: 18px 40px;
    margin-bottom: 20px;
    margin-right: 13px;
    outline: none;
}

.btn:hover {
  background-color:#e08210;
}
</style>

</head>
<body ><br><br><br><br><br><br>
	<h1 align="center" style="font-family:'Varela Round'" >Add details</h1><br><br>

  <div align="center"  style="background-color:#ffba08;">

	<form width="auto" action="add.php" method = "post"  align="center" autocomplete="off">
  		<div class="useradd">
        <br>  
		<ul class="navbar-nav">
<li class="list-home">
  <a class="nav-link1" href="index.php">Home</a>
  <br>
  <a class="nav-link1" href="viewusers.php">Customer Details</a>
</li>
</ul>
    <form width="auto" action="add.php" method = "post" align="center"  autocomplete="off">
    <div class="useradd">
        <label for="name"align="center"> Name: </label> <input class="myform" type="text" id="name" name="name" placeholder="User Name" required=""><br><br>
        <label for="email" align="center">Email: </label> <input class="myform" type="text" id="email" name="email" placeholder="Email" required=""><br><br>
        <label for="credit" align="center">Credits: </label> <input class="myform" type="text" id="credit" name="credit" placeholder="Credits" required=""><br><br>
        <button class="btn" type="submit" name="useradd">Add </button>
		
      </div>
	  
    </form>

</div>
   
    
</body>
</html>


















