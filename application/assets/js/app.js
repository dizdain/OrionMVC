$(document).ready(function() {
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
    $(function() {
        $( "#documentation_contents" ).tabs();
    });
});