<head>
   <link rel="stylesheet" href="./css/components.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <title>PIS | PATIENT</title>
</head>
<?php include'header.php'; ?>



<section class="patient-container">
  <?php 
  // $sql = "SELECT * FROM `patient`";
  // $patient = $conn->query($sql) or die($conn->error);
  // $row =$patient->fetch_assoc();

  // while($row = $patient->fetch_assoc()){
  //   echo $row['patient_number']." ".$row['room_type']." ".$row['blood_group']." ".$row['diagnose'];
  // }
  ?>    
        <h2>Patient Info</h2>
        <br>
        <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Patient Number</th>
            <th scope="col">Room Type</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Diagnose</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
</section>