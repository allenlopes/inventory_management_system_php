<?php
// session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/login.css" />

    <title> ADD NEW DATA </title>
</head>

<body>

    <div class="container-fluid mt-5 mb-5">

<?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Add New Data
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                        <div class="card-body">
                            <form action="code.php" method="POST">


                            <div class="mb-3">
                                    <label> DATE OF TRANSACTION </label>
                                    <input type="date" name="dot" class="form-control" >
                                </div>

                                <div class="mb-3">
                                    <label> CARD NAME </label>
                                    <input type="text" name="cn" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> VENDOR NAME </label>
                                    <input type="text" name="vn" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> DEVICE TYPE </label>
                                    <input type="text" name="dt" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> SPOC TO WHOM CO-ORDINATE </label>
                                    <input type="text" name="spoc" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> QUANTITY </label>
                                    <input type="text" name="qty" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> LOCATION </label>
                                    <input type="text" name="loc" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> STATUS </label>
                                    <input type="text" name="sta" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> EXPECTED TIME </label>
                                    <input type="text" name="et" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> CLOSING STATUS </label>
                                    <input type="text" name="cs" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> TRACKER STARTING MAIL REF. </label>
                                    <input type="text" name="tsmr" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> USED INVENTORY DETAILS </label>
                                    <input type="text" name="uid" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> ACTION </label>
                                    <input type="text" name="act" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> REMINDER DATE </label>
                                    <input type="date" name="rd" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label> REMARKS </label>
                                    <input type="text" name="rem" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="save_details" class="btn btn-primary"> SAVE DETAILS </button>
                                </div>

                            </form>
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