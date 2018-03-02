<div id="about">
  <!--about wrapper left-->
  <form action="/user/reg_submit" method="post" >
  <div class="container">

    <div class="row">
      <div class="col-xs-12 hidden-sm col-md-5">

        <div class="about-left">
          <img src="/aset/image/about/gambar1.jpg" alt="">
        </div>

      </div>

      <!--about wrapper right-->
      <div class="col-xs-12 col-md-7">
        <div class="about-right">
          <div class="about-right-heading">
            <h1>Tampilan REGISTER</h1>
          </div>


              <div class="col-md-4">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email"
                   placeholder="Email Anda" data-rule="minlen:4" required="please enter email" data-msg="Please enter at least 4 chars" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="judul"
                  placeholder="Nama Anda" data-rule="minlen:4" required="please enter Nama" data-msg="Please enter at least 4 chars" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <input type="password" name="pass1" class="form-control" id="judul"
                  placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <input type="password" name="pass2" class="form-control" id="judul"
                  placeholder="Verivikasi Password" data-rule="minlen:4" required="please enter pass" data-msg="Please enter at least 4 chars" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <a href="/user/register">
                  <input type="submit" value="Register">
                </a>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
