<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Contact page</title>
  </head>
  <body>
    <?php 
      include 'navbar.php';
    ?>
      <div class="px-5" style="margin-top: 12rem;">
        <h1 class="fw-semibold text-center normal-font">Get in touch</h1>
        <h5 class="text-center mb-0 normal-font">Don't be shy, say hi!</h5>
        <h5 class="text-center normal-font">Hit us up with your comments, questions, requests, or suggestions!</h5>

        <div class="d-flex justify-content-center">

        <div style="width: 45rem">
        <form class="d-grid gap-3 mt-5">
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col">
              <input
                type="text"
                class="form-control rounded-0"
                id="form-control"
                placeholder="Name"
                aria-label="First name"
              />
            </div>
            <div class="col">
            <input
            type="email"
            class="form-control rounded-0"
            id="form-control"
            placeholder="email@domain.com"
            aria-label="Last name"
          />
            </div>
          </div>
          
          <textarea class="form-control rounded-0" name="message" rows="6" cols="50" id="form-control">

          </textarea>
          <input
            type="submit"
            class="btn btn-dark bg-dark normal-font rounded-0 py-2"
            style="font-size: 14px"
            value="Send message"
          />
        </form>
        </div>
        </div>


      </div>

    <?php 
      include 'footer.php';
    ?>

<script src="./index.js"></script>

<!-- ICONS -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
