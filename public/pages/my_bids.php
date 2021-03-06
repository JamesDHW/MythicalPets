<?php
  require_once '../../private/init.php';
  session_start();
?>
<!DOCTYPE html>
<html>
  <?php require TEMPLATE_PATH . "/html_head.php"; ?>
  <body>
    <?php
      require TEMPLATE_PATH . '/nav.php';
      if (!isset($_SESSION['userID'])){
        echo ("Please Log In to View Your Bids!");
      } else{
        ?>
        <table class="table table-hover table-striped">
          <thead class = "thead-light">
            <tr>
              <th>Bid #</th>
              <th>Item #</th>
              <th>Item Name</th>
              <th>Mythology</th>
              <th>Animal Class</th>
              <th>Description</th>
              <th>Bid Value</th>
              <th>Bid Timestamp</th>
              <?php if($_SESSION['admin']==1){echo "<th>Bidder ID</th>";}?>
              <th>Link</th>
            </tr>
          </thead>
          <?php require PUBLIC_PATH . '/forms/get_my_bids.php'?>
        </table>
    <?php  } ?>
  </body>
</html>
