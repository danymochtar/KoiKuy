<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Koi Kuy: One Stop Information About Koi | Demo 1 | Codrops</title>
		<meta name="description" content="A landing page template with a featured content section and background sounds that change according to the view" />
		<meta name="keywords" content="landing page, background sound, aquatic theme, effect, transition, animation" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/menu_cornermorph.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
				<link rel="stylesheet" type="text/css" href="css/components.css" />
		<link rel="stylesheet" type="text/css" href="css/content.css" />
		<script src="js/modernizr.custom.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body>
		<svg class="hidden">
			<defs>
				<symbol id="icon-arrow" viewBox="0 0 24 24">
					<title>arrow</title>
					<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
				</symbol>
				<symbol id="icon-grid" viewBox="0 0 100 100">
					<title>grid</title>
					<rect x="8.4" y="8.9" width="20.1" height="20.1"/>
					<rect x="40" y="8.9" width="20.1" height="20.1"/>
					<rect x="71.6" y="8.9" width="20.1" height="20.1"/>
					<rect x="8.3" y="40" width="20.1" height="20.1"/>
					<rect x="39.9" y="40" width="20.1" height="20.1"/>
					<rect x="71.6" y="40" width="20.1" height="20.1"/>
					<rect x="8.3" y="71" width="20.1" height="20.1"/>
					<rect x="39.9" y="71" width="20.1" height="20.1"/>
					<rect x="71.6" y="71" width="20.1" height="20.1"/>
				</symbol>
				<symbol id="icon-sound-on" viewBox="0 0 100 100">
					<title>sound on</title>
					<path d="M57.9,13c-6.6,0-13.1,1.8-18.8,5.1c-5.1,3-9.3,7.1-12.5,12.1H12.5c-5.7,0-10.4,4.7-10.4,10.4v18.9
						c0,5.7,4.7,10.4,10.4,10.4h14.1c3.1,4.9,7.4,9.1,12.5,12.1c5.7,3.3,12.1,5.1,18.8,5.1c1.5,0,2.7-1.2,2.7-2.7V15.7
						C60.6,14.2,59.4,13,57.9,13z M25.5,64.5h-13c-2.8,0-5.1-2.3-5.1-5.1V40.6c0-2.8,2.3-5.1,5.1-5.1h13C25.5,35.5,25.5,64.5,25.5,64.5
						z M55.2,81.6c-10-0.8-19.1-6.5-24.4-15.1V33.6c5.3-8.6,14.4-14.3,24.4-15.1V81.6z"/>
					<path d="M71,29.4c-1.2-0.8-2.9-0.6-3.7,0.7c-0.8,1.2-0.6,2.9,0.7,3.7c5.3,3.7,8.5,9.8,8.5,16.3S73.3,62.6,68,66.3
						c-1.2,0.8-1.5,2.5-0.7,3.7c0.5,0.8,1.3,1.1,2.2,1.1c0.5,0,1.1-0.2,1.5-0.5C77.8,66,81.8,58.3,81.8,50S77.8,34.1,71,29.4z"/>
					<path d="M81.3,18.3c-1.2-0.8-2.9-0.6-3.7,0.7c-0.8,1.2-0.6,2.9,0.7,3.7c8.9,6.2,14.3,16.4,14.3,27.3
						s-5.3,21.1-14.3,27.3c-1.2,0.8-1.5,2.5-0.7,3.7c0.5,0.8,1.3,1.1,2.2,1.1c0.5,0,1.1-0.2,1.5-0.5C91.7,74.5,97.9,62.6,97.9,50
						S91.7,25.5,81.3,18.3z"/>
				</symbol>
				<symbol id="icon-sound-off" viewBox="0 0 100 100">
					<title>sound off</title>
					<path d="M57.9,13c-6.6,0-13.1,1.8-18.8,5.1c-5.1,3-9.3,7.1-12.5,12.1H12.5c-5.7,0-10.4,4.7-10.4,10.4v18.9
						c0,5.7,4.7,10.4,10.4,10.4h14.1c3.1,4.9,7.4,9.1,12.5,12.1c5.7,3.3,12.1,5.1,18.8,5.1c1.5,0,2.7-1.2,2.7-2.7V15.7
						C60.6,14.2,59.4,13,57.9,13z M25.5,64.5h-13c-2.8,0-5.1-2.3-5.1-5.1V40.6c0-2.8,2.3-5.1,5.1-5.1h13C25.5,35.5,25.5,64.5,25.5,64.5z
						M55.2,81.6c-10-0.8-19.1-6.5-24.4-15.1V33.6c5.3-8.6,14.4-14.3,24.4-15.1V81.6z"/>
					<g>
						<path d="M68.4,66.4c-0.7,0-1.4-0.3-1.9-0.8c-1-1-1-2.7,0-3.8l27.6-27.6c1-1,2.7-1,3.8,0c1,1,1,2.7,0,3.8L70.3,65.7
						C69.8,66.2,69.1,66.4,68.4,66.4z"/>
						<path d="M96,66.4c-0.7,0-1.4-0.3-1.9-0.8L66.6,38.1c-1-1-1-2.7,0-3.8c1-1,2.7-1,3.8,0l27.6,27.6c1,1,1,2.7,0,3.8
						C97.4,66.2,96.7,66.4,96,66.4z"/>
					</g>
				</symbol>
			</defs>
		</svg>
		<main class="landing-layout">
			<!-- Landing wrap with sections -->
			<div class="landing-wrap">
				<section class="landing landing--above" style="background-image: url(img/1.jpg);"></section>
				<section class="landing landing--beneath" style="background-image: url(img/2.jpg);">
					<canvas id="bubbles"></canvas>
				</section>
			</div><!-- /landing-wrap -->
			<!-- Landing header with title -->
			<header class="landing-header">
				<h1 class="landing-header__title" aria-label="Seaweed">
					<span style="color:#F72C01">K</span><span>o</span><span>i</span><span>&nbsp</span><span style="color:#F72C01">K</span><span>u</span><span>y</span>
				</h1>
				<p class="landing-header__tagline">Web Informasi and Forum Komunitas</p>
