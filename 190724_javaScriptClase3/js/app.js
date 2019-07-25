

// console.log(pregQTareas);
//
// if (pregQTareas != numeber) {
//   console
// }

do {

  var pregQTareas = prompt('Ingrese una cantidad de tareas superior a 3');
  if (pregQTareas < 3) {
    alert('Ingrese una cantidad de tareas superior a 3');
  }

  if (isNaN(pregQTareas)) {
    alert('debe poner un número');
  }

} while (isNaN(pregQTareas) || pregQTareas < 3);

var qTareas = 
