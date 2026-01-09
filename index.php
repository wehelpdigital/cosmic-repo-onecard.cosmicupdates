<!DOCTYPE html>
<html lang="en-US">

<head>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KGF8VXK');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lt-styles-two.css" rel="stylesheet">
    <link href="css/style-cards.css" rel="stylesheet">
    <link href="css/style-two.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="icon" type="image/png" href="img/faviconCU.png" />
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80479028-3"></script>
    <title>Get Your One Card Love Reading Now!</title>
    <meta name="description" content="Unsure about love?  Suspicious he’s lying?  Not sure what to do? Get instant answers and reveal everything he’ll never tell you.">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
   
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <?php
    $date_today = date("Y-m-d"); 
    function randomGen($min, $max, $quantity)
    {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    $result = randomGen(1, 22, 3);
    ?>
    <!-- Content -->

    <div class="choose-outer">
        <div class="container">
            <div class="choose-wrap">

                <!-- <h1 class="center animated fadeInDown">The Universe Has A Message About Your Love Life</h1> -->
                <h1 class="center animated fadeInDown">Draw Your Love Card & Get Insights For <?php echo date("F jS, Y", strtotime($date_today)); ?></h1>
                <!-- <h2 class="center animated fadeInUp">Draw Your Love Card And See What Answer It Holds</h2> -->
                <!-- CHOOSE CARDS NAV AND GUIDE -->

                <div class="choose-cards cards-row-bg row card-back-1">

                    <a href="#getreading" id="err">Show Error</a>
                    <!-- <div class="remodal" data-remodal-id="getreading" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                        <div>
                            <h2 class="center">What An Interesting Card You Drew!</h2>
                            <h3 class="center">Let’s See What It Says About Your Love Life …</h3>

                            <p class="left">My Name Is:</p>
                            <div class="form-group form_inner fname-inner no-inline">
                                <div class="form-col fname">
                                    <form id="reading-form" action="result/one" method="POST">
                                        <input type="hidden" name="one" value="<?php echo trim($result[0]); ?>" />
                                        <input type="hidden" name="two" value="<?php echo trim($result[1]); ?>" />
                                        <input type="hidden" name="three" value="<?php echo trim($result[2]); ?>" />
                                        <input name="inputFirstName" class="form-control on-focus" id="firstNameT" placeholder="Enter Your First Name">
                                        <p class="left">I am a:</p>
                                        <select name="gender" class="form-control on-focus">
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                            <option value="other">Other</option>
                                        </select>

                                    </form>
                                </div>
                            </div>

                            <div class="form-group send">
                                <button class="btn btn-purple multiple up btnsubmit" type="button">Reveal My Love Card Now</button>

                            </div>
                        </div>
                    </div> -->

                    <!-- CARD ROWS -->
                    <div class="animated fadeInUp">
                        <div class="cards-row-wrap" data-cis="1">
                            <div class="cards-row-outer">
                                <div id="cards-row-1" class="cards-row clearfix" data-cisr="1">
                                    <div class="card on" data-id="1"></div>
                                    <div class="card on" data-id="9"></div>
                                    <div class="card on" data-id="5"></div>
                                    <div class="card on" data-id="19"></div>
                                    <div class="card on" data-id="14"></div>
                                    <div class="card on" data-id="21"></div>
                                    <div class="card on" data-id="12"></div>
                                    <div class="card on" data-id="8"></div>
                                    <div class="card on" data-id="18"></div>
                                    <div class="card on" data-id="6"></div>
                                    <div class="card on" data-id="16"></div>
                                    <div class="card on" data-id="2"></div>
                                    <div class="card on" data-id="13"></div>
                                    <div class="card on" data-id="11"></div>
                                    <div class="card on" data-id="17"></div>
                                    <div class="card on" data-id="20"></div>
                                    <div class="card on" data-id="7"></div>
                                    <div class="card on" data-id="0"></div>
                                    <div class="card on" data-id="15"></div>
                                    <div class="card on" data-id="4"></div>
                                    <div class="card on" data-id="3"></div>
                                    <div class="card on" data-id="10"></div>
                                </div>
                            </div>
                        </div>

                        <!-- INSTRUCTIONS BOX  -->
                        <div class="instructions">

                            <div class="text-shadow-minimal text-center reshuffle-info">
                                <span>Focus. Feel. Ask. <br />Click the deck and draw your card!</span>
                                
                            <br/><br/>
                                <div class="">
                                    We shuffled the deck <span class=" italic"> once ... </span>
                                </div>
                                <div class=""><a href="javascript:void(0)" class="btn btn-sm btn-default btn-plain btn-shuffle">Shuffle again</a>
                                </div>
                            </div>

                            <!-- datepicker widgets -->

                            <div class="alert alert-warning text-begin text-center text-shadow-minimal clearfix">
                                
                            </div>
                        </div>

                        <!-- GUIDE AND NAV -->
                        <div class="row nav-guide">

                            <!-- Guide -->
                            <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 guide-wrap">
                                <div class="guide nice-box collapse">
                                    <p class="text-shadow-minimal">
                                        Select <b>1</b> card </p>
                                </div>
                            </div>
                        </div>
                        <!-- Get My Reading BTN -->
                        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 get-my-reading-wrap">
                            <div class="get-my-reading collapse">

                                <a href="#getreading" id="getreading" class="btn btn-primary btn-block btn-lg btn-get-reading" style="display:none !important;">Get My Reading!</a>

                                <div class="form-group form_inner fname-inner no-inline">
                                    <div class="form-col fname">
                                        <form id="form_reading" action="result/one" method="POST">
                                            <input type="hidden" name="one" value="<?php echo trim($result[0]); ?>" />
                                            <input type="hidden" name="two" value="<?php echo trim($result[1]); ?>" />
                                            <input type="hidden" name="three" value="<?php echo trim($result[2]); ?>" />
                                            <input type="hidden" name="inputFirstName" class="form-control on-focus" id="firstNameT" placeholder="Enter Your First Name" value="name">
                                            <select name="gender" class="form-control on-focus" style="display:none !important;">
                                                <option value="other">Other</option>
                                            </select>
                                            <a href="#" id="getreading" onclick="submitForm()" class="btn btn-primary btn-block btn-lg btn-get-reading">Get My Reading!</a>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <script src="js/script-cards.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/yii.js"></script>
            <script src='js/rbeix.js'></script>
            <script src="js/index.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/custom-scripts-two.js?v=3b"></script>
            <script src="js/bootstrap-switch.js"></script>
            <script src="https://apis.google.com/js/platform.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="https://chancejs.com/chance.min.js"></script>
            <!-- remodal-->
            <link rel="stylesheet" href="remodal/remodal.css">
            <link rel="stylesheet" href="remodal/remodal-default-theme.css">
            <script src="remodal/remodal.js"></script>

            <script type="text/javascript">
                function submitForm() {
                    let form = document.getElementById("form_reading");
                    form.submit();
                }
                jQuery(document).ready(function() {
                    $("[name='zen-mode']").bootstrapSwitch();
                    $("[name='card-animate']").bootstrapSwitch();
                    $('.choose-wrap').chooseCards();



                    $('[data-toggle="tooltip"]').tooltip();;
                    jQuery('#w0').parent().datepicker({
                        "autoclose": true,
                        "format": "M d, yyyy",
                        "startView": 2
                    });
                    jQuery('#the-modal').modal({
                        "show": false
                    });
                    jQuery('#the-modal').on('show.bs.modal', function(e) {
                        var theModal = $(this);
                        var theModalLoad = $('#the-modal-loader');
                        var rt = $(e.relatedTarget);
                        theModalLoad.show();
                        $('.modal-dialog', theModal).load(rt.attr('href'), function() {
                            var theModalSize = rt.data('size') !== undefined ? rt.data('size') : (theModal.data('size') !== undefined ? theModal.data('size') : 'md');
                            $('.modal-dialog', theModal).removeClass('modal-sm modal-md modal-lg').addClass('modal-' + theModalSize).parent().removeData('size');
                            theModal.addClass('the-in');
                            theModalLoad.hide();
                            theModalinit();
                        });
                    });
                    jQuery('#the-modal').on('hide.bs.modal', function(e) {
                        $(this).removeClass('the-in');
                    });
                    jQuery('#the-modal').on('hidden.bs.modal', function(e) {
                        $(this).removeClass('the-in').find('.modal-content').html('');
                        $('#the-modal-loader').hide();
                    });
                });

                $('.btnsubmit').click(function() {



                    if ($('#firstNameT').val() == "") {

                        alert('Please Enter your Name!');

                    } else {

                        $('#reading-form').submit();

                    }



                });
            </script>
</body>

</html>