<?php
session_start();
if(!isset($_SESSION['name'])){
    include ('unregisteredNav.php');
    echo "<h1>Access Denied! please log in</h1><br>returning home in 3 seconds";
    header("Refresh:3; url=../index.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Company Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myCss/nav.css">
    <script src="../js/jquery12.js"></script>
    <script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../myCss/myCss.css">
    <script src="../js/admin.js"></script>
</head>
<body>
<style>
div form div.form-group{
    margin: 0;
    padding: 0;
}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">
                <img src="../image/logo.png" alt="logo" width="70px" height="60px">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../html/About.html">About</a>
                </li>
                <li>
                    <a href="client.php">Services</a>
                </li>
                <li>
                    <a href="../html/contact.html">Contact</a>
                </li>
                <li>
                    <a href="logout.php">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container formInput well well-lg">
    <h2>About your Company</h2>
    <form role="form" action="input.php">
        <div class="form-group ">
            <label for="usr">Company Name:</label>
            <input type="text" class="form-control" name="cName" required>
            <br>
            <label for="usr">Company Address:</label>
            <input type="text" class="form-control" name="cAddress">
            <br>
            <label for="usr">Company Number:</label>
            <input type="number" class="form-control" name="cNumber" required>
            <br>
            <label for="usr">CEO Name:</label>
            <input type="text" class="form-control" name="ceoName">
            <br>
            <label for="usr">Company Email:</label>
            <input type="email" class="form-control" name="cEmail" required>
            <br>
            <label for="usr">Company Details:</label>
            <input type="text" class="form-control" name="cDetail">
            <br>
                <label for="categories">Categories:</label>
                <select class="form-control" id="categories" name="categories">
                    <option selected="selected">Hotel</option>
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
                    <option>Company</option>
                </select>
            <br>
            <button type="submit" class="btn btn-default">Submit</button>

        </div>
    </form>
    <br>
    <br>
    <hr />

    <h2>Read all database data</h2>
<button class=" btn btn-default view" choose='view'>View Company</button>
<button class=" btn btn-default view" choose='viewAccount'>View User</button>
    <br>
    <div id="results"></div>
    <hr />
    <h2>Read categorize database data</h2>
    <br>
    <label for="categories">Categories:</label>

    <form role="form" action="categorize.php">
        <select class="form-control" id="categorize" name="categories">
            <option selected="selected">Hotel</option>
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
            <option>Company</option>
        </select>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <br>
    <hr />
    <h2>Update database data</h2>
    <br>
    <form role="form" action="update.php">
        <label for="usr">Company Name:</label>
        <input type="text" class="form-control" name="cName" required>
        <br>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <br>
    <hr />
    <h2>Search</h2>
    <form role="form" action="search.php">
        <label for="usr">Company Name:</label>
        <input type="text" class="form-control" name="cName" required>
        <br>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <br>
    <hr />
    <h2>Delete</h2>
    <form role="form" action="delete.php">
        <label for="usr">Company Name:</label>
        <input type="text" class="form-control" name="cName" required>
        <br>
        <br>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
<div id="result"></div>

</body>
</html>
