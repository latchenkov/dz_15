$(function() {
    $( 'a.delete' ).click(function() {
        var tr = $(this).closest('tr');
        var id = tr.attr('data-id');
        $.get('action.php?action=delete&id='+id,
            function(){tr.fadeOut('normal',function(){$(this).remove();});
            });
    });
});


