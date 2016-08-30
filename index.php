<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat Window</title>
        <link rel="stylesheet" href="style.css" media="all"/>
    </head>
<body>
    <div id="container">
        <div id="chat_box">
          <?php
            $query = "SELECT * FROM chat ORDER BY id DESC"; /* THIS WILL ALLOW THE NEW MESSAGE TO APPEAR AT THE TOP */
            $run = $con->query($query);
            
            while ($row = $run->fetch_array()) :/*Makes an array of all items in the table*/
          ?>
           <div id="chat_data">
               <span style="color:green"><?php echo $row['name']; ?></span> :
               <span style="color: red"><?php echo $row['message']; ?></span> 
               <span style="float-right"><?php echo $row['date']; ?></span> 
           </div> 
           <?php endwhile; ?>
        </div>
    </div>
    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="enter name"/><br />
    <textarea name="msg" placeholder="enter message"></textarea><br />
        <input type="submit" name="submit" value="Send it"/>
    </form>
    <?php
        if(isset($_POST['submit'])) {
            
        $name = $_POST['name'];    
        $message = $_POST['msg'];
            
        $query = "INSERT INTO chat (name, message) values ('$name','$message')";
            
        $run = $con->query($query);
        
        if($run) {
            echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'>";
        }
            
        }
    ?>
</body>
</html>