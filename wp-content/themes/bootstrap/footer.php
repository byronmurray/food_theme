<footer id="contact" class="container-fluid site-footer">
  <div class="flex">
    <div class="column-1">
      <h3>opening hours</h3>
      <ul>
        <li><strong>Monday:</strong> 11:30am - 7:00pm</p></li>
        <li><strong>Tuesday:</strong> 11:30am - 6:00pm</p></li>
        <li><strong>Wednesday:</strong> 11:30am - 7:00pm</p></li>
        <li><strong>Thursday:</strong> 11:30am - 7:00pm</p></li>
        <li><strong>Friday:</strong> 11:30am - 9:00pm</p></li>
        <li><strong>Weekend:</strong> 11:30am - late</p></li>
      </ul>
    </div>

    <div class="column-2">
      <h3>Find us on</h3>

      <div class="social-media">
        <ul>
          <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
          <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
          <li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
        </ul>
        <ul>
          <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
          <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
          <li><i class="fa fa-pinterest-p" aria-hidden="true"></i></li>
        </ul>
        
      </div>

      

    </div>
      
    <div class="column-3">
    <h3>Email us</h3>

      <form>

        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputName2" placeholder="Name">
        </div>

        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
        </div>

        <div class="form-group">
          <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="What do you want"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn form-control">Send</button>
        </div>

      </form>

  </div>

</div>

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