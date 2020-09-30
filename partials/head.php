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

<!-- <meta name='robots' content='noindex,nofollow' />  -->
<script>
const api_key =
  "<?php echo (!in_array(trim($_SERVER['REMOTE_ADDR']), ["localhost", "::1", "127.0.0.1"])) ? "K3UB-54SM-JD5E-EX5P" :"PJ7V-B47G-ZWCT-WKY9" ; ?>";
</script>

<!-- Hotjar Tracking Code for https://here-4-life.co.uk/ -->
<script>
(function(h, o, t, j, a, r) {
  h.hj = h.hj || function() {
    (h.hj.q = h.hj.q || []).push(arguments)
  };
  h._hjSettings = {
    hjid: 2002335,
    hjsv: 6
  };
  a = o.getElementsByTagName('head')[0];
  r = o.createElement('script');
  r.async = 1;
  r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
  a.appendChild(r);
})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>


<?php

  $fb_id = "";
  if (  $_SERVER['REQUEST_URI'] == '/life-insurance-now'  ||
        $_SERVER['REQUEST_URI'] == '/completed'           ||
        $_SERVER['REQUEST_URI'] == '/insurance-quote' ): 

    $fb_id = '656543581934778';

  else:
    $fb_id = '821076558662102';
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
 