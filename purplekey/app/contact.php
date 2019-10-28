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
                <a href="#">Contact</a>
              </li>
            </ul>
          </div>
          <div class="about-page-banner__main__title wow fadeInUpBig">
            <h1>Contact</h1>
            <p>Please submit your content as soon as possible to your
              project manager so it can be published to your new website!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-loc">
      <div class="contact-loc__main">
        <div class="row">
          <div class="col-12 col-lg-6 padding-none">
            <div class="contact-loc__main__info">
              <div class="contact-loc__main__info__address wow fadeInRightBig">
                <h3>Address:</h3>
                <ul>
                  <li>
                    <p>7777 Bonhomme Ave Suite 1800 Clayton, MO 63105,</p>
                  </li>
                  <li>
                    <p>111 W Jackson Ave Suite 1700 Chicago, IL 60604,</p>
                  </li>
                  <li>
                    <p>550 Reserve Street Suite 190&250 South Lake, TX 76092.</p>
                  </li>
                </ul>
              </div>
              <div class="contact-loc__main__info__mail wow fadeInRightBig">
                <h3>Mail:</h3>
                <p>Please submit your content</p>
              </div>
              <div class="contact-loc__main__info__phone wow fadeInRightBig">
                <h3>Phone:</h3>
                <p>Please submit your content</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 padding-none wow fadeInLeftBig">
            <div class="contact-loc__main__map">
             <img src="img/temp/contact/map.png" alt="map">
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>