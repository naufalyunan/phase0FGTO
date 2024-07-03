document.addEventListener("DOMContentLoaded", function () {
  const div = document.getElementById("cover-map-cont");
  const imgSrc = "./../assets/indonesia-map-home.png"; // Change this to the path of your image

  const img = new Image();
  img.src = imgSrc;
  img.onload = function () {
    const aspectRatio = img.naturalWidth / img.naturalHeight;
    const divWidth = div.clientWidth;
    const divHeight = (divWidth / aspectRatio) * 0.8;

    div.style.height = divHeight + "px";
    div.style.backgroundImage = "url(" + imgSrc + ")";
  };

  window.addEventListener("resize", function () {
    const divWidth = div.clientWidth;
    const divHeight = divWidth / (img.naturalWidth / img.naturalHeight);

    div.style.height = divHeight + "px";
  });
});
