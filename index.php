<?php

$name= null;
$password = null;

if (!empty($_POST)) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
    $age= isset( $_POST['age']) ? $_POST['age'] : null;
}

?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<form method="post" class="mx-auto" style="padding: 20px">
    <div class="form-group">
        <label for="InputFirstName"  class="col-sm-2 col-form-label">Enter First name: </label>
        <div class="col-sm-5">
            <input required type="text" name="firstname" class="form-control" id="LoginInput" aria-describedby="InputFirstName" placeholder="Enter First name">
        </div>

    </div>
    <div class="form-group">
        <label for="InputLastName"  class="col-sm-2 col-form-label">Enter Last name: </label>
        <div class="col-sm-5">
            <input type="text" name="lastname" class="form-control" id="InputLastName"  placeholder="Enter Last name">
        </div>
    </div>
    <div class="form-group">
        <label for="InputAge"  class="col-sm-2 col-form-label">Enter Age: </label>
        <div class="col-sm-5">
            <input required type="number" name="age" class="form-control" id="InputAge"  placeholder="Enter Age">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
</form>

<div style="margin-top: 50px">

    <p><strong>First Name: </strong><?=$firstname ?></p>
    <p><strong>Last Name: </strong><?=$lastname ?></p>
    <p><strong>Age: </strong><?=$age ?></p>
</div>

</body>
</html>