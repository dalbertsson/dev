<?
$css = "/***************************
 *
 * Font face
 *
***************************/
/*
@font-face {
    font-family: 'entypo';
	
    src: url('./entypo/entypo.eot');
	src: local('☺'),
    	 	url('./entypo/entypo.eot') 			format('embedded-opentype'),
         	url('./entypo/entypo.woff') 		format('woff'),
         	url('./entypo/entypo.ttf') 			format('truetype'),
         	url('./entypo/entypo.svg#entypo')	format('svg');

} */

/***************************
 *
 * Defaults
 *
***************************/

* 				{position: relative;}
img 			{max-width: 100%; height: auto;}
html 			{background: #eee;}
body 			{margin: 0; padding: 0; background: #fff;}
img 			{color: #999;}
a 				{outline: none;}
.clear 			{clear: both;}
.block 			{display: block;}
.relative		{position: relative !important;}
.inline-block 	{display: inline-block; zoom:1; *display: inline;}
.f-right 		{float: right; display: inline;}
.f-left 		{float: left; display: inline;}

a {
	-webkit-transition: all 0.5s ease;
	-moz-transition:    all 0.5s ease;
	-ms-transition:     all 0.5s ease;
	-o-transition:      all 0.5s ease;
	transition:      	all 0.5s ease;
}

.screen-reader {visibility: hidden; display: none;}

.cursor-pointer {cursor: pointer;}


/***************************
 *
 * Layout
 *
***************************/

.container-fluid {max-width: 1200px; min-width: 860px; margin: 0 auto;}

.wrapper { background: #f8f8f8; margin-top: 0px; margin-bottom: 0px;
	padding-top: 0; padding-bottom: 50px; 
	padding-left: 30px; padding-right: 30px;
	box-shadow: 0 2px 3px rgb(255,23,233,.2) inset;
	}

.section-spacer {height: 1.5em;}

.navbar .nav li {margin: 0;}

.navbar-inner a { display: inline-block !important; }

.navbar .icons {font-style: normal; font-size: 28px;}

.navbar-inner, 
.navbar .container {position: static;}

.navbar .brand .sprite {width: 20px; height: 20px; top: 2px; margin-right: 2px;}
.navbar .brand {font-weight: 500; color: black; letter-spacing: -0.04em; word-spacing: -.02em; padding: 6px 20px 0;}
/*.navbar-fixed-top {margin: 0; opacity: .95; height: auto; overflow: visible;}*/
.navbar-fixed-top {opacity: .99;}

.navbar .strong,
.navbar .strong a {color: #F68B1F;}

.navbar li.pill.active a:hover,
.navbar li.pill.active a:focus,
.navbar li.pill.active a {background: none; box-shadow: none;}

.navbar li.pill > a {padding-bottom: 0px; padding-left: 5px; padding-right: 5px;}
.navbar .pill a span {background: #60CDF6; color: white; font-weight: 400; text-shadow: 0 1px 0 rgba(0,0,0,.2); padding: 3px 6px; top: -3px; margin-bottom: -3px; 
	border-radius: 3px; box-shadow: 0 3px 4px rgba(0,0,0,.1) inset;
	display: inline-block; zoom:1; *display: inline;
	-moz-transition: .2s all;
	-webkit-transition: .2s all;
	}

.navbar li.pill.large {
	font-size: 16px !important;
}

.navbar li.pill a:hover span,
.navbar li.pill a:focus span,
.navbar li.pill.active a span {background: #1F97D0; box-shadow: inherit;}

.navbar li.pill-discrete a span {background-color: #bbb;}
.navbar li.pill-discrete a:hover span,
.navbar li.pill-discrete a:focus span,
.navbar li.pill.active a span {background: #999; box-shadow: none;}

.navbar li.nav-active a span {background: #F6902A}

.nav .main {background: rgb(96, 205, 246); background: rgba(96, 205, 246, .3); font-weight: 400;}
.navbar .nav .main a {color: black;}
.navbar .divider-vertical-main {
	border-left-color: rgb(96, 205, 246); border-left-color: rgba(96, 205, 246, .1); 
	border-right-color: rgb(96, 205, 246); border-right-color: rgba(96, 205, 246, .5); 
}

.navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus {
    background-color: transparent;
    box-shadow: none;
    color: #000;
    text-decoration: none;
}

.dropdown-menu > li > a {font-weight: 100; padding-top: 5px; padding-bottom: 5px;}
.dropdown-menu .nav-header {padding-top: 10px;}

/* center the navbar */

.navbar-centered { text-align: center; max-width: 1200px; width: 100%;}
.navbar-centered .navbar-inner { width: auto; display: inline-block; margin: 0 auto;}

.ui-list {list-style: none; list-style-position: outside; }
.ui-list li {float: none; display: inline-block; padding: 0 .8em 0 0; line-height: 20px; white-space: nowrap; list-style: none; list-style-position: inside;}
.ui-list li  {zoom:1; *display: inline;}
.ui-list {clear: both;}

.ui-list.icons-left li:before {content: '';}

a.anchor {top: -50px;}

.no-margin {margin: 0;}

.client-pic {
	background: white;
	border-radius: 8px;
	overflow: hidden;
	box-shadow: 0 0 4px rgba(0, 0, 0, .2);
}

/***************************
 *
 * Typografi
 *
***************************/

body 		{font-family: 'ubuntu-1','ubuntu-2','ubuntu',arial,sans-serif; 
			font-weight: 100; padding: 0px; font-size: 14px;}
.serif 		{font-family: garamond; font-style: italic;}
.sans-serif {}
.mono		{}
.script		{font-family: 'learning-curve-1', 'learning-curve-2', script; font-weight: 400; font-style: normal;}
.entypo,
.icon,
.icons		{font-family: 'EntypoRegular', 'entypo';}

/* block elements */
div, address, blockquote, p, li, dd, dt, h1, h2, h3, h4, h5, h6 {line-height: 1.4; font-size: 14px;}
p {margin: 0 0 .5em;}
li, dd, dt {margin: 0 0 .6em 0;}
dl, ul, ol {margin: .5em 0;}

/* heading elements */
h1, h2, h3, h4, h5, h6 { margin:0; font-weight: 100; }
h2 {margin: 0; font-size: 32px;}
h3 {margin: .3em 0 0; font-size: 24px;}
h4 {margin: .8em 0 .2em; font-size: 19px;}
h5 {margin: .4em 0 .4em; font-weight: 500; font-size: 16px;}

/* inline elements */
.light {font-weight: 100;}
.strong, .bold,
strong 	{font-weight: 500;}
.italic,
em 		{font-style: italic;}
a 		{color: #F08700;}
a:hover {color: #F08700;}
a:active, 
a:focus {outline: none; color: inherit; text-decoration: none;}

.section-head {font-size: 56px; letter-spacing: -.01em; font-weight: 600; 
	margin: .4em 0 .1em; white-space: nowrap;
	text-shadow: 0 2px 3px rgba(0,0,0,.9) inset;}

	.section-head .script {line-height: .5; display: block; font-size: 62px; letter-spacing: .008em; text-indent: -0em;}

.border-dots {display: inline-block; padding-bottom: .2em; margin-bottom: 0.12em;
	background: url('./img/star.png') bottom left repeat-x;}

.ingress {font-size: 22px; color: #444;}
.ingress em {font-style: normal; color: black; font-weight: 300; color: #663300;}
.important *,
.important {font-size: 18px; font-weight: 300;}
.discrete {font-size: 13px; color: #666;}

.price {font-weight: 900; font-size: 16px; color: #444;}

.font-white,
.white {color: white;}

.font-orange {color: #F68B1F !important}

.large {font-size: 2.2em;}

.push {background: #79ccf3; color: white; display: inline-block; padding: 0 16px;}
.push:before {
   content:'';
   position:absolute;
   top:0;
   right:0;
   border-width:0 8px 8px 0;
   border-style:solid;
   border-color:#1f97d0 #fff;
}
.push  {zoom:1; *display: inline;}

a.push {background: #F08700;}
a.push:before {
   border-color:#cb7403 #fff;
}
a.push:hover {color: #fff;}

.address {margin: 1em .5em 0;}

.list-item { -moz-transition: 0.2s all; -webkit-transition: 0.2s all;}
.list-item:hover {
	
}

.label {display: block; text-align: center; background: #ccc; font-size: 16px; padding: .5em .5em; text-shadow: 0 1px 0 rgba(0, 0, 0, .3); margin: 0;
	font-weight: 400; font-size: 14px; white-space: normal; line-height: 1.2;}

.info-label {
	color: white; font-size: 14px; font-weight: 600; text-align: center; letter-spacing: .03em;
	padding: 3px; background: #ccc; display: inline-block; font-style: italic; text-shadow: 0 1px 0 rgba(0,0,0,.1);
	position: absolute; z-index: 1; zoom:1; *display: inline; box-shadow: 0 2px 3px rgba(0,0,0,.3);
	
	background: rgb(60,149,180); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(60,149,180,1) 0%, rgba(144,209,228,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(60,149,180,1)), color-stop(100%,rgba(144,209,228,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(60,149,180,1) 0%,rgba(144,209,228,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(60,149,180,1) 0%,rgba(144,209,228,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(60,149,180,1) 0%,rgba(144,209,228,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(60,149,180,1) 0%,rgba(144,209,228,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3c95b4', endColorstr='#90d1e4',GradientType=0 ); /* IE6-9 */
}

.star-label {
	color: white; font-size: 14px; font-weight: 600; text-align: center; letter-spacing: .03em;
	padding: 3px; background: #ccc; display: inline-block; font-style: italic; text-shadow: 0 1px 0 rgba(0,0,0,.1);
	position: absolute; z-index: 1; zoom:1; *display: inline; box-shadow: 0 2px 3px rgba(0,0,0,.3);
	
	background: rgb(245,158,56); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(245,158,56,1) 0%, rgba(245,158,56,1) 28%, rgba(216,118,19,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(245,158,56,1)), color-stop(28%,rgba(245,158,56,1)), color-stop(100%,rgba(216,118,19,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(245,158,56,1) 0%,rgba(245,158,56,1) 28%,rgba(216,118,19,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(245,158,56,1) 0%,rgba(245,158,56,1) 28%,rgba(216,118,19,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(245,158,56,1) 0%,rgba(245,158,56,1) 28%,rgba(216,118,19,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(245,158,56,1) 0%,rgba(245,158,56,1) 28%,rgba(216,118,19,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f59e38', endColorstr='#d87613',GradientType=0 ); /* IE6-9 */
	}
	
	.info-label .inner,
	.star-label .inner {border: 1px dashed white; display: block; padding: 0 16px 2px; line-height: 50px;}
	.star-label .inner {background: url('./img/star-label.png') center center no-repeat;}
	.star-label:active,
	.star-label:focus,
	.star-label:hover {color: white; text-decoration: none; box-shadow: 0 0 10px rgba(0,0,0,.3); cursor: pointer;}
	
	.info-label .inner {line-height: 30px; padding-top: 2px;}
	

	
.center h4.label {margin-left: 1em; margin-right: 1em;}

.orange .label {
	background: rgb(235,124,12); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(235,124,12,1) 0%, rgba(251,144,36,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(235,124,12,1)), color-stop(100%,rgba(251,144,36,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(235,124,12,1) 0%,rgba(251,144,36,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(235,124,12,1) 0%,rgba(251,144,36,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(235,124,12,1) 0%,rgba(251,144,36,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(235,124,12,1) 0%,rgba(251,144,36,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eb7c0c', endColorstr='#fb9024',GradientType=0 ); /* IE6-9 */
	}
	.orange .label:after {
		content: ' '; 
		background: url('./img/label-orange-arrow.png');
		height: 7px; width: 7px; position: absolute; bottom: -7px;
	}
	
.blue .label {
	background: rgb(14,179,218); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(14,179,218,1) 0%, rgba(108,206,229,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(14,179,218,1)), color-stop(100%,rgba(108,206,229,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(14,179,218,1) 0%,rgba(108,206,229,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(14,179,218,1) 0%,rgba(108,206,229,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(14,179,218,1) 0%,rgba(108,206,229,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(14,179,218,1) 0%,rgba(108,206,229,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0eb3da', endColorstr='#6ccee5',GradientType=0 ); /* IE6-9 */
	}
	.blue .label:after {
		content: ' '; 
		background: url('./img/label-blue-arrow.png');
		height: 7px; width: 7px; position: absolute; bottom: -7px;
	}

.align-center, .center,
.section-head, .ingress {text-align: center; margin-left: auto; margin-right: auto;}
.right, .align-right {text-align: right;}
.left, .align-left {text-align: left;}

ul.ui-icon-list {list-style: none; padding: 0;}
ul.ui-icon-list li {padding-left: 20px;}

em.note { display: block;
	color: #F18800; color: black; font-size: 180%;}

a.more {display: inline-block; color: white; background: #000; margin: 0 0 1px;
	padding: .1em .5em; border-radius: 3px; font-size: 90%; text-shadow: 0 1px 0 rgba(0,0,0,.5); border-top: 1px solid black; border-bottom: 1px solid #383838;
}
a.more {zoom:1; *display: inline;}

a.more:before {content: '» ';}
a.more:hover {
	text-decoration: none;
	background: rgb(3,3,3); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(3,3,3,1) 0%, rgba(78,78,78,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(3,3,3,1)), color-stop(100%,rgba(78,78,78,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#030303', endColorstr='#4e4e4e',GradientType=0 ); /* IE6-9 */
}
a.more {
	text-decoration: none;
	background: rgb(78,78,78); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(78,78,78,1) 0%, rgba(3,3,3,1) 99%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(78,78,78,1)), color-stop(99%,rgba(3,3,3,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4e4e4e', endColorstr='#030303',GradientType=0 ); /* IE6-9 */
}


a.portal {background: #06C; color: white; font-weight: bold; 
	padding: 1px 10px; border-radius: 3px; display: block; max-width: 250px; min-width: 100px;
	margin: 0 auto; width: auto; text-align: center;}

hr {
	
	border: none; height: 2px; width: 95%; margin: 30px auto;

	background: -moz-linear-gradient(left,  rgba(255,255,255,0) 0%, rgba(255,255,255,1) 20%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 80%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(20%,rgba(255,255,255,1)), color-stop(50%,rgba(255,255,255,1)), color-stop(80%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 20%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 80%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 20%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 80%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 20%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 80%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(255,255,255,0) 0%,rgba(255,255,255,1) 20%,rgba(255,255,255,1) 50%,rgba(255,255,255,1) 80%,rgba(255,255,255,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 */
}
hr:before {
	
	content: ''; text-indent: -999em; overflow: hidden;
	width: 95%; margin: 0 auto; display: block;
	margin-top: 2px; height: 1px;
	opacity: .3;
	
	background: -moz-linear-gradient(left,  rgba(0,0,0,0) 0%, rgba(0,0,0,1) 20%, rgba(0,0,0,1) 50%, rgba(0,0,0,1) 80%, rgba(0,0,0,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0)), color-stop(20%,rgba(0,0,0,1)), color-stop(50%,rgba(0,0,0,1)), color-stop(80%,rgba(0,0,0,1)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 20%,rgba(0,0,0,1) 50%,rgba(0,0,0,1) 80%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 20%,rgba(0,0,0,1) 50%,rgba(0,0,0,1) 80%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 20%,rgba(0,0,0,1) 50%,rgba(0,0,0,1) 80%,rgba(0,0,0,0) 100%); /* IE10+ */
	background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 20%,rgba(0,0,0,1) 50%,rgba(0,0,0,1) 80%,rgba(0,0,0,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */

}

.before-hr {margin-top: -31px;}

.flagga {
	letter-spacing: .03em;
	display: inline-block; padding: .3em .6em .5em; line-height: 1.3;
	box-shadow: 0 5px 5p rbga(0,0,0,.5);
}

.flagga {
	color: white; font-size: 110%; text-shadow: 0 1px 0 rgba(0,0,0,.3); background: #80cbf3; 	display: inline-block; text-align: center;
	height: 51px; border: 1px solid #80cbf3; box-shadow: 0 2px 10px rgba(0, 0, 0, .1);
}

.flagga {
	zoom:1; *display: inline;
}
	

.tip-a-friend {
	width: 117px;
	height: 101px;
	position: absolute;
	top: 347px;
	left: 433px;
	background: url('./img/tip-a-friend.png');
	background-position: 0 0;
	cursor: pointer;
	z-index: 10;
}
.tip-a-friend:hover {
	background-position: 0 101px;
}

/***************************
 *
 * Sprites
 * ------------------------
 * Ikoner med mera 
 *
***************************/

.icons-textwrapper .icons,
.icons-textwrapper {line-height: 66px; vertical-align: middle; display:inline-block; padding-right: 1.5em;}
.icons-textwrapper {zoom:1; *display: inline;}
.icons {font-size: 200%; font-style: normal; line-height: 0; top: 2px;}
	.icons-textwrapper .icons {font-size: 600%; padding: 0; top: -1px;}
	.icons-large {font-size: 1100%; line-height: .5;}
	h3 .icons {font-size: 200%; top: 4px;}
.icons:hover {}

.icons-space-right {padding-right: .7em;}

.sprite-entypo {width: 66px; height: 66px; display: inline-block; }
.sprite-entypo {zoom:1; *display: inline;}
.sprite-entypo-textwrapper {line-height: 66px; vertical-align: middle; display:inline-block; padding-right: 1.0em;}
.sprite-entypo-textwrapper {zoom:1; *display: inline;}
.sprite-entypo-textwrapper .sprite-entypo {float: left; display: inline;}



/* background-position: LEFT TOP; */

.sprite {background-image: url('./img/css-sprite.png'); background-repeat: no-repeat; display: inline-block;}
.sprite {zoom:1; *display: inline;}


.sprite-branding {background-position: -534px -89px;}

.sprite-basic-big {background-position: 0 0; width: 109px; height: 109px;}
.sprite-standard-big {background-position: -112px 0 ; width: 109px; height: 109px;}
.sprite-medium-big {background-position: -226px 0; width: 109px; height: 109px;}
.sprite-large-big {background-position: -340px 0; width: 109px; height: 109px;}

.sprite-design 	{background-position: -66px -151px;}
.sprite-hosting {background-position: -132px -151px;}
.sprite-cms 	{background-position: -198px -151px;}
.sprite-support {background-position: -264px -151px;}
.sprite-email 	{background-position: -330px -151px;}

.sprite-small-arrow {background-position: 0 -217px;}

.sprite-logotyp 		{background-position: 0 -241px; height: 217px; width: 178px;}
.sprite-visitkort 		{background-position: -751px -241px; height: 217px; width: 215px;}
.sprite-reklamblad 		{background-position: -995px -241px; height: 217px; width: 200px;} /* obs! ikon saknas */
.sprite-broschyr 		{background-position: -363px -241px; height: 217px; width: 200px;}
.sprite-layout	 		{background-position: -190px -241px; height: 217px; width: 180px;}
.sprite-annons	 		{background-position: -570px -241px; height: 217px; width: 180px;}

.sprite-ribbon-basic,
.sprite-ribbon-Basic 	{ background-position: 0 -464px; }
.sprite-ribbon-standard,
.sprite-ribbon-Standard { background-position: -71px -464px; }
.sprite-ribbon-medium,
.sprite-ribbon-Medium 	{ background-position: -142px -464px; }
.sprite-ribbon-large,
.sprite-ribbon-Large 	{ background-position: -213px -464px; }

.content-shadow {background-position: center -122px; width: auto; height: 30px; display: block; }

ul.ui-icon-list li:before {content: ''; display: inline-block; position: absolute; left: 0; margin-top: 3px; 
	background-image: url('./img/css-sprite.png'); 
	width: 16px; height: 16px; background-position:  0 -217px; }


.icons-pull-left {margin-left: -15px;}

/***************************
 *
 * Diverse objekt
 * ------------------------
 * Typ paket boxar 
 *
***************************/

.gradient-wrapper {
	/* padding: 1.0em .5em; */
		
	
}

.gradient-wrapper:hover {
	/* background: -moz-linear-gradient(top,  rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.9) 40%); /* FF3.6+ */
	/*background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.2)), color-stop(40%,rgba(255,255,255,0.9))); /* Chrome,Safari4+ */
	/*background: -webkit-linear-gradient(top,  rgba(255,255,255,0.2) 0%,rgba(255,255,255,0.9) 40%); /* Chrome10+,Safari5.1+ */
	/*background: -o-linear-gradient(top,  rgba(255,255,255,0.2) 0%,rgba(255,255,255,0.9) 40%); /* Opera 11.10+ */
	/*background: -ms-linear-gradient(top,  rgba(255,255,255,0.2) 0%,rgba(255,255,255,0.9) 40%); /* IE10+ */
	/*background: linear-gradient(to bottom,  rgba(255,255,255,0.2) 0%,rgba(255,255,255,0.9) 40%); /* W3C */
	/*filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#33ffffff', endColorstr='#e6ffffff',GradientType=0 ); /* IE6-9 */
}


.contact-footer-inner {
	background: rgb(249, 249, 249);
	background: rgba(249, 249, 249, .9);
	padding: 1em 3em 0em 1em;
	margin: 1.5em 0 2em 0; 
	box-shadow: 0 3px 6px rgba(0,0,0,.2);
	border-radius: 6px;
	color: #333;
	border-top: 1px solid white; 
	}
	.contact-footer-inner select,
	.contact-footer-inner textarea,
	.contact-footer-inner input {
		border: none;
		width: 90%;
		border: 1px solid #ccc;
	}
	.contact-footer-inner textarea {
		height: 6em;
	}
	.contact-footer-inner .corner {width: 59px; height: 59px; position: absolute; top: -12px; right: -12px; background: url('./img/contact-footer-corner.png');}

.highlight { display: inline-block; padding: 2px 6px; border-radius: 4px; background: rgb(215, 215, 215); color: white;}
.hightlight {zoom:1; *display: inline;}
.highlight.basic { background: rgb(10,163,224); }
.highlight.standard { background: rgb(144,162,2); }
.highlight.medium { background: rgb(232,144,0); }
.highlight.large { background: rgb(217,107,196); }

.border-box {
	background: #fff;
	border: 2px solid #eee;
	padding: 0em 2em 2em;
	box-shadow: 0 5px 5px rgba(0, 0, 0, .1);
}

.infobox {
	padding-top: 2em;
	margin-right: 1em;
	}
	.infobox .lines {
		height: 2px; 
		background: white;
		border-bottom: 2px solid #79CCF3;
		border-top: 2px solid #F08700;
	}
.portrait-info {
	background: #fff; 
	background: rgba(255, 255, 255, .8);
	padding: 5px 10px 20px 10px;
	border-left: 1px solid #eee;
	border-top: 1px solid #eee;
	border-right: 1px solid #eee;
	border-radius: 6px 6px 0 0;
	font-size: .8em;
	}
	.portrait-info p {
		
	}
	.portrait-info .big {
		font-size: 16px;
	}
	.portrait-info h4 {
		font-size: 16px; font-weight: 300;
		margin: 5px 0 10px 0;
		padding: 0 0 5px;
		border-bottom: 1px solid #ddd;
	}
	.portrait-info h5 {
		font-size: 32px; font-weight: 400;
		line-height: 1;
		padding: .5em 0 0;
		margin: 20px 0 0 0;
	}
	.portrait-info h5 small {
		font-size: 14px; display: block;
		font-weight: 300; color: #000;
	}
	.portrait-info div {
		padding: 0; margin: 0;
		font-size: 13px;
		line-height: 1.5;
	}
	form.quick-contact {
		display: inline;
	}
	form.quick-contact input {
		background: none; border: none;
		padding: 0; margin: 0; width: 80%;
		box-shadow: none; font-weight: 300; font-size: 13px;
		letter-spacing: 0.03em; border-bottom: 1px dotted #ddd;
		position: relative; top: -2px; border-radius: 0;
	}
	form.quick-contact input:focus {
		box-shadow: none;
	}
	form.quick-contact .quick-input {
	}
	form.quick-contact input.quick-submit {
		background: #eee; border: 1px solid #ddd;
		padding: 0 4px; border-radius: 4px; width: auto;

	}
	img.portrait {
		max-height: 350px;
	}

.text-shadow {
	text-shadow: 1px 1px 2px rgba(0, 0, 0, .3) !important;
}

.star {
	position: absolute;
	top: -90px;
	left: -160px;
	width: 200px;
	height: 200px;
	z-index: 2;
}

.linethrough {
	background: url('./img/linethrough.png') repeat-x;
}

.sign {
	background: url('./img/sign.png') no-repeat top left;
	min-width: 529px;
	height: 488px;
}
.sign-pad {
	padding: 120px 0 0 40px;
}
.faded {
	color: #686868;
}

/***************************
 *
 * Specifika Sektioner
 *
***************************/

.page_bestall 				{display: none;}
.page_kampanj 				{}

.page_skapareferens,
.page_referenser			{background: #f9f9f9;}
.page_komigang,
.page_webb_referenser		{background: url('./img/backgrounds/glowy2.jpg');}

.page_paket_start 			{background: #633927 url('./img/wood.jpg') 0 0; min-height: 800px;}


.page_historik 				{background: url('./img/backgrounds/light_wool.png');}

.page_sa-gar-det-till		{background: url('./img/backgrounds/dots.png') #f8f8fa;}
.page_Tryck 				{background: url('./img/backgrounds/dots.png') #f8f8fa;}


.page_intro 				{background: url('./img/backgrounds/grus.png');}
.page_kampanj 				{background: url('./img/backgrounds/wild_oliva.png');}


.page_kontakt 				{background: url('./img/backgrounds/wild_oliva.png');}


.page_start 				{background: url('./img/gradient-black.png') top center repeat-x; background-color: white;}

.page_produkter,
.page_tjanster				{background: url('./img/backgrounds/diagonal.png') #fff;}
.page_paket 				{background: url('./img/backgrounds/diagonal_fabric.png');}


.page_grupp 				{background: url('./img/backgrounds/square.png');}

.page_kundcitat,
.page_slideshow,
.page_slideshow_paket 		{background: url('./img/backgrounds/grus.png'); padding-bottom: 0;}

.page_webb 					{background: url('./img/backgrounds/diagonal.png') #fff;}

.page_almanackan 			{background: url('./img/backgrounds/diagonal.png') #fff;}

.page_slideshow { padding-bottom: 0px; padding-top: 0px; min-height: 0; }

.paket {padding: 20px 0;}
.paket .price {margin-top: 10px;}
.push-right,
.paket .push-right {padding-left: 2em;}

.page_top {background: url('./img/backgrounds/square.png')}

.page_top .ka-badge {position: absolute; right: -10px; top: -60px; z-index: 10;}

/***************************
 *
 * Referenser
 * ------------------------
 * Skärmen, med liten dump
 
	 ------
	 <HTML>
	 ------
	 
	 <ol class='referenser'>
		<li>
			<div class='ref-image'>
				 <a class='the-image' href='http://www.kawebb.se/referens/synphora-ab/'><span class='overlay'><!-- screen glow --></span>
	 <img alt='http://www.kawebb.se/wp-content/uploads/2013/02/synphora-300x210.jpg' title='http://www.kawebb.se/wp-content/uploads/2013/02/synphora-300x210.jpg' class='attachment-full' src='http://www.kawebb.se/wp-content/uploads/2013/02/synphora-300x210.jpg'>
			 </a>
			</div>
		  <span class='pricetag'>9500:-</span>
			<p>
				<strong><a href='http://www.kawebb.se/referens/synphora-ab/'>Synphora AB</a></strong><br>
			   <!--<a href='http://www.kawebb.se/produkter/hemsida-standard/'>Hemsida Standard</a><br />--><a target='_blank' href='http://www.synphora.com' title='http://www.synphora.com'>http://www.synphora.com</a></p>
		</li>
	</ol>

 *
***************************/

a.white:hover {
	color: white !important;
}

.billig-mall-wrap {
	float: left;
	margin: 0 10px 0 0;
}

.billig-mall {
	background: rgba(0, 0, 0, .3);
	padding: 6px;
	border-radius: 5px;
	-moz-transition: .35s all;
	-webkit-transition: .35s all;
}
.billig-mall:hover {
	background: rgba(0, 0, 0, .7);
}

.mobile-campaign {
	height: 93px;
	background: url('./img/mobile-campaign.png') top center no-repeat;
	top: -10px;
	margin: 0 0 -30px 0;
	cursor: pointer;
}
.m-c-active {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 93px;
	background: url('./img/mobile-campaign-active.png') top center no-repeat;
	z-index: 11;
	display: none;
}
.mobile-campaign h2 {
    color: white;
    font-size: 52px;
    margin: 0;
    text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.3);
}
.mobile-campaign p {
	font-size: 16px;
	color: #373a21;
	padding: 15px 0 0 0;
}

.mobile-campaign-drop {
	position: absolute;
	background: url('./img/mobile-campaign-pattern.png') repeat;
	top: 74px;
	left: 42px;
	width: 1090px;
	padding: 0 0 20px 0;
	z-index: 10;
	display: none;
	color: #373a21;
	border-top: 1px solid #d1e933;
	border-bottom: 1px solid #d1e933;
	box-shadow: 3px 3px 4px rgba(0, 0, 0, .1);
	cursor: default;
}
.mobile-campaign-drop h4 {
	margin-left: 50px;
	margin-top: 40px;
}
.mobile-campaign-drop em {
	margin-left: 50px;

}

form.campaign label {
	color: white;
}

input.large {
	background: white;
	border-radius: 10px;
	padding: 8px;
	border: none;
	box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
	color: #333 !important;
}

form.campaign input[type='text'] {
	background: #fff;
	border: none;
	outline: none;
	box-shadow: 0px 2px 1px rgba(0, 0, 0, .3);
	color: #333;
	border-radius: 4px;
	padding: 8px 10px !important;
	font-size: 14px;
	font-weight: 700;
}
input.btn-large {
	background: #E1831F;
	border-radius: 4px;
	color: #FFF;
	border: none;
	outline: none;
	box-shadow: 2px 2px 2px rgba(0, 0, 0, .1);
	padding: 0 20px 0 20px;
	font-size: 40px;
	-moz-transition: 0.15s all;
	-webkit-transition: 0.15s all;
	text-shadow: 1px 1px 0px rgba(0, 0, 0, .4);
	text-align: center;
}
input.btn-large:hover,
input.btn-large:focus {
	background: #8d9c14;
	color: white;
}

input.btn-large.alt {
	background: #8d9c14;
	box-shadow: 1px 1px 3px rgba(0, 0, 0, .4);
}
input.btn-large.alt:hover {
	background: #333;
}

ol.referenser {margin-top: -20px;}
ol.referenser li {
    display: inline;
    float: left;
    min-height: auto;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 360px;
}
.ref-image {
    background: url('./img/blank-screen.png') no-repeat scroll center top transparent;
    height: 310px;
    padding-top: 25px;
}
.ref-image .the-image {
    background: none repeat scroll 0 0 black;
    display: block;
    height: 205px;
    margin: 0 35px;
    overflow: hidden;
    width: 292px;
}
ol.referenser .ref-image a, ol.referenser .image a {
    display: block;
}
ol.referenser a {
	color: #000;
}
.ref-image .overlay {
    background: url('./img/blank-screen-overlay.png') no-repeat scroll right top transparent;
    height: 205px;
    position: absolute;
    right: 0;
    top: 0;
    width: 292px;
    z-index: 10;
}
ol.referenser .pricetag {
    position: absolute;
    right: 30px;
    top: 210px;
    z-index: 20;
}
.pricetag {
    background: none repeat scroll 0 0 #A9C811;
    border-radius: 4px 4px 4px 4px;
    color: white;
    display: inline-block;
    font-size: 1.15em;
    font-weight: 900;
    letter-spacing: 0.05em;
    padding: 1px 6px 1px 10px;
    text-shadow: 0 1px 0 #000;
}
.pricetag {zoom:1; *display: inline;}

#filter-source { margin: 0 0 10px 0; }

.web-ref {float: left; width: 300px; max-width: 95%; margin: 10px 40px 30px 40px; padding :0;}
.web-ref .the-image {overflow: hidden; height: 210px;}
.refbild { box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; -moz-transition: 0.15s all; -webkit-transition: 0.15s all; overflow: hidden; height: 200px; border: 1px solid #999;}

.refbild:hover { box-shadow: 0 0 20px rgb(255, 255, 255); }

.web-ref .text-container {padding: 0 10px;}
.web-ref .text-container p {margin: 0;}

.ref-details { height: 300px; background: #eee;}
.ref-ribbon { z-index: 100; position: absolute; top: -5px; right: -6px; width: 71px; height: 71px; }

.manual-control-group { font-size: 0; height: 48px; }

.manual-control-group a {
	font-size: 16px;
	-moz-transition: 0.15s all;
	-webkit-transition: 0.15s all;
	box-shadow: none;
	display: inline-block;
	padding: 10px;
	margin: 4px 0;
	color: #fff;
	text-decoration: none;
	margin: 0;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
	text-decoration: none;
	background: rgb(78,78,78); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(78,78,78,1) 0%, rgba(3,3,3,1) 99%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(78,78,78,1)), color-stop(99%,rgba(3,3,3,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(78,78,78,1) 0%,rgba(3,3,3,1) 99%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4e4e4e', endColorstr='#030303',GradientType=0 ); /* IE6-9 */
}

.manual-control-group a:hover {
	color: white;
	text-decoration: none;
	background: rgb(3,3,3); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(3,3,3,1) 0%, rgba(78,78,78,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(3,3,3,1)), color-stop(100%,rgba(78,78,78,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(3,3,3,1) 0%,rgba(78,78,78,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#030303', endColorstr='#4e4e4e',GradientType=0 ); /* IE6-9 */
}

.manual-control-group a.flex-active,
.manual-control-group a.active,
.manual-control-group a:active {
	color: white;
	margin: 0;
	background: #4096ee;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQwOTZlZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjU2JSIgc3RvcC1jb2xvcj0iIzYwYWJmOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3YWJjZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  #4096ee 0%, #60abf8 56%, #7abcff 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4096ee), color-stop(56%,#60abf8), color-stop(100%,#7abcff));
	background: -webkit-linear-gradient(top,  #4096ee 0%,#60abf8 56%,#7abcff 100%);
	background: -o-linear-gradient(top,  #4096ee 0%,#60abf8 56%,#7abcff 100%);
	background: -ms-linear-gradient(top,  #4096ee 0%,#60abf8 56%,#7abcff 100%);
	background: linear-gradient(to bottom,  #4096ee 0%,#60abf8 56%,#7abcff 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4096ee', endColorstr='#7abcff',GradientType=0 );
	
	box-shadow: 0px 1px 0px rgba(0,0,0,.2) inset, 
		1px 0px 0px rgba(255,255,255,.2) inset, 
		-1px 0px 0px rgba(0,0,0,.2) inset;
}

.manual-control-group a.flex-active {
	box-shadow: 2px 2px 3px rgba(0,0,0,.2) inset;
}

.manual-control-group a:first-child {
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
}
.manual-control-group a:last-child {
	border-top-right-radius: 5px;
	border-bottom-right-radius: 5px;
}

/* order-table */
.orderTable {border-collapse: separate; border-top: 2px solid black;}
.orderTable .center {text-align: center;}
.orderTable .right {text-align: right;}
.orderTable .block {display: block;}
.orderTable td, 
.orderTable th {border-bottom: 1px solid #eee; padding: 7px 5px 7px 5px; font-size: 90%;}
.orderTable th {border-bottom: none;}
.orderTable select, 
.orderTable input,
.orderTable textarea,
.orderTable option {font-size: 13px;}
.orderTable small {font-size: 70%; color: #999;}
.orderTable input {margin: -2px 5px 0 0; position: relative;}
.orderTable tr.smaller td {border:none; padding-top: 2px; padding-bottom: 2px;}
.orderTable tr td:hover {}
.orderTable tbody tr:nth-child(even) {background: #F0F8FB}
.orderTable thead tr {background: #fff}
.orderTable thead tr.last td {border-bottom: 2px solid black; padding-bottom: 14px;}
.orderTable tbody tr.first td {padding-top: 14px;}
col.active td {background-color: red;}
.orderTable th.active,
.orderTable td.active {background: gold; padding-left: 15px; padding-right: 15px; font-size: 120%;}

/* personliga kontaktformuläret */

.footer-info-container {min-height: 400px;}
.footer-info {position: absolute; bottom: 0; left: auto; height: 100%; width: 100%; z-index: 10;}
.footer-info blockquote {background: #60cdf6; color: white; border: none; font-weight: normal; position: absolute; top: 1em; right: 0; margin-left: 35%; color: white; padding: 10px;
	box-shadow: 1px 1px 0 1px #59aece; border-radius: 3px;}
	.footer-info blockquote p {font-size: 13px;}
	.footer-info .image {position: absolute; bottom: 0; left: 0;}
/***************************
 *
 * Plugins
 *
***************************/

.slide-container {padding-bottom: 0px; min-height: 200px; height: auto !important; height: 200px;}

 .flexslider {background: none; border: none;}
 .flex-control-nav li a {background: #ccc; border-radius: 6px; width: 8px; height: 8px;}
 .flex-control-nav li a:hover {background: #aaa;}
 .flex-control-nav li a.flex-active {background: orange;}
 .flex-direction-nav {top: 25%; position: absolute; width: 100%;}
 
 .flex-direction-nav a.flex-prev {background: url('./img/css-sprite.png') -12px -553px;  width: 30px; height: 133px; left: -40px;  top: 0px; }
 .flex-direction-nav a.flex-next {background: url('./img/css-sprite.png') -165px -553px; width: 30px; height: 133px; right: -40px; top: 0px; }


 .manual-controls a {display: inline-block; padding: .5em 1em; font-size: 110%; border: none; box-shadow: 0 2px 4px rgba(0,0,0,.2) inset;}
 .manual-controls a.flex-active {text-decoration: none;}
 .manual-controls a:before {content: '';}

.masonry {margin: 0 auto; max-width: }
.masonry .item {
  	margin: 10px;
  	float: left;
  	display: inline;
  	width: auto;
  	background: rgb(240, 135, 0);
	z-index: 1;
	cursor: pointer;
 }
.ref-pic {display: block; padding: 0; border-bottom: 1px solid #ddd; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1)}
.item-info {display: none; color: white; z-index: 3; position: absolute; width: 100%; height: 100%; top: 0; left: 0; background: rgba(240, 135, 0, 0.8); text-align: center;}
.item-info img {position: absolute; top: 50%; left: 50%; width: 64px; height: 64px; margin-top: -32px; margin-left: -32px;}

.masonry .active {z-index: 2;}

.info-how-to-scroll.affix { visibility: visible; }
.info-how-to-scroll {
	margin-top: 100px; 
	position: fixed; z-index: 100; visibility: hidden;
	width: 52px; height: 100px;
	background: url('./img/arrow-down.png') top left no-repeat;
	text-indent: -999em; overflow: hidden;
	right: 0; 
	}
	.info-how-to-scroll .loading {
		background: url('./img/ajax-loader.gif');
		margin: 42px auto 0; width: 16px; height: 11px;
	}

 /**************************
 *
 * TRUMP
 * -----------------------
 * Skriver över annat
 *
***************************/
 
body .modal {
    /* new custom width */
    width: 750px;
    /* must be half of the width, minus scrollbar on the left (30px) */
    margin-left: -375px;
}

.small { font-size: 13px !important; }

.affix {top: 0px;}
.affix, .affix-top, .affix-bottom {
	z-index: 10;
}
.navbar.affix {}

.tt,
.tt:hover { color: black; text-decoration: none; cursor: help;}

.top_of_the_page {font-size: 16px; padding: 10px 0 0; color: #ccc;}
.top_of_the_page .icons {text-shadow: 0 0 10px rgba(0,0,0,.1); color: white;}
.top_of_the_page:hover {text-decoration: none; color: #ddd;}

.no-bg { background: none !important;}

img.medarbetare {max-width: 200px;}

#contact-left { position: fixed; top: 200px; left: 0; overflow: hidden; z-index: 100; }
	#contact-left a { background: url('./img/contact_left.png') top left no-repeat; height: 135px; width: 31px; display: block; text-indent: -999em; }

#loading {position: absolute; bottom: 0px; color: #866; background: url('./img/ajax-loader.gif') center center no-repeat; left: 0; width: 100%; padding: 0px; text-align: right; font-weight: 400;}
#theEnd {
    bottom: 0px;
    color: black;
    font-size: 14px;
    margin-top: 0;
    padding-top: 10px;
    position: absolute;
    text-align: center;
    width: 100%;
}

.chat {
	position: fixed; background: #936;
	left: -3px; top: 60px;
	padding: 0 3px 0 6px;  
	border-radius: 3px;
	}
	.chat .icons { font-size: 250%; line-height: .6; }

.manual-control-group a.flex-active.Basic {
	background: rgb(10,163,224); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(10,163,224,1) 0%, rgba(122,201,232,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(10,163,224,1)), color-stop(100%,rgba(122,201,232,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(10,163,224,1) 0%,rgba(122,201,232,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(10,163,224,1) 0%,rgba(122,201,232,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(10,163,224,1) 0%,rgba(122,201,232,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(10,163,224,1) 0%,rgba(122,201,232,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0aa3e0', endColorstr='#7ac9e8',GradientType=0 ); /* IE6-9 */
}
.manual-control-group a.flex-active.Standard {
	background: rgb(144,162,2); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(144,162,2,1) 0%, rgba(172,194,0,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(144,162,2,1)), color-stop(100%,rgba(172,194,0,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(144,162,2,1) 0%,rgba(172,194,0,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(144,162,2,1) 0%,rgba(172,194,0,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(144,162,2,1) 0%,rgba(172,194,0,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(144,162,2,1) 0%,rgba(172,194,0,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#90a202', endColorstr='#acc200',GradientType=0 ); /* IE6-9 */
}
.manual-control-group a.flex-active.Medium {
	background: rgb(232,144,0); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(232,144,0,1) 0%, rgba(253,169,31,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(232,144,0,1)), color-stop(100%,rgba(253,169,31,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(232,144,0,1) 0%,rgba(253,169,31,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(232,144,0,1) 0%,rgba(253,169,31,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(232,144,0,1) 0%,rgba(253,169,31,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(232,144,0,1) 0%,rgba(253,169,31,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e89000', endColorstr='#fda91f',GradientType=0 ); /* IE6-9 */
}
.manual-control-group a.flex-active.Large {
	background: rgb(217,107,196); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(217,107,196,1) 0%, rgba(241,120,217,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(217,107,196,1)), color-stop(100%,rgba(241,120,217,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(217,107,196,1) 0%,rgba(241,120,217,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(217,107,196,1) 0%,rgba(241,120,217,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(217,107,196,1) 0%,rgba(241,120,217,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(217,107,196,1) 0%,rgba(241,120,217,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d96bc4', endColorstr='#f178d9',GradientType=0 ); /* IE6-9 */
}

/***************************
 *
 * Mobile
 *

	@media (min-width: 980px) {
	 	
		 
	}

 
***************************/

@media (max-device-width: 980px) {
  .wrapper {padding-left: 20px; padding-right: 20px;}
}";

# INPUT FILE CLEANUP
# ------------------------------

$x = 0;

while(strpos($css, "  ")>0) {
	$css = str_ireplace("  ", " ", $css);
	$x++;

	if($x>100000) die('too much recursion');
}

$css = trim(preg_replace('/\s+/', ' ', $css));
$css = trim(preg_replace('/\t+/', '', $css));

#	echo '<pre>' . $css . '</pre>'; exit;

# ------------------------------


# GLOBALS
# ------------------------------
$curPos			= 0;
$curChar 		= "";
$count 			= 0;
$arrColors 		= array();
$arrProperties 	= array();
$arrSelectors 	= array();
$insideSelector = true;
$hasSelector 	= false;
# ------------------------------

function lookAhead($length = null, $until = null, $inclusive = false) {
	global $css, $curPos, $curChar, $arrColors, $insideSelector;

	if($length and $inclusive) 	return substr($css, $curPos, $length+1);
	if($length and !$inclusive) return substr($css, $curPos+1, $length);
	if($until and $inclusive) 	return substr($css, $curPos, strpos($css, $until, $curPos - $curPos));
	if($until and !$inclusive) 	return substr($css, $curPos+1, strpos($css, $until, $curPos+1) - $curPos);
}

function stepTo($char) {
	global $css, $curPos, $curChar, $arrColors, $insideSelector;
	
	return strpos($css, $char, $curPos);
}


function getSelector() {
	global $css, $curPos, $curChar, $arrColors, $insideSelector;

	$pos 		= $curPos;
	$match 		= false;
	$matchPos 	= null;
	$property 	= null;

	while (!$match) {
		$pos--;
		$char = substr($css, $pos, 1);
		if($char=="}" or $pos==0) {
			$matchPos = ($pos==0) ? $pos : $pos + 1;
			$match = true;
		}
	}

	return trim(substr($css, $matchPos, strpos($css, "{", $matchPos)-$matchPos));
}

function getProperty() {
	global $css, $curPos, $curChar, $arrColors, $insideSelector;
	
	$pos 		= $curPos;
	$arrBreaks 	= array("{", ";");
	$match 		= false;
	$matchPos 	= null;
	$property 	= null;

	while (!$match) {
		$pos--;
		$char = substr($css, $pos, 1);
		if(in_array($char, $arrBreaks)) {
			$matchPos = $pos+1;
			$match = true;
		}
	}

	return trim(substr($css, $matchPos, strpos($css, ":", $matchPos)-$matchPos));

}

function parse($token) {
	global $css, $curPos, $curChar, $arrColors, $arrProperties, $arrSelectors, $insideSelector;

	switch($token) {
		
		
		# HEXADECIMALS
		#-----------------------------------------------------------
		case "hex" :

			$arrBreaks 			= array(";", " ", "!");
			$break 				= false;
			$hex 				= "";
			$chunk 				= "";
			$arrProperties[] 	= getProperty();
			$arrSelectors[] 	= getSelector();

			if(preg_match("/#[0-9A-f]{6}/", '#' . lookAhead(6))) {
				$arrColors[] = lookAhead(6, null, true);
			} else if(preg_match("/#[0-9A-f]{3}/", '#' . lookAhead(3))) {
				$arrColors[] = lookAhead(3, null, true);	
			}

			break;
		#-----------------------------------------------------------

		

		# RGB & RGBA
		#-----------------------------------------------------------
		case "rgb" :

			# RGBA mode, step ahead one character.
			if(strtolower(lookAhead(1))=="a") $curPos++;

			# Expecting parenthesis
			if(lookAhead(1)=="(") {
				
				# Fetch up until the next closing parenthesis.
				$rgb = lookAhead(null, ")", false);
				echo $rgb . ' // ';
				
				if(preg_match("/\([0-9]{1,3},[0-9]{1,3},[0-9]{1,3}(,[0-9\.]{1,5}){0,1}\)/", str_replace(" ", "", $rgb))) {

					# Lägg till i array osv här.

					# Stega fram tills efter deklarationen.
					$curPos = stepTo("(")+1;
				}

			} else {
				throw new Exception("Invalid rgb declaration at position $curPos.");
			}

			break;
		#-----------------------------------------------------------

		
		# COMMENTS, LET'S NOT PARSE THE FUCKERS.
		#-----------------------------------------------------------
		case "comment" :

			$curPos = stepTo("*/")+1;

			break;
		#-----------------------------------------------------------
	}



}

$delimiters = array(";", " ", ":", "(", ")", "{", "}");
$tokens = array(
	"hex" 		=> "#",
	"hsl"		=> "hsl",
	"rgb"		=> "rgb",
	"comment" 	=> "/*"
);

$currentToken = "";

while ($curPos<=strlen($css)) :
	$curChar = substr($css, $curPos, 1);
	
	// Reset current token if the current character exists in the delimiters array.
	if(in_array($curChar, $delimiters))
	{
		$currentToken = null;
	}

	else
	{
		$currentToken .= $curChar;
	}

	// Do we want to parse this token?
	if(in_array($currentToken, $tokens) and $insideSelector)
	{
		parse(array_search($currentToken, $tokens));
	}

	#if($curChar=="#" or $curChar==".") $hasSelector = true;

	if($curChar=="{") $insideSelector = true;
	
	if($curChar=="}") {
		$insideSelector = false;
		$hasSelector = false;
	}

	$count++;
	$curPos++;



	if($count>1000000) die('Too much recursion');

endwhile;

exit;

?>

<!DOCTYPE html>
<html dir="ltr" lang="sv-SE">
<head>
	
	<title>Coloursnitch</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8" />

	<style type="text/css">
			body {
				background: #f1f1f1;
			}
			.color {
				float: left;
				width: 170px;
				height: 170px;
				border-radius: 50%;
				border: 10px solid white;
				box-shadow: 1px 1px 2px rgba(0, 0, 0, .2);
				margin: 20px;
				text-align: center;
				color: white;
				text-shadow: 1px 1px 1px rgba(0, 0, 0, .4);
				line-height: 170px;
				font-size: 16px;
				font-family: Helvetica;
			}
	</style>
</head>

<body>
<?
/*echo '<pre>';
print_r($arrColors);

print_r($arrSelectors);
*/

#$arrColors = array_unique($arrColors);
#asort($arrColors);

?>

<?foreach($arrColors as $color) { ?>

	<div class="color" style="background: <?=$color?>">
		<?=$color?>
	</div>
	
<?}?>

</body>
</html>



















