document.addEventListener("DOMContentLoaded", function () {
    const enlaceCambio = document.getElementById("enlaceCambio");
    const enlaceCambio2 = document.getElementById("enlaceCambio2");
    const enlaceCambio3 = document.getElementById("btn-cmpra");
    const elementoObjetivo = document.getElementById("form-cprs");
    const vscompras = document.getElementById("hoja-compras");
    const vsform = document.getElementById("form-compras");


    enlaceCambio.addEventListener("click", function () {
        elementoObjetivo.style.display = "block";
    });

    enlaceCambio2.addEventListener("click", function () {
        elementoObjetivo.style.display = "none";
    });

    enlaceCambio3.addEventListener("click", function () {
        vscompras.style.display = "none";
        vsform.style.display = "block"

    });

    const selectTipo = document.getElementById("tipo");
  const formularioHerramienta = document.getElementById("form-h");
  const formularioMaterial = document.getElementById("form-m");

  selectTipo.addEventListener("change", function() {
    if (selectTipo.value === "Herramienta") {
      formularioHerramienta.style.display = "block";
      formularioMaterial.style.display = "none";
    } else if (selectTipo.value === "Material") {
      formularioHerramienta.style.display = "none";
      formularioMaterial.style.display = "block";
    }
  });

});
