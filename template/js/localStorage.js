
var arrayPedido = [];

const createItem =(id_talla, cantidad) =>{
 let datos =[
   {
     tipo: 1,
     categoria: 2,
     prenda: 3,
     tela: 10,
     color: 4,
     bordado: 1,
     impresion: 0,
     tallas: [
       { id_talla: 1, cantidad: 2 },
       { id_talla: 2, cantidad: 4 },
       { id_talla: 4, cantidad: 1 }
     ]
   }
 ];
}

$("#savePrendaData").click(function (event) {
  var tallas = [];

  let talla1 = {
    id_talla: $('#id .selecttallas').val(),
    cantidad: $('#id .cantidad_prendas').val()
  }
  tallas.push(talla1);

  for (let i = 2; i <= $('#cantidad_tallas').val(); i++) {
    // console.log(`#id${i}`+'.selecttallas');
    let talla = {
      id_talla: $(`#id${i}`+' .selecttallas').val(),
      cantidad: $(`#id${i}`+' .cantidad_prendas').val()
    }

    tallas.push(talla);
    
  }

  // console.log(tallas);
  let datos =[
    {
      tipo: $('#tipo').val(),
      categoria: $('#selecttipoprenda').children("option:selected").val(),
      prenda: $('#selectprenda').val(),
      tela: $('#selecttela').val(),
      color: $('#selectcolortela').val(),
      bordado: $('#bordado').val(),
      impresion: $('#cerigrafia').val(),
      tallas: tallas

    }
  ];




  arrayPedido.push(datos);
});

