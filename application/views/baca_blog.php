<div id="about">

 <!--about wrapper left-->
 <div class="container">

   <div class="row">
     <div class="col-xs-12 hidden-sm col-md-5">

       <div class="about-left">
         <img src="/aset/images/about/gambar1.jpg" alt="">
       </div>

     </div>

     <!--about wrapper right-->
     <div class="col-xs-12 col-md-7">
       <div class="about-right">
         <div class="about-right-heading">

         </div>

           <div class="about-right-wrapper">
             <h1><?=$blog['tanggal']?></h1>
             <h1><?= $blog['judul'] ?></h1>
             <div class="koran">
               <p>
                  <?= $blog['isi']  ?>
               </p>
             </div>

               <?php
               if(($this->session->uid)==$blog['user_ID']){
              ?>
              <div class="content">
              </div>
               <div class="form-group" id="bt_edit">
                 <br><button><a href="/blog/edit/<?=$blog['blog_ID']?>">EDIT</a><br></button>
               </div>
               <div class="from-group" id="bt_delete">
                 <button><a href="/blog/delete/<?=$blog['blog_ID']?>">DELETE</a><br></button>
               </div>

             <?php } ?>

             <br>

           </div>
       </div>
     </div>
   </div>
 </div>
</div>
