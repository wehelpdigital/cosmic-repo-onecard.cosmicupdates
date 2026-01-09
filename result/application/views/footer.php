</body>
<footer>
<script>
	// if you want to use the 'fire' or 'disable' fn,
	// you need to save OuiBounce to an object
	var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
		aggressive: true,
		timer: 0,
		callback: function() { console.log('ouibounce fired!'); }
	});
	$('body').on('click', function() {
		$('#ouibounce-modal').hide();
	});
	$('#ouibounce-modal .modal-footer').on('click', function() {
		$('#ouibounce-modal').hide();
	});
	$('#ouibounce-modal .modal').on('click', function(e) {
		e.stopPropagation();
	});
	</script>
<div id="footer-outer" data-midnight="light" data-using-widget-area="true">
<div class="footer">
<div class="row" id="copyright">

			<div class="container">
			    
			    <p style="text-align:center;"><img src="public/cu.alt.png" style="width:300px;"></p>

			<p style="text-align:center;">· <a href="https://cosmicupdates.com/about/" class="privacy" target="_blank">ABOUT</a> · <a target="_blank" href="https://cosmicupdates.com/contact/" class="privacy" target="_blank">CONTACT</a> ·<BR/>· <a href="https://cosmicupdates.com/privacy-policy/" class="privacy" target="_blank">PRIVACY POLICY</a> · <a target="_blank" href="https://cosmicupdates.com/terms-of-use/" class="privacy" target="_blank">TERMS OF USE</a> ·<BR/>· <a href="https://cosmicupdates.com/earnings-disclaimer/" class="privacy" target="_blank">EARNINGS DISCLAIMER</a> ·</p>
			
			<p style="text-align:center;">© Cosmic Updates 2023. All Rights Reserved.</p>

			</div><!--/container-->

</div>
</div>
</div> 
</footer>

</html> 
  