<div>
<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button">Masuk</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Tutup</span>
									<h2>Masuk</h2>
									<form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Password</label><input type="password" /></p>
										<p><button>Masuk</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<strong class="joiner">atau</strong>
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Daftar</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Tutup</span>
									<h2>Daftar</h2>
									<form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Password</label><input type="password" /></p>
										<p><label>Ulangi Password</label><input type="password" /></p>
										<p><button>Daftar</button></p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					</div>
			</header><!-- /landing-header -->
			<!-- Trigger button for layout change -->
			<button class="button button--trigger" aria-label="View more">
				<svg class="icon icon--grid icon--shown"><use xlink:href="#icon-grid"></use></svg>
				<svg class="icon icon--arrow-up icon--hidden"><use xlink:href="#icon-arrow"></use></svg>
			</button>
			<!-- Sound on/off button -->
			<button class="button button--sound" aria-label="Toggle sound">
				<svg class="icon icon--sound-on icon--shown"><use xlink:href="#icon-sound-on"></use></svg>
				<svg class="icon icon--sound-off icon--hidden"><use xlink:href="#icon-sound-off"></use></svg>
			</button>
			<!-- Featured content that gets shown after the layout opens -->
			<section class="featured-content">
				<ul class="featured-list">
					<li class="featured-list__item">
						<a href="frame.html" class="featured-list__link">
							<img class="featured-list__img" src="img/icons/sw1.svg" alt="Seaweed 1">
							<h3 class="featured-list__title">Kenali</h3>
						</a>


					</li>
					<li class="featured-list__item">
						<a href="#" class="featured-list__link">
							<img class="featured-list__img" src="img/icons/sw2.svg" alt="Seaweed 2">
							<h3 class="featured-list__title">Jenis</h3>
						</a>
					</li>
					<li class="featured-list__item">
						<a href="#" class="featured-list__link">
							<img class="featured-list__img" src="img/icons/sw3.svg" alt="Seaweed 3">
							<h3 class="featured-list__title">Rawat</h3>
						</a>
					</li>
					<li class="featured-list__item">
						<a href="#" class="featured-list__link">
							<img class="featured-list__img" src="img/icons/sw4.svg" alt="Seaweed 4">
							<h3 class="featured-list__title">Tanya</h3>
						</a>
					</li>
					<li class="featured-list__item">
						<a href="#" class="featured-list__link">
							<img class="featured-list__img" src="img/icons/sw5.svg" alt="Seaweed 5">
							<h3 class="featured-list__title">Forum</h3>
						</a>
					</li>
					<li class="featured-list__item">
						<a href="#" class="featured-list__link">
							<img class="featured-list__img" src="img/icons/sw6.svg" alt="Seaweed 6">
							<h3 class="featured-list__title">Tentang</h3>
						</a>
					</li>
				</ul>
			</section><!-- /featured-content -->

			<div class="contoiner">
						<div id="morphsearch" class="morphsearch">
				<form class="morphsearch-form">
					<input class="morphsearch-input" type="search" placeholder="Cari apa?"/>
					<button class="morphsearch-submit" type="submit">Cari</button>
				</form>
				<div class="morphsearch-content">
					<div class="dummy-column">
						<h2>Artikel Teratas</h2>
						<a class="dummy-media-object" href="http://twitter.com/SaraSoueidan">
							<img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
							<h3>Artikel 1</h3>
						</a>
						<a class="dummy-media-object" href="http://twitter.com/rachsmithtweets">
							<img class="round" src="http://0.gravatar.com/avatar/48959f453dffdb6236f4b33eb8e9f4b7?s=50&d=identicon&r=G" alt="Rachel Smith"/>
							<h3>Artikel 2</h3>
						</a>
						<a class="dummy-media-object" href="http://www.twitter.com/peterfinlan">
							<img class="round" src="http://0.gravatar.com/avatar/06458359cb9e370d7c15bf6329e5facb?s=50&d=identicon&r=G" alt="Peter Finlan"/>
							<h3>Artikel 3</h3>
						</a>
						<a class="dummy-media-object" href="http://www.twitter.com/pcridesagain">
							<img class="round" src="http://1.gravatar.com/avatar/db7700c89ae12f7d98827642b30c879f?s=50&d=identicon&r=G" alt="Patrick Cox"/>
							<h3>Artikel 4</h3>
						</a>
						<a class="dummy-media-object" href="https://twitter.com/twholman">
							<img class="round" src="http://0.gravatar.com/avatar/cb947f0ebdde8d0f973741b366a51ed6?s=50&d=identicon&r=G" alt="Tim Holman"/>
							<h3>Artikel 5</h3>
						</a>
					</div>
					<div class="dummy-column">
						<h2>Artikel Teratas</h2>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/05/page-preloading-effect/">
							<img src="img/thumbs/PagePreloadingEffect.png" alt="PagePreloadingEffect"/>
							<h3>Artikel 1</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/28/arrow-navigation-styles/">
							<img src="img/thumbs/ArrowNavigationStyles.png" alt="ArrowNavigationStyles"/>
							<h3>Artikel 2</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/06/19/ideas-for-subtle-hover-effects/">
							<img src="img/thumbs/HoverEffectsIdeasNew.png" alt="HoverEffectsIdeasNew"/>
							<h3>Artikel 3</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/07/14/freebie-halcyon-days-one-page-website-template/">
							<img src="img/thumbs/FreebieHalcyonDays.png" alt="FreebieHalcyonDays"/>
							<h3>Artikel 4</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/05/22/inspiration-for-article-intro-effects/">
							<img src="img/thumbs/ArticleIntroEffects.png" alt="ArticleIntroEffects"/>
							<h3>Artikel 5</h3>
						</a>
					</div>
					<div class="dummy-column">
						<h2>Recent</h2>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/10/07/tooltip-styles-inspiration/">
							<img src="img/thumbs/TooltipStylesInspiration.png" alt="TooltipStylesInspiration"/>
							<h3>Artikel 1</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/23/animated-background-headers/">
							<img src="img/thumbs/AnimatedHeaderBackgrounds.png" alt="AnimatedHeaderBackgrounds"/>
							<h3>Artikel 2</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/16/off-canvas-menu-effects/">
							<img src="img/thumbs/OffCanvas.png" alt="OffCanvas"/>
							<h3>Artikel 3</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/09/02/tab-styles-inspiration/">
							<img src="img/thumbs/TabStyles.png" alt="TabStyles"/>
							<h3>Artikel 4</h3>
						</a>
						<a class="dummy-media-object" href="http://tympanus.net/codrops/2014/08/19/making-svgs-responsive-with-css/">
							<img src="img/thumbs/ResponsiveSVGs.png" alt="ResponsiveSVGs"/>
							<h3>Artikel 5</h3>
						</a>
					</div>
				</div><!-- /morphsearch-content -->
				<span class="morphsearch-close"></span>
			</div><!-- /morphsearch -->
			<div class="menu-wrap">
				<nav class="menu">
					<div class="profile"><img src="img/bw5.jpg" alt="Dany Mochtar"/><span>Dany Mochtar</span></div>
					<div class="link-list">
						<a href="#"><span>Profil</span></a>
						<a href="#"><span>Pertemanan</span></a>
						<a href="#"><span>Pengaturan</span></a>
						<a href="#"><span>Keluar</span></a>
					</div>
				</nav>
			</div>
			<button class="menu-button" id="open-button"><i class="fa fa-fw fa-cog"></i><span>Open Menu</span></button>
			
		</div><!-- /container -->
			<div class="loader">
				<svg class="loader__img" viewBox="0 0 100 100" width="100px" height="100px">
					<circle class="loader__circle" cx="22.8" cy="77.6" r="16.5"/>
					<circle class="loader__circle" cx="52.2" cy="82.9" r="6.5"/>
					<circle class="loader__circle" cx="79.8" cy="69.8" r="13.1"/>
				</svg>
			</div>
		</main>
		<script src="js/howler.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/classie.js"></script>
