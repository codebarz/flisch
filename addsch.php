<?php
error_reporting(E_ALL);
require_once ("db.php");
$db = new MyDB();

if (isset($_POST['subSch']))
{
    $airname = htmlspecialchars($_POST['airname']);
    $depfrom = htmlspecialchars($_POST['depFrom']);
    $arrat = htmlspecialchars($_POST['arrAt']);
    $sdepfrom = htmlspecialchars($_POST['sdepFrom']);
    $sarrat = htmlspecialchars($_POST['sarrAt']);
    $depdate = htmlspecialchars($_POST['depDate']);
    $arrdate = htmlspecialchars($_POST['arrDate']);
    $airprice = htmlspecialchars($_POST['airPrice']);
    $airperiod = htmlspecialchars($_POST['airPeriod']);
    $tClass = htmlspecialchars($_POST['tClass']);

    $query = $db->prepare('INSERT INTO schedule(airline, location, destination, depdate, arrdate, airprice, airperiod, class, sdept, sarrat)
    VALUES(?,?,?,?,?,?,?,?,?,?)');

    $query->bindParam(1, $airname, SQLITE3_TEXT);
    $query->bindParam(2, $depfrom, SQLITE3_TEXT);
    $query->bindParam(3, $arrat, SQLITE3_TEXT);
    $query->bindParam(4, $depdate);
    $query->bindParam(5, $arrdate);
    $query->bindParam(6, $airprice, SQLITE3_INTEGER);
    $query->bindParam(7, $airperiod, SQLITE3_TEXT);
    $query->bindParam(8, $tClass, SQLITE3_TEXT);
    $query->bindParam(7, $sdepfrom, SQLITE3_TEXT);
    $query->bindParam(8, $sarrat, SQLITE3_TEXT);

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