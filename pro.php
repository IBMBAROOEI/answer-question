<?php
include ('data.php');
session_start();
$score=0;
$ansuser=$_POST['answer']; /* If a user answers a question, it compares with a value in the database and a value is added...*/
$trutable=$_POST['questionid'];


$tru_ans=mysqli_query($con,"select * from javab where questionid=$trutable AND trueans=1");

$tru_answer=mysqli_fetch_assoc($tru_ans);

$t_user=$tru_answer['id'];
if($t_user==$ansuser){
    $_SESSION ['score']++;
}

else{
    $_SESSION['score']--;

}


$co = mysqli_query($con, "select * from soal "); /* If the number of questions sent by the user
                                                   is more than the number of questions in the database, you
                                                    will see the final page and scores.  */
$numquestion = mysqli_num_rows($co);
$d = $_POST['questionid'];
$d++;

if ($d > $numquestion) {
    header('location: final.php');
} else {

    header("location: 121.php?z=$d");
}

?>