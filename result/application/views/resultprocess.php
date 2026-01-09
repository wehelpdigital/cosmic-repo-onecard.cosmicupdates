<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function()
  {
		// Animate loader off screen

          $("#aweberform").submit();

	});
</script>
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript,
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: #262626;
}
.look { font-size:30px; color:#fff; }
.imageload { margin-top:50px; margin-bottom:30px;}
</style>
<div class="se-pre-con">
	<div class="imageload"><img src="<?php echo base_url(); ?>public/loading.gif"/></div>
	<h2 class="look">Looking Into Your Future Now ...</h2>
</div>

<form method="post" class="af-form-wrapper" accept-charset="UTF-8" id="aweberform" action="https://www.aweber.com/scripts/addlead.pl"  >
  <input type="hidden" name="meta_web_form_id" value="707183002" />
  <input type="hidden" name="meta_split_id" value="" />
  <input type="hidden" name="listname" value="awlist4928833" />
  <input type="hidden" name="redirect" value="http://daily.trueloveanswers.com/result/three" id="redirect_1ee41c4863ecf46bfd843e8d83a62190" />
  <input type="hidden" name="meta_adtracking" value="My_Web_Form" />
  <input type="hidden" name="meta_message" value="1" />
  <input type="hidden" name="meta_required" value="name,email" />
  <input type="hidden" name="meta_forward_vars" value="1" />
  <input type="hidden" name="meta_tooltip" value="" />
<input type="hidden" id="awf_field-95310338" type="text" name="name" class="text" value="<?php echo $name; ?>"  />
<input type="hidden" id="awf_field-95310339" type="text" name="email" value="<?php echo $email; ?>"  />
<input type="hidden" id="awf_field-95310340" class="text" name="custom id" value="<?php echo $id; ?>"  />
<div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=TMyMbMwcDKyM" alt="" /></div>
</form>
