
<?php

$db = new SQLite3('../database/data');
$query="SELECT * FROM 'users'";
$res=$db->query($query);


echo "<h1>Company Book</h1>
<div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Email</th>
        <th>Password </th>
      </tr>
    </thead>
     <tbody>";

while($row = $res->fetchArray()){


    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];

    echo '<tr class="info"><td>'. $name . '</td>
            <td>'. $email."</td>
            <td>" . $password ."</td></tr>";
}
echo " </tbody></table></div>";
