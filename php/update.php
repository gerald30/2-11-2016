<?php
include("nav.php");

$cName = test_input($_REQUEST['cName']);
$db = new SQLite3('../database/data');
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}


$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);

if($admin == true) {

    $query = "SELECT * FROM `company` WHERE companyName='$cName'";
    $res = $db->query($query);

    $row = $res->fetchArray();
    $id = $row['id'];
    $cName = $row['companyName'];
    $cAddress = $row['companyAddress'];
    $cNumber = $row['companyNumber'];
    $ceoName = $row['ceoName'];
    $cEmail = $row['companyEmail'];
    $cDetail = $row['companyDetail'];
    $categories = $row['cat'];

    echo
        "<form action='update1.php'><table class=\"table\">" . '<th><h2>You want to edit this :</h2></th>' .
        "<tr><td><input type='hidden' value='" . $id . "' name='id'/></td></tr>" .
        "<tr><td>Company Name :</td><td><input type='text' class='form-control' value='" . $cName . "' name='cName'/></td></tr>" .
        "<tr><td>Company Address :</td><td> <input type='text' class='form-control' value='" . $cAddress . "' name='cAddress'/></td></tr>" .
        "<tr><td>Company Number : </td><td><input type='text'class='form-control' value='" . $cNumber . "' name='cNumber'/></td></tr>" .
        "<tr><td>Company CEO : </td><td><input type='text' class='form-control' value='" . $ceoName . "' name='ceoName'/></td></tr>" .
        "<tr><td>Company Email :</td><td> <input type='text' class='form-control' value='" . $cEmail . "' name='cEmail'/></td></tr>" .
        "<tr><td>Company Detail :</td><td> <input type='text' class='form-control' value='" . $cDetail . "' name='cDetail'/></td></tr>" .
        "<tr><td>Categories : </td><td><select class=\"form-control\" id=\"categories\" name=\"categories\">
                    <option selected=\"selected\">" . $categories . " </option>
                    <option>Hotel</option>
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
                </select></td></tr>" .
        "<tr><td><input type='submit' value='Update'/></td></tr></table></form>";

} else {
    echo "<h1>no name on database please register!";
    header("Refresh:3; url=admin.php");
}
