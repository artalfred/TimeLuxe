<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./checkout.css" />

    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- ICONS -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>

    <title>Payment</title>
  </head>
  <body>
  <?php 
      include 'navbar.php';
    ?>


    <div class="px-5" style="margin-top: 8rem">
      <div>
        <h4 class="normal-font fw-semibold text-center">Payment details</h4>
        <h6 class="normal-font text-secondary fw-light f-sm text-center">
          Complete your purchase by providing your payment details.
        </h6>

        <div class="d-flex justify-content-center mt-3">
          <div class="border rounded-2 p-4" style="width: 25rem">
            <h6 class="normal-font fw-semibold">Payment Method</h6>
            <div class="mt-4 d-flex gap-3">
              <input
                type="radio"
                class="btn-check"
                name="options-outlined"
                id="success-outlined"
                autocomplete="off"
                checked
              />
              <label
                class="btn btn-outline-success border-0 rounded-1 position-relative"
                for="success-outlined"
                style="height: 3rem; width: 6rem"
              >
                <div
                  class="overflow-hidden position-absolute top-50 start-50 translate-middle"
                >
                  <img
                    src="./img/icon/paypal.png"
                    alt="paypal"
                    style="height: 4rem"
                  />
                </div>
              </label>

              <input
                type="radio"
                class="btn-check"
                name="options-outlined"
                id="mid-outlined"
                autocomplete="off"
              />
              <label
                class="btn btn-outline-success border-0 rounded-1 position-relative"
                for="mid-outlined"
                style="height: 3rem; width: 6rem"
              >
                <div
                  class="overflow-hidden position-absolute top-50 start-50 translate-middle"
                >
                  <img
                    src="./img/icon/apple-pay.png"
                    alt="paypal"
                    style="height: 1rem"
                  />
                </div>
              </label>

              <input
                type="radio"
                class="btn-check"
                name="options-outlined"
                id="danger-outlined"
                autocomplete="off"
              />
              <label
                class="btn btn-outline-success border-0 rounded-1 position-relative"
                for="danger-outlined"
                style="height: 3rem; width: 6rem"
                ><div
                  class="overflow-hidden position-absolute top-50 start-50 translate-middle"
                >
                  <img
                    src="./img/icon/dhl.png"
                    alt="paypal"
                    style="height: 4rem"
                  /></div
              ></label>
            </div>

            <hr />

            <form action="index.php">
              <div class="mt-4">
                <h6 class="normal-font text-secondary fw-light f-sm mt-3">
                  Card Number
                </h6>
                <input
                  type="number"
                  class="form-control rounded-1 py-2 forms normal-font"
                  style="color: #999; font-size: 14px"
                  id="form-control"
                  placeholder="xxxx xxxx xxxx xxxx"
                  aria-label="First name"
                  required
                />

                <div class="row">
                  <div class="col">
                    <h6 class="normal-font text-secondary fw-light f-sm mt-3">
                      Expiry Date
                    </h6>
                    <input
                      type="number"
                      class="form-control rounded-1 py-2 forms normal-font"
                      style="color: #999; font-size: 14px"
                      id="form-control"
                      placeholder="mm / yy"
                      aria-label="First name"
                      required
                    />
                  </div>
                  <div class="col">
                    <h6 class="normal-font text-secondary fw-light f-sm mt-3">
                      CVV
                    </h6>
                    <input
                      type="number"
                      class="form-control rounded-1 py-2 forms normal-font f-sm"
                      style="color: #999; font-size: 14px"
                      id="form-control"
                      placeholder="x x x"
                      aria-label="First name"
                      required
                    />
                  </div>
                </div>

                <div
                  class="d-flex justify-content-between align-items-center mt-4"
                >
                  <p class="f-sm text-muted normal-font">Subtotal</p>
                  <p class="f-sm text-muted normal-font">
                    <span class="text-dark">₱ 20,800</span>
                  </p>
                </div>

                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <p class="f-sm text-muted normal-font">Platform Fee</p>
                  <p class="f-sm text-muted normal-font">
                    <span class="text-dark">₱ 29</span>
                  </p>
                </div>

                <hr />

                <div
                  class="d-flex justify-content-between align-items-center mt-2"
                >
                  <p class="f-sm text-muted normal-font">Total Amount</p>
                  <p class="f-sm text-muted normal-font">
                    <span class="text-dark">₱ 20,829</span>
                  </p>
                </div>

                <div class="d-grid">
                  <input
                    type="submit"
                    class="btn btn-dark bg-dark normal-font rounded-0 mt-3"
                    style="
                      font-size: 14px;
                      padding-top: 0.7rem;
                      padding-bottom: 0.7rem;
                    "
                    value="Pay"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php 
      include 'footer.php';
    ?>

    <script src="./index.js"></script>
  </body>
</html>
