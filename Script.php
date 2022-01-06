 <script type="text/javascript" src="assets/js/materialize.min.js"></script>
 <script>
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);
  const slider = document.querySelectorAll('.slider');
  M.Slider.init(slider,{
    indicators: false,
    transition:600,
    interval:3000
  });
  const materialbox = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(materialbox);
  const scroll = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scroll, {
    scrollOffset: 50
  })
</script>