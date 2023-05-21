<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css" />

    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <title>check out</title>

    <style>
      body {
        background: #F8F9FA !important;
      }
    </style>
  </head>
  <body>
    <?php 
        include 'navbar.php';
    ?>

    <div class="checkout">
      <div class="px-5">
        <form action="paymentPage.php">

        <div class="row g-5">
          <div class="col-12 col-md-7">
            <h6 class="normal-font pb-2">Delivery Information</h6>

            <div class="p-4 checkout_box" style="background: #fff">
              <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col">
                  <h6 class="normal-font text-secondary fw-light f-sm">Name</h6>
                  <input
                    type="text"
                    class="form-control rounded-0 py-2 forms"
                    id="form-control"
                    placeholder="Art Alfred"
                    aria-label="First name"
                  />
                </div>
                <div class="col">
                  <h6 class="normal-font text-secondary fw-light f-sm">
                    Mobile Number
                  </h6>
                  <input
                    type="text"
                    class="form-control rounded-0 py-2 forms"
                    id="form-control"
                    placeholder="+63 956 7612 014"
                    aria-label="Last name"
                  />
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-2 g-3 mt-2">
                <div class="col">
                  <h6 class="normal-font text-secondary fw-light f-sm">
                    Email
                  </h6>
                  <input
                    type="text"
                    class="form-control rounded-0 py-2 forms"
                    id="form-control"
                    placeholder="Art@domain.com"
                    aria-label="First name"
                  />
                </div>
                <div class="col">
                  <h6 class="normal-font text-secondary fw-light f-sm">City</h6>
                  <input
                    type="text"
                    class="form-control rounded-0 py-2 forms"
                    id="form-control"
                    placeholder="Ex. Mandaluyong city"
                    aria-label="Last name"
                  />
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-1 g-3 mt-2">
                <div class="col">
                  <h6 class="normal-font text-secondary fw-light f-sm">
                    Address
                  </h6>
                  <input
                    type="text"
                    class="form-control rounded-0 py-2 forms"
                    id="form-control"
                    placeholder="4796 Libby Street"
                    aria-label="First name"
                  />
                </div>
              </div>
            </div>

            <div class="d-flex align-items-center gap-3">
              <h6 class="normal-font pb-3 mt-4">Schedule Delivery</h6>
              <div class="form-check form-switch m-0">
                <input
                  class="form-check-input bg-dark border-0"
                  type="checkbox"
                  role="switch"
                  id="flexSwitchCheckChecked"
                  checked
                />
              </div>
            </div>
            <div class="checkout_box p-4">
              <h6 class="normal-font text-secondary fw-light f-sm">Dates</h6>
              <input
                type="date"
                class="form-control rounded-0 py-2 forms"
                style="color: #999"
                id="form-control"
                placeholder="4796 Libby Street"
                aria-label="First name"
              />
              <h6 class="normal-font text-secondary fw-light f-sm mt-3">
                Note
              </h6>
              <input
                type="text"
                class="form-control rounded-0 py-2 forms"
                style="color: #999"
                id="form-control"
                placeholder="Type your note"
                aria-label="First name"
              />
            </div>

            <div class="d-flex align-items-center gap-3">
              <h6 class="normal-font pb-3 mt-4">Payment Method</h6>
            </div>
            <div
              class="checkout_box p-4 d-flex justify-content-center gap-5"
            >
              <div class="col form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio1"
                  value="option1"
                />
                <label
                  class="form-check-label normal-font f-sm text-muted"
                  for="inlineRadio1"
                  >Online Payment</label
                >
              </div>
              <div class="col form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio2"
                  value="option2"
                />
                <label
                  class="form-check-label normal-font f-sm text-muted"
                  for="inlineRadio2"
                  >Cash on Delivery</label
                >
              </div>
              <div class="col form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  name="inlineRadioOptions"
                  id="inlineRadio2"
                  value="option2"
                />
                <label
                  class="form-check-label normal-font f-sm text-muted"
                  for="inlineRadio2"
                  >POS on Delivery</label
                >
              </div>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <h6 class="normal-font pb-2">Order Summary</h6>

            <div
              class="items border d-grid gap-4 py-5 position-relative"
              style="height: 44rem"
            >
              <div>
                <div
                  class="d-flex align-items-center justify-content-between gap-5 px-4"
                >
                  <div class="d-flex gap-5 align-items-center">
                    <img
                      src="./img/item/watch-1.png"
                      alt="fedex"
                      style="height: 4rem"
                    />

                    <div class="d-grid gap-1">
                      <h6 class="text-start normal-font fw-semibold m-0 pb-1">
                        Lunar Chronometer
                      </h6>
                      <h6 class="normal-font text-secondary f-sm m-0">
                        ₱ 12,000
                      </h6>
                    </div>
                  </div>

                  <div class="d-flex align-items-center gap-2">
                    <span class="d-flex align-items-center"
                      ><ion-icon name="remove-outline"></ion-icon
                    ></span>
                    <span class="d-flex align-items-center">1</span>
                    <span class="d-flex align-items-center"
                      ><ion-icon name="add-sharp"></ion-icon
                    ></span>
                  </div>
                </div>

                <div
                  class="d-flex align-items-center justify-content-between gap-5 px-4 py-2"
                >
                  <div class="d-flex gap-5 align-items-center">
                    <img
                      src="./img/item/watch-2.png"
                      alt="fedex"
                      style="height: 4rem"
                    />

                    <div class="d-grid gap-1">
                      <h6 class="text-start normal-font fw-semibold m-0 pb-1">
                        Snowy Chronograph
                      </h6>
                      <h6 class="normal-font text-secondary f-sm m-0">
                        ₱ 4,800
                      </h6>
                    </div>
                  </div>

                  <div class="d-flex align-items-center gap-2">
                    <span class="d-flex align-items-center"
                      ><ion-icon name="remove-outline"></ion-icon
                    ></span>
                    <span class="d-flex align-items-center">1</span>
                    <span class="d-flex align-items-center"
                      ><ion-icon name="add-sharp"></ion-icon
                    ></span>
                  </div>
                </div>
                <div
                  class="d-flex align-items-center justify-content-between gap-5 px-4 py-2"
                >
                  <div class="d-flex gap-5 align-items-center">
                    <img
                      src="./img/item/watch-3.png"
                      alt="fedex"
                      style="height: 4rem"
                    />

                    <div class="d-grid gap-1">
                      <h6 class="text-start normal-font fw-semibold m-0 pb-1">
                        Midnight Gold watch
                      </h6>
                      <h6 class="normal-font text-secondary f-sm m-0">
                        ₱ 4,000
                      </h6>
                    </div>
                  </div>

                  <div class="d-flex align-items-center gap-2">
                    <span class="d-flex align-items-center"
                      ><ion-icon name="remove-outline"></ion-icon
                    ></span>
                    <span class="d-flex align-items-center">1</span>
                    <span class="d-flex align-items-center"
                      ><ion-icon name="add-sharp"></ion-icon
                    ></span>
                  </div>
                </div>
              </div>

              <div
                class="position-absolute bottom-0 start-50 translate-middle-x w-100"
              >
                <div class="border-top border-bottom py-3 px-3">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <p class="f-sm text-muted normal-font">Subtotal</p>
                    <p class="f-sm text-muted normal-font">₱ 20,800</p>
                  </div>
                  <div
                    class="d-flex justify-content-between align-items-center mt-3"
                  >
                    <p class="f-sm text-muted normal-font">Shipping</p>
                    <p class="f-sm text-muted normal-font">₱ --</p>
                  </div>
                </div>

                <div class="py-3 px-3 d-grid">
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <p class="f-sm text-muted normal-font">Total (PHP)</p>
                    <p class="f-sm text-muted normal-font">₱ 20,800</p>
                  </div>

                
                    <input
                      type="submit"
                      class="btn btn-dark bg-dark normal-font rounded-0 mt-3"
                      style="
                        font-size: 14px;
                        padding-top: 0.7rem;
                        padding-bottom: 0.7rem;
                        "
                      value="Check out"
                    />
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>

      </div>
    </div>

    <?php 
        include 'footer.php';
    ?>

    <script src="./index.js"></script>

    <!-- ICONS -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
