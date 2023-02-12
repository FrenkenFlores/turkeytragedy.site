<?php
include "db_connection.php";
if (isset($_POST["submit"])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `lost_people_table` WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: list_ru.php?msg=Ваш отчет был успешно обновлен");
    } else {
        header("Location: list_ru.php?msg=Произошла ошибка, попробуйте позже");
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
            <!-- Navigation -->
            <ul class="nav nav-pills bg-white" style="padding: 10px; border-radius: 4px; border-color: BFBFBF; border-width: 1px; border-style:solid; ">
                <a class="navbar-brand" href="./index_ru.php">
                    <img src="https://www.countryflagicons.com/FLAT/32/TR.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                    <img src="https://www.countryflagicons.com/FLAT/32/SY.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                </a>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./reportform_ru.php">Добавить информацию</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./list_ru.php">Список</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./contacts_ru.php">Наши контакты</a>
                </li>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Язык</a>
                    <ul class="dropdown-menu">
                    <li><a id="en" class="dropdown-item" href="./delete.php?id=<?php echo $_GET['id'];?>">English</a></li>
                    <li><a id="tr" class="dropdown-item" href="./delete_tr.php?id=<?php echo $_GET['id'];?>">Türkçe</a></li>
                    <li><a id="ae" class="dropdown-item" href="./delete_ar.php?id=<?php echo $_GET['id'];?>">العربيه</a></li>
                    <li><a id="ru" class="dropdown-item" href="./delete_ru.php?id=<?php echo $_GET['id'];?>">Русский</a></li>
                    </ul>
                </li>
            </ul>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM `lost_people_table` WHERE id=$id LIMIT 1";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                } else {
                    header("Location: list_ru.php?msg=Произошла ошибка, попробуйте позже");
                }
            ?>
            <!-- Form -->
            <div class="card d-flex justify-content-center">
                <form action="" method="post" style="min-width:300px; background-color: FDFDFD; padding: 20px;">
                    <h4>Удалить запись</h4>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Полное имя</span>
                        <input type="text" readonly class="form-control" placeholder="" name="fullname" aria-label="fullname" aria-describedby="basic-addon1" value="<?php echo $row['name']?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="col d-flex justify-content-center">
                            <button style="width:80%;" type="submit" class="btn btn-dark mx-auto" name="submit">Удалить</button>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="./list_ru.php" style="width:80%;" class="btn btn-dark mx-auto">Отменить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
