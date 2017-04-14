<footer class="container-fluid site-footer">

   


</footer>

<script>
  function initMap() {
    var myLatLng = {lat: -38.1396099, lng: 176.2473443};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 14
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'My Location!'
    });
  }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtxqwb-9TB4RCoYX1XnJ2_QQYReNhx_0M&callback=initMap"
async defer></script>


<?php wp_footer(); ?>
</body>
</html>