

    // ========================= AJAX RELOAD ==========================================

    $( document ).ready(function() {

        var loadResult = function(formations, langues, villes, pays, nomuniversite) {
            
            $.ajax({
            beforeSend: function(){
             $("#content_result").html('<tr><td> Chargement en cours...</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
            },
            url : "{{ path('dudeego_platform_filterComparateur') }}",
            method: "POST",
            data : {
                'formations': formations,
                'langues': langues,
                'villes': villes,
                'pays': pays,
                'nomuniversite': nomuniversite
            }
            }).done(function(response) {
                $table = $('#universite').DataTable();
                $table.destroy();
                $("#content_result").html(response);
                
                $table = $('#universite').DataTable( {
                    paging: true,
                    responsive: true,
                    searching: false,
                    "lengthChange": false
                  } );

                addInComparateur();

            }).fail(function() {
                $("#content_result").html('<tr><td><span class="label label-danger">!</span> Erreur de chargement des resultats...</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
            }); 

        }

        $("#dudeego_platformbundle_t_search_universite_rechercher").on('click',function(e) {
            e.preventDefault();
            loadResult(
                $('#dudeego_platform_filterComparateur_formations').val(),
                $('#dudeego_platform_filterComparateur_langues').val(),
                $('#dudeego_platform_filterComparateur_villes').val(),
                $('#dudeego_platform_filterComparateur_pays').val(),
                $('#dudeego_platform_filterComparateur_nomuniversite').val()
            );
        });

        //==================== COMPARATEUR ==========================

        //Permet l'ajout d'université dans la partie comparer
        var addInComparateur = function() {
            $(".add_comparateur").on('click',function(e) {
                e.preventDefault();

                var nbr = $("#comparateur-universites tr").length;
                if (nbr>=10) {
                    alert("Vous pouvez comparer uniquement que 10 universités !");
                    return;
                }

                var id = $(this).data("id");
                var name = $("#nom-etablissement-"+id).text();

                var item = '<tr role="row" data-id="'+id+'"><td><p>'+name+'</p></td><td><a href="#" class="remove">Retirer</a></td></tr>';

                $('#comparateur-universites').append(item);

                removeItem();
                compareBtnActive();

            });
        }

        // Supprime une université du comparateur
        var removeItem = function(){
            $(document).on('click', '.remove', function(e) {
                e.preventDefault();
                $(this).parent().parent().remove();
                compareBtnActive();
            });
            
        }

        // Active le bouton Compare si il y'a au moins 2 items
        var compareBtnActive =function(){
            nbr = $("#comparateur-universites tr").length;
            $('#nbItems').val(nbr);
            if(nbr>=2){
                $('#comparateur_btn').prop('disabled', false);
            }
            else{
                $('#comparateur_btn').prop('disabled', true);
            }
        }

        addInComparateur();


        // =============== CLick compare btn ==========

        $('#comparateur_btn').on('click',function(e) {
            e.preventDefault();
            
            //on réinitialise à zéro les valeurs du form
            $( "#form-item-comparateur input" ).val(0);  
            
            //on passe au champs cachés du form les id des sites à comparer avant validation du form
            $( "#comparateur-universites tr" ).each(function( index ) {
                var id = $( this ).data("id");
                $("#form-item-comparateur #id"+index).val(id);
            });
            $("#form-item-comparateur").submit();
        });

    });
