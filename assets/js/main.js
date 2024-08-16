const addItemsHomev2Hero = () => {
  const $headerCards = document.querySelectorAll("#home-video-v2 .header-card");
  if ($headerCards.length === 0) return;

  const html = `
<div class="cont cont-new">
    <div class="new-section">

     <a class="new-section__card" href="#0">
       <div class="new-section__card-body">
         <div class="new-section__card-figure">
          <img src="https://corporativa.sorsa.pe/wp-content/uploads/2024/08/icon-sorsa.png" alt="Sorsa Item" class="new-section__card-img"/>
         </div>
         <p class="new-section__card-title">Suministros del Oriente</p>
         <p class="new-section__card-txt">Representantes exclusivos Valvoline.</p>
       </div>
       <div class="new-section__card-main">
        <img src="https://corporativa.sorsa.pe/wp-content/uploads/2024/08/sorsa.png" alt="Sorsa Item" class="new-section__card-main-img" />
       </div>
     </a>

     <a class="new-section__card" href="#0">
       <div class="new-section__card-body">
         <div class="new-section__card-figure">
          <img src="https://corporativa.sorsa.pe/wp-content/uploads/2024/08/icon-retails.png" alt="Sorsa Item" class="new-section__card-img"/>
         </div>
         <p class="new-section__card-title">Sorsa Retail</p>
         <p class="new-section__card-txt">Centro automotriz especializado.</p>
       </div>
       <div class="new-section__card-main">
        <img src="https://corporativa.sorsa.pe/wp-content/uploads/2024/08/sorsa-retails.png" alt="Sorsa Item" class="new-section__card-main-img" />
       </div>
     </a>

     <a class="new-section__card" href="#0">
       <div class="new-section__card-body">
         <div class="new-section__card-figure">
          <img src="https://corporativa.sorsa.pe/wp-content/uploads/2024/08/icon-motors.png" alt="Sorsa Item" class="new-section__card-img"/>
         </div>
         <p class="new-section__card-title">Sorsa Motors</p>
         <p class="new-section__card-txt">Concesionaria Honda: motos y motocars.</p>
       </div>
       <div class="new-section__card-main">
        <img src="https://corporativa.sorsa.pe/wp-content/uploads/2024/08/sorsa-motors.png" alt="Sorsa Item" class="new-section__card-main-img" />
       </div>
     </a>

    </div>
</div>
  `;

  $headerCards.forEach((item) => {
    item.insertAdjacentHTML("beforeend", html); //
  });
};

const addMarcasHomeHero = () => {
  const $containerVideo = document.querySelector(
    "#home-video .video-sorsa-container__video"
  );
  const $marcaImages = document.querySelectorAll("#home-marcas .marca-img img");

  if (!$containerVideo) return;
  if ($marcaImages.length === 0) return;

  const $html = `
    <div class="marcas">          
      ${Array.from($marcaImages)
        .map(
          (marca) =>
            `
            <div class="marcas__figure">
              <img loading="lazy" decoding="async" width="${marca.getAttribute(
                "width"
              )}" height="${marca.getAttribute(
              "height"
            )}" src="${marca.getAttribute("src")}" class="marcas__img" alt="">
            </div>
            `
        )
        .join("")}
    </div>
  `;

  $containerVideo.insertAdjacentHTML("beforeend", $html);
};

const addClassStickyHeaderHome = () => {
  const $header = document.querySelector(".home header");
  if (!$header) return;
  console.log("window.scrollY", window.scrollY);
  if (window.scrollY >= 78) {
    $header.classList.add("v-sticky");
    const $img = $header.querySelector(".logo-pc img");
    console.log("if $img", $img);
    if (!$img) return;
    $img.setAttribute(
      "src",
      "https://corporativa.sorsa.pe/wp-content/uploads/2024/03/logo-footer.png"
    );
  } else {
    $header.classList.remove("v-sticky");
    const $img = $header.querySelector(".logo-pc img");
    console.log("else $img", $img);
    if (!$img) return;
    $img.setAttribute(
      "src",
      "https://corporativa.sorsa.pe/wp-content/uploads/2024/08/logo.png"
    );
  }
};

addEventListener("DOMContentLoaded", () => {
  const $rrssMenu = document.querySelector("#menu-main .menu-rrss");
  const $listMenu = document.querySelector("#menu-menu-sorsa");
  $listMenu.insertAdjacentHTML("afterend", $rrssMenu.innerHTML);

  addItemsHomev2Hero();
});
// addClassStickyHeaderHome();
window.addEventListener("DOMContentLoaded", addClassStickyHeaderHome);
document.addEventListener("scroll", addClassStickyHeaderHome);
