<style>
/* Here's the important part of the Bar */
#progressbar { position: fixed; height: 10px; z-index: 99; top: 0; left: 0; right: calc( 100% ); background-color: #000; transition: right .5s linear 0s; }

</style>


<!-- You need to insert the Div-Tag with the ID "progressbar" -->
<div id="progressbar"></div>


<script>
jQuery(document).on("scroll", function(){
     
  var pixels = jQuery(document).scrollTop();
  var pageHeight = jQuery(document).height() - jQuery(window).height();
  var progress = 100 * pixels / pageHeight;
  
  jQuery("#progressbar").css("width", progress + "%");
})

</script>

