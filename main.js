jQuery(document).ready(function($){

    $('#live-search').on('keyup', function(){

        let keyword = $(this).val();

        $.ajax({
            url: ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'advanced_search',
                keyword: keyword
            },
            success: function(data){
                $('#search-results').html(data);
            }
        });

    });

});