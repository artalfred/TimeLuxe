<div class="position-fixed w-100 border-bottom" style="top: 0" id="header">
  <header>
    <div
      class="d-flex align-items-center justify-content-between border-bottom px-5"
      style="height: 2.6rem"
    >
      <h6
        class="normal-font f-xsm text-center f-xsm m-0"
        style="letter-spacing: 2px"
      >
        Explore Our New Locations
      </h6>

      <ul class="d-flex gap-3 align-items-center m-0">
        <li>
          <a href="#" class="normal-font f-xsm border-end px-3">About</a>
        </li>
        <li>
          <a href="./contact.php" class="normal-font f-xsm border-end px-3">Contact us</a>
        </li>
        <li>
          <a href="./signUp.php" class="normal-font f-xsm border-end px-3">Join us</a>
        </li>
        <li>
          <a href="./login.php" class="normal-font f-xsm" id="sign-in">Sign In</a>
        </li>
      </ul>
    </div>

    <nav
      class="d-flex justify-content-between align-items-center position-relative px-5"
      style="height: 4rem"
    >
      <div class="d-flex justify-content-center align-items-center">
        <a href="./index.php" class="fw-bold">
          <img src="./img/icon/logo.png" alt="logo" style="height: 1.4rem" />
        </a>
      </div>
      <div
        class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle"
        id="nav--list-item"
      >
        <ul class="d-flex gap-5 m-0">
          <li>
            <div class="dropdown">
              <a
                href="#"
                class="normal-font f-xsm dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >PRODUCTS</a
              >
              <ul class="dropdown-menu rounded-0 border-0">
                <li><a class="dropdown-item" href="#">Analog Watches</a></li>
                <li><a class="dropdown-item" href="#">Digital Watches</a></li>
                <li>
                  <a class="dropdown-item" href="#">Luxury Watches</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Sports Watches</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Fitness Watches</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a href="#" class="normal-font f-xsm">NEW ARRIVALS</a></li>
          <li><a href="#" class="normal-font f-xsm">BRANDS</a></li>
          <li><a href="#" class="normal-font f-xsm">SELL & TRADE</a></li>
          <li>
            <a href="#" class="normal-font f-xsm">SALE</a>
          </li>
        </ul>
      </div>

      <!-- DROPDOWN MENU -->

      <div class="d-flex gap-2 align-items-center">
        <!-- CART SIDEBAR -->
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="cart_"
          aria-labelledby="cart_Label"
        >
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="cart_Label">Cart</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>

          <div class="offcanvas-body">
            <h6 class="text-center normal-font f-xsm mt-3" id="item-count">
              Your cart is currently empty
            </h6>
            <!-- LIST ITEMS -->
            <ul class="d-grid gap-3 mt-5" id="cart"></ul>
          </div>

          <div class="offcanvas-footer p-3 border-top d-grid">
            <h6 class="normal-font mt-4" id="total"></h6>
            <a href="./checkout.php">
              <button
                class="btn btn-dark rounded-0 mt-4 w-100"
                style="padding: 0.8rem 4rem"
              >
                Proceed
              </button>
            </a>
          </div>
        </div>

        <div class="d-flex gap-4">
          <div class="d-flex justify-content-center align-items-center">
            <span class="d-flex justify-content-center h-auto">
              <ion-icon name="search-outline"></ion-icon>
            </span>
          </div>

          <div
            class="d-flex justify-content-center align-items-center"
            data-bs-toggle="offcanvas"
            data-bs-target="#cart_"
            aria-controls="cart_"
          >
            <div class="position-relative">
              <span class="d-flex justify-content-center h-auto">
                <ion-icon name="cart-outline"></ion-icon>
              </span>
              <span
                class="position-absolute top-0 start-100 translate-middle bg-danger border border-light rounded-circle"
                style="padding: 5px"
                id="dot"
              >
                <span class="visually-hidden">New alerts</span>
              </span>
            </div>
          </div>
        </div>

        <!-- CART SIDEBAR -->
        <div
          class="offcanvas offcanvas-end sidebar-menu"
          tabindex="-1"
          id="menu_"
          aria-labelledby="menu_Label"
        >
          <div class="offcanvas-header">
            <button
              type="button"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
              style="background-color: #fff"
            >
              <img src="./img/icon/close.png" style="height: 1rem" alt="" />
            </button>
          </div>

          <div class="offcanvas-body mt-5 px-4">
            <ul>
              <li><a href="">ALL WATCHES</a></li>
              <hr />
              <li><a href="">NEW ARRIVALS</a></li>
              <hr />
              <li><a href="">BRANDS</a></li>
              <hr />
              <li><a href="">SELL & TRADE</a></li>
              <hr />
              <li><a href="">OFFERS</a></li>
              <hr />
              <li><a href="">About</a></li>
              <hr />
            </ul>
          </div>

          <div
            class="offcanvas-footer p-3 border-top d-flex justify-content-center gap-5 border-top"
          >
            <a href="" class="w-100 d-flex justify-content-center"
              ><img
                src="./img/icon/facebook.png"
                style="height: 1rem"
                alt="facebook"
            /></a>
            <a href="" class="w-100 d-flex justify-content-center"
              ><img
                src="./img/icon/instagram.png"
                style="height: 1rem"
                alt="instagram"
            /></a>
            <a href="" class="w-100 d-flex justify-content-center"
              ><img
                src="./img/icon/youtube.png"
                style="height: 1rem"
                alt="youtube"
            /></a>
          </div>
        </div>
      </div>
    </nav>
  </header>
</div>
';
