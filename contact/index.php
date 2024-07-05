<?php
    include("./../config/connection.php");
    include("add-message.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/00d9d486d5.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a
          class="nav-link text-decoration-none"
          aria-current="page"
          href="./../index.html"
          >Home</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link text-decoration-none color-white"
          href="./../services/index.html"
          >Services</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" href="./index.html"
          >Gallery</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" href="../about/index.html"
          >About Us</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" href="./index.php"
          >Contact Us</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link text-decoration-none" href="./../login/index.php"
          >Login</a
        >
      </li>
    </ul>
    <div class="container-fluid p-0">
      <div class="cover-image-container">
        <div class="cover-image-content">
          <p class="h1 cover-image-title mb-4">Nano TIA</p>
          <p class="h2 text-justify mb-4 text-home">
            Connecting Stories, Empowering Voices
          </p>
        </div>
      </div>
      <div class="content-container row">
        <div class="col-8 p-5 left-panel">
          <p class="h1 mb-4 mx-4">Contact us for more information</p>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group m-4">
              <!-- <label for="name" class="m-2">Name</label> -->
              <input
                type="text"
                class="form-control"
                id="name"
                name="message-name"
                placeholder="Name"
              />
            </div>
            <div class="form-group d-flex">
              <!-- <label for="email" class="m-2">Email</label> -->
              <input
                type="email"
                class="form-control mx-4"
                id="email"
                name="message-email"
                placeholder="Email"
              />
              <input
                type="phone"
                class="form-control mx-4"
                id="phone"
                name="message-phone"
                placeholder="Phone Number"
              />
            </div>
            <div class="form-group m-4">
              <!-- <label for="subject" class="m-2">Subject</label> -->
              <input
                type="text"
                class="form-control"
                id="subject"
                name="message-subject"
                placeholder="Subject"
              />
            </div>
            <div class="form-group m-4">
              <!-- <label for="message" class="m-2">Message</label> -->
              <textarea
                class="form-control"
                id="message"
                name="message-content"
                rows="1"
                placeholder="Message"
              ></textarea>
            </div>
            <button type="submit" class="btn mt-2 mx-4" id="submit-button" name="MESSAGE">
              Send Message
            </button>
          </form>
        </div>
        <div class="col-4 p-4">
          <div class="address-container p-4">
            <p class="h3 mb-4 mx-4">Head Office</p>
            <p class="text-justify mx-4 mb-2">1234 Media Lane</p>
            <p class="text-justify mx-4 mb-2">Suite 567</p>
            <p class="text-justify mx-4 mb-2">Journalist City, JC 89012</p>
            <p class="text-justify mx-4 mb-2">Phone: +1 (555) 123-4567</p>
            <p class="text-justify mx-4 mb-2">Email: contact@nanotia.com</p>
            <div class="divider m-4"></div>
            <div class="form-group mx-4">
              <select
                class="form-control-address p-2"
                id="branch"
                onchange="showAddress()"
              >
                <option value="" disabled selected>Select a branch</option>
                <option value="1">Jakarta</option>
                <option value="2">Bandung</option>
                <option value="3">Surabaya</option>
                <option value="4">Medan</option>
              </select>
            </div>
            <p class="h6 mx-4 my-3" id="branchAddress"></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer p-4">
      <div class="container-fluid">
        <div class="row">
          <!-- Company Info -->
          <div class="col-md-6 mb-4 mb-md-0">
            <h5>About Nano TIA</h5>
            <p class="text-justify">
              We are a leading journalism company dedicated to delivering
              accurate, timely, and unbiased news to our audience. Our mission
              is to empower communities through high-quality journalism.
            </p>
            <p class="text-justify footer-address">
              1234 Media Lane, Suite 567
            </p>
            <p class="text-justify footer-address">Journalist City, JC 89012</p>
            <p class="text-justify footer-address">Phone: +1 (555) 123-4567</p>
            <p class="text-justify footer-address">
              Email: contact@nanotia.com
            </p>
          </div>
          <!-- Navigation Links -->
          <div class="col-md-3 mb-4 mb-md-0">
            <h5>Quick Links</h5>
            <div class="row">
              <div class="col-6 g-4">
                <a
                  href="./../home/index.html"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <span class="h6">Home</span>
                </a>
              </div>
              <div class="col-6 g-4">
                <a
                  href="./../about/index.html"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <span class="h6">About Us</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-6 g-4">
                <a
                  href="./../services/index.html"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <span class="h6">Services</span>
                </a>
              </div>
              <div class="col-6 g-4">
                <a
                  href="./index.php"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <span class="h6">Contact Us</span>
                </a>
              </div>
            </div>
          </div>
          <!-- Social Media -->
          <div class="col-md-3 mb-4 mb-md-0">
            <h5>Follow Us</h5>
            <div class="row">
              <div class="col-6 g-4">
                <a
                  href="#"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <i class="fa fa-brands fa-facebook"></i>
                  <span class="socmed-text">Facebook</span>
                </a>
              </div>
              <div class="col-6 g-4">
                <a
                  href="#"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <i class="fa fa-brands fa-linkedin"></i>
                  <span class="socmed-text">Linkedin</span>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-6 g-4">
                <a
                  href="#"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <i class="fa fa-brands fa-twitter"></i>
                  <span class="socmed-text">Twitter</span>
                </a>
              </div>
              <div class="col-6 g-4">
                <a
                  href="#"
                  class="social-icon text-decoration-none d-flex justify-content-start align-items-center"
                >
                  <i class="fa fa-brands fa-instagram"></i>
                  <span class="socmed-text">Instagram</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="./contact.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
