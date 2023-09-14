<!-- Google tag (gtag.js) -->
@if(app()->environment('production'))
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8TLHSE0R08"></script>
@endif
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8TLHSE0R08');
</script>