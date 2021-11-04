<?php
require 'PostLoader.php';
$postLoader = new PostLoader();
$postLoader->createAndAddToJson();
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest book</title>
</head>
<body>
<form method="post" class="form">
        <label for="title">Title:</label></br>
        <input type="text" class="titlebox" name="title"></br>
        <label for="date">Date:</label></br>
        <input type="text" class="datebox" name="date"></br>
        <label for="authorname">Author Name:</label></br>
        <input type="text" class="authornamebox" name="authorname"></br>
        <label for="content">Message:</label></br>
        <input type="text" class="contentbox" name="content"></br>
        <button type="submit" class="btn" name="btn">submit</button>
    </form>

</body>
<style>
    body{
        
    }
    .contentbox{
        padding: 30px;
        margin-bottom:10px;
    }
    .form{
        width:1000px;
        display: grid;
        justify-content: center;
        border: 2px solid blue;
        margin:20px auto;
        padding:10px;
    }
    .messages{
        display: grid;
        justify-content: center;
        border: 2px solid red;
        margin:10px 100px;
        padding:20px;
    }
</style>
