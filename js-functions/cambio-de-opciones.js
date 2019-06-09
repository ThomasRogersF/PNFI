$(document).ready(function() {

    var eleccion_primero_a_segundo = "<option value='test'>1 Año</option><option value='test2'>2 Año</option><option value='test2'>1 y 2 Año</option>"
    var eleccion_tercero_a_quinto = "<option value='test'>3 Año</option><option value='test2'>4 Año</option><option value='test2'>5 año</option><option value='test2'>3 y 4 año</option><option value='test2'>4 y 5 año</option><option value='test2'>3 y 5 año</option><option value='test2'>todos los años</option>"
    var eleccion_todos_los_grados = "<option value='test'>1 Año</option><option value='test2'>2 Año</option><option value='test'>3 Año</option><option value='test2'>4 Año</option><option value='test2'>5 año</option><option value='test2'>1 y 2 Año</option><option value='test2'>1 y 3 Año</option><option value='test2'>1 y 4 Año</option><option value='test2'>1 y 5 Año</option><option value='test2'>2 y 3 Año</option><option value='test2'>2 y 4 Año</option><option value='test2'>2 y 5 Año</option><option value='test2'>3 y 4 año</option><option value='test2'>4 y 5 año</option><option value='test2'>3 y 5 año</option><option value='test2'>todos los años</option>"

    $("#list").change(function() {
        var val = $(this).val();
        if (val == "CIENCIAS-NATURALES" ) {
            $("#grado").html(eleccion_primero_a_segundo);
        }
        
        else if (val == "BIOLOGIA") {
            $("#grado").html(eleccion_tercero_a_quinto);

        } 

        else if (val == "FISICA") {
            $("#grado").html(eleccion_tercero_a_quinto);

        } 
        
       
        else if (val == "QUIMICA") {
            $("#grado").html(eleccion_tercero_a_quinto);

        } 


       else if (val == "EDUCACION-FISICA") {
            $("#grado").html(eleccion_todos_los_grados);
        }

        else if (val == "INGLES") {
            $("#grado").html(eleccion_todos_los_grados);
        }

        else if (val == "CASTELLANO") {
            $("#grado").html(eleccion_todos_los_grados);
        }
    });


});