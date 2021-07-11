<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Summary</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
   


    <style>
    .logo-text{
	  font-size:20px;
      color: white;
      padding-top: 15px;

	  
    }
	 .nav-link1{
      color: white;
      font-size:20px;
     	  
    }
    .list-customer{
      padding-left: 1100px;
      
    }

    .nav-link1:hover{
      color: yellow;
      text-decoration: none;
    }
    .btn-sm{
    padding: 6px 10px;
    vertical-align: middle;
      }
    
    h2{
      text-align: center;
      margin-top: 20px;
      text-decoration: bold;
      font-family: sans-serif;
      color: white;
      background:black;
      border: 1px solid black;
    border-radius: 50px;
      font-weight: bold;
    }
    .text-footer{
    text-align: center;
    padding: 30px 0;
    font-family: 'Ubuntu',sans-serif;
    display: flex;
    justify-content: center;
    color: black;
}

    </style>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<p class="logo-text">BANK OF CHITTORGARH</p>

<ul class="navbar-nav">
<li class="list-customer">
<a class="fas fa-home" href="index.php">Home</a>
</li>
</ul>
</nav>
        <div class="container divStyle" >
        <h2>Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table roundedCorners  tabletext table-hover table-striped table-condensed" >
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th> Transferred Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';
			

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['credits']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="background">
      <p class="text-footer">

        Copyright &copy; 2021- Sejal Panwar - All rights reserved
        <br>The Sparks Foundation</br>
      </p>
  </footer>  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>