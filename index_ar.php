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
            <ul class="nav nav-pills bg-white" style="padding: 10px; border-radius: 4px; border-color: BFBFBF; border-width: 1px; border-style:solid; ">
                <a class="navbar-brand" href="./index_ar.php">
                    <img src="https://www.countryflagicons.com/FLAT/32/TR.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                    <img src="https://www.countryflagicons.com/FLAT/32/SY.png" alt="Logo" width="32" height="32" class="d-inline-block align-text-top">
                </a>
                <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="./reportform_ar.php">الإبلاغ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./list_ar.php">القائمة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="./contacts_ar.php">تواصل معنا</a>
                </li>
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">الغه</a>
                    <ul class="dropdown-menu">
                    <li><a id="en" class="dropdown-item" href="./index.php">English</a></li>
                    <li><a id="tr" class="dropdown-item" href="./index_tr.php">Türkçe</a></li>
                    <li><a id="ae" class="dropdown-item" href="./index_ar.php">العربيه</a></li>
                    <li><a id="ru" class="dropdown-item" href="./index_ru.php">Русский</a></li>
                    </ul>
                </li>
            </ul>
            <div class="card-group">
                <div class="card">
                    <img src="./includes/rescueteam.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">اترك معلومه عن الضحيه</h5>
                        <p class="card-text"><span style="unicode-bidi: plaintext;"> 
                        اذا فقدت القدرة على التواصل مع الشخص الذي
                        كان يعيش في الموقع الذي حدث به الزلزال
                        او وجدت ضحية الزلزال اترك معلومة عنه.
                        </span>
                        </p>
                        <a href="./reportform_ar.php" class="btn btn-dark">الإبلاغ</a>
                    </div>
                </div>
                <div class="card">
                    <img src="./includes/list.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">القائمة</h5>
                        <p class="card-text"><span style="unicode-bidi: plaintext;">
                        هذه القائمة تحتوي على معلومات عن الضحايا.
                        سوف نقوم بتبليغ فرق الانقاذ. تابع حال الضحايا في هذه القائمة.
                        يمكن تصحيح او الغاء تسجيلك من خلال هذا القسم.
                        </span>
                        </p>
                        <a href="./list_ar.php" class="btn btn-dark">ابحث في القائمة</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
