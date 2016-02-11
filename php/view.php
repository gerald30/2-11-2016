
<?php

$db = new SQLite3('../database/data');
$query="SELECT * FROM 'company'";
$res=$db->query($query);


echo "<h1>Company Book</h1>
<div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Address</th>
        <th>Number </th>
        <th>CEO</th>
        <th>Email</th>
        <th>Detail</th>
      </tr>
    </thead>
     <tbody>";

while($row = $res->fetchArray()){


    $cName = $row['companyName'];
    $cAddress = $row['companyAddress'];
    $cNumber = $row['companyNumber'];
    $ceoName = $row['ceoName'];
    $cEmail = $row['companyEmail'];
    $cDetail = $row['companyDetail'];
    $categories = $row['cat'];

    echo '<tr class="info"><td>'. $cName . '</td>
            <td>'. $cAddress."</td>
            <td>" . $cNumber ."</td>
            <td>" . $ceoName ."</td>
            <td>" . $cEmail ."</td>
            <td>" . $cDetail ."</td></tr>";
}
echo " </tbody></table></div>";
