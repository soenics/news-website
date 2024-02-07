const btnregTah = document.querySelector(".btnreg");
const formclassTags = document.querySelector(".formclass");
const formclass1Tags = document.querySelector(".formclass1");
btnregTah.addEventListener("click", () => {
  formclass1Tags.style.display = "none";
  formclassTags.style.display = "inline";
});
