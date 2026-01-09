<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<div class="content">
<div class="results">

  <div class="result-content-container">
    <h1 class="animated fadeIn"><?php echo $name;?>, Here’s Where You’re At Now  </h1>
      <div class="col-sm-4">
          <img class=" animated flipInY" src="<?php echo base_url(); ?>public/cards/<?php echo $image; ?>.jpg"/>
      </div>
      <div class="col-sm-8 animated fadeIn">
            <h2 class="subtitle">Your second card is <?php echo $title; ?></h2>
          <div><?php echo $description; ?></div>
      </div>
    <div class="clear"></div>
    <div class="button-container animated  flipInX top-twentry">
        <a href="#modal" class="continue" >Next Card >></a>
    </div>
  </div>
</div>

<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
  <div>

          <h2 class="center"><?php echo $name; ?>, Let's Talk In Private...</h2>
          <h3 class="justify">This last card reveals something very intimate in your romantic future, and, just like a doctor, I take your privacy very seriously.</h3>
          <p class="left">Please enter your best email address so we can talk in private. </p>
          <div class="form-group">
          <div class="form-col fname">


                <div class="left">
                              <form method="post" class="af-form-wrapper" id="steptwo" accept-charset="UTF-8" action="/result/process"  >
                              <input type="hidden" name="Name"  id="name" class="text" value="<?php echo $name; ?>"  />
                              <!--Birthday Day-->
                              <input type="hidden" value="<?php echo $bdayday; ?>" name="BdDay" id="bdday"/>
                              <!--Birthday Month-->
                              <input type="hidden" value="<?php echo $bdaymonth; ?>" name="BdMonth"  id="bdmonth"/>
                              <!--Birthday Year-->
                              <input type="hidden" value="<?php echo $bdayyear; ?>" name="BdYear" id="bdyear"/>
                              <!-- CARD ONE -->
                              <input type="hidden"  class="text" name="Cone" value="<?php echo $firstcard; ?>" id="cone" />
                              <input type="hidden"  class="text" name="Ctwo" value="<?php echo $secondcard; ?>" id="ctwo"/>
                              <input type="hidden"  class="text" name="Cthree" value="<?php echo $thirdcard; ?>" id="cthree"/>
							                <div class="form-group form_inner fname-inner no-inline">
							                <div class="form-col fname">
                              <input type="text" tabindex="1" name="Email" class="form-control"  id="email-info" placeholder="Enter Your Email Address" />
								</div> </div>
                </form>
                </div>

</div>
</div>





        <div class="clear"></div>

        <div class="left">

            <input type="button" class="small-continue btn notop" id="steptwo-continue" value="Reveal My Romantic Destiny">

        </div>

  </div>
</div>
</div>

<script>
$('.continue').click(function() {

	$('#email-info').focus();
});

$('#steptwo-continue').click(function() {

          if(!validateEmail($('#email-info').val()) || $('#email-info').val()=="" )
          { alert('Please enter a valid Email Address!');}
          else
          {
              $('#steptwo').submit();
          }


});
</script>

<!-- custom -->
<script src="<?php echo base_url(); ?>public/js/custom.js"></script>
