<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>handicraft | Ecommerce websit handicraft</title>
    <link rel="stylesheet" href="D:\art\style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!-- <meta name="viewport"content="width=device-width,initial-scale"> -->
  
</head>
<body>
    <div class="header">
        <div class="navber">
            <div class="logo">
                <img src="D:art\New folder\logo123.png"alt="No images" width="160" class="logo1">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li onclick="list11()"><a href="#home" class="list1 active">Home</a></li>
                    <li onclick="list12()"><a href="#bird" class="list2">Birds</a></li>
                    <li onclick="list13()"><a href="#flower" class="list3">Flowers</a></li>
                    <li onclick="list14()"><a href="#animal" class="list4">Animals</a></li>
                    <li onclick="list17()"><a href="#feature" class="list7">Feature Product</a></li>
                    <li onclick="list18()"><a href="#latest" class="list8">Latest Product</a></li>
                    <li onclick="list15()"><a href="#Account" class="list5">Account</a></li>
                    <li onclick="list16()"><a href="#cart1" class="list6" id=" cartR"><i class="fa-solid fa-cart-shopping"></i> Cart</a><span id="cartnum">0</span></li>
                    <li onclick="list19()"><a href="D:\web devlopement learning\PHP\index.html" class="list9">Login</a></li>
                
                </ul>
            </nav>
            <!-- <a href=""><img src="D:\art\New folder\1_KwqSHfeILFT91L3jahO9UQ001.png" alt="" class="mene-icon" onclick="menutoggle()"></a> -->
       
        </div>

        <section id="home">
        <div class="row">
            <div class="col-2">
                        <h1> welcome  <br><br> Subhash  <br><br>handicraft</h1>               
                    <!-- <h1 > <center>welcome</center></h1>
                    <h1><center>Subhash </center></h1>
                    <h1><center> handicraft </center></h1> 
             -->
                <p>success isn't always about greatness. it's about consistency. consistent <br> hard work gains success. Greatness will come.</p>
            <a href="" class="btn">Explore Now &#10148;</a>
            </div> 
            <div class="col-2">
                <img src="animals\IMG-20211122-WA0016.jpg">
            </div>
        </div>
  

<!-------featured categories ------------->


    <div class="categories">
        <div class="small-container">
            <h2 class="title">Birds Flower Animal Specialist</h2>
            <div class="row">
                <div class="col-3">
                    <a href="#" onclick="items1()"><img src="IMG-20211122-WA0071.jpg" height="300px"></a>
                </div>
                <div class="col-3">
                    <a href="#" onclick="items2()"><img src="flowers\IMG-20211122-WA0174.jpg" height="300px"></a>
                </div>
                <div class="col-3">
                    <a href="#" onclick="items3()"><img src="animals\IMG-20211122-WA0106.jpg" height="300px"></a>   
                </div>
            </div>
        </div>
    </div>
</section>


<!-- products details  -->

<!-- item1 -->

<div id="item1">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider1" class="img-slide">                       
                     <a href="D:\art\birds\IMG-20211122-WA0023.jpg"alt="imgs" width="60px" target="full">click</a> 
                     <a href="D:\art\birds\IMG-20211122-WA0024.jpg"alt="imgs" width="60px" target="full">click</a> 
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider1')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider1')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                    </div>
                <div class="image-full" id="product1">
                    <iframe src="D:\art\IMG-20211122-WA0071.jpg" name="full" frameborder="0" width="350px" height="450px"></iframe>
                    <!-- <img src="D:\art\IMG-20211122-WA0071.jpg" alt="Full Image" width="350px" height="450px" name="full"> -->
                    <h3>Picoke Painting</h3>
                    <div>
                        <label for="">Rate: </label>
                        <span class="rates">1350</span>
                    </div>
                </div>

                 
    
                    <div class="button">
                        <button onclick="cart(product1)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content1">
        <h2>Pikok Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- item 1 close  -->

<!-- item2 -->

