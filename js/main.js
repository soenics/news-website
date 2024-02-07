let steiiconTag = document.querySelector(".steiicon");
const stronepassTag = document.querySelector(".stronepass");
const box1Tag = document.querySelector(".box1");
const h1Tag = document.createElement("input");
const btngenTag = document.querySelector(".btngen");
const geninputTag = document.querySelector(".geninput");
const copybtnTag = document.querySelector(".copybtn");
const passwordBoxTag = document.getElementById("password");
const btnTag = document.querySelector(".btna");

const lenght = 8;

const upperCase = "ABCDEFGHIJKLMNOPQRSTUWXYZ";
const lowerCase = "abcdefghijklnopqrstuwxyz";
const number = "0123456789";
const smbol = "@#$%&!";
const ansple = upperCase + lowerCase + number + smbol;

steiiconTag.addEventListener("click", () => {
  if (box1Tag.classList.contains("openbox")) {
    console.log("Hello");
    steiiconTag.classList.remove("animation");
    box1Tag.classList.remove("box2");
    box1Tag.classList.remove("openbox");

    btngenTag.style.display = "none";
    geninputTag.style.display = "none";
    copybtnTag.style.display = "none";
  } else {
    steiiconTag.classList.add("animation");
    box1Tag.classList.add("box2");
    box1Tag.classList.add("openbox");

    setTimeout(() => {
      btngenTag.style.display = "inline";
      geninputTag.style.display = "inline";
      copybtnTag.style.display = "inline";
    }, 1000);
  }
});

btnTag.addEventListener("click", () => {
  randonPassword();
});
copybtnTag.addEventListener("click", () => {
  passwordBoxTag.select();
  document.execCommand("copy");
});

function randonPassword() {
  let password = "";
  password += upperCase[Math.floor(Math.random() * upperCase.length)];
  password += lowerCase[Math.floor(Math.random() * lowerCase.length)];
  password += number[Math.floor(Math.random() * number.length)];
  password += smbol[Math.floor(Math.random() * smbol.length)];
  while (lenght > password.length) {
    password += ansple[Math.floor(Math.random() * ansple.length)];
    passwordBoxTag.value = password;
  }
}
