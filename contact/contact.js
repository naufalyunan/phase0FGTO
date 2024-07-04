function showAddress() {
  const branch = document.getElementById("branch");
  const addressElement = document.getElementById("branchAddress");
  let address = "";

  switch (branch.value) {
    case "1":
      address = "Jl. Sudirman No. 123, Jakarta, Indonesia";
      break;
    case "2":
      address = "Jl. Asia Afrika No. 45, Bandung, Indonesia";
      break;
    case "3":
      address = "Jl. Pemuda No. 10, Surabaya, Indonesia";
      break;
    case "4":
      address = "Jl. Gatot Subroto No. 78, Medan, Indonesia";
      break;
    default:
      address = "Please select a branch.";
  }

  addressElement.textContent = address;
  branch.style.border = "2px";
  branch.style.borderStyle = "solid";
  branch.style.borderColor = "gold";
}
