<!--contact form-->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <div class="get-touch-heading">
          <h2>get in touch</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>
        </div>
      </div>
    </div>

    <div class="content">
      <form action="blog/submit" method="post" >
      <div class="row">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>


          <div class="col-md-4">
            <div class="form-group">
              <input type="judul" name="judul" class="form-control" id="judul" placeholder="judul" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <textarea class="form-control" name="isi" id="isi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="submit">
            <button class="btn btn-primary btn-xl" type="submit">Send Now</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<!--bottom footer-->
<div id="bottom-footer" class="hidden-xs">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-left">
          &copy; MyBix Theme. All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyBiz
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
