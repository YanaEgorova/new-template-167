<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
      <div class="header__wrapper">
        <div class="container">
       
       
          <header class="header">
           
             
              <div class="header__top">
                <button class="header__btn js_menu-btn">
                  <span></span>
                </button>
            
                <div class="header-block">
                  <a href="./index.html" class="header__logo logo js_website-name"></a>
                  <a href="./shop.html" class="cart__span-box">
                  <svg class="cart__span-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 202.614 202.614" style="enable-background:new 0 0 202.614 202.614;" xml:space="preserve">
                 <g>
                   <g>
                     <g>
                       <path d="M177.91,55.377h-22.589v-1.368C155.311,24.25,131.091,0,101.302,0
                         C71.503,0,47.292,24.25,47.292,54.009v1.368H24.704L11.495,202.614h179.624L177.91,55.377L177.91,55.377z M101.302,6.624
                         c19.687,0,36.619,12.105,43.761,29.232c-9.448-14.137-25.5-23.478-43.761-23.478c-18.231,0-34.313,9.34-43.77,23.507
                         C64.713,18.729,81.635,6.624,101.302,6.624z M57.297,55.377c4.406-20.263,22.481-35.485,44.024-35.485
                         c21.582,0,39.618,15.222,44.024,35.485H57.297z"/>
                     </g>
                   </g>
                 </g>
                 </svg>
                      <span class="cart__span js_cart__span"></span>
                  </a>
      
                    <nav class="nav js_menu">
                      <ul class="nav__list">
                        <li class="nav__item">
                          <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
                        </li>
                        <li class="nav__item">
                          <a href="./use.html" class="nav__link">Terms of Use</a>
                        </li>
                        <li class="nav__item">
                          <a href="./contacts.html" class="nav__link">Contact Us</a>
                        </li>
                        <li class="nav__item">
                          <a href="./privacy.html" class="nav__link">Privacy Notice</a>
                        </li>
                        <li class="nav__item">
                          <a href="./return.html" class="nav__link">Return Policy</a>
                        </li>
                        <li class="nav__item">
                          <a href="./shipping.html" class="nav__link">Shipping Policy</a>
                        </li>
                      </ul>
                    </nav>
                </div>
   
            
            </div>
          </header>
       
        </div>
      </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                <h1 class="title">Thank you</h1>
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    
    <div class="footer__wrapper">
  <footer class="footer">
      <div class="container">
        <div class="footer__block footer__block--first">
          <p class="footer__title">Policies</p>
          <ul class="footer__list">
            <li class="footer__item">
              <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
            </li>
            <li class="footer__item">
              <a href="./use.html" class="footer__link">Terms of Use</a>
            </li>
            <li class="footer__item">
              <a href="./contacts.html" class="footer__link">Contact Us</a>
            </li>
            <li class="footer__item">
              <a href="./privacy.html" class="footer__link">Privacy Notice</a>
            </li>
            <li class="footer__item">
              <a href="./return.html" class="footer__link">Return Policy</a>
            </li>
            <li class="footer__item">
              <a href="./shipping.html" class="footer__link">Shipping Policy</a>
            </li>
          
          </ul>
        </div>
        <div class="footer__block--wrapper">
          <div class="footer__block">
            <p class="footer__title">Our Contacts</p>
            <ul class="footer__list">
              <li class="footer__item">
                <span class="text  js_website-address"></span>
               </li>
               <li class="footer__item">
                <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="footer__item">
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
            </ul>
          </div>
          <div class="footer__block footer__block--right">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="./index.html" class="footer__logo logo js_website-name"></a>
              </li>
              <li class="footer__item">
                <p class="text js_website-corp"></p>
              </li>
              <li class="footer__item">
                <span class="footer__span">?? All rights reserved</span>
              </li>
            </ul>
          </div>
        </div> 

      </div>
</footer>
</div>
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script> 
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>