<div id="item2">
    <div class="header">
    <div class="image-container">
        <div class="image-prev">
            <div class="imags">
                <div id="img-slider2" class="img-slide">                       
            <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
        </div>
           <div class="button1">
            <button class="btn-up" onclick="btn_up1('img-slider2')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
            <button class="btn-down" onclick="btn_down1('img-slider2')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
           </div>
        </div>
    
        <div class="image-full" id="product2">
            <img src="D:\art\flowers\IMG-20211122-WA0174.jpg" alt="Full Image" width="350px" height="450px">
            <h3>Pic Painting</h3>
            <div>
                <label for="">Rate: </label>
                <span class="rates">1250</span>
            </div>
        </div>
        
        <div class="button">
            <button onclick="cart(product2)" id="cart">Add to Cart</button>
            <button onclick="payment()">Buy Now</button>
        </div>
    </div> 
        <div class="content" id="content2">
            <h2>Bird Painting </h2>
            <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
            <div class="offers">
                <div class="avOffer">Available Offers</div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
                </div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
                </div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
                </div>
                <div class="address">
    
                    <div class="pincode">
                       <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                    </div>
                    <div class="orderDeliverd">
                        <div class="bold">
                            Service
                        </div>
                        <div class="diliverd">
                            <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                        </div>
                        <div class="diliverd">
                            <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <!-- item 2 close  -->

    <!-- item3 -->

<div id="item3">
    <div class="header">
    <div class="image-container">
        <div class="image-prev">
            <div class="imags">
                <div id="img-slider3" class="img-slide">                       
            <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
        </div>
           <div class="button1">
            <button class="btn-up" onclick="btn_up1('img-slider3')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
            <button class="btn-down" onclick="btn_down1('img-slider3')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
           </div>
        </div>
    
        <div class="image-full" id="product3">
            <img src="D:\art\IMG-20211122-WA0126145.jpg" alt="Full Image" width="350px" height="450px">
            <h3>Picok Painting</h3>
            <div>
                <label for="">Rate: </label>
                
                <span class="rates">1150</span>
            </div>
        </div>
        
        <div class="button">
            <button onclick="cart(product3)" id="cart">Add to Cart</button>
            <button onclick="payment()">Buy Now</button>
        </div>
    </div> 
        <div class="content" id="content3">
            <h2>Birds Painting </h2>
            <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
            <div class="offers">
                <div class="avOffer">Available Offers</div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
                </div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
                </div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
                </div>
                <div class="address">
    
                    <div class="pincode">
                       <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                    </div>
                    <div class="orderDeliverd">
                        <div class="bold">
                            Service
                        </div>
                        <div class="diliverd">
                            <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                        </div>
                        <div class="diliverd">
                            <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <!-- item 3 close  -->


<!-- items_birds1  -->

<div id="item_birds1">
    <div class="header">
    <div class="image-container">
        <div class="image-prev">
            <div class="imags">
                <div id="img-slider4" class="img-slide">                       
            <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
           <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
        </div>
           <div class="button1">
            <button class="btn-up" onclick="btn_up1('img-slider4')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
            <button class="btn-down" onclick="btn_down1('img-slider4')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
           </div>
        </div>
    
        <div class="image-full" id="product4">
            <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="Full Image" width="350px" height="450px">
            <h3>Picok Painting</h3>
            <div>
                <label for="">Rate: </label>
                
                <span class="rates">1150</span>
            </div>
        </div>
        
        <div class="button">
            <button onclick="cart(product4)" id="cart">Add to Cart</button>
            <button onclick="payment()">Buy Now</button>
        </div>
    </div> 
        <div class="content" id="content3=4">
            <h2>Birds Painting </h2>
            <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
            <div class="offers">
                <div class="avOffer">Available Offers</div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
                </div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
                </div>
                <div class="contOffer">
                    <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
                </div>
                <div class="address">
    
                    <div class="pincode">
                       <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                    </div>
                    <div class="orderDeliverd">
                        <div class="bold">
                            Service
                        </div>
                        <div class="diliverd">
                            <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                        </div>
                        <div class="diliverd">
                            <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
    <!-- item 4 close  -->


    <!-- products details  -->

<!-- items_birds2  -->

