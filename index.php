<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chat Window</title>
        <link rel="stylesheet" href="style.css" media="all"/>
        <script>
            function ajax(){
                
                var req = new XMLHttpRequest();
                
                req.onreadystatechange = function() {
                    if(req.readyState == 4 && req.status == 200) {
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
               
                req.open('GET','chat.php', true);
                req.send();
            }
            setInterval (function() {ajax() },500); 
        </script>
        <style>#form {width: 100%; text-align:center;}</style>
    </head>
<body onload="ajax();">
  <div id="form">
   <form method="post" action="index.php">
        <input type="name" name="name" placeholder="enter name" required="required"/><br />
        <textarea type="msg" name="message" cols="30" rows="2" placeholder="What would you like to say?"></textarea><br />
        <input type="submit" name="submit" value="Send it"/>
    </form>
   </div>
    <div id="container">
        <div id="chat_box">
            <div id="chat"></div>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])) {
            if($_POST['name'] == 'Chris') {
                $_POST['msg'] = "Sorry your not invited to conversation";
            }
        
        $name = $_POST['name'];       
        $message = $_POST['msg'];
            
        $query = "INSERT INTO chat (name,message) values ('$name','$message')";
            /*echo 'Person: '. $name ."<br>";
            echo "  Said: ". $message;*/
            
        $run = $con->query($query);
        
        if($run) {
            echo "<embed loop='false' src='bison.wav' hidden='true' autoplay='true'>";
        }
            
        }
    ?>
</body>
</html>