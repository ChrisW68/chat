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
           <div id="chat_data">
               <span style="color:green">Chris: </span>
               <span style="color: red">How are you? </span>
               <span style="float-right">1:00 p.m.</span>
           </div>    
        </div>
    </div>
    <form method="post" action="index.php">
        <input type="text" name="name" placeholder="enter name"/><br />
    <textarea name="enter message" placeholder="enter message"></textarea><br />
        <input type="submit" name="submit" value="Send it"/>
    </form>
</body>
</html>