(function($) {
    $(document).ready(function() {
        var currentPage = 1;

        $('.query-loop-load-more-button').on('click', function(e) {
            e.preventDefault();
            var button = $(this);
            var parent_id = button.closest('.wp-block-query').attr('id').replace('block_', '');
            // console.log(heya[parent_id], parent_id);
            var innerBlocksString = heya[parent_id]['innerBlocksString'];
            var context = heya[parent_id]['context'];
            var query_args = heya[parent_id]['query_args'];
            var postsPerPage = 4;
            // console.log(context);
            $.ajax({
                url: my_load_more_params.ajaxurl,
                type: 'POST',
                data: {
                    action: 'load_more_posts',
                     context: context,//????
                    query_args: query_args,// od blockot
                    paged: currentPage + 1, //
                    innerBlocksString: innerBlocksString, //serialize_blocks
                    // posts_per_page: postsPerPage
                },
                beforeSend: function() {
                    button.text('Loading...');
                },
                success: function(data) {
                    //console.log(data);
                    if ( data ) {
                        // Append the loaded posts to your Query Loop container.
                        button.closest('.wp-block-query').find('ul').append(data);
                        currentPage++;
                        button.text('Load More');
                        // Optionally, if no more posts are available, remove or hide the button.
                    } else {
                        button.remove();
                    }
                },
                error: function() {
                    button.text('Load More');
                }
            });
        });
    });
})(jQuery);
