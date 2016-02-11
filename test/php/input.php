<!DOCTYPE html>
<html>
<head>
<title>gerald</title>
<script src="../js/jquery12.js"></script>
    <script>
        $(function(){
           $('.createData').on('click', function(){
               window.location.href = 'createData.php';
           });
        });


    </script>
</head>
<body>
<form mathod="post" action="insert.php">
    <table>
    <tr><td>Name:</td><td><input type="text" name="name" id="name" /></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password" id="password"></td></tr>
    <tr><td><input type="submit" name="submit" value="enter"></td></tr>
    </table>
</form>
<button class="createData">create Data Base</button>

</body>
</html>


<?php
