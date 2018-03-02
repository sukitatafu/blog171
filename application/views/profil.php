<div id="about">

 <!--about wrapper left-->
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

         </div>


           <div class="about-right-wrapper">
             <a href="/signout"><button type="button" name="button">Log Out</button></a><br>
           </div>

           <div class="about-right-wrapper">
             <h1><?= $userid['nama'] ?></h1>
             <h1><?= $userid['email']?></h1>
           </div>

           <div class="about-right-wrapper">
             <?php
               foreach ($user as $users ) {
                 echo "<a href='/blog/" .$users['blog_ID']."'>" . $users['judul']."<a><br>";
               }
              ?>
           </div>
       </div>
     </div>
   </div>

 </div>
</div>
