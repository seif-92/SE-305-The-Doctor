<?php
class Index extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
    
    ?>





   <section class="products-content">
  <div class="container">
   
	<div class="row">
    <div class="col-md-12">
      <!-- heading -->
      <h2>FEATURED CATEGORIES</h2>
      
      <hr class="hr2" >
      <br><br>
     
  </div>
      <div class="row">
        <!-- categories -->
        <?php  foreach($this->model->readcat() as $cat){ ?>
                                                <div class="col col-sm-6 col-md-4 col-lg-3">
                  <!-- categories -->
                
                      <article style="padding-bottom:30px;">
                        <div class="module">
                          <div class="cat-thumb">
                              <div style="Height: 100px; width: 100px;">
                          </div>
                          <form action="categorizedProduct" id="my_form" method="post" name="category">     

 <button  name="category" value=" <?php echo  $cat->categoryID; ?>" class="cat-title" style="border:none">   <?php echo  $cat->category; ?> </button>
</form>
                         
						
                         
                        </div>
                      </article>
               </div>
                              
   <?php
        }?>
                                                                                                                                                                                                        
      </div>
    </div>


  </div>
</section>






        

 




    
    <div class="container-fluid" style="background-color:rgba(0, 0, 0, 0.1);height: 290px;">
    
      <h1>Over 3.5 million genuine NEW spare parts</h1>
      <img class="img2" src="<?php echo URLROOT . 'images/im.png'; ?>" alt="Pineapple" width="200" height="200" style="float: right;">
    <br>
	  <P>When it comes to squeezing every ounce of grin inducing, neck snapping enjoyment out of your two-wheeled thrill machine the first place to stop is the after-market market. Here you will find a plethora of performance parts that are engineered specifically to make your scoot shoot. From exotic exhaust systems to the latest in crash protection, TheDoctor has a curated selection of premium add-ons to take your ride to the next level. Whether you're strictly street or a track day junkie RevZilla is here to keep kids off stock bikes. </P>
        <h3 style="padding-top:50px;">Delivered all over Egypt</h3>
    </div>
          
    
          <br>
          
          
    </section >
    <?php
  require APPROOT . '/views/inc/footer.php';


  }
  }
  ?>