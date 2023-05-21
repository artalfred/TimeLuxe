<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>

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
  </head>
  <body>
    <?php 
      include 'navbar.php';
      include 'dbcon.php';
    ?>

    <div class="px-5 d-flex justify-content-center" style="margin-top: 12rem">
      <div style="width: 23rem">
        <h5 class="text-center normal-font fw-bold">
          BECOME A TIMELUXE MEMBER
        </h5>
        <p class="text-center text-muted mt-3 normal-font f-sm">
          Create your TimeLuxe Member profile and get first access to the very
          best of Nike products, inspiration and community.
        </p>

        <form action="insert.php" method="get" class="d-grid gap-3 mt-4">
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col">
              <input
                type="text"
                class="form-control rounded-0 forms"
                id="form-control"
                placeholder="First name"
                aria-label="First name"
                name='fname'
              />
            </div>
            <div class="col">
              <input
                type="text"
                class="form-control rounded-0 forms"
                id="form-control"
                placeholder="Last name"
                aria-label="Last name"
                name='lname'
              />
            </div>
          </div>
          <input
            type="email"
            class="form-control rounded-0 forms"
            id="form-control"
            placeholder="email@domain.com"
            aria-label="Last name"
            name='email'
          />
          <input
            type="password"
            class="form-control rounded-0 forms"
            id="form-control"
            placeholder="password"
            aria-label="password"
            name='password'
          />
          <select id="inputState" class="form-select" name='location'>
            <option selected >Philippines</option>
            <option>Indonesia</option>
            <option>Cambodia</option>
            <option>Australia</option>
            <option>U.S</option>
          </select>
          <input
            type="submit"
            class="btn btn-dark bg-dark normal-font rounded-0 py-2"
            style="font-size: 14px"
            value="JOIN US"
          />
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
