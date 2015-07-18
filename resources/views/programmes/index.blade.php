<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>HSPT | Create Programme</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<meta name="csrf-token" content="{{{ csrf_token() }}}">

		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
		<link rel="stylesheet" type="text/css" href="/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="/css/cs-skin-boxes.css" />
		<script src="/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1><span class="lowlight">Stage 1 |</span> Create New Programme</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="../index.php"><span>Back</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"><span>This is the first step in creating your programme.</span></a>
					</div>
				</div>
				<form id="myform" class="fs-form fs-form-full" method="POST" autocomplete="off">
					<input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">What's your programme name?</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Johns Bulking Guide" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2">Selling Price?</label>
							<input class="fs-mark fs-anim-lower" id="q2" name="q2" type="number" placeholder="49.99" step="100" min="100"/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">Who's it for?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="male"/><label for="q3b" class="radio-conversion">Men</label></span>
								<span><input id="q3c" name="q3" type="radio" value="female"/><label for="q3c" class="radio-social">Women</label></span>
								<span><input id="q3a" name="q3" type="radio" value="both"/><label for="q3a" class="radio-mobile">Both</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="How long will your programme be?">Number of weeks?</label>
							
							<input class="fs-anim-lower" id="q4" name="q4" type="text" placeholder="12" required/>
										
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="How many days in the week will be training days?">Number of training days in the week?</label>
							
							<input class="fs-anim-lower" id="q5" name="q5" type="text" placeholder="7" required/>
										
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q6">Short Description</label>
							<textarea class="fs-anim-lower" id="q6" name="q6" placeholder="Describe here"></textarea>
						</li>
						
					</ol><!-- /fs-fields -->
					<a href="/programme/">
						<button class="fs-submit" type="submit">Stage 2</button>
					</a>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->


		</div><!-- /container -->
		<script src="/js/classie.js"></script>
		<script src="/js/selectFx.js"></script>
		<script src="/js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>