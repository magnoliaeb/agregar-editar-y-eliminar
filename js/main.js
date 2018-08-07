
// Ver tabla usuario
function ver_tabla_usuario()
{
    $.ajax({
        type:"GET",
        url:"ajax/ver_tabla_usuario.php",
    }).done(function(msg)
    {
        $("#ver_tabla_usuario").html(msg);
	})
}


$('#btnClear').click(function() {
    $('#formEmpty').smkClear();
  });

    // Agregar usuario
$('#btnEmpty').click(function() {
    if ($('#formEmpty').smkValidate()) {
         if( $.smkEqualPass('#pass1', '#pass2') ){
        var dataString='nombre='+$('#nombre').val()+
        '&apellido='+$('#apellido').val()+
        '&estado='+$('#estado').val()+
        '&fecha='+$('#fecha').val()+
        '&sexo='+$('#sexo').val()+
        '&usuario='+$('#usuario').val()+
        '&pass2='+$('#pass2').val()+
        '&rol='+$('#rol').val()+
        '&agregar=1';
        $.ajax({
            type:"POST",
            url:"ajax/agregar_usuario.php",
            data:dataString
        }).done(function(data){
            if(data==1){
                $.smkAlert({
                    text: 'Excelente',
                    type: 'success'
                });
                $("#myModal").modal('hide');
                ver_tabla_usuario();
                ver_codigo();
                $("#nombre").val('');
                $("#apellido").val('');
                $("#fecha").val('');
                $("#estado").val('');
                $("#sexo").val('');
                $("#usuario").val('');
                 $("#pass1").val('');
                $("#pass2").val('');
                $("#rol").val('');
            }
            else if(data==3){
                $.smkAlert({
                    text: 'Usuario Duplicado',
                    type: 'warning'
                });
            }
            else{
                $.smkAlert({
                    text: 'Error',
                    type: 'danger'
                });
            }
        })
    }
    }
});



// Eliminar usuario
function eliminar(id_usuario) {
    var id=id_usuario;
    $.ajax({
        type:"GET",
        url:"ajax/eliminar_usuario.php?id="+id
    }).done(function(data){
        if(data==1){
            $.smkAlert({
                text: 'Excelente',
                type: 'success'
            });
            ver_tabla_usuario();
            $("#eliminar").modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        }
        else{
            $.smkAlert({
                text: 'Error',
                type: 'danger'
            });
        }
    })
}


// Editar estado activo
function activo(id_usuario)
{
	var id=id_usuario;
	$.ajax({
        type:"GET",
		url:"ajax/editar_estado_activo_usuario.php?id="+id,
    }).done(function(data){
        ver_tabla_usuario();
    })

}

// Editar estado inactivo
function inactivo(id_usuario)
{
	var id=id_usuario;
	$.ajax({
		type:"GET",
		url:"ajax/editar_estado_inactivo_usuario.php?id="+id,
    }).done(function(data){
        ver_tabla_usuario();
    })
}

// Editar rol administrador
function admi(id_usuario)
{
	var id=id_usuario;
	$.ajax({
			type:"GET",
			url:"ajax/editar_rol_admi.php?id="+id,
    }).done(function(data){
    ver_tabla_usuario();
    })

}

// Editar rol usuario
function usuario(id_usuario)
{
	var id=id_usuario;
	$.ajax({
			type:"GET",
			url:"ajax/editar_rol_usuario.php?id="+id,
    }).done(function(data){
    ver_tabla_usuario();
    })
}