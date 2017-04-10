$( document ).ready(function() {
    if ( $( "#wysiwyg" ).length ) {
 
        setInterval(function(){
            var author = $('#author').val();
            var topic = $('#topic').val();
            var content = $('#content').val();
            content = content.replace(/(?:\r\n|\r|\n)/g, "<br>");
            $("#wysiwyg .author").html( author );
            $("#wysiwyg .topic").html( topic );
            $("#wysiwyg .content").html( content );
        }, 1000);
    }
});