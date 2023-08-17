document.addEventListener("DOMContentLoaded", function () {
    const enlaceCambio = document.getElementById("enlaceCambio");
    const enlaceCambio2 = document.getElementById("enlaceCambio2");
    const enlaceCambio3 = document.getElementById("btn-cmpra");
    const elementoObjetivo = document.getElementById("form-cprs");
    const vscompras = document.getElementById("hoja-compras");
    const vsform = document.getElementById("form-compras");
    const selectTipo = document.getElementById("tipo");
    const formularioHerramienta = document.getElementById("form-h");
    const formularioMaterial = document.getElementById("form-m");

    enlaceCambio.addEventListener("click", function () {
        elementoObjetivo.style.display = "block";
    });

    enlaceCambio2.addEventListener("click", function () {
        elementoObjetivo.style.display = "none";
    });

    enlaceCambio3.addEventListener("click", function () {
        vscompras.style.display = "none";
        vsform.style.display = "block";
        formularioHerramienta.style.display="none";
        formularioMaterial.style.display="none";

    });

   

  selectTipo.addEventListener("change", function() {
    if (selectTipo.value === "Herramienta") {
      formularioHerramienta.style.display = "block";
      formularioMaterial.style.display = "none";
    } else if (selectTipo.value === "Material") {
      formularioHerramienta.style.display = "none";
      formularioMaterial.style.display = "block";
    }else if(selectTipo.value === "nada"){
      formularioHerramienta.style.display="none";
        formularioMaterial.style.display="none";
    }
  });

});

$(document).ready(function() {
  // Función para calcular y actualizar el valor total
  function calcularValorTotal(valorUnitarioID, cantidadID, valorTotalID) {
    var valorUnitario = parseFloat($(valorUnitarioID).val());
    var cantidad = parseInt($(cantidadID).val());

    if (!isNaN(valorUnitario) && !isNaN(cantidad)) {
      var valorTotal = valorUnitario * cantidad;
      $(valorTotalID).text(valorTotal.toFixed(2));
    } else {
      var valorTotal = 0;
      $(valorTotalID).text(valorTotal.toFixed(2));
    }
  }

  // Llama a la función cuando se carga la página
  calcularValorTotal("#valorUnitario", "#cantidad", "#valorTotal");
  calcularValorTotal("#valorUnitarioM", "#cantidadM", "#valorTotalM");

  // Llama a la función cuando el valor unitario cambia
  $("#valorUnitario, #valorUnitarioM").on("input", function() {
    calcularValorTotal("#valorUnitario", "#cantidad", "#valorTotal");
    calcularValorTotal("#valorUnitarioM", "#cantidadM", "#valorTotalM");
  });

  // Llama a la función cuando la cantidad cambia
  $("#cantidad, #cantidadM").on("input", function() {
    calcularValorTotal("#valorUnitario", "#cantidad", "#valorTotal");
    calcularValorTotal("#valorUnitarioM", "#cantidadM", "#valorTotalM");
  });
});



