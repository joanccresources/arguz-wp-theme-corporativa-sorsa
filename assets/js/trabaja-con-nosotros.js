let { host } = location;
// Convocatorias - Agregar Boton "Ver convocatoria"
const addButtonVerConvocatoria = () => {
  const $lastColumn = document.querySelectorAll(
    "#convocatorias .career-card .row > div:nth-last-of-type(1)"
  );
  if ($lastColumn.length === 0) return;

  const htmlButton = `
    <div class="artech-button  fade-border-effect">
      <span class="artech-button-content-wrapper">
        <span class="artech-button-text">Ver<br/>convocatoria</span>
        <img decoding="async" src=https://${host}/wp-content/uploads/2024/02/arrow_wh.svg" alt="Arrow" class="image">
      </span>
		</div>`;
  Array.from($lastColumn).forEach(($column) => {
    $column.innerHTML = "";
    $column.insertAdjacentHTML("afterbegin", htmlButton);
  });
};

//
const setInputYourSubject = () => {
  // const $inputSubject = document.querySelector("#your-subject");
  const $inputPage = document.querySelector("#your-page");
  // if (!$title || !$inputSubject || !$inputPage) return;
  if (!$inputPage) return;

  // $inputSubject.setAttribute(
  //   "value",
  //   `Detalle Convocatoria - ${$title.textContent.trim()}`
  // );
  $inputPage.setAttribute("value", location.href);
};

addEventListener("DOMContentLoaded", () => {
  console.log("Trabaja con nosotros");

  addButtonVerConvocatoria();
  setInputYourSubject();
});
