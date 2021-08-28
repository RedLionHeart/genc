jQuery(function($){
    $('.btn-loadmore').click(function(){
        var button = $(this);

        if(button.hasClass('btn-loadmore-paints')){
            var data = {
                'action': 'loadmore',
                'query': true_posts_paints,
                'page' : current_page_paints
            };
            $.ajax({
                url : ajaxurl,
                data: data,
                type:'POST',
                success:function(data){
                    if( data ) {
                        $('.btn-loadmore-paints').parent().parent().find('.container-card').append(data);
                        current_page_paints++;

                        if ( current_page_paints == max_pages_paints )
                            button.remove();
                    } else {
                        button.remove();
                    }

                },
                error: function (err) {
                    console.log(err);
                }
            });

        } else if(button.hasClass('btn-loadmore-medias')){
            var data = {
                'action': 'loadmore',
                'query': true_posts_medias,
                'page' : current_page_medias
            };
            $.ajax({
                url : ajaxurl,
                data: data,
                type:'POST',
                success:function(data){
                    if( data ) {
                        $('.btn-loadmore-medias').parent().parent().find('.container-video').append(data);
                        current_page_medias++;

                        if ( current_page_medias == max_pages_medias )
                            button.remove();
                    } else {
                        button.remove();
                    }

                },
                error: function (err) {
                    console.log(err);
                }
            });
        }
    });

});
