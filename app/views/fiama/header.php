<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $data['page_title'] . " | " . WEBSITE_TITLE ?></title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/GlobalStyle.css" type="text/css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/Header.css" type="text/css">
  <!-- icons -->
  <link rel="stylesheet" href="<?= ASSETS ?>icons/vuesax-icon-main/style.css" type="text/css">
  <link rel="stylesheet" href="<?= ASSETS ?>icons/font-apicon-master/css/style.css" type="text/css">


</head>

<body>
  <header class="Header_wrapper">
    <div class="Header-middle-area">
      <div class="container">
        <div class="row d-flex justify-content-xl-between justify-content-center">
          <div class="Header_logo col-12 col-md-4 col-xl-2 d-flex align-items-center justify-content-center">
            <a href="<?= ROOT ?>home"><img src="<?= ASSETS ?>img/header/logo.png" alt=""></a>
          </div>
          <div class="Header_contact_and_search col-xl-7 d-flex justify-content-around align-items-center d-none d-xl-flex">
            <div class="Header-phone-wrap d-flex align-items-center">
              <i class="-ap icon-phone-handset Header-phone-icon"></i>
              <div class="Header-phone-content-wrap d-flex flex-column ps-4">
                <h6 class="Header-phone-text">PHONE</h6>
                <a href="tel:069696969" class="Header-phone-link">+0123456789</a>
              </div>
            </div>
            <div class="Header-search">
              <input type="text" class="Header-search-input" placeholder="Search here...">
              <button class="Header-search-btn"><i class="-ap icon_fluent_search_24_regular Header-search-icon"></i></button>
            </div>
          </div>
          <div class="Header_choices col-12 col-md-8 col-xl-3 d-flex justify-content-center justify-content-md-end justify-content-xl-between align-items-center mt-4 mt-md-0 mt-xl-0">
            <div class="Header-cart d-flex justify-content-between align-items-center" id="Header-cart">
              <div class="Header-cart-icon-wrapper">
                <i class="Header-cart-icon isax-bag-21"></i>
                <span class="Header-cart-number">69</span>
              </div>
              <div class="Header-cart-info-wrapper">
                <div class="Header-cart-text">YOUR CART</div>
                <div class="Header-cart-money">$8.95</div>
              </div>
            </div>
            <div class="Header-user justify-content-beetween align-items-center d-none d-xl-flex">
              <i class="-ap icon-user6 Header-user-icon"></i>
              <div class="Header-user-text d-inline-block">My Account</div>
              <ul class="Header-user-list">
                <li class="Header-user-item">
                  <a href="#" class="Header-user-item-link">Đăng nhập</a>
                </li>
                <li class="Header-user-item">
                  <a href="#" class="Header-user-item-link">Đăng xuất</a>
                </li>
              </ul>
            </div>
            <div class="Header-menu-button d-xl-none ps-4 ms-2">
              <button id="Header-button-menu"><i class="-ap icon-menu2 Header-menu-icon"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="Header-bottom-area d-none d-xl-block">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-center align-items-center Header-nav-list-wrapper">
            <ul class="Header-nav-list d-flex justify-content-center align-items-center">
              <li class="Header-nav-item me-4">
                <a href="#" class="Header-nav-item-link d-inline-block">HOME</a>
              </li>
              <li class="Header-nav-item me-4">
                <a href="#" class="Header-nav-item-link d-inline-block">SHOP</a>
              </li>
              <li class="Header-nav-item me-4">
                <a href="#" class="Header-nav-item-link d-inline-block">ABOUT</a>
              </li>
              <li class="Header-nav-item me-4">
                <a href="#" class="Header-nav-item-link d-inline-block">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="Header-menu-small-screen" id="Header-cart-sidebar">
    <div class="Header-menu-can-scroll d-flex flex-column over-flow-x-hidden over-flow-y-auto">
      <div class="Header-menu-header d-flex align-items-center justify-content-between pb-4 mb-5">
        <img src="<?= ASSETS ?>img/header/logo.png" alt="">
        <button class="Header-menu-button-close" id="Header-menu-button-close">x</button>
      </div>
      <div class="Header-menu-search mb-5">
        <input class="Header-menu-search-input" type="text" placeholder="Search...">
        <button class="Header-menu-search-button"><i class="-ap icon_fluent_search_24_regular Header-menu-search-icon"></i></button>
      </div>
      <div class="Header-menu-menu">
        <ul class="Header-menu-menu-list">
          <li class="Header-menu-menu-item">
            <a href="#" class="Header-menu-menu-item-link">HOME</a>
          </li>
          <li class="Header-menu-menu-item">
            <a href="#" class="Header-menu-menu-item-link">SHOP</a>
          </li>
          <li class="Header-menu-menu-item">
            <a href="#" class="Header-menu-menu-item-link">ABOUT</a>
          </li>
          <li class="Header-menu-menu-item">
            <a href="#" class="Header-menu-menu-item-link">CONTACT</a>
          </li>
        </ul>
      </div>
      <div class="Header-menu-others-feature pt-1 pb-4 mt-5">
        <ul class="Header-menu-others-feature-list">
          <li class="Header-menu-others-feature-item">
            <a href="">
              <span class="Header-menu-others-feature-icon-wrapper">
                <i class="-ap icon-user6"></i>
              </span>
              My account
            </a>
          </li>
          <li class="Header-menu-others-feature-item">
            <a href="">
              <span class="Header-menu-others-feature-icon-wrapper">
                <i class="isax-bag-21"></i>
                <sup>69</sup>
              </span>
              Shopping cart
            </a>
          </li>
        </ul>
      </div>
      <div class="Header-menu-social-media mt-5">
        <ul class="Header-menu-social-media-list d-flex justify-content-between">
          <li class="Header-menu-social-media-item" title="facebook">
            <a href="" class="Header-menu-social-media-icon-wrapper">
              <i class="-ap icon-ion-social-facebook Header-menu-social-media-icon"></i>
            </a>
          </li>
          <li class="Header-menu-social-media-item" title="twitter">
            <a href="" class="Header-menu-social-media-icon-wrapper">
              <i class="-ap icon-twitter4 Header-menu-social-media-icon"></i>
            </a>
          </li>
          <li class="Header-menu-social-media-item" title="pinterest">
            <a href="" class="Header-menu-social-media-icon-wrapper">
              <i class="-ap icon-pinterest Header-menu-social-media-icon"></i>
            </a>
          </li>
          <li class="Header-menu-social-media-item" title="instagram">
            <a href="" class="Header-menu-social-media-icon-wrapper">
              <i class="-ap icon-instagram Header-menu-social-media-icon"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="Header-cart-side-bar" id="Header-cart-side-bar">
    <div class="Header-cart-side-bar-can-scroll">
      <div class="Header-cart-side-bar-header d-flex justify-content-between align-items-center pb-4 mb-4">
        <div class="Header-cart-side-bar-header-text">CART</div>
        <button class="Header-cart-side-bar-button" id="Header-cart-side-bar-button">x</button>
      </div>
      <div class="Header-cart-side-bar-cart">
        <ul class="Header-cart-side-bar-cart-list">
          <li class="Header-cart-side-bar-cart-item">
            <a href="" class="Header-cart-side-bar-cart-item-link d-flex">
              <div class="Header-cart-side-bar-cart-item-img-wrapper">
                <img src="<?=ASSETS?>img/product/1.png" alt="" class="Header-cart-side-bar-cart-item-img">
                <button class="Header-cart-side-bar-cart-item-delete-button">
                  <i class="-ap icon-trash Header-cart-side-bar-cart-item-delete-icon"></i>
                </button>
              </div>
              <div class="Header-cart-side-bar-cart-item-info">
                <div class="Header-cart-side-bar-cart-item-info-name">Prenium Joyful</div>
                <div class="Header-cart-side-bar-cart-item-info-amount-price-wrapper">
                  <span class="Header-cart-side-bar-cart-item-info-amount">6</span>
                  x
                  <span class="Header-cart-side-bar-cart-item-info-price">9</span>
                </div>
              </div>
            </a>
          </li>
          <li class="Header-cart-side-bar-cart-item">
            <a href="" class="Header-cart-side-bar-cart-item-link d-flex">
              <div class="Header-cart-side-bar-cart-item-img-wrapper">
                <img src="<?=ASSETS?>img/product/1.png" alt="" class="Header-cart-side-bar-cart-item-img">
                <button class="Header-cart-side-bar-cart-item-delete-button">
                  <i class="-ap icon-trash Header-cart-side-bar-cart-item-delete-icon"></i>
                </button>
              </div>
              <div class="Header-cart-side-bar-cart-item-info">
                <div class="Header-cart-side-bar-cart-item-info-name">Prenium Joyful</div>
                <div class="Header-cart-side-bar-cart-item-info-amount-price-wrapper">
                  <span class="Header-cart-side-bar-cart-item-info-amount">6</span>
                  x
                  <span class="Header-cart-side-bar-cart-item-info-price">9</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="Header-cart-side-bar-footer mt-5">
        <div class="Header-cart-side-bar-footer-sub-tootal d-flex justify-content-between align-items-center">
          <div class="Header-cart-side-bar-footer-sub-total-text">Subtotal</div>
          <div class="Header-cart-side-bar-footer-sub-total-money">$310.00</div>
        </div>
        <div class="Header-cart-side-bar-footer-button-wrapper">
          
        </div>
        <p>Free Shipping on All Orders Over $100!</p>
      </div>
    </div>
  </div>

  <div class="Header-overlay" id="overlay"></div>

  <script>
    const overlayElement = document.getElementById('overlay')
    const headerSidebarElement = document.getElementById('Header-cart-sidebar')
    const buttonCloseHeaderMenu = document.getElementById('Header-menu-button-close')
    const headerCartElement = document.getElementById('Header-cart')
    const headerCartSideBarElement = document.getElementById('Header-cart-side-bar')
    const headerCartSideBarButtonCloseElement = document.getElementById('Header-cart-side-bar-button')

    document.getElementById('Header-button-menu').addEventListener('click', function() {
      overlayElement.classList.toggle('overlay-active')
      headerSidebarElement.classList.toggle('Header-menu-open')
    })

    overlayElement.addEventListener('click', function() {
      overlayElement.classList.toggle('overlay-active')
      headerSidebarElement.classList.remove('Header-menu-open')
      headerCartSideBarElement.classList.remove('Header-cart-side-bar-open')
    })

    buttonCloseHeaderMenu.addEventListener('click', function() {
      overlayElement.classList.toggle('overlay-active')
      headerSidebarElement.classList.toggle('Header-menu-open')
    })

    headerCartElement.addEventListener('click', function () {
      overlayElement.classList.toggle('overlay-active')
      headerCartSideBarElement.classList.toggle('Header-cart-side-bar-open')
    })

    headerCartSideBarButtonCloseElement.addEventListener('click', function () {
      overlayElement.classList.toggle('overlay-active')
      headerCartSideBarElement.classList.toggle('Header-cart-side-bar-open')
    })
  </script>