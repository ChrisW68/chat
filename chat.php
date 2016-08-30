<?php
include 'db.php';

$query = "SELECT * FROM chat ORDER BY id DESC"; /* THIS WILL ALLOW THE NEW MESSAGE TO APPEAR AT THE TOP */
    $run = $con->query($query);

    while ($row = $run->fetch_array()) :/*Makes an array of all items in the table*/
  ?>
   <div id="chat_data">
       <span style="color:green"><?php echo $row['name']; ?></span> :
       <span style="color: red"><?php echo $row['message']; ?></span> 
       <span style="float-right"><?php echo formatDate($row['date']); ?></span> 
   </div> 
   <?php endwhile; ?>