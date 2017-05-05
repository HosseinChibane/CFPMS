

    // ========================= AJAX RELOAD ==========================================

    $( document ).ready(function() {

        var loadResult = function(formations, langues, villes, pays, nomuniversite) {
            
            $.ajax({
            beforeSend: function(){
             $("#content_result").html('<tr><td> Chargement en cours...</td><td></td><td></td></tr>');
            },
            url : "comparateurajax",
            method: "post",
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
                    searching: false
                  } );

                addInComparateur();

            }).fail(function() {
                $("#content_result").html('<span class="label label-danger">!</span> Erreur de chargement des resultats');
            }); 

        }

        $("#dudeego_platformbundle_t_search_universite_rechercher").on('click',function(e) {
            e.preventDefault();
            loadResult(
                $('#dudeego_platformbundle_t_search_universite_formations').val(),
                $('#dudeego_platformbundle_t_search_universite_langues').val(),
                $('#dudeego_platformbundle_t_search_universite_villes').val(),
                $('#dudeego_platformbundle_t_search_universite_pays').val(),
                $('#dudeego_platformbundle_t_search_universite_nomuniversite').val()
            );
        });

        //==================== COMPARATEUR ==========================

        //Permet l'ajout d'université dans le comparateur
        var addInComparateur = function() {
            $(".add_comparateur").on('click',function(e) {
                e.preventDefault();

                var nbr = $("#comparateur-universites tr").length;
                if (nbr>=3) {
                    alert("Vous ne pouvez comparer que 3 universités");
                    return;
                }

                var id = $(this).data("id");
                var name = $("#nom-etablissement-"+id).text();

                var item = '<tr role="row" data-id="'+id+'"><td><p>'+name+'</p></td><td><a href="#" class="remove">Retirer</a></td></tr>';

                $('#comparateur-universites').append(item);

                //var id = $(this).find('input').val();
                //var nbForfait = $('#nbForfait').val();

                /*var table2 = $('#favoris').DataTable();
                table2.destroy();
                


                table2 = $('#favoris').DataTable( {
                    paging: false,
                    responsive: true,
                    searching: false
                } );*/
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