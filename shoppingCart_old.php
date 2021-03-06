<?php include_once 'includes/session.php'; ?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- CSS Sheet -->
    <link rel="stylesheet" href="styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/1e07fc90b9.js" crossorigin="anonymous"></script>
    
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <title>Shopping Cart | TastyGrocery.com</title>
    <meta name="shopping cart" content="Shows what the user is trying to purchase and lets them edit the quantities, remove items, or procede to purchase"> <!--Don't forget to edit description and title-->
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    
  </head>

  <body>

    <?php include_once 'templates/navbar.php'; ?>
    <?php include_once 'templates/header.php'; ?>

    <div class="page-container">
        <div class="content-wrapper">
            
            <div class="main page-width">
              <!--Main content starts here!-->
              
              <div class="row aisle">
                <div class="col-lg-8 col-md-6 col-sm-12">
                  <div class="row aisle">
              
              <div class="col-lg-6  col-md-12 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a><img src="img/produce/apple.jpg" alt="apples"></a>
                  </div>
                  <div class="info-holder">
                    <a><p class="food-name">Picked Apples</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">4.99$</p>
                    
                    <input type="number" placeholder="Enter Quantity" name= "item1" id="item1cart" value="1" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                    <select class="quality" id="quality-selector1cart">
                      <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                      <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                      <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                    </select>  
                  
                  </div>
                </div>
              </div>
              
              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a><img src="img/produce/banana.jpg" alt="bananas"></a>
                  </div>
                  <div class="info-holder">
                    <a><p class="food-name">Ripe Bananas</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">2.99$</p>
                    
                    <input type="number" placeholder="Enter Quantity" name= "item2" id="item2cart" value="1" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                    <select class="quality" id="quality-selector2cart">
                      <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                      <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                      <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                    </select>  
                  
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a><img src="img/produce/pepper.jpg" alt="peppers"></a>
                  </div>
                  <div class="info-holder">
                    <a><p class="food-name">Hot Peppers</p></a>
                    <p class="food-details">1.0 kg</p>
                    <p class="food-price">6.99$</p>
                    
                    <input type="number" placeholder="Enter Quantity" name= "item3" id="item3cart" value="1" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                    <select class="quality" id="quality-selector3cart">
                      <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                      <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                      <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                    </select>  
                  
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a><img src="img/meat/chicken.jpg" alt="chicken"></a>
                  </div>
                  <div class="info-holder">
                    <a><p class="food-name">Fresh Chicken</p></a>
                    <p class="food-details">1.5 kg</p>
                    <p class="food-price">7.99$</p>
                    
                    <input type="number" placeholder="Enter Quantity" name= "item4" id="item4cart" value="1" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                    <select class="quality" id="quality-selector4cart">
                      <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                      <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                      <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                    </select>  
                  
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="advertisement-holder">
                  <div class="img-holder">
                    <a><img src="img/meat/beef.jpg" alt="beef"></a>
                  </div>
                  <div class="info-holder">
                    <a><p class="food-name">Sliced Beef</p></a>
                    <p class="food-details">1.2 kg</p>
                    <p class="food-price">10.99$</p>
                    
                    <input type="number" placeholder="Enter Quantity" name= "item5" id="item5cart" value="1" min="0" onchange='saveValue(this);' onkeyup='saveValue(this);'>
                    <select class="quality" id="quality-selector5cart">
                      <option value="economy" class="option" id="economy">Economy Value (0.75x price)</option>
                      <option value="regular" class="option" id="regular">Regular Value (normal price)</option>
                      <option value="deluxe" class="option" id="deluxe">Deluxe Value (1.25x price)</option>
                    </select>  
                  
                  </div>
                </div>
              </div>

            </div>

            </div>

            <div class="col-lg-4 col-sm-12">
              <h2 class="center-text"> Receipt </h2>
              <hr/>

              <table class="table-receipt">
              </table>




            
            <hr/>
            <h3 class="center-text" id="subtotal">Subtotal:            $46.92</h3>
            <h3 class="center-text" id="QST">QST: $2.35</h3>
            <h3 class="center-text" id="GST">GST: $4.34</h3>
            <hr/>
            <h2 class="center-text" id="total-price">Total: $53.61</h2>
            <div class="center-text">
            <a class="custom-button" href="ThankYou.html"><i class="fas fa-shopping-cart"></i> Proceed to Purchase</a>
          </div>
            </div>
            
          </div>

              
           
            </div>
              <!--Main content ends here!-->
            </div>

        </div>

        <?php include_once 'templates/footer.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
    <script src="scripts/retainquantitycart.js"></script>
    <script src="scripts/retainqualitycart.js"></script>
    <script src="scripts/updateprice.js"></script>

  </body>
</html>