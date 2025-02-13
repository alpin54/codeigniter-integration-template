<!--footer-->
<footer class="footer">
  <div class="container">
  </div>
</footer>
<!--end-footer-->
</main>
<!-- end main-site -->

<!-- schema organization-->
<script type="application/ld+json">
  {

    "@context": "http://schema.org",
    "@id": "<?= $site_url; ?>#organization",
    "@type": "Organization",
    "name": "<?= $site_name; ?>",
    "url": "<?= $site_url; ?>",
    "logo": "<?= $site_url; ?>/assets/img/logo/logo.png",
    "contactPoint": [

      {
        "@type": "ContactPoint",
        "telephone": "<?= str_replace('+62', '+62-', preg_replace('/[\s_]+/', '', $phone->text)); ?>",
        "contactType": "sales",
        "areaServed": "ID"
      }
    ],
    "sameAs": [
      "<?= $instagram; ?>",
      "<?= $facebook; ?>"
      "<?= $youtube; ?>",
      "<?= $twitter; ?>",
    ]
  }
</script>

<!-- schema website-->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@id": "<?= $site_url; ?>#website",
    "@type": "WebSite",
    "url": "<?= $site_url; ?>",
    "name": "<?= $site_name; ?>"
  }
</script>

<!-- schema webpage-->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@id": "<?= $site_url; ?>#webpage"
    "@type": "WebPage",
    "url": "<?= $site_url; ?>",
    "name": "<?= $site_name; ?>"
  }
</script>

<!-- script-->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

</body>

</html>
