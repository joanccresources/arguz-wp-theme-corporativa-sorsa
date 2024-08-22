console.log("Convocatoria detalles");

const setInputYourSubject = () => {
  const $title = document.querySelector("#title-convocatoria h2");
  const $inputSubject = document.querySelector("#your-subject");
  const $inputPage = document.querySelector("#your-page");
  if (!$title || !$inputSubject || !$inputPage) return;

  $inputSubject.setAttribute(
    "value",
    `Detalle Convocatoria - ${$title.textContent.trim()}`
  );
  $inputPage.setAttribute("value", location.href);
};

document.addEventListener("DOMContentLoaded", () => {
  setInputYourSubject();
});