<div id="item_birds2">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider5" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider5')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider5')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product5">
                        <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product5)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content5">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- items_birds2 close  -->


    <!-- products details  -->

<!-- items_birds3  -->

<div id="item_birds3">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider6" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider6')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider6')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product6">
                        <img src="D:\art\birds\IMG-20211122-WA0094.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product6)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content6">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- items_birds3 close  -->


    <!-- products details  -->

<!-- items_birds4  -->

<div id="item_birds4">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider7" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider7')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider7')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product7">
                        <img src="D:\art\birds\IMG-20211122-WA0107.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product7)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content7">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- items_birds4 close  -->


<!-- stamp_paper1  -->

<div id="stamp_paper1">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider8" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider8')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider8')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product8">
                        <img src="D:\art\birds\IMG-20211122-WA0165.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product8)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content8">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- stamp paper1 close  -->


<!-- stamp paper 2  -->

<div id="stamp_paper2">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider8" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider9')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider9')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product9">
                        <img src="D:\art\birds\IMG-20211122-WA0164.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product9)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content9">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- stamp paper 2 close -->




<!-- stamp paper 3  -->

<div id="stamp_paper3">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider8" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider10')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider10')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product10">
                        <img src="D:\art\birds\IMG-20211122-WA0155.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product10)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content10">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- stamp paper 3 close -->


<!-- stamp paper 4  -->

<div id="stamp_paper4">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider11" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider11')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider11')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product11">
                        <img src="D:\art\birds\IMG-20211122-WA0146.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product11)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content11">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- stamp paper 4 close -->

<!-- birds_paper 1  -->

<div id="birds_paper1">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider12" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider12')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider12')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product12">
                        <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product11)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content12">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- birds_paper 1 close -->

<!-- birds_paper 2  -->

<div id="birds_paper2">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider13" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider13')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider13')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product13">
                        <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product13)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content13">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- birds_paper 2 close -->

<!-- birds_paper 3  -->

<div id="birds_paper3">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider14" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider14')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider14')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product14">
                        <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product14)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content14">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- birds_paper 4 close -->

<!-- birds_paper 4  -->

<div id="birds_paper4">
    <div class="header">
        <div class="image-container">
            <div class="image-prev">
                <div class="imags">
                    <div id="img-slider15" class="img-slide">                       
                      <img src="D:\art\birds\IMG-20211122-WA0023.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0024.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0025.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0028.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0029.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                     <img src="D:\art\birds\IMG-20211122-WA0030.jpg" alt="imgs" width="60px">
                    </div>
                        <div class="button1">
                         <button class="btn-up" onclick="btn_up1('img-slider15')"><i class="fa-sharp fa-solid fa-angle-up"></i></button>
                         <button class="btn-down" onclick="btn_down1('img-slider15')"><i class="fa-sharp fa-solid fa-angle-down"></i></button>
                        </div>
                </div>

                    <div class="image-full" id="product15">
                        <img src="D:\art\birds\IMG-20211122-WA0031.jpg" alt="Full Image" width="350px" height="450px">
                        <h3>Picoke Painting</h3>
                        <div>
                            <label for="">Rate: </label>
                            <span class="rates">1350</span>
                        </div>
                    </div>
    
                    <div class="button">
                        <button onclick="cart(product15)" id="cart">Add to Cart</button>
                        <button onclick="payment()">Buy Now</button>
                    </div>
            </div> 
    <div class="content" id="content15">
        <h2>Birds Painting </h2>
        <div class="rates"><i class="fa-solid fa-indian-rupee-sign"></i> 1350</h2></div>
        <div class="offers">
            <div class="avOffer">Available Offers</div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Combo Offer</span> Buy 2 items save 5%; Buy 3 or more save 10%
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>1,750, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="contOffer">
                <i class="fa-solid fa-tag"></i> <span class="bold">Bank Offer</span> 10% off on SBI Credit Card EMI Transactions, up to <i class="fa-solid fa-indian-rupee-sign normal"></i>2,250, on orders of <i class="fa-solid fa-indian-rupee-sign normal"></i>5000 and above
            </div>
            <div class="address">
                <div class="pincode">
                   <div class="bold">Deliverd Pin Code</div> <input type="text" name="pincode" id="pincode"> <button>Check</button>
                </div>
                <div class="orderDeliverd">
                    <div class="bold">
                        Service
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-arrow-rotate-left"></i> 10 day return policy
                    </div>
                    <div class="diliverd">
                        <i class="fa-solid fa-money-bill"></i> Cash on Delivery available
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- birds_paper 4 close -->

