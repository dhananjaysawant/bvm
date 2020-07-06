<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
          <h4>Usefull Links</h4>
          <ul>
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>Website/about">About us</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Carrer Guidence</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Events</a></li>
          </ul>
      </div>

      <div class="col-md-3">
          <h4>Social Links</h4>
          <ul>
            <li><a href="#">BAMCEF</a></li>
            <li><a href="#">MN TV</a></li>
            <li><a href="#">I Support BAMCEF</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Join BVM</a></li>
          </ul>
      </div>

      <div class="col-md-3">
        <h4>Address : </h4>
        <p>BAMCEF CENTRAL OFFICE</p>
        <p>Room no. 52A, gali no.2, faiz road, Karolbag, new Delhi -110005</p>
      </div>

      <div class="col-md-3">
        <h4>Bhartiya Vidhyarthi Morchya</h4>
        <img  class="mt-3 logo-footer" src="<?php echo base_url(); ?>/assets/images/bvm_logo.png" alt="" width="100%">
      </div>
    </div>
  </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(window).scroll(function(){
var sticky = $('.sticky'),
    scroll = $(window).scrollTop();
if (scroll >= 100) sticky.addClass('fixed');
else sticky.removeClass('fixed');
});
  </script>

</body>
</html>
