<?php
// session_start();
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

  <link rel="stylesheet" type="text/css" href="css/login.css" />

  <title> SEARCH DATA</title>

</head>

<body>


  <div class="container-fluid mt-5 mb-5" >

    <?php include('message.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>All Details
              <a href="adduser.php" class="btn btn-primary float-end"> Add Details </a> &nbsp;
              <a href="dashboard.php" class="btn btn-danger float-end" &nbsp> BACK</a>
            </h4>
          </div>
          <div class="card-body">

            <form action="" method="GET">
              <div class="input-group mb-3">
                <div class="co-md-7">
                  <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                      echo $_GET['search'];
                                                                    } ?>" class="form-control" placeholder="Search Data">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>
              </div>
            </form>

            <table class="table table-bordered table-striped" style="max-width:none; table-layout: fixed; word-wrap: break-word; font-size: 0.9vw;">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> DATE OF TRANSACTION </th>
                  <th> CARD NAME </th>
                  <th> VENDOR NAME </th>
                  <th> DEVICE TYPE </th>
                  <th> SPOC </th>
                  <th> QUANTITY </th>
                  <th> LOCATION </th>
                  <th> STATUS </th>
                  <th> EXPECTED TIME </th>
                  <th> CLOSING STATUS </th>
                  <th> TRACKER STARTING MAIL REF. </th>
                  <th> USED INVENTORY DETAILS </th>
                  <th> ACTION </th>
                  <th> REMINDER DATE </th>
                  <th> REMARKS </th>
                  <th> VIEW/EDIT/DELETE </th>

                </tr>
              </thead>
              <tbody>

              <?php
                $con = mysqli_connect("localhost:3308", "root", "", "inventory");

                if (isset($_GET['search']))
                {
                  $filtervalues = $_GET['search'];
                  $query = "SELECT * FROM loantrackerr WHERE CONCAT(VendorName,DeviceType,SPOCtowhomcoordinate,Location,ClosingStatus) LIKE '%$filtervalues%' ";
                  $query_run = mysqli_query($con, $query);

                  if (mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $test)
                    {

                ?>
                      <tr>
                        <td><?= $test['Id']; ?></td>
                        <td><?= $test['DateOfTransaction']; ?></td>
                        <td><?= $test['CardName']; ?></td>
                        <td><?= $test['VendorName']; ?></td>
                        <td><?= $test['DeviceType']; ?></td>
                        <td><?= $test['SPOCtowhomcoordinate']; ?></td>
                        <td><?= $test['Quantity']; ?></td>
                        <td><?= $test['Location']; ?></td>
                        <td><?= $test['Status']; ?></td>
                        <td><?= $test['ExpectedTime']; ?></td>
                        <td><?= $test['ClosingStatus']; ?></td>
                        <td><?= $test['TrackerStartingMailReference']; ?></td>
                        <td><?= $test['UsedInventoryDetails']; ?></td>
                        <td><?= $test['Action']; ?></td>
                        <td><?= $test['ReminderDetails']; ?></td>
                        <td><?= $test['Remarks']; ?></td>
                        <td>
                        <a href="test-view.php?id=<?= $test['Id']; ?>" class="btn btn-info btn-sm"> View </a>
                        <a href="test-edit.php?id=<?= $test['Id']; ?>" class="btn btn-success btn-sm"> Edit </a>
                        <form action="code.php" method="POST" class="d-inline">
                          <button type="submit" name="delete_test" value="<?= $test['Id']; ?>" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                      </td>
                      </tr>

                    <?php
                    }
                  }
                  else
                  {
                    ?>
                    <tr>
                      <td colspan="17"> <h3> NO RECORD FOUND </h3> </td>
                    </tr>

                <?php
                  }
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>