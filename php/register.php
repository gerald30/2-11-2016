
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../bootstrap-3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="../myCss/nav.css">
<script src="../js/jquery12.js"></script>
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../myCss/myCss.css">
<style>
    div.down {
        padding-top: 50px;
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
            </ul>
        </div>
     </div>
</nav>
<div class="container down">
    <h1>Register:</h1>
<form name="test" action="register1.php">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>