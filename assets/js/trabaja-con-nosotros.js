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

addEventListener("DOMContentLoaded", () => {
  console.log("Trabaja con nosotros");

  addButtonVerConvocatoria();
});
