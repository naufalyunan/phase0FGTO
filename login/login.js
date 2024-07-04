function showRegister() {
  const loginContainer = document.getElementById("loginContainer");
  const registerContainer = document.getElementById("registerContainer");

  console.log(loginContainer);
  console.log(registerContainer);
  loginContainer.style.display = "none";
  registerContainer.style.display = "block";
}

function showLogin() {
  const loginContainer = document.getElementById("loginContainer");
  const registerContainer = document.getElementById("registerContainer");

  loginContainer.style.display = "block";
  registerContainer.style.display = "none";
}
