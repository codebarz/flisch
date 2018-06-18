<?php
require_once ("db.php");
$db = new  MyDB();

if (isset($_POST['searchVal'])) {
    $searchquery = $_POST['searchVal'];
//    $searchquery = preg_replace("#[^0-9a-z]#i","",$searchquery);

    $query = $db->prepare("SELECT * FROM airport WHERE location LIKE '%$searchquery%'");
    $result = $query->execute();

    while ($row = $result->fetchArray(SQLITE3_ASSOC))
    {
        $name = $row['name'];
        $location = $row['location'];

        echo "<li>$name <br> $location</li>";
    }
}
?>
