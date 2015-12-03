<? require('a/app/common.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?=$currentpage->sitetitle?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body>

	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<div class="sixteen columns">
			<h1 class="remove-bottom" style="margin-top: 40px">FluffCMS</h1>
			<h5>Beta Version 0.1</h5>
			<hr />
		</div>
		<div class="three columns">
			<? $load->navigation(); ?>
		</div>
		<div class="thirteen columns">
			<?=$currentpage->content;?>
		</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>