  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<!--Begin Carousel -->
    <script>
    $(document).ready(function(){
      $('.carousel').carousel({
        interval: 3500
      });
    });
    </script>


<!--Begin Tabs -->
  <script>
  $(document).ready(function(){
    $('#tabs div').hide();
    $('#tabs div:first').show();
    $('#tabs ul li:first').addClass('active');

    $('#tabs ul li a').click(function(){
      $('#tabs ul li').removeClass('active');
      $(this).parent().addClass('active');
      var currentTab = $(this).attr('href');
      $('#tabs div').hide();
      $(currentTab).fadeIn(1000);
      return false;
    });
  });
  </script>

<!--Begin Datepicker -->
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd"
    });
  });
  </script>

  <!--Begin Accordion -->
  <script>
  (function() {
    var dd = $('dd');

        //Grab all dd's starting from the fourth item in the def list and hide
        dd.filter(':nth-child(n+4)').hide();

        //Attach event listener to the dl only, then determine if a dt was clicked. When a dt is clicked, show its dd, and then hide all others
        $('dl').on('click','dt', function() {
          $(this)
          .next()
          .slideDown(300)
          .siblings('dd')
          .slideUp(300);
        });
      })();
      </script>


    <!--<script>
    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    })
    </script>

    <script>
    $('.collapse').collapse();
  </script>-->

    </body>
    </html>