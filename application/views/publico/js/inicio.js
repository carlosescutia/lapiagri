<script>
    $(document).ready(function(){
    });

    $(function(){
        $(".persona").click(function(){
            var cve_empleado = $(this).attr("alt");

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
        })
    })

</script>
