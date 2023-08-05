<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> EDIT DATA </title>
</head>

<body>

    <div class="container mt-5 mb-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Loan Tracker - <strong>Edit</strong>
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                        <div class="card-body">

                            <?php
                            if (isset($_GET['id'])) {
                                $test_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM loantrackerr WHERE id='$test_id' ";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0)
                                {
                                    $test = mysqli_fetch_array($query_run);
                            ?>


                            <form action="code.php" method="POST">
                                <input type="hidden" name="test_id" value="<?= $test_id; ?>">


                                <div class="mb-3">
                                    <label> DATE OF TRANSACTION </label>
                                    <input type="date" name="dot" value="<?=$test['DateOfTransaction']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> CARD NAME </label>
                                    <input type="text" name="cn" value="<?=$test['CardName']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> VENDOR NAME </label>
                                    <input type="text" name="vn" value="<?=$test['VendorName']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> DEVICE TYPE </label>
                                    <input type="text" name="dt" value="<?=$test['DeviceType']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> SPOC TO WHOM CO-ORDINATE </label>
                                    <input type="text" name="spoc" value="<?=$test['SPOCtowhomcoordinate']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> QUANTITY </label>
                                    <input type="text" name="qty" value="<?=$test['Quantity']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> LOCATION </label>
                                    <input type="text" name="loc" value="<?=$test['Location']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> STATUS </label>
                                    <input type="text" name="sta" value="<?=$test['Status']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> EXPECTED TIME </label>
                                    <input type="text" name="et" value="<?=$test['ExpectedTime']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> CLOSING STATUS </label>
                                    <input type="text" name="cs" value="<?=$test['ClosingStatus']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> TRACKER STARTING MAIL REF. </label>
                                    <input type="text" name="tsmr" value="<?=$test['TrackerStartingMailReference']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> USED INVENTORY DETAILS </label>
                                    <input type="text" name="uid" value="<?=$test['UsedInventoryDetails']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> ACTION </label>
                                    <input type="text" name="act" value="<?=$test['Action']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> REMINDER DATE </label>
                                    <input type="date" name="rd" value="<?=$test['ReminderDetails']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> REMARKS </label>
                                    <input type="text" name="rem" value="<?=$test['Remarks']; ?>" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="update_details" class="btn btn-primary">
                                        UPDATE DETAILS </button>
                                </div>

                            </form>

                            <?php
                                } else {
                                    echo "<h4> No Such Id Found </h4>";
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>