<script>
			(function() {
				var morphSearch = document.getElementById( 'morphsearch' ),
					input = morphSearch.querySelector( 'input.morphsearch-input' ),
					ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
					isOpen = isAnimating = false,
					// show/hide search area
					toggleSearch = function(evt) {
						// return if open and the input gets focused
						if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

						var offsets = morphsearch.getBoundingClientRect();
						if( isOpen ) {
							classie.remove( morphSearch, 'open' );

							// trick to hide input text once the search overlay closes 
							// todo: hardcoded times, should be done after transition ends
							if( input.value !== '' ) {
								setTimeout(function() {
									classie.add( morphSearch, 'hideInput' );
									setTimeout(function() {
										classie.remove( morphSearch, 'hideInput' );
										input.value = '';
									}, 300 );
								}, 500);
							}
							
							input.blur();
						}
						else {
							classie.add( morphSearch, 'open' );
						}
						isOpen = !isOpen;
					};

				// events
				input.addEventListener( 'focus', toggleSearch );
				ctrlClose.addEventListener( 'click', toggleSearch );
				// esc key closes search overlay
				// keyboard navigation events
				document.addEventListener( 'keydown', function( ev ) {
					var keyCode = ev.keyCode || ev.which;
					if( keyCode === 27 && isOpen ) {
						toggleSearch(ev);
					}
				} );


				/***** for demo purposes only: don't allow to submit the form *****/
				morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			})();
		</script>
				<script src="js/main2.js"></script>
				<script src="js/uiMorphingButton_fixed.js"></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
		</script>
				<script>
			(function() {	
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();
				
				var el = document.querySelector( '.morph-button' );
				
				new UIMorphingButton( el, {
					closeEl : '.icon-close',
					onBeforeOpen : function() {
						// don't allow to scroll
						noScroll();
					},
					onAfterOpen : function() {
						// can scroll again
						canScroll();
						// add class "noscroll" to body
						classie.addClass( document.body, 'noscroll' );
						// add scroll class to main el
						classie.addClass( el, 'scroll' );
					},
					onBeforeClose : function() {
						// remove class "noscroll" to body
						classie.removeClass( document.body, 'noscroll' );
						// remove scroll class from main el
						classie.removeClass( el, 'scroll' );
						// don't allow to scroll
						noScroll();
					},
					onAfterClose : function() {
						// can scroll again
						canScroll();
					}
				} );
			})();
		</script>
	</body>
</html>
