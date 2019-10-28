<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="icon" href="images/favicon/favicon.ico">
  <meta name="theme-color" content="#000">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Quicksand|Roboto&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/main.min.css">

</head>

<div id="Load" class="load">
  <div class="load__container">
    <div class="load__animation"></div>
    <div class="load__mask"></div>
  </div>
</div>

<body>
  <main>
    <?php require ("tpl/header.php");?>

    <section class="about-page-banner">
      <div class="container">
        <div class="about-page-banner__main">
          <div class="bread-crumbs">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
          </div>
          <div class="about-page-banner__main__title wow fadeInUpBig">
            <h1>About</h1>
            <p>Please submit your content as soon as possible to your
              project manager so it can be published to your new website!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-wdo">
      <div class="about-wdo__main">
        <div class="row">
          <div class="col-12 col-lg-6 padding-none wow fadeInLeftBig">
            <div class="about-wdo__main__image">
              <img src="img/temp/about/about-1.png" alt="about-1">
            </div>
          </div>
          <div class="col-12 col-lg-6 padding-none wow fadeInRightBig">
            <div class="about-wdo__main__info">
              <div class="about-wdo__main__info__title">
                <h2>Who we are</h2>
                <p>Please submit your content as soon as possible to your project manager so it can be published to your
                  new website! Do you need help writing your content? AIT offers content writing services for $50 per
                  page. Please contact us today at (877) 404-4149 for more information about this service!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 padding-none wow fadeInLeftBig">
            <div class="about-wdo__main__info">
              <div class="about-wdo__main__info__title marg-left">
                <h2>What we do</h2>
                <p>Please submit your content as soon as possible to your project manager so it can be published to your
                  new website! Do you need help writing your content? AIT offers content writing services for $50 per
                  page. Please contact us today at (877) 404-4149 for more information about this service!
                </p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 padding-none wow fadeInRightBig">
            <div class="about-wdo__main__image">
              <img src="img/temp/about/about-2.png" alt="about-2">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about-subheader-block">
      <div class="container">
        <div class="about-subheader-block__main">
          <div class="row ">
            <div class="col-12">
              <div class="about-subheader-block__main__title wow fadeInDownBig">
                <h2>Sample Subheader</h2>
              </div>
              <div class="about-subheader-block__main__description wow fadeInUpBig">
                <p>Please submit your content as soon as possible to your project manager so it can be published to your
                  new website! Do you need help writing your content? AIT offers content writing services for $50 per
                  page. Please contact us today at (877) 404-4149 for more information about this service!
                </p>
                <p> Please submit your content as soon as possible to your project manager so it can be published to
                  your new website! Do you need help writing your content? AIT offers content writing services for $50
                  per page. Please contact us today at (877) 404-4149 for more information about this service!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>