<!-- bird product  -->

<section id="bird">
<div class="small-container">
    <h2 class="title">Birds</h2>
    <div class="row">
        <div class="col-4">
            <a href="#" onclick="items4()"><img src="D:\art\birds\IMG-20211122-WA0023.jpg"></a>
             <h4>kingfisher</h4>
                <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items5()"><img src="D:\art\birds\IMG-20211122-WA0025.jpg"></a>
            <h4>bird of Paradise painting </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items6()"><img src="D:\art\birds\IMG-20211122-WA0094.jpg" ></a>
            <h4>hooepoe</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items7()"><img src="D:\art\birds\IMG-20211122-WA0107.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
    </div>



    <!-- products details  -->



    
<!-------stamp paper  ------------->
<!-------stamp paper 1 ------------->

    <h2 class="title">Stamp Papers</h2>
    <div class="row">
        <div class="col-4">
            <a href="#" onclick="items8()"><img src="D:\art\birds\IMG-20211122-WA0165.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
<!-------stamp paper2  ------------->

        <div class="col-4">
            <a href="#" onclick="items9()"><img src="D:\art\birds\IMG-20211122-WA0164.jpg"></a>
            <h4>bird of Paradise painting </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
<!-------stamp paper 3 ------------->

        <div class="col-4">
            <a href="#" onclick="items10()"> <img src="D:\art\birds\IMG-20211122-WA0155.jpg" ></a>
            <h4>hooepoe</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
<!-------stamp paper 4 ------------->

        <div class="col-4">
            <a href="#" onclick="items11()"><img src="D:\art\birds\IMG-20211122-WA0146.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
    </div>
</div>


<!-- products details  -->





<!------------------ paper  --------------->

<!------------------ birds paper 1 --------------->

<div class="small-container">
    <h2 class="title">Birds</h2>
    <div class="row">
        <div class="col-4">
            <a href="#" onclick="items12()"><img src="D:\art\birds\IMG-20211122-WA0028.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
<!------------------ birds paper 2 --------------->

        <div class="col-4">
            <a href="#" onclick="items13()"><img src="D:\art\birds\IMG-20211122-WA0029.jpg"></a>
            <h4>bird of Paradise painting </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
<!------------------ birds paper 3 --------------->

        <div class="col-4">
            <a href="#" onclick="items14()"><img src="D:\art\birds\IMG-20211122-WA0030.jpg" ></a>
            <h4>hooepoe</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
<!------------------ birds paper 4 --------------->

        <div class="col-4">
            <a href="#" onclick="items15()"><img src="D:\art\birds\IMG-20211122-WA0031.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
    </div>

   <!-- ------------paper boder------------>
   <h2 class="title"> Paper Boder</h2>
   <div class="row">
       <div class="col-4">
        <a href="#" onclick="items16()"><img src="D:\art\birds\IMG-20211122-WA0037.jpg"></a>
           <h4>kingfisher</h4>
           <div class="rating">
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-o"></i>
               </div>
           <p> $12.00</p>
       </div>

       <div class="col-4">
        <a href="#" onclick="items17()"><img src="D:\art\birds\IMG-20211122-WA0044.jpg"></a>
           <h4>bird of Paradise painting </h4>
           <div class="rating">
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-o"></i>
               </div>
           <p> $12.00</p>
       </div>

       <div class="col-4">
        <a href="#" onclick="items18()"><img src="D:\art\birds\IMG-20211122-WA0083.jpg" ></a>
           <h4>hooepoe</h4>
           <div class="rating">
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-o"></i>
               </div>
           <p> $12.00</p>
       </div>

       <div class="col-4">
        <a href="#" onclick="items19()"><img src="D:\art\birds\IMG-20211122-WA0084.jpg"></a>
           <h4>kingfisher</h4>
           <div class="rating">
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star" ></i>
               <i class="fa fa-star-o"></i>
               </div>
           <p> $12.00</p>
       </div>
   </div>
