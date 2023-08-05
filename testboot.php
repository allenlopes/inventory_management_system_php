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

  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" >

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


  <title> ALL DATA</title>

</head>

<body>


  <div class="container-fluid mt-5 mb-5">

    <?php include('message.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>All Data
              <a href="adduser.php" class="btn btn-primary float-end"> Add Details </a>
            </h4>
          </div>
          <div class="card-body">

            <a href="searchdata.php" class="btn btn-danger float-start">SEARCH </a> <br>
<br>
            <table &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; id="example" class="table table-bordered table-striped" style="max-width:none; table-layout: fixed; word-wrap: break-word; font-size: 0.90vw;">
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
                $query = "SELECT * FROM loantrackerr";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                  foreach ($query_run as $test) {

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
                          <button type="submit" onclick="return confirm('Are you sure you want to delete this data')" name="delete_test" value="<?= $test['Id']; ?>" class="btn btn-danger btn-sm"> Delete </button>
                        </form>
                      </td>
                    </tr>
                <?php

                  }
                } else {
                  echo "<h5> &nbsp No Record Found </h5>";
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

  <script>
  $(document).ready(function() {
    $('table#example').DataTable( {
      searching: false,
      paging: true,
      ordering: false,
      styling: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>


</body>

</html>