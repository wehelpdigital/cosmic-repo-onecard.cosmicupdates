
/** STEP 1 **/

        var $input = $( '.datepicker' ).pickadate({
                      format: 'mmmm d, yyyy',
                      // min: [2015, 7, 14],
                      container: '#datecontainer',
                      // editable: true,
                      closeOnSelect: true,
                      closeOnClear: true,
        });

        $('#stepone-continue').click(function()
        {

                  if($('#tYear').val()=="" || $('#tDay').val()=="" || $('#tMonth').val()=="")
                  {
                    alert('Please Input your Birthday!');
                  }
                  else
                  {
                      $('#steptwo').submit();

                  }

        });

        function validateEmail(email)
        {
          var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if( !emailReg.test( email ) ) {
              return false;
          } else {
              return true;
          }
        }


        $('#connect-access').click(function() {

            $('#access').submit();

        });
