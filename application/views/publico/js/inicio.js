<script>
    $(document).ready(function(){
        $("#pills-estados-tab").click();
    });

    // Function to convert JSON data to HTML table
    function json2table(data) {
      let body = document.getElementById('tbl_empleados');
        $("#tbl_empleados tr").remove();
      data.forEach(element => body.insertAdjacentHTML('afterbegin', 
          `<tr>
          <td><a href="#" class="persona" alt="${element.cve_empleado}" onclick="info_persona(${element.cve_empleado})">${element.nom_empleado}</a></td>
          <td>${element.cargo}</td>
          <td>${element.zona}</td>
          <td>${element.estado}</td>
          </tr>`
      ));
    }

    function empleados_estado(lati, longi) {
        $.ajax({
            url : '<?=base_url()?>estados/get_empleados_estado_punto',type:'post',dataType:'json',
            data: {lat:lati, lon:longi},
            success: function(data) {
                tabla_empleados = data;
                json2table(data);
                console.log(data);
            }
        })
    }

    function info_persona (cve_empleado){
        $.ajax({
            url : '<?=base_url()?>empleados/get_empleado',type:'post',dataType:'json',
            data: {cve_empleado:cve_empleado},
            success: function(data) {
                $('#nom_empleado').html(data.nom_empleado);
                $('#cargo').html(data.cargo);
                $('#correo').html(data.correo);
                $('#telefono').html(data.telefono);
                $('#zona').html(data.zona);
                $('#ciudad').html(data.ciudad);
                $('#estado').html(data.estado);

                foto = "<?=base_url()?>fotos/"+data.cve_empleado+".jpg";
                $.get(foto,
                    function(response, status, jqXhr) {
                        $("#foto_empleado").attr("src","<?=base_url()?>fotos/"+data.cve_empleado+".jpg");
                    }
                )
                    .fail(function(response, status, jqXhr) {
                        $("#foto_empleado").attr("src","<?=base_url()?>img/empleado.svg");
                    }
                    );

                ubica_persona(data.lon, data.lat);
                $('#info_blank').addClass("d-none");
                $('#info_contacto').removeClass("d-none");
            }

        })
    }

</script>
