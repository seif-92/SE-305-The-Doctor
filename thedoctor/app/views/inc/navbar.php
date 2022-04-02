
  <head>

      <style>
   
.logout-btn{
background-color:#fff;
border-color:#fff;
border:none;
margin-top:8px;
color:#000;
}
.breadcrumb>.active {
  color: #808080;
}

          </style>
          <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

      </head>
  
  
  <?php



 if(isset($_POST['logout'])){
    unset($_SESSION['ID']);
    header('location: ' . URLROOT . 'public/pages/index');
    
}

?>




<nav class="navbar navbar-expand-md ">
  <a class="" href="<?php echo URLROOT . 'public/pages/index'; ?>">

    <img src="<?php echo URLROOT . 'images/logo.png'; ?>" alt="Logo" style="width: 150px;">
  </a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon justify-content-end"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        


        <ul class="navbar-nav">
        <li class="nav-item ">
                <a class="nav-link" href="<?php echo URLROOT . 'public/pages/index'; ?>">Home <span class="sr-only">(current)</span></a>
                
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/pages/products'; ?>">PRODUCTS</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/pages/about'; ?>">ABOUT</a>
            </li>
            <?php if(!isset($_SESSION['ID'])){ ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/users/login'; ?>">Login/Register</a>
            </li>
            <?php
            }
            else{
                ?>
                 <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT . 'public/pages/profile'; ?>">My Account</a>
            </li>
                   <form  method="post" >    
                <li class="nav-item">
              
                    <button  name="logout"  class="nav-link logout-btn"> Logout</button>
                    
                            </li>

                            </form>

                            <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT . 'public/pages/cart'; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
</li>
                            <?php
            }
            ?>
           
        </ul>
        


 


    </div>
    <hr class="navhr">
    
</nav>

