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

  const $form = document.querySelector("#postula-ahora form.wpcf7-form");
  if (!$form) return;
  $form.addEventListener("submit", (event) => {
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

document.addEventListener("DOMContentLoaded", () => {
  setInputYourSubject();
  translateTextFormSubmit();
});
