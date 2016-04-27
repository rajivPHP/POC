<!DOCTYPE html>
<html>

	<head>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<head>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
			<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen"/>
		</head>
		<body>
			<a class="fancybox" rel="gallery1" href="images/19831416459_5ddd26103e_m.jpg"
			title="Sgwd Ddwli Uchaf, Brecon Waterfalls (technodean2000)" data-fancybox-type="iframe"> <img src="images/19831416459_5ddd26103e_m.jpg" alt="" border="1" width="100" height="100"/> </a>
			<a class="fancybox" rel="gallery1" href="images/16426879675_e32ac817a8_m.jpg"
			title="Codirosso spazzacamino (Massimo Greco _Foligno)" data-fancybox-type="iframe"> <img src="images/16426879675_e32ac817a8_m.jpg" alt="" border="1" width="100" height="100"/> </a>
			<a class="fancybox" rel="gallery1" href="images/15344856989_449794889d_m.jpg"
			title="Morning Twilight (Jose Hamra Images)" data-fancybox-type="iframe"> <img src="images/15344856989_449794889d_m.jpg" alt="" border="1" width="100" height="100"/> </a>
			<a class="fancybox1" rel="gallery1" href="pagination/pagination.php" title="Morning Twilight (Jose Hamra Images)"
			data-fancybox-type="iframe"> SHOW PDF </a>
			<a class="fancybox" rel="" href="pagination/pagination.php" title="Morning Twilight (Jose Hamra Images)"
			data-fancybox-type="iframe"> SHOW Pagination </a>
			<script type="text/javascript">
				$(".fancybox").fancybox({
					'opacity' : true,
					'overlayShow' : true,
					'frameWidth' : 600, // set the width
					'frameHeight' : 400, // set the height
					'overlayColor' : '#525252',
					type : "iframe",
					maxHeight : 600,
					minWidth : 400,
					'width' : '600',
					'height' : '400',
					'autoSize' : false
				});
				$(".fancybox1").fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					iframe : {
						preload : false
					}
				});
				$('a#page').click(function() {
					var myUrl = $(this).attr('href');
					$.fancybox({
						'autoDimensions' : false,
						'width' : 350,
						'height' : 'auto',
						'transitionIn' : 'none',
						'transitionOut' : 'none',
						'ajax' : {
							cache : false,
							url : myUrl
						}
					});
					return false;
				});
			</script>
		</body>
</html>