<div id="get-touch">
  <div class="container">
    <div class="row">

    </div>

    <div class="content">
      <form action="/blog/subedit/<?=$blog_ID?>" method="post" >
      <div class="row">
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>


          <div class="col-md-4">
            <div class="form-group">
              <input type="judul" value="<?=$judul?>"name="judul" class="form-control" id="judul" placeholder="judul" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <textarea class="form-control" name="isi" id="isi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"><?=$isi?></textarea>
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
