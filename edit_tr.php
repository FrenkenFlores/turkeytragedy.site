<?php
include "db_connection.php";
if (isset($_POST["submit"])) {
    $id = $_GET['id'];
    $fullname = $_POST["fullname"];
    $status = $_POST["options"];
    $contacts = $_POST["contacts"];
    $location = $_POST["location"];
    $comment = $_POST["comment"];
    $date = date('Y-m-d H:i:s');

    $sql = "UPDATE `lost_people_table` SET `name`='$fullname',`status`='$status',`contacts`='$contacts',`location`='$location',`comment`='$comment',`date`='$date' WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: list_tr.php?msg=Raporunuz başarıyla güncellendi");
    } else {
        header("Location: list_tr.php?msg=Hata oluştu, daha sonra deneyin");
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
                <a class="navbar-brand" href="./index_tr.php">
                    <img src="https://www.countryflagicons.com/FLAT/32/TR.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                    <img src="https://www.countryflagicons.com/FLAT/32/SY.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                </a>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./reportform_tr.php">Rapor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./list_tr.php">Liste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./contacts_tr.php">Bize ulaşın</a>
                </li>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dil</a>
                    <ul class="dropdown-menu">
                    <li><a id="en" class="dropdown-item" href="./edit.php?id=<?php echo $_GET['id'];?>">English</a></li>
                    <li><a id="tr" class="dropdown-item" href="./edit_tr.php?id=<?php echo $_GET['id'];?>">Türkçe</a></li>
                    <li><a id="ae" class="dropdown-item" href="./edit_ar.php?id=<?php echo $_GET['id'];?>">العربيه</a></li>
                    <li><a id="ru" class="dropdown-item" href="./edit_ru.php?id=<?php echo $_GET['id'];?>">Русский</a></li>
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
                    header("Location: list_tr.php?msg=Hata oluştu, daha sonra deneyin");
                }
            ?>
            <!-- Form -->
            <div class="card d-flex justify-content-center">
                <form action="" method="post" style="min-width:300px; background-color: FDFDFD; padding: 20px;">
                    <h4>Raporu düzenleme</h4>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">İsim</span>
                        <input type="text" class="form-control" placeholder="Enter the full name of the victim" name="fullname" aria-label="fullname" aria-describedby="basic-addon1" value="<?php echo $row['name']?>">
                    </div>
                    <div class="input-group mb-3">
                        <input style="width: 50%;" type="radio" value="lost" class="btn-check" name="options" id="option1" autocomplete="off" <?php if ($row['status'] === "lost") {echo checked;}?>>
                        <label class="btn btn-outline-danger" style="border-bottom-left-radius: 5px; border-top-left-radius: 5px; width: 50%;" for="option1">Kayıp</label>

                        <input style="width: 50%;" type="radio" value="found" class="btn-check" name="options" id="option2" autocomplete="off" <?php if ($row['status'] === "found") {echo checked;}?>>
                        <label class="btn btn-outline-success" style="border-bottom-right-radius: 5px; border-top-right-radius: 5px; width: 50%;" for="option2">Bulundu</label>

                        <p class="card-text"><small class="text-muted">
                            Kişi bulunduysa durumu değiştirin.</small>
                        </p>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">İletişim</span>
                        <textarea class="form-control" name="contacts" placeholder="Mevcut tüm mağdur yakınları ve arkadaşlarının iletişim bilgilerini girin" aria-label="With textarea" value="<?php echo $row['contacts']?>"></textarea>
                    </div>
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Konum</span>
                            <input type="text" class="form-control" placeholder="Mağdurun yaşadığı yeri girin" name="location" aria-label="location" aria-describedby="basic-addon1" value="<?php echo $row['location']?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Yorum</span>
                        <textarea class="form-control" name="comment" placeholder="Yorumunuzu, mesajınızı, isteğe bağlı bilgilerinizi, yaşınızı, cinsiyetinizi vb. bırakın" aria-label="With textarea" value="<?php echo $row['comment']?>"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="col d-flex justify-content-center">
                            <button style="width:80%;" type="submit" class="btn btn-dark mx-auto" name="submit">Güncelleme</button>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <a href="./list.php" style="width:80%;" class="btn btn-dark mx-auto">İptal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
