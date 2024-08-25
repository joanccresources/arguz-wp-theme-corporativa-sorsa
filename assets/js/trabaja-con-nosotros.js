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

const translateTextFormSubmit = () => {
  const changeText = ($form) => {
    //
    const txtErrorFields = Array.from(
      $form.querySelectorAll(".wpcf7-not-valid-tip")
    );
    txtErrorFields.forEach((txt) => {
      txt.textContent = "Por favor, complete este campo.";
    });

    //
    const responseError = document.querySelector(
      ".wpcf7-form.invalid .wpcf7-response-output"
    );
    if (responseError) {
      responseError.textContent =
        "Hay un error en uno o más campos. Por favor, compruébelo y vuelva a intentarlo.";
    }

    //
    const responseSent = document.querySelector(
      ".wpcf7-form.sent .wpcf7-response-output"
    );
    if (responseSent) {
      responseSent.textContent = "Gracias por tu mensaje. Ha sido enviado.";
    }

    setTimeout(() => {
      //
      const responseSent = document.querySelector(
        ".wpcf7-form.sent .wpcf7-response-output"
      );
      if (responseSent) {
        responseSent.textContent = "Gracias por tu mensaje. Ha sido enviado.";
      }
    }, 1200);
  };

  const $form = document.querySelector("#trabaja-formulario form.wpcf7-form");
  if (!$form) return;
  $form.addEventListener("submit", (event) => {
    setTimeout(() => {
      changeText($form);
    }, 200);
    setTimeout(() => {
      changeText($form);
    }, 500);
    setTimeout(() => {
      changeText($form);
    }, 1000);
  });

  // $form.addEventListener("submit", (event) => {
  //   setTimeout(() => {
  //     changeText($form);
  //   }, 1000);
  // });
};

addEventListener("DOMContentLoaded", () => {
  console.log("Trabaja con nosotros");

  addButtonVerConvocatoria();
  setInputYourSubject();
  translateTextFormSubmit();
});
