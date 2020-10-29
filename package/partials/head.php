<?php ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0 " />

<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">

<meta property="og:locale" content="en_GB" />
<meta property="og:site_name" content="here4life.co.uk" />
<meta property="og:url" content="https://here4life.co.uk/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Life insurance" />
<meta property="og:description" content="Get a quote for life insurance" />
<meta property="og:image" content="" />
<meta property="og:image:secure_url" content="" />
<meta property="og:image:width" content="370" />
<meta property="og:image:height" content="288" />

<meta name="twitter:title" content="" />
<meta name="twitter:card" content="summary_large_image" />

<link rel="preload" as="style" href="/dist/style/custom_style.css">
<link rel="stylesheet" type="text/css" href="/dist/style/custom_style.css">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBFKN7P');</script>
<!-- End Google Tag Manager -->

<!-- <meta name='robots' content='noindex,nofollow' />  -->
<script>
const api_key =
  "<?php echo (!in_array(trim($_SERVER['REMOTE_ADDR']), ["localhost", "::1", "127.0.0.1"])) ? "K3UB-54SM-JD5E-EX5P" :"PJ7V-B47G-ZWCT-WKY9" ; ?>";
</script>

 

<?php

  $fb_id = "";
  if (  $_SERVER['REQUEST_URI'] == '/life-insurance-now'  ||
        $_SERVER['REQUEST_URI'] == '/completed'           ||
        $_SERVER['REQUEST_URI'] == '/insurance-quote' ): 

    $fb_id = '656543581934778';

  else:
    $fb_id = '821076558662102';
  endif;
  ?>



<!-- Facebook Pixel Code -->
<script>
! function(f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function() {
    n.callMethod ?
      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = '2.0';
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s)
}(window, document, 'script',
  'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $fb_id; ?>');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $fb_id; ?>&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->





<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177542530-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-177542530-1');
gtag('config', 'AW-587056901');
</script>


<script type='text/javascript'>
window.__lo_site_id = 256445;

	(function() {
		var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
		wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
	  })();
	</script>