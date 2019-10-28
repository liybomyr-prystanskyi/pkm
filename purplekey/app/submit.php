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

    <section class="about-page-banner broker-page-banner">
      <div class="container">
        <div class="about-page-banner__main">
          <div class="bread-crumbs">
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Submit a deal</a>
              </li>
            </ul>
          </div>
          <div class="about-page-banner__main__title wow fadeInUpBig">
            <h1>Submit a deal</h1>
            <p>Please submit your content as soon as possible to your project manager so it can be published
              to your new website! Do you need help writing your content? AIT offers content writing
              services for $50 per page. Please contact us today at (877) 404-4149 for more information
              about this service!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="submit-form">
      <div class="container">
        <div class="submit-form__main">
          <div class="submit-form__main__title wow fadeInUpBig">
            <h2>Sample Subheader</h2>
          </div>
          <div class="submit-form__main__form">
            <form action="#" id="request-form">
              <div class="submit-form__main__form__inputs wow fadeInLeftBig">
                <input type="text" placeholder="Name">
                <input type="email" placeholder="E-mail">
              </div>
              <div class="submit-form__main__form__inputs wow fadeInRightBig">
                <input type="tel" placeholder="Phone">
                <input type="text" placeholder="Address">
              </div>
              <textarea name="" id="" style="resize: none;" placeholder="Additional information" ></textarea>
              <div class="submit-form-button btn btn-default sn_form_submit" onclick="sn_form_submit('request-form')">
                Send
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="submit-images">
      <div class="row m-0">
        <div class="col-6 padding-none wow fadeInLeftBig">
          <div class="submit-images__item">
            <img src="img/temp/submit/item1.png" alt="submit">
          </div>
        </div>
        <div class="col-6 padding-none wow fadeInRightBig">
          <div class="submit-images__item">
            <img src="img/temp/submit/item2.png" alt="submit">
          </div>
        </div>
      </div>
    </section>

  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>