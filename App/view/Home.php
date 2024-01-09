<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- header footer -->
<script src=" ../../public/assets/dist/js_bootstrap/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/e80051e55f.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Roboto&display=swap" rel="stylesheet">

<!-- articles -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<link rel="stylesheet" href="public/assets/css/header_footer.css">
<link rel="stylesheet" href="public/assets/css/article.css">
<script src="public/assets/css/article.css"></script>

  <title></title>
</head>
<body style="background-color: #eee;">
    <?php include "include/navbar.php" ?>
    <!-- <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a> -->
    <div class="container mt-4">
        <div class="row">

        <div class=" col-md-6 text-center mb-4">
            <div class="article-title card text-dark card-has-bg click-col" style="background-image:url('public/images/article.jpg');">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <h4 class="card-title mt-0 text-center">Title</h4>
                        <p class="content mt-0 text-center">Categorie</p>
                        <p class="content mt-0">Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices. opt into their customized displays for a more consistent rendering across browsers and devices.</p>
                    <button>Read more</button>

                    </div>

                </div>
        </div></div>


        <div class=" col-md-6 text-center mb-4">
            <div class="article-title card text-dark card-has-bg click-col" style="background-image:url('public/images/article.jpg');">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <h4 class="card-title mt-0 text-center">Title</h4>
                        <p class="content mt-0 text-center">Categorie</p>
                        <p class="content mt-0">Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices. opt into their customized displays for a more consistent rendering across browsers and devices.</p>
                    <button>Read more</button>

                    </div>

                </div>
        </div></div>

        <div class=" col-md-6 text-center mb-4">
            <div class="article-title card text-dark card-has-bg click-col" style="background-image:url('public/images/article.jpg');">
                <div class="card-img-overlay d-flex flex-column">
                    <div class="card-body">
                        <h4 class="card-title mt-0 text-center">Title</h4>
                        <p class="content mt-0 text-center">Categorie</p>
                        <p class="content mt-0">Bootstraps form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices. opt into their customized displays for a more consistent rendering across browsers and devices.</p>
                    <button>Read more</button>

                    </div>

                </div>
        </div></div>

        </div>
    </div>


<!-- categorie -->

<div style="background-color : red;">
    <?php if (isset($categories) && is_array($categories)) :
            foreach ($categories as $category) :?>
    <h1><?= $category['name'] ?></h1>
    <p><?= $category['description'] ?></p>
    <?php endforeach;
          endif;?>
</div>


 
    <?php include "include/footer.php" ?>
</body>