</div>
</section>

<!-- flower product  -->
<section id="flower">
<div class="small-container">
    <h2 class="title">flowers</h2>
    <div class="row">
        <div class="col-4">
            <a href="#" onclick="items20()"><img src="D:\art\flowers\IMG-20211122-WA0125.jpg"></a>
            <h4>tiger</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items21()"><img src="D:\art\flowers\IMG-20211122-WA0126.jpg"></a>
            <h4>bird of Paradise painting </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items22()"><img src="D:\art\flowers\IMG-20211122-WA0127.jpg" height="294px"></a>
            <h4>hooepoe</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items23()"><img src="D:\art\flowers\IMG-20211122-WA0128.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
    </div>
</section>
    <!-- animal product  -->
<section id="animal">
    <div class="small-container">
        <h2 class="title">Animals</h2>
        <div class="row">
            <div class="col-4">
                <a href="#" onclick="items24()"><img src="D:\art\animals\IMG-20211122-WA00620.jpg"></a>
                <h4>tiger</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
    
            <div class="col-4">
                <a href="#" onclick="items25()"><img src="D:\art\animals\IMG-20211122-WA0061.jpg"></a>
                <h4>bird of Paradise painting </h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
    
            <div class="col-4">
                <a href="#" onclick="items26()"><img src="D:\art\animals\IMG-20211122-WA0062.jpg" height="294px"></a>
                <h4>hooepoe</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
    
            <div class="col-4">
                <a href="#" onclick="items27()"><img src="D:\art\animals\IMG-20211122-WA00612.jpg"></a>
                <h4>kingfisher</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
        </div>
        </div>
       
    </section>

<!-------featured products ------------->

<section id="feature">
<div class="small-container">
    <h2 class="title">featured Products</h2>
    <div class="row">
        <div class="col-4">
            <a href="#" onclick="items28()"><img src="D:\art\IMG-20211122-WA0022.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items29()"><img src="D:\art\IMG-20211122-WA0021.jpg"></a>
            <h4>bird of Paradise painting </h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items30()"><img src="D:\art\IMG-20211122-WA0138001.jpg" height="294px"></a>
            <h4>hooepoe</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>

        <div class="col-4">
            <a href="#" onclick="items31()"><img src="D:\art\IMG-20211122-WA0022.jpg"></a>
            <h4>kingfisher</h4>
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
                </div>
            <p> $12.00</p>
        </div>
    </div>
</section>



<!-------Latest products ------------->

<section id="feature">
    <div class="small-container">
        <h2 class="title">featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="#" onclick="items32()"><img src="D:\art\IMG-20211122-WA0022.jpg"></a>
                <h4>kingfisher</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
    
            <div class="col-4">
                <a href="#" onclick="items33()"><img src="D:\art\IMG-20211122-WA0021.jpg"></a>
                <h4>bird of Paradise painting </h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
    
            <div class="col-4">
                <a href="#" onclick="items34()"><img src="D:\art\IMG-20211122-WA0138001.jpg" height="294px"></a>
                <h4>hooepoe</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
    
            <div class="col-4">
                <a href="#" onclick="items35()"><img src="D:\art\IMG-20211122-WA0022.jpg"></a>
                <h4>kingfisher</h4>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                <p> $12.00</p>
            </div>
        </div>
    </section>
    
<!------------------- offer --------------->
<section id="latest">
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <a href="D:\art\payment.html"><img src="D:\art\IMG-20211122-WA0141.jpg" alt="np image found" class="offer-img"></a>
            </div>
            <div class="col-2">
                <p>Exclusively Available On Redstore</p>
                <h1>samrt band 4</h1>
                <small>The mi smart brand 4 features 89.9% larger (than mi brand 3)AMOLED Colour full-touch display with adjustable  ,so everything is clear as can be.</small> 
            <a href=""class="btn">Buy  Now &#8594; </a>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ---------------testimonial-------------- -->
