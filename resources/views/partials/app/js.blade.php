<!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="js/scrollmagic/uncompressed/ScrollMagic.js"></script>
  <script src="js/scrollmagic/minified/ScrollMagic.min.js"></script>
  <script src="js/scrollmagic/uncompressed/plugins/debug.addIndicators.js"></script>
  <script type="text/javascript">
    $("nav").find("a").click(function(e) {
    e.preventDefault();
    var section = $(this).attr("href");
    $("html, body").animate({
        scrollTop: $(section).offset().top
    });
});
  </script>