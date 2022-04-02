<?php 
class ProductDescription extends view{
    public function output (){
        $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
	$productID=$_POST['addtocart'];
	$category=$_POST['addtocart'];
    ?>
    <br><br><br>
    <head>
		<script>
	$(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
		
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		var quantity = parseInt($('#quantity').val());
		
		// If is not undefined
			
			$('#quantity').val(quantity + 1);

		  
			// Increment
		
	});

	 $('.quantity-left-minus').click(function(e){
		// Stop acting like a button
		e.preventDefault();
		// Get the field name
		var quantity = parseInt($('#quantity').val());
		
		// If is not undefined
	  
			// Increment
			if(quantity>0){
			$('#quantity').val(quantity - 1);
			}
	});
	
});</script>
	</head>
<body>

<?php foreach($this->model->readProd($productID) as $product){ ?> 
<div class="row" >

<div class="col-md-12">
			<h2><?php echo  $product->name; ?></h2>
    </div>
<div class="card" style="margin-left:5%; width:30%;height:30% ;border:2px solid #808080;">
  <img src="<?php echo URLROOT . $product->img; ?>" alt="Denim Jeans" style="width:100% hieght:100%">    
</div>

<div class="col-sm" style="margin-top:4%; margin-left:6%; text-align:left; margin-right:10%;">

        <br>
        <p class="price" style="font-size:30px">EGP&nbsp;<?php echo  $product->price; ?></p>
        <div style="font-size:20px ">
        <p><b>Avalability:</b> in stock  </p>
        <p><b>Tags:</b> spare parts  </p>

        <div >
<form method="POST"><button class="cart-btn" name="addC" value="<?php echo $product->id; ?>" style="border-radius:15px; font-size:20px; margin-right:10px; margin-left:12px;">Add to Cart</button>


		

                        <div class="col-lg-3">
                                        <div class="input-group" >
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus  btn  btn-number"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" >
                                  
									<span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn  btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                        </div>
						</form>

</div>
</div>


<h3 style="text-align:left; font-size:30px; margin-top:5%;"><b>Desciption</b></h3>
<p style="font-size:20px"> <?php echo  $product->description; ?></p>

</div>

</div>
</div>  
<?php }?>
</div>
	</div>
    </body>
<?php
  require APPROOT . '/views/inc/footer.php';
  }
}
?>


