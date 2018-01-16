 $(document).ready(function() {
    $('select').material_select();
    $('.modal').modal();
    descargar();
  });
 
 function cargar() {
    $('#loader').fadeIn();
 }
  function descargar() {
    $('#loader').fadeOut();
 }
// Validacion del formulario
$('#contacto').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: false,
      minlength: 7,
      maxlength: 7
    },
    celular: {
      required: true,
      minlength: 10,
      maxlength: 10
    },
    objetivo: {
      required: true
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    celular: {
      required: "Por favor escribe tu celular",
      minlength: "Tu celular es demasiado corto",
      maxlength: "Tu celular es demasiado largo"
    },
    telefono: {
      required: "Por favor escribe tu telefono",
      minlength: "Tu telefono es demasiado corto",
      maxlength: "Tu telefono es demasiado largo"
    },
    objetivo: {
      required: "Por favor selecciona uno"
    }

  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#contacto').serialize())
    .done(function(data){
      $('.validate').val('');
      descargar();
      //console.log(data);
      window.location.href = "?content=gracias";
    })
  }
});
// Validacion del formulario 1
$('#contacto2').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: false,
      minlength: 7,
      maxlength: 7
    },
    celular: {
      required: true,
      minlength: 10,
      maxlength: 10
    },
    objetivo: {
      required: true
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    celular: {
      required: "Por favor escribe tu celular",
      minlength: "Tu celular es demasiado corto",
      maxlength: "Tu celular es demasiado largo"
    },
    objetivo: {
      required: "Por favor selecciona uno"
    }

  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#contacto2').serialize())
    .done(function(data){
      $('.validate').val('');
      descargar();
      window.location.href = "?content=gracias";
    })
  }

});