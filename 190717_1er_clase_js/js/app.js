var elStringPapa = "alto string";
var antiArray = ['este', 'es', 'el', 'mejor', 'array', 'que', 'vas', 'a', 'ver', 'esta', 'semana']
var elBinario = true;

console.log(elStringPapa);
console.log(antiArray);
console.log(elBinario);

var ironMan = {
  nombre: "Iron Man",
  equipo: "Avengers",
  poderes: ["Volar", "Lanzar misiles", "Disparar láser"],
  energia: 100,
  getPoder: function (numero) {
    return this.poderes[numero];
  }
}

console.log(ironMan.getPoder(1));


var hulk = {
  nombre: "Hulk",
  equipo: "Avengers",
  poderes: ["Aplastar", "Gritar", "Golpear"],
  energia: 100,
  getPoder: function (numero) {
    return this.poderes[numero];
  }
}

console.log(hulk.getPoder(2));


function aleatorio () {
  math.random
}

var intento1 = function () {
  math.random
}

var aleatorio = Math.floor(Math.random() * 3) ;


console.log(aleatorio);

console.log(ironMan.getPoder(aleatorio));
