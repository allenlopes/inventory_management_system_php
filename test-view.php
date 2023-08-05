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

    <title> VIEW DATA </title>
</head>

<body>

    <div class="container mt-5 mb-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Loan Tracker - <strong>View</strong>
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



                                <div class="mb-3">
                                    <label> DATE OF TRANSACTION </label>
                                    <p class="form-control">
                                    <?=$test['DateOfTransaction']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> CARD NAME </label>
                                    <p class="form-control">
                                    <?=$test['CardName']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> VENDOR NAME </label>
                                    <p class="form-control">
                                    <?=$test['VendorName']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> DEVICE TYPE </label>
                                    <p class="form-control">
                                    <?=$test['DeviceType']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> SPOC TO WHOM CO-ORDINATE </label>
                                    <p class="form-control">
                                    <?=$test['SPOCtowhomcoordinate']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> QUANTITY </label>
                                    <p class="form-control">
                                    <?=$test['Quantity']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> LOCATION </label>
                                    <p class="form-control">
                                    <?=$test['Location']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> STATUS </label>
                                    <p class="form-control">
                                    <?=$test['Status']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> EXPECTED TIME </label>
                                    <p class="form-control">
                                    <?=$test['ExpectedTime']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> CLOSING STATUS </label>
                                    <p class="form-control">
                                    <?=$test['ClosingStatus']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> TRACKER STARTING MAIL REF. </label>
                                    <p class="form-control">
                                    <?=$test['TrackerStartingMailReference']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> USED INVENTORY DETAILS </label>
                                    <p class="form-control">
                                    <?=$test['UsedInventoryDetails']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> ACTION </label>
                                    <p class="form-control">
                                    <?=$test['Action']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> REMINDER DATE </label>
                                    <p class="form-control">
                                    <?=$test['ReminderDetails']; ?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label> REMARKS </label>
                                    <p class="form-control">
                                    <?=$test['Remarks']; ?>
                                    </p>
                                </div>

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