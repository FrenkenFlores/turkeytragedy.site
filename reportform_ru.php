<?php
include "db_connection.php";
if (isset($_POST["submit"])) {
    $fullname = $_POST["fullname"];
    $status = $_POST["options"];
    $contacts = $_POST["contacts"];
    $location = $_POST["location"];
    $comment = $_POST["comment"];
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `lost_people_table`(`id`, `name`, `status`, `contacts`, `location`, `comment`, `date`) VALUES (NULL,'$fullname','$status','$contacts','$location','$comment','$date')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: list.php?msg=Your report has been added to the list successfully");
    } else {
        header("Location: list.php?msg=Error occured, try later");
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
                    <li><a id="en" class="dropdown-item" href="./reportform.php">English</a></li>
                    <li><a id="tr" class="dropdown-item" href="./reportform_tr.php">Türkçe</a></li>
                    <li><a id="ae" class="dropdown-item" href="./reportform_ar.php">العربيه</a></li>
                    <li><a id="ru" class="dropdown-item" href="./reportform_ru.php">Русский</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Form -->
            <div class="card d-flex justify-content-center">
                <form action="" method="post" style="min-width:300px; background-color: FDFDFD; padding: 20px;">
                    <h4>Добавить новую запись</h4>
                    <p class="card-text"><small class="text-muted">Предоставьте любие доступные сведения.</small></p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Полное имя</span>
                        <input type="text" class="form-control" placeholder="Добавьте имя жертвы" name="fullname" aria-label="fullname" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input style="width: 50%;" type="radio" value="lost" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                        <label class="btn btn-outline-danger" style="border-bottom-left-radius: 5px; border-top-left-radius: 5px; width: 50%;" for="option1">Пропавший</label>

                        <input style="width: 50%;" type="radio" value="found" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-outline-success" style="border-bottom-right-radius: 5px; border-top-right-radius: 5px; width: 50%;" for="option2">Найденный</label>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Контакты</span>
                        <textarea class="form-control" name="contacts" placeholder="Добавьте контакты для обратной связи" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Местоположение</span>
                            <input type="text" class="form-control" placeholder="Добавьте местоположение жертвы" name="location" aria-label="location" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Комментарий</span>
                        <textarea class="form-control" name="comment" placeholder="Оставьте свот комментарий: сообщение, номер телефона, возрасть дополнительные сведения, и т.д." aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <button style="width:40%;" type="submit" class="btn btn-dark mx-auto" name="submit">Добавить информацию</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
