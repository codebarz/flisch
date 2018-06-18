<?php
error_reporting(0);
require_once ("db.php");
$db = new MyDB();

if (isset($_POST['subDet']))
{
    $airpname = htmlspecialchars($_POST['airpname']);
    $airploc = htmlspecialchars($_POST['airploc']);

    $query = $db->prepare('INSERT INTO airport(name, location)
    VALUES(?,?)');

    $query->bindParam(1, $airpname, SQLITE3_TEXT);
    $query->bindParam(2, $airploc, SQLITE3_TEXT);

    $result = $query->execute();

    if ($result)
    {
        header("Location: admin.php?success=1");
    }
    else 
    {
        header("Location: admin.php?fail=1");
    }
}