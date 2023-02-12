<?php
include "db_connection.php";
if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $sql = "SELECT id FROM `lost_people_table` WHERE MATCH(name) AGAINST('$fullname')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        header("Location: search.php?id=$row[id]");
    } else {
        header("Location: index.php?msg=Error occured, try later");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            turkeytragedy
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- CSS -->
        <link href="./main.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        <?php if (isset($_GET["msg"])) {
            echo '<div class="alert alert-dark alert-dismissible fade show" role="alert">
            '.$_GET["msg"].'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }?>
            <ul class="nav nav-pills bg-white" style="padding: 10px; border-radius: 4px; border-color: BFBFBF; border-width: 1px; border-style:solid;">
                <a class="navbar-brand" href="./index.php">
                    <img src="https://www.countryflagicons.com/FLAT/32/TR.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                    <img src="https://www.countryflagicons.com/FLAT/32/SY.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                </a>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./reportform.php">Report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./list.php">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./contacts.php">Contact us</a>
                </li>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Language</a>
                    <ul class="dropdown-menu">
                    <li><a id="en" class="dropdown-item" href="./list.php">English</a></li>
                    <li><a id="tr" class="dropdown-item" href="./list_tr.php">Türkçe</a></li>
                    <li><a id="ae" class="dropdown-item" href="./list_ar.php">العربيه</a></li>
                    <li><a id="ru" class="dropdown-item" href="./list_ru.php">Русский</a></li>
                    </ul>
                </li>
            </ul>
            <div class="card bg-white"  style="overflow: auto;">
                <form style="padding: 5px;" class="d-flex" role="search" action="" method="post">
                    <input style="padding: 10px;" class="form-control me-2" name="fullname" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
                </form>
                <table class="table table-responsive table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">full name</th>
                            <th scope="col">status</th>
                            <th scope="col">contacts</th>
                            <th scope="col">location</th>
                            <th scope="col">comments</th>
                            <th scope="col">last update</th>
                            <th scope="col">update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "./db_connection.php";
                            $sql = "SELECT * FROM `lost_people_table`";
                            $request = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($request)) {
                        ?>
                            <tr <?php if ($row["status"] === "lost") { echo 'class="table-danger"'; } else { echo 'class="table-success"'; }?>>
                                <td scope="row"><?php echo $row["id"];?></td>
                                <td scope="row"><?php echo $row["name"];?></td>
                                <td scope="row"><?php echo $row["status"];?></td>
                                <td scope="row"><?php echo $row["contacts"];?></td>
                                <td scope="row"><?php echo $row["location"];?></td>
                                <td scope="row"><?php echo $row["comment"];?></td>
                                <td scope="row"><?php echo $row["date"];?></td>
                                <td scope="row">
                                    <a href="edit.php?id=<?php echo $row["id"];?>"
                                    class="link-dark"><img src="./includes/icons8-edit-24.png"></a>
                                    <a href="delete.php?id=<?php echo $row["id"];?>"
                                    class="link-dark"><img src="./includes/icons8-remove-24.png"></a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
