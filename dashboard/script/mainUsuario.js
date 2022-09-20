
$(document).ready(function () {
    tablaUsuario = $("#tablaUsuario").DataTable({
        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"
        }],

        "language": {
            "lengthMenu": "Mostrar _MENU_ Registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }
    });

    $("#btnNuevo").click(function () {
        $("#formUsuario").trigger("reset");
        $(".modal-header").css("background-color", "#1cc88a");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Ingresa los datos");
        $("#modalCRUD").modal("show");
        IdUsuario = null;
        opcion = 1; //alta
    });

    $("#btnReinicio").click(function () {
        IdUsuario = null;
        opcion = 4; //alta
    });

    var fila; //capturar la fila para editar o borrar el registro

    //botón EDITAR    
    $(document).on("click", ".btnEditar", function () {
        fila = $(this).closest("tr");
        IdUsuario = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(1)').text();
        correo = fila.find('td:eq(2)').text();
        usuario = fila.find('td:eq(3)').text();
        password = fila.find('td:eq(4)').text();
        voto = fila.find('td:eq(5)').text();

        $("#nombre").val(nombre);
        $("#correo").val(correo);
        $("#usuario").val(usuario);
        $("#password").val(password);
        $("#voto").val(voto);
        opcion = 2; //editar

        $(".modal-header").css("background-color", "#4e73df");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Editar Información");
        $("#modalCRUD").modal("show");

    });

    //botón BORRAR
    $(document).on("click", ".btnBorrar", function () {
        fila = $(this);
        IdUsuario = parseInt($(this).closest("tr").find('td:eq(0)').text());
        opcion = 3 //borrar
        var respuesta = confirm("¿Está seguro de eliminar el registro: " + IdUsuario + "?");
        if (respuesta) {
            $.ajax({
                url: "bd/crudUsuario.php",
                type: "POST",
                dataType: "json",
                data: { opcion: opcion, IdUsuario: IdUsuario },
                success: function () {
                    tablaUsuario.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });


    $("#formUsuario").submit(function (e) {
        e.preventDefault();
        nombre = $.trim($("#nombre").val());
        correo = $.trim($("#correo").val());
        usuario = $.trim($("#usuario").val());
        password = $.trim($("#password").val());
        voto = $.trim($("#voto").val());
        $.ajax({
            url: "bd/crudUsuario.php",
            type: "POST",
            dataType: "json",
            data: {nombre: nombre, correo: correo, usuario: usuario, password: password , voto:voto, IdUsuario: IdUsuario, opcion: opcion },
            success: function (data) {
                console.log(data);
                IdUsuario = data[0].IdUsuario;
                nombre = data[0].nombre;
                correo = data[0].correo;
                usuario = data[0].usuario;
                password = data[0].password;
                voto = data[0].voto;
                if (opcion == 1) { tablaUsuario.row.add([IdUsuario, nombre, correo, usuario, password,voto]).draw(); }
                else { tablaUsuario.row(fila).data([IdUsuario, nombre, correo, usuario, password,voto]).draw(); }
            }
        });
        $("#modalCRUD").modal("hide");

    });


});