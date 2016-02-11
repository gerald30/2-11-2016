<!DOCTYPE html>
<html>
<head>
    <title>gerald</title>
    <script src="../js/jquery12.js"></script>
    <script>
        $(function(){
            $('.createData').on('click', function(){
                window.location.href = 'try.php';
            });


            $('.show').on('click', function(){
                $.ajax({
                    type: "GET",
                    url: "view.php",

                    success: function(msg){
                        console.log(msg);
                        $("#results").html(msg);

                    }
                });
                return false;
            });

            $("#delete").click(function(){
                var vname = document.getElementById('nameDelete').value;
                //console.log(vname);
                $.post({
                    type: "POST",
                    url: "delete.php",
                    data: "name=hero",
                    success: function (msg, string) {
                        console.log(msg);
                        $("#result").html(msg);

                    }

            });
                return false;
            });

            });








    </script>
</head>
<body>



<form method="post" action="insert.php">
    <table>
        <tr><td>Name:</td><td><input type="text" name="name" id="name" maxlength="15"></td></tr>
        <tr><td>job:</td><td><input type="job" name="job"></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password"></td></tr>
        <label for="categories">Categories:</label>
        <select class="form-control" id="categories" name="categories">
            <option value="Hotel" selected="selected">Hotel</option>
            <option>University</option>
            <option>Automobile</option>
            <option>Groceries</option>
            <option>Pets</option>
            <option>Banks</option>
            <option>Tour Agency</option>
            <option>Restaurant</option>
            <option>Real Estate</option>
            <option>Hospital</option>
            <option>Amusement</option>
            <option>Employement</option>
        </select>
        <tr><td><input type="submit" name="submit" value="enter"></td></tr>
    </table>
</form>
<div id="result"></div>
<br>
<br>
<hr>

<button class="createData">create Data Base</button>
<button class="show">show dataBase</button>
<div id="results"></div>

    <table>
        <tr><td>Name:</td><td><input type="text" name="name" id="nameDelete" /></td></tr>
        <tr><td><input type="submit" name="submit" id="delete" value="delete"></td></tr>
    </table>


</body>
</html>

