<?php
    include("./../config/connection.php");
    include("regist.php");
    include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="d-flex justify-content-between align-items-center">
        <div
          class="d-flex justify-content-center align-items-center w-50 h-100"
        >
          <div class="login-container w-50 h-50" id="loginContainer">
            <h2 class="text-center mb-4">Login to Nano TIA</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group mb-2">
                <label for="email" class="m-2">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="login-email"
                  name="login-email"
                  placeholder="Enter your email"
                />
              </div>
              <div class="form-group mb-2">
                <label for="password" class="m-2">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="login-password"
                  name="login-password"
                  placeholder="Enter your password"
                />
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-2" name="LOGIN">
                Login
              </button>
            </form>
            <div class="form-footer">
              <p>
                Don't have an account?
                <a
                  class="opposite-button text-decoration-none"
                  onclick="showRegister()"
                  >Sign up</a
                >
              </p>
            </div>
          </div>
          <div class="register-container w-50 h-50" id="registerContainer">
            <h2 class="text-center mb-4">Register to Nano TIA</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group mb-2">
                <label for="name" class="m-2">Full Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Enter your full name"
                />
              </div>
              <div class="form-group mb-2">
                <label for="email" class="m-2">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="register-email"
                  name="register-email"
                  placeholder="Enter your email"
                />
              </div>
              <div class="form-group mb-2">
                <label for="password" class="m-2">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="register-password"
                  name="register-password"
                  placeholder="Enter your password"
                />
              </div>
              <div class="form-group mb-2">
                <label for="confirm-password" class="m-2"
                  >Confirm Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="confirm-register-password"
                  name="confirm-register-password"
                  placeholder="Confirm your password"
                />
              </div>
              <button type="submit" class="btn btn-primary btn-block mt-2" name="REGISTER">
                Register
              </button>
            </form>
            <div class="form-footer">
              <p>
                Already have an account?
                <a
                  class="opposite-button text-decoration-none"
                  onclick="showLogin()"
                  >Login</a
                >
              </p>
            </div>
          </div>
        </div>
        <div class="login-image-container"></div>
      </div>
    </div>
    <script src="./login.js"></script>
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
    <script>
      function validatePassword() {
      var password = document.getElementById("register-password").value;
      var confirmPassword = document.getElementById(
        "confirm-register-password"
      ).value;
      var confirmPasswordInput = document.getElementById(
        "confirm-register-password"
      );
      console.log("password ", password);
      console.log("confirmPasswiord ", confirmPassword);
      if (password !== confirmPassword) {
        confirmPasswordInput.style.borderColor = "red";
        return false;
      } else {
        confirmPasswordInput.style.borderColor = ""; // Reset border color
        return true;
      }
    }

      // Add event listener to validate on input change
      document
        .getElementById("register-password")
        .addEventListener("input", validatePassword);
      document
        .getElementById("confirm-register-password")
        .addEventListener("input", validatePassword);

    </script>
  </body>
</html>
