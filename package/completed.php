<?php  
    session_start();
    if(!isset($_SESSION["enquiry_id"])){
        // header("Location: /");
    }  
?>
<!doctype html>
<html lang="en-GB" class="no-js">

<head>
  <meta charset="UTF-8">
  <title>Thank you</title>
  <meta name="description" content="Get the best life insurance cover today.">

  <?php include "partials/head.php" ?>
  <script>
  gtag('event', 'conversion', {
    'send_to': 'AW-587056901/87q1CM_54t4BEIWO95cC'
  });
  fbq('track', 'Lead');
  </script>
</head>

<body class="thankyou-body">
<!-- Google Tag Manager (noscript) -->

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBFKN7P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

  <!-- header -->
  <?php include "partials/header.php" ?>
  <!-- /header -->

  <main role="main">
    <div class='page-main-content thankyou-page' data-page="thankyou-page">
      <section class="hero-slim">
        <div class='container'>
          <div class="row">
            <div class="col-12">
              <div class="inner-hero-slim">
                <div class="slim-hero-text">
                  <h1>
                    Hi <span class="capitalise"><?php echo $_SESSION["name"]; ?></span>, thank you for your enquiry.
                  </h1>
                  <p class="thanks-tagline">
                    We'll check with our life insurance providers now and find you the best rate for your cover based on
                    your requirements.
                  </p>
                  <p class="explain-tagline">
                    A member of our team will be in touch shortly to discuss your options moving forward.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>
  </main>
  <!-- footer -->
  <?php include "partials/footer.php" ?>
  <!-- /footer -->
  <script src="/dist/js/main.js"></script>
</body>

</html>