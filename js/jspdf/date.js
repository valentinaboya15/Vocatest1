var f = new Date();
    var diasSemana = new
   Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");

   var meses = new
   Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
  
var date = (diasSemana[f.getDay()]+" "+ f.getDate() + " de "+meses[f.getMonth()]+" de "+f.getFullYear());