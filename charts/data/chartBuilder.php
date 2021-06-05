<?php /** @noinspection SqlDialectInspection */
$servername = "localhost";
$username = "root";
$password = "%Dmk1132!";
$dbname = "projectnucleus";
$fileName = "C:\ProjectNucleus\charts\js\DashboardData.js";
$errorMsg = "Unable to open file!";
$noPopMsg = "Zero (0) records returned!";
$sql = "SELECT CONCAT('var flotReferralCharts = [[','0,',`jan`,'],[1,',`feb`,'],[2,',`mar`,'],[3,',`apr`,'],[4,'
    ,`may`,'],[5,',`jun`,'],[6,',`jul`,'],[7,',`aug`,'],[8,',`sep`,'],[9,',`oct`,'],[10,',`nov`,'],[11,',`dec`,']];') 
    AS X FROM referralcharts;";
$sql2 = "SELECT CONCAT('var flotRxFillCharts = [[','0,',`jan`,'],[1,',`feb`,'],[2,',`mar`,'],[3,',`apr`,'],[4,'
    ,`may`,'],[5,',`jun`,'],[6,',`jul`,'],[7,',`aug`,'],[8,',`sep`,'],[9,',`oct`,'],[10,',`nov`,'],[11,',`dec`,']];') 
    AS X FROM rxfillchart;";
$sql3 = "SELECT CONCAT('var flotClmCltCharts = [[','0,',`jan`,'],[1,',`feb`,'],[2,',`mar`,'],[3,',`apr`,'],[4,'
    ,`may`,'],[5,',`jun`,'],[6,',`jul`,'],[7,',`aug`,'],[8,',`sep`,'],[9,',`oct`,'],[10,',`nov`,'],[11,',`dec`,']];') 
    AS X FROM clmscltchart;";
$sql4 = "SELECT CONCAT('var flotDsoCharts= [[','0,',`jan`,'],[1,',`feb`,'],[2,',`mar`,'],[3,',`apr`,'],[4,'
    ,`may`,'],[5,',`jun`,'],[6,',`jul`,'],[7,',`aug`,'],[8,',`sep`,'],[9,',`oct`,'],[10,',`nov`,'],[11,',`dec`,']];') 
    AS X FROM dsochart;";
$sql5 = "SELECT 
    CONCAT(CONCAT('var PharmGrthDates = [',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 11 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 11 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 10 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 10 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 9 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 9 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 8 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 8 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 7 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 7 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 6 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 6 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 5 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 5 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 4 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 4 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 3 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 3 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 2 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 2 MONTH),
                            '\''),
                    ',',
                    CONCAT('\'',
                            MONTHNAME(NOW() - INTERVAL 1 MONTH),
                            ' ',
                            YEAR(NOW() - INTERVAL 1 MONTH),
                            '\'',
                            ',',
                            '\'',
                            MONTHNAME(NOW()),
                            ' ',
                            YEAR(NOW()),
                            '\''),
                    ']')) AS PharmGrthDates";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $myfile = fopen($fileName, "w") or die($errorMsg);
        $txt = $row["X"];
        fwrite($myfile, $txt);
        fclose($myfile);
        echo nl2br("Flot Chart New Referrals Populated...\n");
    }
} else {
    echo $noPopMsg;
}

$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $myfile2 = fopen($fileName, "a") or die($errorMsg);
        $txt2 = $row2["X"];
        fwrite($myfile2, "\n\n" . $txt2);
        fclose($myfile2);
        echo nl2br("Flot Chart Rx Fills Populated...\n");
    }
} else {
    echo $noPopMsg;
}

$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result3) > 0) {
    // output data of each row
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $myfile3 = fopen($fileName, "a") or die($errorMsg);
        $txt3 = $row3["X"];
        fwrite($myfile3, "\n\n" . $txt3);
        fclose($myfile3);
        echo nl2br("Flot Chart Claims Collected Populated...\n");
    }
} else {
    echo $noPopMsg;
}

$result4 = mysqli_query($conn, $sql4);

if (mysqli_num_rows($result4) > 0) {
    // output data of each row
    while ($row4 = mysqli_fetch_assoc($result4)) {
        $myfile4 = fopen($fileName, "a") or die($errorMsg);
        $txt4 = $row4["X"];
        fwrite($myfile4, "\n\n" . $txt4);
        fclose($myfile4);
        echo nl2br("Flot Chart DSO Populated...\n");
    }
} else {
    echo $noPopMsg;
}

$result5 = mysqli_query($conn, $sql5);

if (mysqli_num_rows($result5) > 0) {
    // output data of each row
    while ($row5 = mysqli_fetch_assoc($result5)) {
        $myfile5 = fopen($fileName, "a") or die($errorMsg);
        $txt5 = $row5["PharmGrthDates"];
        fwrite($myfile5, "\n\n" . $txt5);
        fclose($myfile5);
        echo nl2br("Pharmacy Growth Dates Populated...\n");
    }
} else {
    echo $noPopMsg;
}

mysqli_close($conn);