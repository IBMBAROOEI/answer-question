<?php
include 'data.php';
session_start();
$co=mysqli_query($con,'select * from soal');
$num=mysqli_num_rows($co);
$_SESSION['score']=0;
?>

<html lang="en">

<head>
    <style>

    </style>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js">
    </script>
    <script src="js/popper.js">
    </script>
    <script src="js/bootstrap.js">
    </script>

    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container justify-content-center shadow">
    <div class="card" >
        <div class="card-body text-center ">
            <h5 class="card-title">welcome</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p > test qu <?php echo$num ;?></p><!-- get question !-->
            <p > time <?php echo$num /3 ;?></p><!-- get question  time!-->
            <a href="121.php?z=1"> <button class="btn btn-primary" type="submit">start</button></a> <!-- pagination!-->
            <p> marziyeh barooei</p>
        </div>
    </div>
</div>


</body>

</html>