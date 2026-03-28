<?php
include 'db/dbconnect.php';
$aid = $_SESSION['aid'];
$sql = "SELECT account.aid, "
  . "account.firstname,"
  . " post.pid,"
  . " post.post_text,"
  . " post.post_date,"
  . " post.post_time "
  . " FROM account INNER JOIN post "
  . " ON account .aid = post.aid;";

$result = $con->query($sql);

if (!$result) {
  echo "failed to fetch posts";
  return;
}

while ($row = mysqli_fetch_assoc($result)) {
?>
  <div class="post-block">
    <div class="post-card">
      <div class="post-name"><?php echo $row['firstname'] ?></div>
      <div class="post-timestamp">
        <span><?php echo $row['post_date'] ?></span>
        <span><?php echo $row['post_time'] ?></span>
      </div>
      <div class="post-content"><?php echo $row['post_text'] ?></div>
    </div>

  </div>
<?php
}
?>