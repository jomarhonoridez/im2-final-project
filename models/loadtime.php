
<?php
include 'db/dbconnect.php';
$aid=$_SESSION['aid'];
$sql = "SELECT ACCOUNT .aid, "
        . "ACCOUNT.firstname,"
        . " post.pid,"
        . " post.post_text,"
        . " post.post_date,"
        . " post.post_time "
        . " FROM ACCOUNT INNER JOIN post "
        . " ON ACCOUNT .aid = post.aid;";

$result=$con->query($sql);

while ($row= mysqli_fetch_assoc($result)){
    echo"<div class=\"post-block\">";
     echo"<div class='post-name'>";
      echo $row['firstname']. " ";
    echo $row['post_text'];
    echo "</div>";
    
    
     echo"<div class='post-content'>";
      echo $row['post_text'];
    echo "</div>";
    echo "</div>";
}