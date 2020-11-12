<?php
include 'data.php';
$d=$_GET['z'];
$co=mysqli_query($con,"select * from soal where id= $d ");
$q=mysqli_fetch_assoc($co);
$c=mysqli_query($con,"select * from javab where questionid=$d ");
?>


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
<div class="container">
 <h5 class="shadow  text-info text-center p-5 "  style="background-color: darkgray" > your welcome
 </h5>


<form method="post" action="pro.php">
    <ul class="list-group pt-5 shadow ">
        <li  class="list-group-item" > <?php echo ($q['text']);?></li> <!--  show question one just  !-->
        <?php  foreach ($c as $x):?>
        <li  class="list-group-item  "><input type="radio" name="answer" value="<?php echo ($x['id'])?>"> <?php echo($x['text']) ;?></li> <!--  show answer question one just  !-->
       <?php endforeach;?>

    </ul>
    <button type="submit"  value="next" class="btn btn-danger mt-5">next</button>
    <input type="hidden" name="questionid" value="<?php echo $d; ?>"> <!--  next to question !-->
</form>





</div>


</body>

</html>