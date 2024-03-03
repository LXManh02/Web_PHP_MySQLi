<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Web Phụ Kiện Điện Thoại</title>
</head>

<body class="b" style="background-color: #fbf6f6 ;font-family: 'Montserrat', sans-serif;" >
    <div class="">
        <?php  
            session_start();
            include("../admincp/config/config.php");
            include("header.php");
            include("menu.php");
            include("main.php");
            include("footer.php");
        ?>
        
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script >
		// Show the first tab and hide the rest
		$('#tabs-nav li:first-child').addClass('active');
		$('.tab-content').hide();
		$('.tab-content:first').show();

		// Click function
		$('#tabs-nav li').click(function(){
		  $('#tabs-nav li').removeClass('active');
		  $(this).addClass('active');
		  $('.tab-content').hide();
		  
		  var activeTab = $(this).find('a').attr('href');
		  $(activeTab).fadeIn();
		  return false;
		});
	</script>
    <!-- giohang va dat hang -->
    <script>
        $(document).ready(function() {

var back = $(".prev");
var next = $(".next");
var steps = $(".step");

next.bind("click", function() {
  $.each(steps, function(i) {
    if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
      $(steps[i]).addClass('current');
      $(steps[i - 1]).removeClass('current').addClass('done');
      return false;
    }
  })
});
back.bind("click", function() {
  $.each(steps, function(i) {
    if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
      $(steps[i + 1]).removeClass('current');
      $(steps[i]).removeClass('done').addClass('current');
      return false;
    }
  })
});

})
    </script>
</body>

</html>