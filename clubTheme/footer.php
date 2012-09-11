 <div id="footer_wrapper"><!-- footer -->
            
            <div id="footer_container"><!-- footer_container -->
	    <a href="http://www.facebook.com/groups/216256595097530/"><img class="social_media_icon" src="http://www.acm.uiuc.edu/webmonkeys/2012/wp-content/uploads/2012/08/beer_cap_facebook.png" alt="Facebook" /></a>
             
		<p>Copyright Web Monkeys. All Rights Reserved.</p>
		
            </div><!-- footer_container -->
             
</div><!-- end footer_wrapper -->

<script>
// Add the target = "_blank" attribute to all of the resource_columns anchor tags
   var element = document.getElementById('resource_columns').getElementsByTagName('a');
   for(var i=0; i<element.length; i++) {
      element[i].setAttribute('target', '_blank');
   }
</script>
<script>
// Remove the right border from right side columns, and bottom borders of the last three columns
   var element = document.getElementById('resource_columns').getElementsByTagName('ul');
   for(var i=2; i<element.length; i = i+3) {
      element[i].style.borderRight = 'none';
   }
   
   for(var i = element.length; i > element.length-3; i--  ) {
      element[i-1].style.borderBottom = 'none';
   }
</script>

</body>
</html>


   