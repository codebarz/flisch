<?php 
require_once("db.php");
$db = new MyDB();

if(isset($_POST['subDet']))
{
    $airname = strip_tags(@$_POST['airname']);
    $imgdir = './airlineimg/';
    $airimg = $_FILES['airimg']['name'];
    $airimgtmpname = $_FILES['airimg']['tmp_name'];
    $airimgtype = $_FILES['airimg']['type'];
    $airimgsize = $_FILES['airimg']['size'];
    $regdate = date('Y/m/d H:i');

    $qcount = $db->querySingle("SELECT COUNT(*) as count FROM airlines WHERE name = '$airname'");
    if ($qcount == 1)
    {
        echo "already exist";
    }
    else 
    {
        $imagepath = $imgdir . $airimg;

        $imageresult = move_uploaded_file($airimgtmpname, $imagepath);

        if (!$imageresult)
        {
            echo "Error uploading Airline Logo/Profile Picture";
        }
        if (!get_magic_quotes_gpc())
        {
            $airimg = addslashes($airimg);
            $imagepath = addslashes($imagepath);
        }
        $stmt = $db->prepare('INSERT INTO airlines(name, date, images) 
        VALUES(?,?,?)');
        $stmt->bindValue(1, $airname);
        $stmt->bindValue(2, $regdate);
        $stmt->bindValue(3, $imagepath);

        $result = $stmt->execute();

        if($result)
        {
            header("Location: admin.php?success=1");
        }
        else
        {
            echo "An error occured, Please try again Later!...";
        }
    }
}
?>