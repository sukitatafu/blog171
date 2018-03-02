<div id="about">
  <!--about wrapper left-->
  <form action="/signin" method="post" >
  <div class="container">

    <div class="row">
      <div class="col-xs-12 hidden-sm col-md-5">

        <div class="about-left">
          <img src="/aset/image/about/manakhemia1.jpg" alt="">
        </div>

      </div>

      <!--about wrapper right-->
      <div class="col-xs-12 col-md-7">
        <div class="about-right">
          <div class="about-right-heading">
            <h1>Tampilan LOGIN</h1>
          </div>


              <div class="col-md-4">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email"
                   placeholder="Email Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <input type="password" name="password" class="form-control" id="judul"
                  placeholder="Password Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>
              </div>


              <div class="col-md-4">
                <div class="form-group">
                  <input type="submit" value="signin">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <button > <a href="/user/reg">Register</a></button>
                </div>
              </div>

        </div>
      </div>
    </div>

  </div>
  </form>
</div>
