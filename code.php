<?php
session_start();

require 'dbcon.php';

// Datatable



// Deleting Details

if(isset($_POST['delete_test']))
{
$test_id = mysqli_real_escape_string($con, $_POST['delete_test']);

$query = "DELETE FROM loantrackerr WHERE id= '$test_id' ";
$query_run = mysqli_query($con, $query);

if($query_run)
{
    $_SESSION['message'] = "Data Deleted Successfully :)";
    header("Location: dashboard.php");
    exit(0);
}
else
{
    $_SESSION['message'] = "Data Not Deleted due to error :(";
    header("Location: dashboard.php");
    exit(0);
}

}



// Updating Details

if(isset($_POST['update_details']))
{
$test_id = mysqli_real_escape_string($con, $_POST['test_id']);

    $dot = mysqli_real_escape_string($con, $_POST['dot']);
    $cn = mysqli_real_escape_string($con, $_POST['cn']);
    $vn = mysqli_real_escape_string($con, $_POST['vn']);
    $dt = mysqli_real_escape_string($con, $_POST['dt']);
    $spoc = mysqli_real_escape_string($con, $_POST['spoc']);
    $qty = mysqli_real_escape_string($con, $_POST['qty']);
    $loc = mysqli_real_escape_string($con, $_POST['loc']);
    $sta = mysqli_real_escape_string($con, $_POST['sta']);
    $et = mysqli_real_escape_string($con, $_POST['et']);
    $cs = mysqli_real_escape_string($con, $_POST['cs']);
    $tsmr = mysqli_real_escape_string($con, $_POST['tsmr']);
    $uid = mysqli_real_escape_string($con, $_POST['uid']);
    $act = mysqli_real_escape_string($con, $_POST['act']);
    $rd = mysqli_real_escape_string($con, $_POST['rd']);
    $rem = mysqli_real_escape_string($con, $_POST['rem']);

    $query = "UPDATE loantrackerr SET DateOfTransaction='$dot', CardName='$cn', VendorName='$vn'	,
                DeviceType='$dt', SPOCtowhomcoordinate='$spoc' , Quantity='$qty', Location='$loc', Status='$sta',
                ExpectedTime='$et', ClosingStatus='$cs'	, TrackerStartingMailReference= '$tsmr'	, UsedInventoryDetails='$uid',
             Action='$act', ReminderDetails='$rd', Remarks='$rem' WHERE id='$test_id' ";

$query_run = mysqli_query($con, $query);

if($query_run)
{
    $_SESSION['message'] = "Data Updated Successfully :)";
    header("Location: dashboard.php");
    exit(0);
}
else
{
    $_SESSION['message'] = "Data Not Updated due to error. :(";
    header("Location: dashboard.php");
    exit(0);
}

}



// Saving Details

if(isset($_POST['save_details']))
{
    $dot = mysqli_real_escape_string($con, $_POST['dot']);
    $cn = mysqli_real_escape_string($con, $_POST['cn']);
    $vn = mysqli_real_escape_string($con, $_POST['vn']);
    $dt = mysqli_real_escape_string($con, $_POST['dt']);
    $spoc = mysqli_real_escape_string($con, $_POST['spoc']);
    $qty = mysqli_real_escape_string($con, $_POST['qty']);
    $loc = mysqli_real_escape_string($con, $_POST['loc']);
    $sta = mysqli_real_escape_string($con, $_POST['sta']);
    $et = mysqli_real_escape_string($con, $_POST['et']);
    $cs = mysqli_real_escape_string($con, $_POST['cs']);
    $tsmr = mysqli_real_escape_string($con, $_POST['tsmr']);
    $uid = mysqli_real_escape_string($con, $_POST['uid']);
    $act = mysqli_real_escape_string($con, $_POST['act']);
    $rd = mysqli_real_escape_string($con, $_POST['rd']);
    $rem = mysqli_real_escape_string($con, $_POST['rem']);

$query = "INSERT INTO loantrackerr (DateOfTransaction, CardName, VendorName	,
DeviceType, SPOCtowhomcoordinate , Quantity, Location, Status, ExpectedTime	,
ClosingStatus	, TrackerStartingMailReference	, UsedInventoryDetails,
Action, ReminderDetails, Remarks ) VALUES('$dot', '$cn', '$vn', '$dt', '$spoc', '$qty', '$loc',
'$sta', '$et', '$cs', '$tsmr', '$uid', '$act', '$rd', '$rem')";


$query_run = mysqli_query($con, $query);

if($query_run)
{
$_SESSION['message'] = "Data Inserted Successfully :)";
header("Location: adduser.php");
exit(0);
}
else
{
    $_SESSION['message'] = "Data Not Inserted due to error :(";
    header("Location: adduser.php");
    exit(0);
}

}

?>