<section id="Account">
<div class="testimonial">
    <div class="smmall-container">
        <div class="row">
            <div class="col_3">
                <i class="fa fa-quote-left" ></i>

            <p>Loren Ipsum is simple, dummy text of the painting and typesetting industry. Lorem Ipsum has been the industry's  standard dummy text ever.</p>   
            <div class="rating">
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star-o"></i>
            </div>
            <img src="C:\Users\DELL\OneDrive\Pictures\Camera Roll\IMG_2663 - Copy-01.jpg" alt="">
            <h3>Piyush kumawat  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
        </div>

            <div class="col_3">
                <i class="fa fa-quote-left" ></i>

                <p>Loren Ipsum is simple, dummy text of the painting and typesetting industry. Lorem Ipsum has been the industry's  standard dummy text ever.</p>   
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa-solid fa-star-sharp-half-stroke"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                    <img src="D:\art\New folder\WhatsApp Image 2021-12-28 at 11.32.08 PM (1).jpeg" alt="">
                    <h3>SUBHASH CHAND KUMAWAT</h3>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ---------------brands-------------- -->

<div class="brands">
    <div class="small-container">
        <div class="row_brands">
            <div class="col-5">
                <a href="https://paytm.com/rent-payment">
                <img src="D:\art\New folder\download (1).png" alt=""></a>
            </div>
            <div class="col-5">
                <img src="D:\art\New folder\phone_pay.png" alt="">
            </div>
            <div class="col-5">
                <a href="https://www.instagram.com/piyushkumawat_23/">
                <img src="D:\art\New folder\download.jfif" alt=""></a>
            </div>
            <div class="col-5">
                <a href="">
                <img src="D:\art\New folder\download.png" alt=""></a>
            </div>
            <div class="col-5">
                <a href="">
                <img src="D:\art\New folder\paypal.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

</section>

<section id="cart1">
<div class="cart">
    <div class="title">Cart</div><hr>
    <div id="title">

    </div>
</div>
</section>

<!-- --------------------------login page------------------------ -->

<div class="container">
       <div class="box">
            <h3>login id</h3>
            <form action="">
                <label >username</label>
                <input type="text" name="username" placeholder="username">
                
                <label >Email</label>
                <input type="email" name="email" placeholder="email">
                
                <label >Password</label>
                <input type="password" name="password" placeholder="password">

                <button>login</button>
            </form>
       </div>
    </div>

<!-- ------------footer------------------ -->
<section id="footer">
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>download Our App</h3>
                <p>Download App for Android and iOS mobile phones.</p> 
                <div class="App-logo">
                    <img src="D:\art\New folder\images (1).png" alt="" >
                    <img src="D:\art\New folder\Download_on_the_App_Store_Badge.svg.webp" alt="" height="56px">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="D:\art\New folder\Hadezign-Hobbies-Art.ico" alt="" height="100px" width="200px">
                <p>our Purpose is to sustainably make the pleasure and benefits of sports accessible to the many.<p> 
            </div>
            <div class="footer-col-3">
                <h3>use ful link</h3>
                <ul>    
                    <li>coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate </li>
                </ul> 
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>    
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube </li>
                </ul> 
            </div>
        </div>
        <hr>
        <p class="copyright"> copyright 2022 - Easy tutorials</p>
    </div>



</div>
</section>
    <!-- js for toggle menu -->
<!-- <script>
    var MenuItems = document.getElementById ("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
    
    {
        MenuItems.style.maxHeight = "200px";
    }
    else
    {
        MenuItems.style.maxHeight = "0px";
    }
    }
</script> -->

</div>


<script src="script.js"></script>
</body>
</html>




<?php   
extract($_REQUEST);
$file=fopen("form.txt","a");

fwrite($file ,"name :");
fwrite($file ,$username . "\n");

fwrite($file ,"email :");
fwrite($file ,$email . "\n");

fwrite($file ,"password :");
fwrite($file ,$password . "\n\n\n");
fclose($file);
?>
