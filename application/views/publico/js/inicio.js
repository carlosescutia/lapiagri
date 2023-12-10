<script>
    $(document).ready(function(){
    });

    $(function(){
        $(".persona").click(function(){
            var cve_personal = $(this).attr("alt");

            $.ajax({
                url : '<?=base_url()?>personal/get_personal_cve',type:'post',dataType:'json',
                data: {cve_personal:cve_personal},
                success: function(data) {
                    $('#nom_personal').html(data.nom_personal);
                    $('#cargo').html(data.cargo);
                    $('#correo').html(data.correo);
                    $('#telefono').html(data.telefono);
                    $('#zona').html(data.zona);
                    $('#ciudad').html(data.ciudad);
                    $('#estado').html(data.estado);
                    ubica_persona(data.lon, data.lat);
                    $('#info_blank').addClass("d-none");
                    $('#info_contacto').removeClass("d-none");
                }

            })
        })
    })

</script>
