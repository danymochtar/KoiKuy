<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Apa yang anda mau pilih?</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-768.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script><![endif]-->
            
            <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
    html {
	font-family:sans-serif;
	-webkit-text-size-adjust:100%;
	-ms-text-size-adjust:100%
}
body {
	margin:0
}
[hidden],template {
	display:none
}
a {
	background-color:transparent
}
a:active,a:hover {
	outline:0
}
abbr[title] {
	border-bottom:1px dotted
}
b,strong {
	font-weight:bold
}
dfn {
	font-style:italic
}
h1 {
	margin:.67em 0;
	font-size:2em
}
mark {
	color:#000;
	background:#ff0
}
small {
	font-size:80%
}
sub,sup {
	position:relative;
	font-size:75%;
	line-height:0;
	vertical-align:baseline
}
sup {
	top:-.5em
}
sub {
	bottom:-.25em
}
img {
	border:0
}
svg:not(:root) {
	overflow:hidden
}
figure {
	margin:1em 40px
}
hr {
	height:0;
	-webkit-box-sizing:content-box;
	-moz-box-sizing:content-box;
	box-sizing:content-box
}
pre {
	overflow:auto
}
code,kbd,pre,samp {
	font-family:monospace, monospace;
	font-size:1em
}
button,input,optgroup,select,textarea {
	margin:0;
	font:inherit;
	color:inherit
}
button {
	overflow:visible
}
button,select {
	text-transform:none
}
button,html input[type="button"],input[type="reset"],input[type="submit"] {
	-webkit-appearance:button;
	cursor:pointer
}
button[disabled],html input[disabled] {
	cursor:default
}
button::-moz-focus-inner,input::-moz-focus-inner {
	padding:0;
	border:0
}
input {
	line-height:normal
}
td,th {
	padding:0
}

@font-face {
	font-family:'Glyphicons Halflings';
	src:url('../fonts/glyphicons-halflings-regular.eot');
	src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')
}
.glyphicon {
	position:relative;
	top:1px;
	display:inline-block;
	font-family:'Glyphicons Halflings';
	font-style:normal;
	font-weight:normal;
	line-height:1;
	-webkit-font-smoothing:antialiased;
	-moz-osx-font-smoothing:grayscale
}
.glyphicon-asterisk:before {
	content:"\2a"
}
.glyphicon-plus:before {
	content:"\2b"
}
.glyphicon-euro:before,.glyphicon-eur:before {
	content:"\20ac"
}
.glyphicon-minus:before {
	content:"\2212"
}
.glyphicon-cloud:before {
	content:"\2601"
}
.glyphicon-envelope:before {
	content:"\2709"
}
.glyphicon-pencil:before {
	content:"\270f"
}
.glyphicon-glass:before {
	content:"\e001"
}
.glyphicon-music:before {
	content:"\e002"
}
.glyphicon-search:before {
	content:"\e003"
}
.glyphicon-heart:before {
	content:"\e005"
}
.glyphicon-star:before {
	content:"\e006"
}
.glyphicon-star-empty:before {
	content:"\e007"
}
.glyphicon-user:before {
	content:"\e008"
}
.glyphicon-film:before {
	content:"\e009"
}
.glyphicon-th-large:before {
	content:"\e010"
}
.glyphicon-th:before {
	content:"\e011"
}
.glyphicon-th-list:before {
	content:"\e012"
}
.glyphicon-ok:before {
	content:"\e013"
}
.glyphicon-remove:before {
	content:"\e014"
}
.glyphicon-zoom-in:before {
	content:"\e015"
}
.glyphicon-zoom-out:before {
	content:"\e016"
}
.glyphicon-off:before {
	content:"\e017"
}
.glyphicon-signal:before {
	content:"\e018"
}
.glyphicon-cog:before {
	content:"\e019"
}
.glyphicon-trash:before {
	content:"\e020"
}
.glyphicon-home:before {
	content:"\e021"
}
.glyphicon-file:before {
	content:"\e022"
}
.glyphicon-time:before {
	content:"\e023"
}
.glyphicon-road:before {
	content:"\e024"
}
.glyphicon-download-alt:before {
	content:"\e025"
}
.glyphicon-download:before {
	content:"\e026"
}
.glyphicon-upload:before {
	content:"\e027"
}
.glyphicon-inbox:before {
	content:"\e028"
}
.glyphicon-play-circle:before {
	content:"\e029"
}
.glyphicon-repeat:before {
	content:"\e030"
}
.glyphicon-refresh:before {
	content:"\e031"
}
.glyphicon-list-alt:before {
	content:"\e032"
}
.glyphicon-lock:before {
	content:"\e033"
}
.glyphicon-flag:before {
	content:"\e034"
}
.glyphicon-headphones:before {
	content:"\e035"
}
.glyphicon-volume-off:before {
	content:"\e036"
}
.glyphicon-volume-down:before {
	content:"\e037"
}
.glyphicon-volume-up:before {
	content:"\e038"
}
.glyphicon-qrcode:before {
	content:"\e039"
}
.glyphicon-barcode:before {
	content:"\e040"
}
.glyphicon-tag:before {
	content:"\e041"
}
.glyphicon-tags:before {
	content:"\e042"
}
.glyphicon-book:before {
	content:"\e043"
}
.glyphicon-bookmark:before {
	content:"\e044"
}
.glyphicon-print:before {
	content:"\e045"
}
.glyphicon-camera:before {
	content:"\e046"
}
.glyphicon-font:before {
	content:"\e047"
}
.glyphicon-bold:before {
	content:"\e048"
}
.glyphicon-italic:before {
	content:"\e049"
}
.glyphicon-text-height:before {
	content:"\e050"
}
.glyphicon-text-width:before {
	content:"\e051"
}
.glyphicon-align-left:before {
	content:"\e052"
}
.glyphicon-align-center:before {
	content:"\e053"
}
.glyphicon-align-right:before {
	content:"\e054"
}
.glyphicon-align-justify:before {
	content:"\e055"
}
.glyphicon-list:before {
	content:"\e056"
}
.glyphicon-indent-left:before {
	content:"\e057"
}
.glyphicon-indent-right:before {
	content:"\e058"
}
.glyphicon-facetime-video:before {
	content:"\e059"
}
.glyphicon-picture:before {
	content:"\e060"
}
.glyphicon-map-marker:before {
	content:"\e062"
}
.glyphicon-adjust:before {
	content:"\e063"
}
.glyphicon-tint:before {
	content:"\e064"
}
.glyphicon-edit:before {
	content:"\e065"
}
.glyphicon-share:before {
	content:"\e066"
}
.glyphicon-check:before {
	content:"\e067"
}
.glyphicon-move:before {
	content:"\e068"
}
.glyphicon-step-backward:before {
	content:"\e069"
}
.glyphicon-fast-backward:before {
	content:"\e070"
}
.glyphicon-backward:before {
	content:"\e071"
}
.glyphicon-play:before {
	content:"\e072"
}
.glyphicon-pause:before {
	content:"\e073"
}
.glyphicon-stop:before {
	content:"\e074"
}
.glyphicon-forward:before {
	content:"\e075"
}
.glyphicon-fast-forward:before {
	content:"\e076"
}
.glyphicon-step-forward:before {
	content:"\e077"
}
.glyphicon-eject:before {
	content:"\e078"
}
.glyphicon-chevron-left:before {
	content:"\e079"
}
.glyphicon-chevron-right:before {
	content:"\e080"
}
.glyphicon-plus-sign:before {
	content:"\e081"
}
.glyphicon-minus-sign:before {
	content:"\e082"
}
.glyphicon-remove-sign:before {
	content:"\e083"
}
.glyphicon-ok-sign:before {
	content:"\e084"
}
.glyphicon-question-sign:before {
	content:"\e085"
}
.glyphicon-info-sign:before {
	content:"\e086"
}
.glyphicon-screenshot:before {
	content:"\e087"
}
.glyphicon-remove-circle:before {
	content:"\e088"
}
.glyphicon-ok-circle:before {
	content:"\e089"
}
.glyphicon-ban-circle:before {
	content:"\e090"
}
.glyphicon-arrow-left:before {
	content:"\e091"
}
.glyphicon-arrow-right:before {
	content:"\e092"
}
.glyphicon-arrow-up:before {
	content:"\e093"
}
.glyphicon-arrow-down:before {
	content:"\e094"
}
.glyphicon-share-alt:before {
	content:"\e095"
}
.glyphicon-resize-full:before {
	content:"\e096"
}
.glyphicon-resize-small:before {
	content:"\e097"
}
.glyphicon-exclamation-sign:before {
	content:"\e101"
}
.glyphicon-gift:before {
	content:"\e102"
}
.glyphicon-leaf:before {
	content:"\e103"
}
.glyphicon-fire:before {
	content:"\e104"
}
.glyphicon-eye-open:before {
	content:"\e105"
}
.glyphicon-eye-close:before {
	content:"\e106"
}
.glyphicon-warning-sign:before {
	content:"\e107"
}
.glyphicon-plane:before {
	content:"\e108"
}
.glyphicon-calendar:before {
	content:"\e109"
}
.glyphicon-random:before {
	content:"\e110"
}
.glyphicon-comment:before {
	content:"\e111"
}
.glyphicon-magnet:before {
	content:"\e112"
}
.glyphicon-chevron-up:before {
	content:"\e113"
}
.glyphicon-chevron-down:before {
	content:"\e114"
}
.glyphicon-retweet:before {
	content:"\e115"
}
.glyphicon-shopping-cart:before {
	content:"\e116"
}
.glyphicon-folder-close:before {
	content:"\e117"
}
.glyphicon-folder-open:before {
	content:"\e118"
}
.glyphicon-resize-vertical:before {
	content:"\e119"
}
.glyphicon-resize-horizontal:before {
	content:"\e120"
}
.glyphicon-hdd:before {
	content:"\e121"
}
.glyphicon-bullhorn:before {
	content:"\e122"
}
.glyphicon-bell:before {
	content:"\e123"
}
.glyphicon-certificate:before {
	content:"\e124"
}
.glyphicon-thumbs-up:before {
	content:"\e125"
}
.glyphicon-thumbs-down:before {
	content:"\e126"
}
.glyphicon-hand-right:before {
	content:"\e127"
}
.glyphicon-hand-left:before {
	content:"\e128"
}
.glyphicon-hand-up:before {
	content:"\e129"
}
.glyphicon-hand-down:before {
	content:"\e130"
}
.glyphicon-circle-arrow-right:before {
	content:"\e131"
}
.glyphicon-circle-arrow-left:before {
	content:"\e132"
}
.glyphicon-circle-arrow-up:before {
	content:"\e133"
}
.glyphicon-circle-arrow-down:before {
	content:"\e134"
}
.glyphicon-globe:before {
	content:"\e135"
}
.glyphicon-wrench:before {
	content:"\e136"
}
.glyphicon-tasks:before {
	content:"\e137"
}
.glyphicon-filter:before {
	content:"\e138"
}
.glyphicon-briefcase:before {
	content:"\e139"
}
.glyphicon-fullscreen:before {
	content:"\e140"
}
.glyphicon-dashboard:before {
	content:"\e141"
}
.glyphicon-paperclip:before {
	content:"\e142"
}
.glyphicon-heart-empty:before {
	content:"\e143"
}
.glyphicon-link:before {
	content:"\e144"
}
.glyphicon-phone:before {
	content:"\e145"
}
.glyphicon-pushpin:before {
	content:"\e146"
}
.glyphicon-usd:before {
	content:"\e148"
}
.glyphicon-gbp:before {
	content:"\e149"
}
.glyphicon-sort:before {
	content:"\e150"
}
.glyphicon-sort-by-alphabet:before {
	content:"\e151"
}
.glyphicon-sort-by-alphabet-alt:before {
	content:"\e152"
}
.glyphicon-sort-by-order:before {
	content:"\e153"
}
.glyphicon-sort-by-order-alt:before {
	content:"\e154"
}
.glyphicon-sort-by-attributes:before {
	content:"\e155"
}
.glyphicon-sort-by-attributes-alt:before {
	content:"\e156"
}
.glyphicon-unchecked:before {
	content:"\e157"
}
.glyphicon-expand:before {
	content:"\e158"
}
.glyphicon-collapse-down:before {
	content:"\e159"
}
.glyphicon-collapse-up:before {
	content:"\e160"
}
.glyphicon-log-in:before {
	content:"\e161"
}
.glyphicon-flash:before {
	content:"\e162"
}
.glyphicon-log-out:before {
	content:"\e163"
}
.glyphicon-new-window:before {
	content:"\e164"
}
.glyphicon-record:before {
	content:"\e165"
}
.glyphicon-save:before {
	content:"\e166"
}
.glyphicon-open:before {
	content:"\e167"
}
.glyphicon-saved:before {
	content:"\e168"
}
.glyphicon-import:before {
	content:"\e169"
}
.glyphicon-export:before {
	content:"\e170"
}
.glyphicon-send:before {
	content:"\e171"
}
.glyphicon-floppy-disk:before {
	content:"\e172"
}
.glyphicon-floppy-saved:before {
	content:"\e173"
}
.glyphicon-floppy-remove:before {
	content:"\e174"
}
.glyphicon-floppy-save:before {
	content:"\e175"
}
.glyphicon-floppy-open:before {
	content:"\e176"
}
.glyphicon-credit-card:before {
	content:"\e177"
}
.glyphicon-transfer:before {
	content:"\e178"
}
.glyphicon-cutlery:before {
	content:"\e179"
}
.glyphicon-header:before {
	content:"\e180"
}
.glyphicon-compressed:before {
	content:"\e181"
}
.glyphicon-earphone:before {
	content:"\e182"
}
.glyphicon-phone-alt:before {
	content:"\e183"
}
.glyphicon-tower:before {
	content:"\e184"
}
.glyphicon-stats:before {
	content:"\e185"
}
.glyphicon-sd-video:before {
	content:"\e186"
}
.glyphicon-hd-video:before {
	content:"\e187"
}
.glyphicon-subtitles:before {
	content:"\e188"
}
.glyphicon-sound-stereo:before {
	content:"\e189"
}
.glyphicon-sound-dolby:before {
	content:"\e190"
}
.glyphicon-sound-5-1:before {
	content:"\e191"
}
.glyphicon-sound-6-1:before {
	content:"\e192"
}
.glyphicon-sound-7-1:before {
	content:"\e193"
}
.glyphicon-copyright-mark:before {
	content:"\e194"
}
.glyphicon-registration-mark:before {
	content:"\e195"
}
.glyphicon-cloud-download:before {
	content:"\e197"
}
.glyphicon-cloud-upload:before {
	content:"\e198"
}
.glyphicon-tree-conifer:before {
	content:"\e199"
}
.glyphicon-tree-deciduous:before {
	content:"\e200"
}
.glyphicon-cd:before {
	content:"\e201"
}
.glyphicon-save-file:before {
	content:"\e202"
}
.glyphicon-open-file:before {
	content:"\e203"
}
.glyphicon-level-up:before {
	content:"\e204"
}
.glyphicon-copy:before {
	content:"\e205"
}
.glyphicon-paste:before {
	content:"\e206"
}
.glyphicon-alert:before {
	content:"\e209"
}
.glyphicon-equalizer:before {
	content:"\e210"
}
.glyphicon-king:before {
	content:"\e211"
}
.glyphicon-queen:before {
	content:"\e212"
}
.glyphicon-pawn:before {
	content:"\e213"
}
.glyphicon-bishop:before {
	content:"\e214"
}
.glyphicon-knight:before {
	content:"\e215"
}
.glyphicon-baby-formula:before {
	content:"\e216"
}
.glyphicon-tent:before {
	content:"\26fa"
}
.glyphicon-blackboard:before {
	content:"\e218"
}
.glyphicon-bed:before {
	content:"\e219"
}
.glyphicon-apple:before {
	content:"\f8ff"
}
.glyphicon-erase:before {
	content:"\e221"
}
.glyphicon-hourglass:before {
	content:"\231b"
}
.glyphicon-lamp:before {
	content:"\e223"
}
.glyphicon-duplicate:before {
	content:"\e224"
}
.glyphicon-piggy-bank:before {
	content:"\e225"
}
.glyphicon-scissors:before {
	content:"\e226"
}
.glyphicon-bitcoin:before {
	content:"\e227"
}
.glyphicon-yen:before {
	content:"\00a5"
}
.glyphicon-ruble:before {
	content:"\20bd"
}
.glyphicon-scale:before {
	content:"\e230"
}
.glyphicon-ice-lolly:before {
	content:"\e231"
}
.glyphicon-ice-lolly-tasted:before {
	content:"\e232"
}
.glyphicon-education:before {
	content:"\e233"
}
.glyphicon-option-horizontal:before {
	content:"\e234"
}
.glyphicon-option-vertical:before {
	content:"\e235"
}
.glyphicon-menu-hamburger:before {
	content:"\e236"
}
.glyphicon-modal-window:before {
	content:"\e237"
}
.glyphicon-oil:before {
	content:"\e238"
}
.glyphicon-grain:before {
	content:"\e239"
}
.glyphicon-sunglasses:before {
	content:"\e240"
}
.glyphicon-text-size:before {
	content:"\e241"
}
.glyphicon-text-color:before {
	content:"\e242"
}
.glyphicon-text-background:before {
	content:"\e243"
}
.glyphicon-object-align-top:before {
	content:"\e244"
}
.glyphicon-object-align-bottom:before {
	content:"\e245"
}
.glyphicon-object-align-horizontal:before {
	content:"\e246"
}
.glyphicon-object-align-left:before {
	content:"\e247"
}
.glyphicon-object-align-vertical:before {
	content:"\e248"
}
.glyphicon-object-align-right:before {
	content:"\e249"
}
.glyphicon-triangle-right:before {
	content:"\e250"
}
.glyphicon-triangle-left:before {
	content:"\e251"
}
.glyphicon-triangle-bottom:before {
	content:"\e252"
}
.glyphicon-triangle-top:before {
	content:"\e253"
}
.glyphicon-console:before {
	content:"\e254"
}
.glyphicon-superscript:before {
	content:"\e255"
}
.glyphicon-subscript:before {
	content:"\e256"
}
.glyphicon-menu-left:before {
	content:"\e257"
}
.glyphicon-menu-right:before {
	content:"\e258"
}
.glyphicon-menu-down:before {
	content:"\e259"
}
.glyphicon-menu-up:before {
	content:"\e260"
}
* {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box
}
*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box
}
html {
	font-size:10px;
	-webkit-tap-highlight-color:rgba(0, 0, 0, 0)
}
input,button,select,textarea {
	font-family:inherit;
	font-size:inherit;
	line-height:inherit
}
a {
	color:#337ab7;
	text-decoration:none
}
a:hover,a:focus {
	color:#23527c;
	text-decoration:underline
}
a:focus {
	outline:thin dotted;
	outline:5px auto -webkit-focus-ring-color;
	outline-offset:-2px
}
figure {
	margin:0
}
img {
	vertical-align:middle
}
.img-responsive,.thumbnail > img,.thumbnail a > img,.carousel-inner > .item > img,.carousel-inner > .item > a > img {
	display:block;
	max-width:100%;
	height:auto
}
.img-rounded {
	border-radius:6px
}
.img-thumbnail {
	display:inline-block;
	max-width:100%;
	height:auto;
	padding:4px;
	line-height:1.42857143;
	background-color:#fff;
	border:1px solid #ddd;
	border-radius:4px;
	-webkit-transition:all .2s ease-in-out;
	-o-transition:all .2s ease-in-out;
	transition:all .2s ease-in-out
}
.img-circle {
	border-radius:50%
}
hr {
	margin-top:20px;
	margin-bottom:20px;
	border:0;
	border-top:1px solid #eee
}
.sr-only {
	position:absolute;
	width:1px;
	height:1px;
	padding:0;
	margin:-1px;
	overflow:hidden;
	clip:rect(0, 0, 0, 0);
	border:0
}
.sr-only-focusable:active,.sr-only-focusable:focus {
	position:static;
	width:auto;
	height:auto;
	margin:0;
	overflow:visible;
	clip:auto
}
h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6 {
	font-family:inherit;
	font-weight:500;
	line-height:1.1;
	color:inherit
}
h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small,h1 .small,h2 .small,h3 .small,h4 .small,h5 .small,h6 .small,.h1 .small,.h2 .small,.h3 .small,.h4 .small,.h5 .small,.h6 .small {
	font-weight:normal;
	line-height:1;
	color:#777
}
h1,.h1,h2,.h2,h3,.h3 {
	margin-top:20px;
	margin-bottom:10px
}
h1 small,.h1 small,h2 small,.h2 small,h3 small,.h3 small,h1 .small,.h1 .small,h2 .small,.h2 .small,h3 .small,.h3 .small {
	font-size:65%
}
h4,.h4,h5,.h5,h6,.h6 {
	margin-top:10px;
	margin-bottom:10px
}
h4 small,.h4 small,h5 small,.h5 small,h6 small,.h6 small,h4 .small,.h4 .small,h5 .small,.h5 .small,h6 .small,.h6 .small {
	font-size:75%
}
h1,.h1 {
	font-size:36px
}
h2,.h2 {
	font-size:30px
}
h3,.h3 {
	font-size:24px
}
h4,.h4 {
	font-size:18px
}
h5,.h5 {
	font-size:14px
}
h6,.h6 {
	font-size:12px
}
p {
	margin:0 0 10px
}
.lead {
	margin-bottom:20px;
	font-size:16px;
	font-weight:300;
	line-height:1.4
}
@media (min-width: 768px) {
	.lead {
		font-size:21px
	}
}
small,.small {
	font-size:85%
}
mark,.mark {
	padding:.2em;
	background-color:#fcf8e3
}
.text-left {
	text-align:left
}
.text-right {
	text-align:right
}
.text-center {
	text-align:center
}
.text-justify {
	text-align:justify
}
.text-nowrap {
	white-space:nowrap
}
.text-lowercase {
	text-transform:lowercase
}
.text-uppercase {
	text-transform:uppercase
}
.text-capitalize {
	text-transform:capitalize
}
.text-muted {
	color:#777
}
.text-primary {
	color:#337ab7
}
a.text-primary:hover {
	color:#286090
}
.text-success {
	color:#3c763d
}
a.text-success:hover {
	color:#2b542c
}
.text-info {
	color:#31708f
}
a.text-info:hover {
	color:#245269
}
.text-warning {
	color:#8a6d3b
}
a.text-warning:hover {
	color:#66512c
}
.text-danger {
	color:#a94442
}
a.text-danger:hover {
	color:#843534
}
.bg-primary {
	color:#fff;
	background-color:#337ab7
}
a.bg-primary:hover {
	background-color:#286090
}
.bg-success {
	background-color:#dff0d8
}
a.bg-success:hover {
	background-color:#c1e2b3
}
.bg-info {
	background-color:#d9edf7
}
a.bg-info:hover {
	background-color:#afd9ee
}
.bg-warning {
	background-color:#fcf8e3
}
a.bg-warning:hover {
	background-color:#f7ecb5
}
.bg-danger {
	background-color:#f2dede
}
a.bg-danger:hover {
	background-color:#e4b9b9
}
.page-header {
	padding-bottom:9px;
	margin:40px 0 20px;
	border-bottom:1px solid #eee
}
ul,ol {
	margin-top:0;
	margin-bottom:10px
}
ul ul,ol ul,ul ol,ol ol {
	margin-bottom:0
}
.list-unstyled {
	padding-left:0;
	list-style:none
}
.list-inline {
	padding-left:0;
	margin-left:-5px;
	list-style:none
}
.list-inline > li {
	display:inline-block;
	padding-right:5px;
	padding-left:5px
}
dl {
	margin-top:0;
	margin-bottom:20px
}
dt,dd {
	line-height:1.42857143
}
dt {
	font-weight:bold
}
dd {
	margin-left:0
}
@media (min-width: 768px) {
	.dl-horizontal dt {
		float:left;
		width:160px;
		overflow:hidden;
		clear:left;
		text-align:right;
		text-overflow:ellipsis;
		white-space:nowrap
	}
	.dl-horizontal dd {
		margin-left:180px
	}
}
abbr[title],abbr[data-original-title] {
	cursor:help;
	border-bottom:1px dotted #777
}
.initialism {
	font-size:90%;
	text-transform:uppercase
}
blockquote {
	padding:10px 20px;
	margin:0 0 20px;
	font-size:17.5px;
	border-left:5px solid #eee
}
blockquote p:last-child,blockquote ul:last-child,blockquote ol:last-child {
	margin-bottom:0
}
blockquote footer,blockquote small,blockquote .small {
	display:block;
	font-size:80%;
	line-height:1.42857143;
	color:#777
}
blockquote footer:before,blockquote small:before,blockquote .small:before {
	content:'\2014 \00A0'
}
.blockquote-reverse,blockquote.pull-right {
	padding-right:15px;
	padding-left:0;
	text-align:right;
	border-right:5px solid #eee;
	border-left:0
}
.blockquote-reverse footer:before,blockquote.pull-right footer:before,.blockquote-reverse small:before,blockquote.pull-right small:before,.blockquote-reverse .small:before,blockquote.pull-right .small:before {
	content:''
}
.blockquote-reverse footer:after,blockquote.pull-right footer:after,.blockquote-reverse small:after,blockquote.pull-right small:after,.blockquote-reverse .small:after,blockquote.pull-right .small:after {
	content:'\00A0 \2014'
}
address {
	margin-bottom:20px;
	font-style:normal;
	line-height:1.42857143
}
code,kbd,pre,samp {
	font-family:Menlo, Monaco, Consolas, "Courier New", monospace
}
code {
	padding:2px 4px;
	font-size:90%;
	color:#c7254e;
	background-color:#f9f2f4;
	border-radius:4px
}
kbd {
	padding:2px 4px;
	font-size:90%;
	color:#fff;
	background-color:#333;
	border-radius:3px;
	-webkit-box-shadow:inset 0 -1px 0 rgba(0, 0, 0, .25);
	box-shadow:inset 0 -1px 0 rgba(0, 0, 0, .25)
}
kbd kbd {
	padding:0;
	font-size:100%;
	font-weight:bold;
	-webkit-box-shadow:none;
	box-shadow:none
}
pre {
	display:block;
	padding:9.5px;
	margin:0 0 10px;
	font-size:13px;
	line-height:1.42857143;
	color:#333;
	word-break:break-all;
	word-wrap:break-word;
	background-color:#f5f5f5;
	border:1px solid #ccc;
	border-radius:4px
}
pre code {
	padding:0;
	font-size:inherit;
	color:inherit;
	white-space:pre-wrap;
	background-color:transparent;
	border-radius:0
}
.pre-scrollable {
	max-height:340px;
	overflow-y:scroll
}
.container {
	padding-right:15px;
	padding-left:15px;
	margin-right:auto;
	margin-left:auto
}
@media (min-width: 768px) {
	.container {
		width:750px
	}
}
@media (min-width: 992px) {
	.container {
		width:970px
	}
}
@media (min-width: 1200px) {
	.container {
		width:1170px
	}
}
.container-fluid {
	padding-right:15px;
	padding-left:15px;
	margin-right:auto;
	margin-left:auto
}
.row {
	margin-right:-15px;
	margin-left:-15px
}
.col-xs-1,.col-sm-1,.col-md-1,.col-lg-1,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2,.col-xs-3,.col-sm-3,.col-md-3,.col-lg-3,.col-xs-4,.col-sm-4,.col-md-4,.col-lg-4,.col-xs-5,.col-sm-5,.col-md-5,.col-lg-5,.col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-7,.col-sm-7,.col-md-7,.col-lg-7,.col-xs-8,.col-sm-8,.col-md-8,.col-lg-8,.col-xs-9,.col-sm-9,.col-md-9,.col-lg-9,.col-xs-10,.col-sm-10,.col-md-10,.col-lg-10,.col-xs-11,.col-sm-11,.col-md-11,.col-lg-11,.col-xs-12,.col-sm-12,.col-md-12,.col-lg-12 {
	position:relative;
	min-height:1px;
	padding-right:15px;
	padding-left:15px
}
.col-xs-1,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9,.col-xs-10,.col-xs-11,.col-xs-12 {
	float:left
}
.col-xs-12 {
	width:100%
}
.col-xs-11 {
	width:91.66666667%
}
.col-xs-10 {
	width:83.33333333%
}
.col-xs-9 {
	width:75%
}
.col-xs-8 {
	width:66.66666667%
}
.col-xs-7 {
	width:58.33333333%
}
.col-xs-6 {
	width:50%
}
.col-xs-5 {
	width:41.66666667%
}
.col-xs-4 {
	width:33.33333333%
}
.col-xs-3 {
	width:25%
}
.col-xs-2 {
	width:16.66666667%
}
.col-xs-1 {
	width:8.33333333%
}
.col-xs-pull-12 {
	right:100%
}
.col-xs-pull-11 {
	right:91.66666667%
}
.col-xs-pull-10 {
	right:83.33333333%
}
.col-xs-pull-9 {
	right:75%
}
.col-xs-pull-8 {
	right:66.66666667%
}
.col-xs-pull-7 {
	right:58.33333333%
}
.col-xs-pull-6 {
	right:50%
}
.col-xs-pull-5 {
	right:41.66666667%
}
.col-xs-pull-4 {
	right:33.33333333%
}
.col-xs-pull-3 {
	right:25%
}
.col-xs-pull-2 {
	right:16.66666667%
}
.col-xs-pull-1 {
	right:8.33333333%
}
.col-xs-pull-0 {
	right:auto
}
.col-xs-push-12 {
	left:100%
}
.col-xs-push-11 {
	left:91.66666667%
}
.col-xs-push-10 {
	left:83.33333333%
}
.col-xs-push-9 {
	left:75%
}
.col-xs-push-8 {
	left:66.66666667%
}
.col-xs-push-7 {
	left:58.33333333%
}
.col-xs-push-6 {
	left:50%
}
.col-xs-push-5 {
	left:41.66666667%
}
.col-xs-push-4 {
	left:33.33333333%
}
.col-xs-push-3 {
	left:25%
}
.col-xs-push-2 {
	left:16.66666667%
}
.col-xs-push-1 {
	left:8.33333333%
}
.col-xs-push-0 {
	left:auto
}
.col-xs-offset-12 {
	margin-left:100%
}
.col-xs-offset-11 {
	margin-left:91.66666667%
}
.col-xs-offset-10 {
	margin-left:83.33333333%
}
.col-xs-offset-9 {
	margin-left:75%
}
.col-xs-offset-8 {
	margin-left:66.66666667%
}
.col-xs-offset-7 {
	margin-left:58.33333333%
}
.col-xs-offset-6 {
	margin-left:50%
}
.col-xs-offset-5 {
	margin-left:41.66666667%
}
.col-xs-offset-4 {
	margin-left:33.33333333%
}
.col-xs-offset-3 {
	margin-left:25%
}
.col-xs-offset-2 {
	margin-left:16.66666667%
}
.col-xs-offset-1 {
	margin-left:8.33333333%
}
.col-xs-offset-0 {
	margin-left:0
}
@media (min-width: 768px) {
	.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12 {
		float:left
	}
	.col-sm-12 {
		width:100%;
		background-color: #00000080;
		border-radius: 15px;
		padding-top: 30px;
	}
	.col-sm-11 {
		width:91.66666667%
	}
	.col-sm-10 {
		width:83.33333333%
	}
	.col-sm-9 {
		width:75%
	}
	.col-sm-8 {
		width:66.66666667%
	}
	.col-sm-7 {
		width:58.33333333%
	}
	.col-sm-6 {
		width:50%
	}
	.col-sm-5 {
		width:41.66666667%
	}
	.col-sm-4 {
		width:33.33333333%
	}
	.col-sm-3 {
		width:25%
	}
	.col-sm-2 {
		width:16.66666667%
	}
	.col-sm-1 {
		width:8.33333333%
	}
	.col-sm-pull-12 {
		right:100%
	}
	.col-sm-pull-11 {
		right:91.66666667%
	}
	.col-sm-pull-10 {
		right:83.33333333%
	}
	.col-sm-pull-9 {
		right:75%
	}
	.col-sm-pull-8 {
		right:66.66666667%
	}
	.col-sm-pull-7 {
		right:58.33333333%
	}
	.col-sm-pull-6 {
		right:50%
	}
	.col-sm-pull-5 {
		right:41.66666667%
	}
	.col-sm-pull-4 {
		right:33.33333333%
	}
	.col-sm-pull-3 {
		right:25%
	}
	.col-sm-pull-2 {
		right:16.66666667%
	}
	.col-sm-pull-1 {
		right:8.33333333%
	}
	.col-sm-pull-0 {
		right:auto
	}
	.col-sm-push-12 {
		left:100%
	}
	.col-sm-push-11 {
		left:91.66666667%
	}
	.col-sm-push-10 {
		left:83.33333333%
	}
	.col-sm-push-9 {
		left:75%
	}
	.col-sm-push-8 {
		left:66.66666667%
	}
	.col-sm-push-7 {
		left:58.33333333%
	}
	.col-sm-push-6 {
		left:50%
	}
	.col-sm-push-5 {
		left:41.66666667%
	}
	.col-sm-push-4 {
		left:33.33333333%
	}
	.col-sm-push-3 {
		left:25%
	}
	.col-sm-push-2 {
		left:16.66666667%
	}
	.col-sm-push-1 {
		left:8.33333333%
	}
	.col-sm-push-0 {
		left:auto
	}
	.col-sm-offset-12 {
		margin-left:100%
	}
	.col-sm-offset-11 {
		margin-left:91.66666667%
	}
	.col-sm-offset-10 {
		margin-left:83.33333333%
	}
	.col-sm-offset-9 {
		margin-left:75%
	}
	.col-sm-offset-8 {
		margin-left:66.66666667%
	}
	.col-sm-offset-7 {
		margin-left:58.33333333%
	}
	.col-sm-offset-6 {
		margin-left:50%
	}
	.col-sm-offset-5 {
		margin-left:41.66666667%
	}
	.col-sm-offset-4 {
		margin-left:33.33333333%
	}
	.col-sm-offset-3 {
		margin-left:25%
	}
	.col-sm-offset-2 {
		margin-left:16.66666667%
	}
	.col-sm-offset-1 {
		margin-left:8.33333333%
	}
	.col-sm-offset-0 {
		margin-left:0
	}
}
@media (min-width: 992px) {
	.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12 {
		float:left
	}
	.col-md-12 {
		width:100%
	}
	.col-md-11 {
		width:91.66666667%
	}
	.col-md-10 {
		width:83.33333333%
	}
	.col-md-9 {
		width:75%
	}
	.col-md-8 {
		width:66.66666667%
	}
	.col-md-7 {
		width:58.33333333%
	}
	.col-md-6 {
		width:50%
	}
	.col-md-5 {
		width:41.66666667%
	}
	.col-md-4 {
		width:33.33333333%
	}
	.col-md-3 {
		width:25%
	}
	.col-md-2 {
		width:16.66666667%
	}
	.col-md-1 {
		width:8.33333333%
	}
	.col-md-pull-12 {
		right:100%
	}
	.col-md-pull-11 {
		right:91.66666667%
	}
	.col-md-pull-10 {
		right:83.33333333%
	}
	.col-md-pull-9 {
		right:75%
	}
	.col-md-pull-8 {
		right:66.66666667%
	}
	.col-md-pull-7 {
		right:58.33333333%
	}
	.col-md-pull-6 {
		right:50%
	}
	.col-md-pull-5 {
		right:41.66666667%
	}
	.col-md-pull-4 {
		right:33.33333333%
	}
	.col-md-pull-3 {
		right:25%
	}
	.col-md-pull-2 {
		right:16.66666667%
	}
	.col-md-pull-1 {
		right:8.33333333%
	}
	.col-md-pull-0 {
		right:auto
	}
	.col-md-push-12 {
		left:100%
	}
	.col-md-push-11 {
		left:91.66666667%
	}
	.col-md-push-10 {
		left:83.33333333%
	}
	.col-md-push-9 {
		left:75%
	}
	.col-md-push-8 {
		left:66.66666667%
	}
	.col-md-push-7 {
		left:58.33333333%
	}
	.col-md-push-6 {
		left:50%
	}
	.col-md-push-5 {
		left:41.66666667%
	}
	.col-md-push-4 {
		left:33.33333333%
	}
	.col-md-push-3 {
		left:25%
	}
	.col-md-push-2 {
		left:16.66666667%
	}
	.col-md-push-1 {
		left:8.33333333%
	}
	.col-md-push-0 {
		left:auto
	}
	.col-md-offset-12 {
		margin-left:100%
	}
	.col-md-offset-11 {
		margin-left:91.66666667%
	}
	.col-md-offset-10 {
		margin-left:83.33333333%
	}
	.col-md-offset-9 {
		margin-left:75%
	}
	.col-md-offset-8 {
		margin-left:66.66666667%
	}
	.col-md-offset-7 {
		margin-left:58.33333333%
	}
	.col-md-offset-6 {
		margin-left:50%
	}
	.col-md-offset-5 {
		margin-left:41.66666667%
	}
	.col-md-offset-4 {
		margin-left:33.33333333%
	}
	.col-md-offset-3 {
		margin-left:25%
	}
	.col-md-offset-2 {
		margin-left:16.66666667%
	}
	.col-md-offset-1 {
		margin-left:8.33333333%
	}
	.col-md-offset-0 {
		margin-left:0
	}
}
@media (min-width: 1200px) {
	.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12 {
		float:left
	}
	.col-lg-12 {
		width:100%
	}
	.col-lg-11 {
		width:91.66666667%
	}
	.col-lg-10 {
		width:83.33333333%
	}
	.col-lg-9 {
		width:75%
	}
	.col-lg-8 {
		width:66.66666667%
	}
	.col-lg-7 {
		width:58.33333333%
	}
	.col-lg-6 {
		width:50%
	}
	.col-lg-5 {
		width:41.66666667%
	}
	.col-lg-4 {
		width:33.33333333%
	}
	.col-lg-3 {
		width:25%
	}
	.col-lg-2 {
		width:16.66666667%
	}
	.col-lg-1 {
		width:8.33333333%
	}
	.col-lg-pull-12 {
		right:100%
	}
	.col-lg-pull-11 {
		right:91.66666667%
	}
	.col-lg-pull-10 {
		right:83.33333333%
	}
	.col-lg-pull-9 {
		right:75%
	}
	.col-lg-pull-8 {
		right:66.66666667%
	}
	.col-lg-pull-7 {
		right:58.33333333%
	}
	.col-lg-pull-6 {
		right:50%
	}
	.col-lg-pull-5 {
		right:41.66666667%
	}
	.col-lg-pull-4 {
		right:33.33333333%
	}
	.col-lg-pull-3 {
		right:25%
	}
	.col-lg-pull-2 {
		right:16.66666667%
	}
	.col-lg-pull-1 {
		right:8.33333333%
	}
	.col-lg-pull-0 {
		right:auto
	}
	.col-lg-push-12 {
		left:100%
	}
	.col-lg-push-11 {
		left:91.66666667%
	}
	.col-lg-push-10 {
		left:83.33333333%
	}
	.col-lg-push-9 {
		left:75%
	}
	.col-lg-push-8 {
		left:66.66666667%
	}
	.col-lg-push-7 {
		left:58.33333333%
	}
	.col-lg-push-6 {
		left:50%
	}
	.col-lg-push-5 {
		left:41.66666667%
	}
	.col-lg-push-4 {
		left:33.33333333%
	}
	.col-lg-push-3 {
		left:25%
	}
	.col-lg-push-2 {
		left:16.66666667%
	}
	.col-lg-push-1 {
		left:8.33333333%
	}
	.col-lg-push-0 {
		left:auto
	}
	.col-lg-offset-12 {
		margin-left:100%
	}
	.col-lg-offset-11 {
		margin-left:91.66666667%
	}
	.col-lg-offset-10 {
		margin-left:83.33333333%
	}
	.col-lg-offset-9 {
		margin-left:75%
	}
	.col-lg-offset-8 {
		margin-left:66.66666667%
	}
	.col-lg-offset-7 {
		margin-left:58.33333333%
	}
	.col-lg-offset-6 {
		margin-left:50%
	}
	.col-lg-offset-5 {
		margin-left:41.66666667%
	}
	.col-lg-offset-4 {
		margin-left:33.33333333%
	}
	.col-lg-offset-3 {
		margin-left:25%
	}
	.col-lg-offset-2 {
		margin-left:16.66666667%
	}
	.col-lg-offset-1 {
		margin-left:8.33333333%
	}
	.col-lg-offset-0 {
		margin-left:0
	}
}
table {
	background-color:transparent
}
caption {
	padding-top:8px;
	padding-bottom:8px;
	color:#777;
	text-align:left
}
th {
	text-align:left
}
.table {
	width:100%;
	max-width:100%;
	margin-bottom:20px
}
.table > thead > tr > th,.table > tbody > tr > th,.table > tfoot > tr > th,.table > thead > tr > td,.table > tbody > tr > td,.table > tfoot > tr > td {
	padding:8px;
	line-height:1.42857143;
	vertical-align:top;
	border-top:1px solid #ddd
}
.table > thead > tr > th {
	vertical-align:bottom;
	border-bottom:2px solid #ddd
}
.table > caption + thead > tr:first-child > th,.table > colgroup + thead > tr:first-child > th,.table > thead:first-child > tr:first-child > th,.table > caption + thead > tr:first-child > td,.table > colgroup + thead > tr:first-child > td,.table > thead:first-child > tr:first-child > td {
	border-top:0
}
.table > tbody + tbody {
	border-top:2px solid #ddd
}
.table .table {
	background-color:#fff
}
.table-condensed > thead > tr > th,.table-condensed > tbody > tr > th,.table-condensed > tfoot > tr > th,.table-condensed > thead > tr > td,.table-condensed > tbody > tr > td,.table-condensed > tfoot > tr > td {
	padding:5px
}
.table-bordered {
	border:1px solid #ddd
}
.table-bordered > thead > tr > th,.table-bordered > tbody > tr > th,.table-bordered > tfoot > tr > th,.table-bordered > thead > tr > td,.table-bordered > tbody > tr > td,.table-bordered > tfoot > tr > td {
	border:1px solid #ddd
}
.table-bordered > thead > tr > th,.table-bordered > thead > tr > td {
	border-bottom-width:2px
}
.table-striped > tbody > tr:nth-of-type(odd) {
	background-color:#f9f9f9
}
.table-hover > tbody > tr:hover {
	background-color:#f5f5f5
}
table col[class*="col-"] {
	position:static;
	display:table-column;
	float:none
}
table td[class*="col-"],table th[class*="col-"] {
	position:static;
	display:table-cell;
	float:none
}
.table > thead > tr > td.active,.table > tbody > tr > td.active,.table > tfoot > tr > td.active,.table > thead > tr > th.active,.table > tbody > tr > th.active,.table > tfoot > tr > th.active,.table > thead > tr.active > td,.table > tbody > tr.active > td,.table > tfoot > tr.active > td,.table > thead > tr.active > th,.table > tbody > tr.active > th,.table > tfoot > tr.active > th {
	background-color:#f5f5f5
}
.table-hover > tbody > tr > td.active:hover,.table-hover > tbody > tr > th.active:hover,.table-hover > tbody > tr.active:hover > td,.table-hover > tbody > tr:hover > .active,.table-hover > tbody > tr.active:hover > th {
	background-color:#e8e8e8
}
.table > thead > tr > td.success,.table > tbody > tr > td.success,.table > tfoot > tr > td.success,.table > thead > tr > th.success,.table > tbody > tr > th.success,.table > tfoot > tr > th.success,.table > thead > tr.success > td,.table > tbody > tr.success > td,.table > tfoot > tr.success > td,.table > thead > tr.success > th,.table > tbody > tr.success > th,.table > tfoot > tr.success > th {
	background-color:#dff0d8
}
.table-hover > tbody > tr > td.success:hover,.table-hover > tbody > tr > th.success:hover,.table-hover > tbody > tr.success:hover > td,.table-hover > tbody > tr:hover > .success,.table-hover > tbody > tr.success:hover > th {
	background-color:#d0e9c6
}
.table > thead > tr > td.info,.table > tbody > tr > td.info,.table > tfoot > tr > td.info,.table > thead > tr > th.info,.table > tbody > tr > th.info,.table > tfoot > tr > th.info,.table > thead > tr.info > td,.table > tbody > tr.info > td,.table > tfoot > tr.info > td,.table > thead > tr.info > th,.table > tbody > tr.info > th,.table > tfoot > tr.info > th {
	background-color:#d9edf7
}
.table-hover > tbody > tr > td.info:hover,.table-hover > tbody > tr > th.info:hover,.table-hover > tbody > tr.info:hover > td,.table-hover > tbody > tr:hover > .info,.table-hover > tbody > tr.info:hover > th {
	background-color:#c4e3f3
}
.table > thead > tr > td.warning,.table > tbody > tr > td.warning,.table > tfoot > tr > td.warning,.table > thead > tr > th.warning,.table > tbody > tr > th.warning,.table > tfoot > tr > th.warning,.table > thead > tr.warning > td,.table > tbody > tr.warning > td,.table > tfoot > tr.warning > td,.table > thead > tr.warning > th,.table > tbody > tr.warning > th,.table > tfoot > tr.warning > th {
	background-color:#fcf8e3
}
.table-hover > tbody > tr > td.warning:hover,.table-hover > tbody > tr > th.warning:hover,.table-hover > tbody > tr.warning:hover > td,.table-hover > tbody > tr:hover > .warning,.table-hover > tbody > tr.warning:hover > th {
	background-color:#faf2cc
}
.table > thead > tr > td.danger,.table > tbody > tr > td.danger,.table > tfoot > tr > td.danger,.table > thead > tr > th.danger,.table > tbody > tr > th.danger,.table > tfoot > tr > th.danger,.table > thead > tr.danger > td,.table > tbody > tr.danger > td,.table > tfoot > tr.danger > td,.table > thead > tr.danger > th,.table > tbody > tr.danger > th,.table > tfoot > tr.danger > th {
	background-color:#f2dede
}
.table-hover > tbody > tr > td.danger:hover,.table-hover > tbody > tr > th.danger:hover,.table-hover > tbody > tr.danger:hover > td,.table-hover > tbody > tr:hover > .danger,.table-hover > tbody > tr.danger:hover > th {
	background-color:#ebcccc
}
.table-responsive {
	min-height:.01%;
	overflow-x:auto
}
@media screen and (max-width: 767px) {
	.table-responsive {
		width:100%;
		margin-bottom:15px;
		overflow-y:hidden;
		-ms-overflow-style:-ms-autohiding-scrollbar;
		border:1px solid #ddd
	}
	.table-responsive > .table {
		margin-bottom:0
	}
	.table-responsive > .table > thead > tr > th,.table-responsive > .table > tbody > tr > th,.table-responsive > .table > tfoot > tr > th,.table-responsive > .table > thead > tr > td,.table-responsive > .table > tbody > tr > td,.table-responsive > .table > tfoot > tr > td {
		white-space:nowrap
	}
	.table-responsive > .table-bordered {
		border:0
	}
	.table-responsive > .table-bordered > thead > tr > th:first-child,.table-responsive > .table-bordered > tbody > tr > th:first-child,.table-responsive > .table-bordered > tfoot > tr > th:first-child,.table-responsive > .table-bordered > thead > tr > td:first-child,.table-responsive > .table-bordered > tbody > tr > td:first-child,.table-responsive > .table-bordered > tfoot > tr > td:first-child {
		border-left:0
	}
	.table-responsive > .table-bordered > thead > tr > th:last-child,.table-responsive > .table-bordered > tbody > tr > th:last-child,.table-responsive > .table-bordered > tfoot > tr > th:last-child,.table-responsive > .table-bordered > thead > tr > td:last-child,.table-responsive > .table-bordered > tbody > tr > td:last-child,.table-responsive > .table-bordered > tfoot > tr > td:last-child {
		border-right:0
	}
	.table-responsive > .table-bordered > tbody > tr:last-child > th,.table-responsive > .table-bordered > tfoot > tr:last-child > th,.table-responsive > .table-bordered > tbody > tr:last-child > td,.table-responsive > .table-bordered > tfoot > tr:last-child > td {
		border-bottom:0
	}
}
fieldset {
	min-width:0;
	padding:0;
	margin:0;
	border:0
}
legend {
	display:block;
	width:100%;
	padding:0;
	margin-bottom:20px;
	font-size:21px;
	line-height:inherit;
	color:#333;
	border:0;
	border-bottom:1px solid #e5e5e5
}
label {
	display:inline-block;
	max-width:100%;
	margin-bottom:5px;
	font-weight:bold
}
input[type="search"] {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box
}
input[type="radio"],input[type="checkbox"] {
	margin:4px 0 0;
	margin-top:1px \9;
	line-height:normal
}
input[type="file"] {
	display:block
}
input[type="range"] {
	display:block;
	width:100%
}
select[multiple],select[size] {
	height:auto
}
input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus {
	outline:thin dotted;
	outline:5px auto -webkit-focus-ring-color;
	outline-offset:-2px
}
output {
	display:block;
	padding-top:7px;
	font-size:14px;
	line-height:1.42857143;
	color:#555
}
.form-control {
	display:block;
	width:100%;
	height:34px;
	padding:6px 12px;
	font-size:14px;
	line-height:1.42857143;
	color:#555;
	background-color:#fff;
	background-image:none;
	border:1px solid #ccc;
	border-radius:4px;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);
	-webkit-transition:border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
	-o-transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	transition:border-color ease-in-out .15s, box-shadow ease-in-out .15s
}
.form-control:focus {
	border-color:#66afe9;
	outline:0;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
	box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6)
}
.form-control::-moz-placeholder {
	color:#999;
	opacity:1
}
.form-control:-ms-input-placeholder {
	color:#999
}
.form-control::-webkit-input-placeholder {
	color:#999
}
.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control {
	cursor:not-allowed;
	background-color:#eee;
	opacity:1
}
textarea.form-control {
	height:auto
}
input[type="search"] {
	-webkit-appearance:none
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
	input[type="date"],input[type="time"],input[type="datetime-local"],input[type="month"] {
		line-height:34px
	}
	input[type="date"].input-sm,input[type="time"].input-sm,input[type="datetime-local"].input-sm,input[type="month"].input-sm,.input-group-sm input[type="date"],.input-group-sm input[type="time"],.input-group-sm input[type="datetime-local"],.input-group-sm input[type="month"] {
		line-height:30px
	}
	input[type="date"].input-lg,input[type="time"].input-lg,input[type="datetime-local"].input-lg,input[type="month"].input-lg,.input-group-lg input[type="date"],.input-group-lg input[type="time"],.input-group-lg input[type="datetime-local"],.input-group-lg input[type="month"] {
		line-height:46px
	}
}
.form-group {
	margin-bottom:15px
}
.radio,.checkbox {
	position:relative;
	display:block;
	margin-top:10px;
	margin-bottom:10px
}
.radio label,.checkbox label {
	min-height:20px;
	padding-left:20px;
	margin-bottom:0;
	font-weight:normal;
	cursor:pointer
}
.radio input[type="radio"],.radio-inline input[type="radio"],.checkbox input[type="checkbox"],.checkbox-inline input[type="checkbox"] {
	position:absolute;
	margin-top:4px \9;
	margin-left:-20px
}
.radio + .radio,.checkbox + .checkbox {
	margin-top:-5px
}
.radio-inline,.checkbox-inline {
	display:inline-block;
	padding-left:20px;
	margin-bottom:0;
	font-weight:normal;
	vertical-align:middle;
	cursor:pointer
}
.radio-inline + .radio-inline,.checkbox-inline + .checkbox-inline {
	margin-top:0;
	margin-left:10px
}
input[type="radio"][disabled],input[type="checkbox"][disabled],input[type="radio"].disabled,input[type="checkbox"].disabled,fieldset[disabled] input[type="radio"],fieldset[disabled] input[type="checkbox"] {
	cursor:not-allowed
}
.radio-inline.disabled,.checkbox-inline.disabled,fieldset[disabled] .radio-inline,fieldset[disabled] .checkbox-inline {
	cursor:not-allowed
}
.radio.disabled label,.checkbox.disabled label,fieldset[disabled] .radio label,fieldset[disabled] .checkbox label {
	cursor:not-allowed
}
.form-control-static {
	padding-top:7px;
	padding-bottom:7px;
	margin-bottom:0
}
.form-control-static.input-lg,.form-control-static.input-sm {
	padding-right:0;
	padding-left:0
}
.input-sm {
	height:30px;
	padding:5px 10px;
	font-size:12px;
	line-height:1.5;
	border-radius:3px
}
select.input-sm {
	height:30px;
	line-height:30px
}
textarea.input-sm,select[multiple].input-sm {
	height:auto
}
.form-group-sm .form-control {
	height:30px;
	padding:5px 10px;
	font-size:12px;
	line-height:1.5;
	border-radius:3px
}
select.form-group-sm .form-control {
	height:30px;
	line-height:30px
}
textarea.form-group-sm .form-control,select[multiple].form-group-sm .form-control {
	height:auto
}
.form-group-sm .form-control-static {
	height:30px;
	padding:5px 10px;
	font-size:12px;
	line-height:1.5
}
.input-lg {
	height:46px;
	padding:10px 16px;
	font-size:18px;
	line-height:1.3333333;
	border-radius:6px
}
select.input-lg {
	height:46px;
	line-height:46px
}
textarea.input-lg,select[multiple].input-lg {
	height:auto
}
.form-group-lg .form-control {
	height:46px;
	padding:10px 16px;
	font-size:18px;
	line-height:1.3333333;
	border-radius:6px
}
select.form-group-lg .form-control {
	height:46px;
	line-height:46px
}
textarea.form-group-lg .form-control,select[multiple].form-group-lg .form-control {
	height:auto
}
.form-group-lg .form-control-static {
	height:46px;
	padding:10px 16px;
	font-size:18px;
	line-height:1.3333333
}
.has-feedback {
	position:relative
}
.has-feedback .form-control {
	padding-right:42.5px
}
.form-control-feedback {
	position:absolute;
	top:0;
	right:0;
	z-index:2;
	display:block;
	width:34px;
	height:34px;
	line-height:34px;
	text-align:center;
	pointer-events:none
}
.input-lg + .form-control-feedback {
	width:46px;
	height:46px;
	line-height:46px
}
.input-sm + .form-control-feedback {
	width:30px;
	height:30px;
	line-height:30px
}
.has-success .help-block,.has-success .control-label,.has-success .radio,.has-success .checkbox,.has-success .radio-inline,.has-success .checkbox-inline,.has-success.radio label,.has-success.checkbox label,.has-success.radio-inline label,.has-success.checkbox-inline label {
	color:#3c763d
}
.has-success .form-control {
	border-color:#3c763d;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075)
}
.has-success .form-control:focus {
	border-color:#2b542c;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
}
.has-success .input-group-addon {
	color:#3c763d;
	background-color:#dff0d8;
	border-color:#3c763d
}
.has-success .form-control-feedback {
	color:#3c763d
}
.has-warning .help-block,.has-warning .control-label,.has-warning .radio,.has-warning .checkbox,.has-warning .radio-inline,.has-warning .checkbox-inline,.has-warning.radio label,.has-warning.checkbox label,.has-warning.radio-inline label,.has-warning.checkbox-inline label {
	color:#8a6d3b
}
.has-warning .form-control {
	border-color:#8a6d3b;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075)
}
.has-warning .form-control:focus {
	border-color:#66512c;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
}
.has-warning .input-group-addon {
	color:#8a6d3b;
	background-color:#fcf8e3;
	border-color:#8a6d3b
}
.has-warning .form-control-feedback {
	color:#8a6d3b
}
.has-error .help-block,.has-error .control-label,.has-error .radio,.has-error .checkbox,.has-error .radio-inline,.has-error .checkbox-inline,.has-error.radio label,.has-error.checkbox label,.has-error.radio-inline label,.has-error.checkbox-inline label {
	color:#a94442
}
.has-error .form-control {
	border-color:#a94442;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075)
}
.has-error .form-control:focus {
	border-color:#843534;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
}
.has-error .input-group-addon {
	color:#a94442;
	background-color:#f2dede;
	border-color:#a94442
}
.has-error .form-control-feedback {
	color:#a94442
}
.has-feedback label ~ .form-control-feedback {
	top:25px
}
.has-feedback label.sr-only ~ .form-control-feedback {
	top:0
}
.help-block {
	display:block;
	margin-top:5px;
	margin-bottom:10px;
	color:#737373
}
@media (min-width: 768px) {
	.form-inline .form-group {
		display:inline-block;
		margin-bottom:0;
		vertical-align:middle
	}
	.form-inline .form-control {
		display:inline-block;
		width:auto;
		vertical-align:middle
	}
	.form-inline .form-control-static {
		display:inline-block
	}
	.form-inline .input-group {
		display:inline-table;
		vertical-align:middle
	}
	.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn,.form-inline .input-group .form-control {
		width:auto
	}
	.form-inline .input-group > .form-control {
		width:100%
	}
	.form-inline .control-label {
		margin-bottom:0;
		vertical-align:middle
	}
	.form-inline .radio,.form-inline .checkbox {
		display:inline-block;
		margin-top:0;
		margin-bottom:0;
		vertical-align:middle
	}
	.form-inline .radio label,.form-inline .checkbox label {
		padding-left:0
	}
	.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"] {
		position:relative;
		margin-left:0
	}
	.form-inline .has-feedback .form-control-feedback {
		top:0
	}
}
.form-horizontal .radio,.form-horizontal .checkbox,.form-horizontal .radio-inline,.form-horizontal .checkbox-inline {
	padding-top:7px;
	margin-top:0;
	margin-bottom:0
}
.form-horizontal .radio,.form-horizontal .checkbox {
	min-height:27px
}
.form-horizontal .form-group {
	margin-right:-15px;
	margin-left:-15px
}
@media (min-width: 768px) {
	.form-horizontal .control-label {
		padding-top:7px;
		margin-bottom:0;
		text-align:right
	}
}
.form-horizontal .has-feedback .form-control-feedback {
	right:15px
}
@media (min-width: 768px) {
	.form-horizontal .form-group-lg .control-label {
		padding-top:14.333333px
	}
}
@media (min-width: 768px) {
	.form-horizontal .form-group-sm .control-label {
		padding-top:6px
	}
}
.btn {
	display:inline-block;
	padding:6px 12px;
	margin-bottom:0;
	font-size:14px;
	font-weight:normal;
	line-height:1.42857143;
	text-align:center;
	white-space:nowrap;
	vertical-align:middle;
	-ms-touch-action:manipulation;
	touch-action:manipulation;
	cursor:pointer;
	-webkit-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none;
	background-image:none;
	border:1px solid transparent;
	border-radius:4px
}
.btn:focus,.btn:active:focus,.btn.active:focus,.btn.focus,.btn:active.focus,.btn.active.focus {
	outline:thin dotted;
	outline:5px auto -webkit-focus-ring-color;
	outline-offset:-2px
}
.btn:hover,.btn:focus,.btn.focus {
	color:#333;
	text-decoration:none
}
.btn:active,.btn.active {
	background-image:none;
	outline:0;
	-webkit-box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);
	box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125)
}
.btn.disabled,.btn[disabled],fieldset[disabled] .btn {
	pointer-events:none;
	cursor:not-allowed;
	filter:alpha(opacity=65);
	-webkit-box-shadow:none;
	box-shadow:none;
	opacity:.65
}
.btn-default {
	color:#333;
	background-color:#fff;
	border-color:#ccc
}
.btn-default:hover,.btn-default:focus,.btn-default.focus,.btn-default:active,.btn-default.active,.open > .dropdown-toggle.btn-default {
	color:#333;
	background-color:#e6e6e6;
	border-color:#adadad
}
.btn-default:active,.btn-default.active,.open > .dropdown-toggle.btn-default {
	background-image:none
}
.btn-default.disabled,.btn-default[disabled],fieldset[disabled] .btn-default,.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus,.btn-default.disabled:active,.btn-default[disabled]:active,fieldset[disabled] .btn-default:active,.btn-default.disabled.active,.btn-default[disabled].active,fieldset[disabled] .btn-default.active {
	background-color:#fff;
	border-color:#ccc
}
.btn-default .badge {
	color:#fff;
	background-color:#333
}
.btn-primary {
	color:#fff;
	background-color:#337ab7;
	border-color:#2e6da4
}
.btn-primary:hover,.btn-primary:focus,.btn-primary.focus,.btn-primary:active,.btn-primary.active,.open > .dropdown-toggle.btn-primary {
	color:#fff;
	background-color:#286090;
	border-color:#204d74
}
.btn-primary:active,.btn-primary.active,.open > .dropdown-toggle.btn-primary {
	background-image:none
}
.btn-primary.disabled,.btn-primary[disabled],fieldset[disabled] .btn-primary,.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus,.btn-primary.disabled:active,.btn-primary[disabled]:active,fieldset[disabled] .btn-primary:active,.btn-primary.disabled.active,.btn-primary[disabled].active,fieldset[disabled] .btn-primary.active {
	background-color:#337ab7;
	border-color:#2e6da4
}
.btn-primary .badge {
	color:#337ab7;
	background-color:#fff
}
.btn-success {
	color:#fff;
	background-color:#5cb85c;
	border-color:#4cae4c
}
.btn-success:hover,.btn-success:focus,.btn-success.focus,.btn-success:active,.btn-success.active,.open > .dropdown-toggle.btn-success {
	color:#fff;
	background-color:#449d44;
	border-color:#398439
}
.btn-success:active,.btn-success.active,.open > .dropdown-toggle.btn-success {
	background-image:none
}
.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled.focus,.btn-success[disabled].focus,fieldset[disabled] .btn-success.focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled] .btn-success.active {
	background-color:#5cb85c;
	border-color:#4cae4c
}
.btn-success .badge {
	color:#5cb85c;
	background-color:#fff
}
.btn-info {
	color:#fff;
	background-color:#5bc0de;
	border-color:#46b8da
}
.btn-info:hover,.btn-info:focus,.btn-info.focus,.btn-info:active,.btn-info.active,.open > .dropdown-toggle.btn-info {
	color:#fff;
	background-color:#31b0d5;
	border-color:#269abc
}
.btn-info:active,.btn-info.active,.open > .dropdown-toggle.btn-info {
	background-image:none
}
.btn-info.disabled,.btn-info[disabled],fieldset[disabled] .btn-info,.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled.focus,.btn-info[disabled].focus,fieldset[disabled] .btn-info.focus,.btn-info.disabled:active,.btn-info[disabled]:active,fieldset[disabled] .btn-info:active,.btn-info.disabled.active,.btn-info[disabled].active,fieldset[disabled] .btn-info.active {
	background-color:#5bc0de;
	border-color:#46b8da
}
.btn-info .badge {
	color:#5bc0de;
	background-color:#fff
}
.btn-warning {
	color:#fff;
	background-color:#f0ad4e;
	border-color:#eea236
}
.btn-warning:hover,.btn-warning:focus,.btn-warning.focus,.btn-warning:active,.btn-warning.active,.open > .dropdown-toggle.btn-warning {
	color:#fff;
	background-color:#ec971f;
	border-color:#d58512
}
.btn-warning:active,.btn-warning.active,.open > .dropdown-toggle.btn-warning {
	background-image:none
}
.btn-warning.disabled,.btn-warning[disabled],fieldset[disabled] .btn-warning,.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled.focus,.btn-warning[disabled].focus,fieldset[disabled] .btn-warning.focus,.btn-warning.disabled:active,.btn-warning[disabled]:active,fieldset[disabled] .btn-warning:active,.btn-warning.disabled.active,.btn-warning[disabled].active,fieldset[disabled] .btn-warning.active {
	background-color:#f0ad4e;
	border-color:#eea236
}
.btn-warning .badge {
	color:#f0ad4e;
	background-color:#fff
}
.btn-danger {
	color:#fff;
	background-color:#d9534f;
	border-color:#d43f3a
}
.btn-danger:hover,.btn-danger:focus,.btn-danger.focus,.btn-danger:active,.btn-danger.active,.open > .dropdown-toggle.btn-danger {
	color:#fff;
	background-color:#c9302c;
	border-color:#ac2925
}
.btn-danger:active,.btn-danger.active,.open > .dropdown-toggle.btn-danger {
	background-image:none
}
.btn-danger.disabled,.btn-danger[disabled],fieldset[disabled] .btn-danger,.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled.focus,.btn-danger[disabled].focus,fieldset[disabled] .btn-danger.focus,.btn-danger.disabled:active,.btn-danger[disabled]:active,fieldset[disabled] .btn-danger:active,.btn-danger.disabled.active,.btn-danger[disabled].active,fieldset[disabled] .btn-danger.active {
	background-color:#d9534f;
	border-color:#d43f3a
}
.btn-danger .badge {
	color:#d9534f;
	background-color:#fff
}
.btn-link {
	font-weight:normal;
	color:#337ab7;
	border-radius:0
}
.btn-link,.btn-link:active,.btn-link.active,.btn-link[disabled],fieldset[disabled] .btn-link {
	background-color:transparent;
	-webkit-box-shadow:none;
	box-shadow:none
}
.btn-link,.btn-link:hover,.btn-link:focus,.btn-link:active {
	border-color:transparent
}
.btn-link:hover,.btn-link:focus {
	color:#23527c;
	text-decoration:underline;
	background-color:transparent
}
.btn-link[disabled]:hover,fieldset[disabled] .btn-link:hover,.btn-link[disabled]:focus,fieldset[disabled] .btn-link:focus {
	color:#777;
	text-decoration:none
}
.btn-lg,.btn-group-lg > .btn {
	padding:10px 16px;
	font-size:18px;
	line-height:1.3333333;
	border-radius:6px
}
.btn-sm,.btn-group-sm > .btn {
	padding:5px 10px;
	font-size:12px;
	line-height:1.5;
	border-radius:3px
}
.btn-xs,.btn-group-xs > .btn {
	padding:1px 5px;
	font-size:12px;
	line-height:1.5;
	border-radius:3px
}
.btn-block {
	display:block;
	width:100%
}
.btn-block + .btn-block {
	margin-top:5px
}
input[type="submit"].btn-block,input[type="reset"].btn-block,input[type="button"].btn-block {
	width:100%
}
.fade {
	opacity:0;
	-webkit-transition:opacity .15s linear;
	-o-transition:opacity .15s linear;
	transition:opacity .15s linear
}
.fade.in {
	opacity:1
}
.collapse {
	display:none;
	visibility:hidden
}
.collapse.in {
	display:block;
	visibility:visible
}
tr.collapse.in {
	display:table-row
}
tbody.collapse.in {
	display:table-row-group
}
.collapsing {
	position:relative;
	height:0;
	overflow:hidden;
	-webkit-transition-timing-function:ease;
	-o-transition-timing-function:ease;
	transition-timing-function:ease;
	-webkit-transition-duration:.35s;
	-o-transition-duration:.35s;
	transition-duration:.35s;
	-webkit-transition-property:height, visibility;
	-o-transition-property:height, visibility;
	transition-property:height, visibility
}
.caret {
	display:inline-block;
	width:0;
	height:0;
	margin-left:2px;
	vertical-align:middle;
	border-top:4px solid;
	border-right:4px solid transparent;
	border-left:4px solid transparent
}
.dropup,.dropdown {
	position:relative
}
.dropdown-toggle:focus {
	outline:0
}
.dropdown-menu {
	position:absolute;
	top:100%;
	left:0;
	z-index:1000;
	display:none;
	float:left;
	min-width:160px;
	padding:5px 0;
	margin:2px 0 0;
	font-size:14px;
	text-align:left;
	list-style:none;
	background-color:#fff;
	-webkit-background-clip:padding-box;
	background-clip:padding-box;
	border:1px solid #ccc;
	border:1px solid rgba(0, 0, 0, .15);
	border-radius:4px;
	-webkit-box-shadow:0 6px 12px rgba(0, 0, 0, .175);
	box-shadow:0 6px 12px rgba(0, 0, 0, .175)
}
.dropdown-menu.pull-right {
	right:0;
	left:auto
}
.dropdown-menu .divider {
	height:1px;
	margin:9px 0;
	overflow:hidden;
	background-color:#e5e5e5
}
.dropdown-menu > li > a {
	display:block;
	padding:3px 20px;
	clear:both;
	font-weight:normal;
	line-height:1.42857143;
	color:#333;
	white-space:nowrap
}
.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus {
	color:#262626;
	text-decoration:none;
	background-color:#f5f5f5
}
.dropdown-menu > .active > a,.dropdown-menu > .active > a:hover,.dropdown-menu > .active > a:focus {
	color:#fff;
	text-decoration:none;
	background-color:#337ab7;
	outline:0
}
.dropdown-menu > .disabled > a,.dropdown-menu > .disabled > a:hover,.dropdown-menu > .disabled > a:focus {
	color:#777
}
.dropdown-menu > .disabled > a:hover,.dropdown-menu > .disabled > a:focus {
	text-decoration:none;
	cursor:not-allowed;
	background-color:transparent;
	background-image:none;
	filter:progid:DXImageTransform.Microsoft.gradient(enabled = false)
}
.open > .dropdown-menu {
	display:block
}
.open > a {
	outline:0
}
.dropdown-menu-right {
	right:0;
	left:auto
}
.dropdown-menu-left {
	right:auto;
	left:0
}
.dropdown-header {
	display:block;
	padding:3px 20px;
	font-size:12px;
	line-height:1.42857143;
	color:#777;
	white-space:nowrap
}
.dropdown-backdrop {
	position:fixed;
	top:0;
	right:0;
	bottom:0;
	left:0;
	z-index:990
}
.pull-right > .dropdown-menu {
	right:0;
	left:auto
}
.dropup .caret,.navbar-fixed-bottom .dropdown .caret {
	content:"";
	border-top:0;
	border-bottom:4px solid
}
.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu {
	top:auto;
	bottom:100%;
	margin-bottom:2px
}
@media (min-width: 768px) {
	.navbar-right .dropdown-menu {
		right:0;
		left:auto
	}
	.navbar-right .dropdown-menu-left {
		right:auto;
		left:0
	}
}
.btn-group,.btn-group-vertical {
	position:relative;
	display:inline-block;
	vertical-align:middle
}
.btn-group > .btn,.btn-group-vertical > .btn {
	position:relative;
	float:left
}
.btn-group > .btn:hover,.btn-group-vertical > .btn:hover,.btn-group > .btn:focus,.btn-group-vertical > .btn:focus,.btn-group > .btn:active,.btn-group-vertical > .btn:active,.btn-group > .btn.active,.btn-group-vertical > .btn.active {
	z-index:2
}
.btn-group .btn + .btn,.btn-group .btn + .btn-group,.btn-group .btn-group + .btn,.btn-group .btn-group + .btn-group {
	margin-left:-1px
}
.btn-toolbar {
	margin-left:-5px
}
.btn-toolbar .btn-group,.btn-toolbar .input-group {
	float:left
}
.btn-toolbar > .btn,.btn-toolbar > .btn-group,.btn-toolbar > .input-group {
	margin-left:5px
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
	border-radius:0
}
.btn-group > .btn:first-child {
	margin-left:0
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
	border-top-right-radius:0;
	border-bottom-right-radius:0
}
.btn-group > .btn:last-child:not(:first-child),.btn-group > .dropdown-toggle:not(:first-child) {
	border-top-left-radius:0;
	border-bottom-left-radius:0
}
.btn-group > .btn-group {
	float:left
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
	border-radius:0
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
	border-top-right-radius:0;
	border-bottom-right-radius:0
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
	border-top-left-radius:0;
	border-bottom-left-radius:0
}
.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle {
	outline:0
}
.btn-group > .btn + .dropdown-toggle {
	padding-right:8px;
	padding-left:8px
}
.btn-group > .btn-lg + .dropdown-toggle {
	padding-right:12px;
	padding-left:12px
}
.btn-group.open .dropdown-toggle {
	-webkit-box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125);
	box-shadow:inset 0 3px 5px rgba(0, 0, 0, .125)
}
.btn-group.open .dropdown-toggle.btn-link {
	-webkit-box-shadow:none;
	box-shadow:none
}
.btn .caret {
	margin-left:0
}
.btn-lg .caret {
	border-width:5px 5px 0;
	border-bottom-width:0
}
.dropup .btn-lg .caret {
	border-width:0 5px 5px
}
.btn-group-vertical > .btn,.btn-group-vertical > .btn-group,.btn-group-vertical > .btn-group > .btn {
	display:block;
	float:none;
	width:100%;
	max-width:100%
}
.btn-group-vertical > .btn-group > .btn {
	float:none
}
.btn-group-vertical > .btn + .btn,.btn-group-vertical > .btn + .btn-group,.btn-group-vertical > .btn-group + .btn,.btn-group-vertical > .btn-group + .btn-group {
	margin-top:-1px;
	margin-left:0
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
	border-radius:0
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
	border-top-right-radius:4px;
	border-bottom-right-radius:0;
	border-bottom-left-radius:0
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
	border-top-left-radius:0;
	border-top-right-radius:0;
	border-bottom-left-radius:4px
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
	border-radius:0
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
	border-bottom-right-radius:0;
	border-bottom-left-radius:0
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
	border-top-left-radius:0;
	border-top-right-radius:0
}
.btn-group-justified {
	display:table;
	width:100%;
	table-layout:fixed;
	border-collapse:separate
}
.btn-group-justified > .btn,.btn-group-justified > .btn-group {
	display:table-cell;
	float:none;
	width:1%
}
.btn-group-justified > .btn-group .btn {
	width:100%
}
.btn-group-justified > .btn-group .dropdown-menu {
	left:auto
}
[data-toggle="buttons"] > .btn input[type="radio"],[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],[data-toggle="buttons"] > .btn input[type="checkbox"],[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"] {
	position:absolute;
	clip:rect(0, 0, 0, 0);
	pointer-events:none
}
.input-group {
	position:relative;
	display:table;
	border-collapse:separate
}
.input-group[class*="col-"] {
	float:none;
	padding-right:0;
	padding-left:0
}
.input-group .form-control {
	position:relative;
	z-index:2;
	float:left;
	width:100%;
	margin-bottom:0
}
.input-group-lg > .form-control,.input-group-lg > .input-group-addon,.input-group-lg > .input-group-btn > .btn {
	height:46px;
	padding:10px 16px;
	font-size:18px;
	line-height:1.3333333;
	border-radius:6px
}
select.input-group-lg > .form-control,select.input-group-lg > .input-group-addon,select.input-group-lg > .input-group-btn > .btn {
	height:46px;
	line-height:46px
}
textarea.input-group-lg > .form-control,textarea.input-group-lg > .input-group-addon,textarea.input-group-lg > .input-group-btn > .btn,select[multiple].input-group-lg > .form-control,select[multiple].input-group-lg > .input-group-addon,select[multiple].input-group-lg > .input-group-btn > .btn {
	height:auto
}
.input-group-sm > .form-control,.input-group-sm > .input-group-addon,.input-group-sm > .input-group-btn > .btn {
	height:30px;
	padding:5px 10px;
	font-size:12px;
	line-height:1.5;
	border-radius:3px
}
select.input-group-sm > .form-control,select.input-group-sm > .input-group-addon,select.input-group-sm > .input-group-btn > .btn {
	height:30px;
	line-height:30px
}
textarea.input-group-sm > .form-control,textarea.input-group-sm > .input-group-addon,textarea.input-group-sm > .input-group-btn > .btn,select[multiple].input-group-sm > .form-control,select[multiple].input-group-sm > .input-group-addon,select[multiple].input-group-sm > .input-group-btn > .btn {
	height:auto
}
.input-group-addon,.input-group-btn,.input-group .form-control {
	display:table-cell
}
.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child),.input-group .form-control:not(:first-child):not(:last-child) {
	border-radius:0
}
.input-group-addon,.input-group-btn {
	width:1%;
	white-space:nowrap;
	vertical-align:middle
}
.input-group-addon {
	padding:6px 12px;
	font-size:14px;
	font-weight:normal;
	line-height:1;
	color:#555;
	text-align:center;
	background-color:#eee;
	border:1px solid #ccc;
	border-radius:4px
}
.input-group-addon.input-sm {
	padding:5px 10px;
	font-size:12px;
	border-radius:3px
}
.input-group-addon.input-lg {
	padding:10px 16px;
	font-size:18px;
	border-radius:6px
}
.input-group-addon input[type="radio"],.input-group-addon input[type="checkbox"] {
	margin-top:0
}
.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child > .btn,.input-group-btn:first-child > .btn-group > .btn,.input-group-btn:first-child > .dropdown-toggle,.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
	border-top-right-radius:0;
	border-bottom-right-radius:0
}
.input-group-addon:first-child {
	border-right:0
}
.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:last-child > .btn,.input-group-btn:last-child > .btn-group > .btn,.input-group-btn:last-child > .dropdown-toggle,.input-group-btn:first-child > .btn:not(:first-child),.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
	border-top-left-radius:0;
	border-bottom-left-radius:0
}
.input-group-addon:last-child {
	border-left:0
}
.input-group-btn {
	position:relative;
	font-size:0;
	white-space:nowrap
}
.input-group-btn > .btn {
	position:relative
}
.input-group-btn > .btn + .btn {
	margin-left:-1px
}
.input-group-btn > .btn:hover,.input-group-btn > .btn:focus,.input-group-btn > .btn:active {
	z-index:2
}
.input-group-btn:first-child > .btn,.input-group-btn:first-child > .btn-group {
	margin-right:-1px
}
.input-group-btn:last-child > .btn,.input-group-btn:last-child > .btn-group {
	margin-left:-1px
}
.nav {
	padding-left:0;
	margin-bottom:0;
	list-style:none
}
.nav > li {
	position:relative;
	display:block
}
.nav > li > a {
	position:relative;
	display:block;
	padding:10px 15px
}
.nav > li > a:hover,.nav > li > a:focus {
	text-decoration:none;
	background-color:#eee
}
.nav > li.disabled > a {
	color:#777
}
.nav > li.disabled > a:hover,.nav > li.disabled > a:focus {
	color:#777;
	text-decoration:none;
	cursor:not-allowed;
	background-color:transparent
}
.nav .open > a,.nav .open > a:hover,.nav .open > a:focus {
	background-color:#eee;
	border-color:#337ab7
}
.nav .nav-divider {
	height:1px;
	margin:9px 0;
	overflow:hidden;
	background-color:#e5e5e5
}
.nav > li > a > img {
	max-width:none
}
.nav-tabs {
	border-bottom:1px solid #ddd
}
.nav-tabs > li {
	float:left;
	margin-bottom:-1px
}
.nav-tabs > li > a {
	margin-right:2px;
	line-height:1.42857143;
	border:1px solid transparent;
	border-radius:4px 4px 0 0
}
.nav-tabs > li > a:hover {
	border-color:#eee #eee #ddd
}
.nav-tabs > li.active > a,.nav-tabs > li.active > a:hover,.nav-tabs > li.active > a:focus {
	color:#555;
	cursor:default;
	background-color:#fff;
	border:1px solid #ddd;
	border-bottom-color:transparent
}
.nav-tabs.nav-justified {
	width:100%;
	border-bottom:0
}
.nav-tabs.nav-justified > li {
	float:none
}
.nav-tabs.nav-justified > li > a {
	margin-bottom:5px;
	text-align:center
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
	top:auto;
	left:auto
}
@media (min-width: 768px) {
	.nav-tabs.nav-justified > li {
		display:table-cell;
		width:1%
	}
	.nav-tabs.nav-justified > li > a {
		margin-bottom:0
	}
}
.nav-tabs.nav-justified > li > a {
	margin-right:0;
	border-radius:4px
}
.nav-tabs.nav-justified > .active > a,.nav-tabs.nav-justified > .active > a:hover,.nav-tabs.nav-justified > .active > a:focus {
	border:1px solid #ddd
}
@media (min-width: 768px) {
	.nav-tabs.nav-justified > li > a {
		border-bottom:1px solid #ddd;
		border-radius:4px 4px 0 0
	}
	.nav-tabs.nav-justified > .active > a,.nav-tabs.nav-justified > .active > a:hover,.nav-tabs.nav-justified > .active > a:focus {
		border-bottom-color:#fff
	}
}
.nav-pills > li {
	float:left
}
.nav-pills > li > a {
	border-radius:4px
}
.nav-pills > li + li {
	margin-left:2px
}
.nav-pills > li.active > a,.nav-pills > li.active > a:hover,.nav-pills > li.active > a:focus {
	color:#fff;
	background-color:#337ab7
}
.nav-stacked > li {
	float:none
}
.nav-stacked > li + li {
	margin-top:2px;
	margin-left:0
}
.nav-justified {
	width:100%
}
.nav-justified > li {
	float:none
}
.nav-justified > li > a {
	margin-bottom:5px;
	text-align:center
}
.nav-justified > .dropdown .dropdown-menu {
	top:auto;
	left:auto
}
@media (min-width: 768px) {
	.nav-justified > li {
		display:table-cell;
		width:1%
	}
	.nav-justified > li > a {
		margin-bottom:0
	}
}
.nav-tabs-justified {
	border-bottom:0
}
.nav-tabs-justified > li > a {
	margin-right:0;
	border-radius:4px
}
.nav-tabs-justified > .active > a,.nav-tabs-justified > .active > a:hover,.nav-tabs-justified > .active > a:focus {
	border:1px solid #ddd
}
@media (min-width: 768px) {
	.nav-tabs-justified > li > a {
		border-bottom:1px solid #ddd;
		border-radius:4px 4px 0 0
	}
	.nav-tabs-justified > .active > a,.nav-tabs-justified > .active > a:hover,.nav-tabs-justified > .active > a:focus {
		border-bottom-color:#fff
	}
}
.tab-content > .tab-pane {
	display:none;
	visibility:hidden
}
.tab-content > .active {
	display:block;
	visibility:visible
}
.nav-tabs .dropdown-menu {
	margin-top:-1px;
	border-top-left-radius:0;
	border-top-right-radius:0
}
.navbar {
	position:relative;
	min-height:50px;
	margin-bottom:20px;
	border:1px solid transparent
}
@media (min-width: 768px) {
	.navbar {
		border-radius:4px
	}
}
@media (min-width: 768px) {
	.navbar-header {
		float:left
	}
}
.navbar-collapse {
	padding-right:15px;
	padding-left:15px;
	overflow-x:visible;
	-webkit-overflow-scrolling:touch;
	border-top:1px solid transparent;
	-webkit-box-shadow:inset 0 1px 0 rgba(255, 255, 255, .1);
	box-shadow:inset 0 1px 0 rgba(255, 255, 255, .1)
}
.navbar-collapse.in {
	overflow-y:auto
}
@media (min-width: 768px) {
	.navbar-collapse {
		width:auto;
		border-top:0;
		-webkit-box-shadow:none;
		box-shadow:none
	}
	.navbar-collapse.collapse {
		display:block !important;
		height:auto !important;
		padding-bottom:0;
		overflow:visible !important;
		visibility:visible !important
	}
	.navbar-collapse.in {
		overflow-y:visible
	}
	.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse {
		padding-right:0;
		padding-left:0
	}
}
.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse {
	max-height:340px
}
@media (max-device-width: 480px) and (orientation: landscape) {
	.navbar-fixed-top .navbar-collapse,.navbar-fixed-bottom .navbar-collapse {
		max-height:200px
	}
}
.container > .navbar-header,.container-fluid > .navbar-header,.container > .navbar-collapse,.container-fluid > .navbar-collapse {
	margin-right:-15px;
	margin-left:-15px
}
@media (min-width: 768px) {
	.container > .navbar-header,.container-fluid > .navbar-header,.container > .navbar-collapse,.container-fluid > .navbar-collapse {
		margin-right:0;
		margin-left:0
	}
}
.navbar-static-top {
	z-index:1000;
	border-width:0 0 1px
}
@media (min-width: 768px) {
	.navbar-static-top {
		border-radius:0
	}
}
.navbar-fixed-top,.navbar-fixed-bottom {
	position:fixed;
	right:0;
	left:0;
	z-index:1030
}
@media (min-width: 768px) {
	.navbar-fixed-top,.navbar-fixed-bottom {
		border-radius:0
	}
}
.navbar-fixed-top {
	top:0;
	border-width:0 0 1px
}
.navbar-fixed-bottom {
	bottom:0;
	margin-bottom:0;
	border-width:1px 0 0
}
.navbar-brand {
	float:left;
	height:50px;
	padding:15px 15px;
	font-size:18px;
	line-height:20px
}
.navbar-brand:hover,.navbar-brand:focus {
	text-decoration:none
}
.navbar-brand > img {
	display:block
}
@media (min-width: 768px) {
	.navbar > .container .navbar-brand,.navbar > .container-fluid .navbar-brand {
		margin-left:-15px
	}
}
.navbar-toggle {
	position:relative;
	float:right;
	padding:9px 10px;
	margin-top:8px;
	margin-right:15px;
	margin-bottom:8px;
	background-color:transparent;
	background-image:none;
	border:1px solid transparent;
	border-radius:4px
}
.navbar-toggle:focus {
	outline:0
}
.navbar-toggle .icon-bar {
	display:block;
	width:22px;
	height:2px;
	border-radius:1px
}
.navbar-toggle .icon-bar + .icon-bar {
	margin-top:4px
}
@media (min-width: 768px) {
	.navbar-toggle {
		display:none
	}
}
.navbar-nav {
	margin:7.5px -15px
}
.navbar-nav > li > a {
	padding-top:10px;
	padding-bottom:10px;
	line-height:20px
}
@media (max-width: 767px) {
	.navbar-nav .open .dropdown-menu {
		position:static;
		float:none;
		width:auto;
		margin-top:0;
		background-color:transparent;
		border:0;
		-webkit-box-shadow:none;
		box-shadow:none
	}
	.navbar-nav .open .dropdown-menu > li > a,.navbar-nav .open .dropdown-menu .dropdown-header {
		padding:5px 15px 5px 25px
	}
	.navbar-nav .open .dropdown-menu > li > a {
		line-height:20px
	}
	.navbar-nav .open .dropdown-menu > li > a:hover,.navbar-nav .open .dropdown-menu > li > a:focus {
		background-image:none
	}
}
@media (min-width: 768px) {
	.navbar-nav {
		float:left;
		margin:0
	}
	.navbar-nav > li {
		float:left
	}
	.navbar-nav > li > a {
		padding-top:15px;
		padding-bottom:15px
	}
}
.navbar-form {
	padding:10px 15px;
	margin-top:8px;
	margin-right:-15px;
	margin-bottom:8px;
	margin-left:-15px;
	border-top:1px solid transparent;
	border-bottom:1px solid transparent;
	-webkit-box-shadow:inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
	box-shadow:inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
}
@media (min-width: 768px) {
	.navbar-form .form-group {
		display:inline-block;
		margin-bottom:0;
		vertical-align:middle
	}
	.navbar-form .form-control {
		display:inline-block;
		width:auto;
		vertical-align:middle
	}
	.navbar-form .form-control-static {
		display:inline-block
	}
	.navbar-form .input-group {
		display:inline-table;
		vertical-align:middle
	}
	.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn,.navbar-form .input-group .form-control {
		width:auto
	}
	.navbar-form .input-group > .form-control {
		width:100%
	}
	.navbar-form .control-label {
		margin-bottom:0;
		vertical-align:middle
	}
	.navbar-form .radio,.navbar-form .checkbox {
		display:inline-block;
		margin-top:0;
		margin-bottom:0;
		vertical-align:middle
	}
	.navbar-form .radio label,.navbar-form .checkbox label {
		padding-left:0
	}
	.navbar-form .radio input[type="radio"],.navbar-form .checkbox input[type="checkbox"] {
		position:relative;
		margin-left:0
	}
	.navbar-form .has-feedback .form-control-feedback {
		top:0
	}
}
@media (max-width: 767px) {
	.navbar-form .form-group {
		margin-bottom:5px
	}
	.navbar-form .form-group:last-child {
		margin-bottom:0
	}
}
@media (min-width: 768px) {
	.navbar-form {
		width:auto;
		padding-top:0;
		padding-bottom:0;
		margin-right:0;
		margin-left:0;
		border:0;
		-webkit-box-shadow:none;
		box-shadow:none
	}
}
.navbar-nav > li > .dropdown-menu {
	margin-top:0;
	border-top-left-radius:0;
	border-top-right-radius:0
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
	margin-bottom:0;
	border-top-left-radius:4px;
	border-top-right-radius:4px;
	border-bottom-right-radius:0;
	border-bottom-left-radius:0
}
.navbar-btn {
	margin-top:8px;
	margin-bottom:8px
}
.navbar-btn.btn-sm {
	margin-top:10px;
	margin-bottom:10px
}
.navbar-btn.btn-xs {
	margin-top:14px;
	margin-bottom:14px
}
.navbar-text {
	margin-top:15px;
	margin-bottom:15px
}
@media (min-width: 768px) {
	.navbar-text {
		float:left;
		margin-right:15px;
		margin-left:15px
	}
}
@media (min-width: 768px) {
	.navbar-left {
		float:left !important
	}
	.navbar-right {
		float:right !important;
		margin-right:-15px
	}
	.navbar-right ~ .navbar-right {
		margin-right:0
	}
}
.navbar-default {
	background-color:#f8f8f8;
	border-color:#e7e7e7
}
.navbar-default .navbar-brand {
	color:#777
}
.navbar-default .navbar-brand:hover,.navbar-default .navbar-brand:focus {
	color:#5e5e5e;
	background-color:transparent
}
.navbar-default .navbar-text {
	color:#777
}
.navbar-default .navbar-nav > li > a {
	color:#777
}
.navbar-default .navbar-nav > li > a:hover,.navbar-default .navbar-nav > li > a:focus {
	color:#333;
	background-color:transparent
}
.navbar-default .navbar-nav > .active > a,.navbar-default .navbar-nav > .active > a:hover,.navbar-default .navbar-nav > .active > a:focus {
	color:#555;
	background-color:#e7e7e7
}
.navbar-default .navbar-nav > .disabled > a,.navbar-default .navbar-nav > .disabled > a:hover,.navbar-default .navbar-nav > .disabled > a:focus {
	color:#ccc;
	background-color:transparent
}
.navbar-default .navbar-toggle {
	border-color:#ddd
}
.navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus {
	background-color:#ddd
}
.navbar-default .navbar-toggle .icon-bar {
	background-color:#888
}
.navbar-default .navbar-collapse,.navbar-default .navbar-form {
	border-color:#e7e7e7
}
.navbar-default .navbar-nav > .open > a,.navbar-default .navbar-nav > .open > a:hover,.navbar-default .navbar-nav > .open > a:focus {
	color:#555;
	background-color:#e7e7e7
}
@media (max-width: 767px) {
	.navbar-default .navbar-nav .open .dropdown-menu > li > a {
		color:#777
	}
	.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
		color:#333;
		background-color:transparent
	}
	.navbar-default .navbar-nav .open .dropdown-menu > .active > a,.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
		color:#555;
		background-color:#e7e7e7
	}
	.navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,.navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,.navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
		color:#ccc;
		background-color:transparent
	}
}
.navbar-default .navbar-link {
	color:#777
}
.navbar-default .navbar-link:hover {
	color:#333
}
.navbar-default .btn-link {
	color:#777
}
.navbar-default .btn-link:hover,.navbar-default .btn-link:focus {
	color:#333
}
.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:hover,.navbar-default .btn-link[disabled]:focus,fieldset[disabled] .navbar-default .btn-link:focus {
	color:#ccc
}
.navbar-inverse {
	background-color:#222;
	border-color:#080808
}
.navbar-inverse .navbar-brand {
	color:#9d9d9d
}
.navbar-inverse .navbar-brand:hover,.navbar-inverse .navbar-brand:focus {
	color:#fff;
	background-color:transparent
}
.navbar-inverse .navbar-text {
	color:#9d9d9d
}
.navbar-inverse .navbar-nav > li > a {
	color:#9d9d9d
}
.navbar-inverse .navbar-nav > li > a:hover,.navbar-inverse .navbar-nav > li > a:focus {
	color:#fff;
	background-color:transparent
}
.navbar-inverse .navbar-nav > .active > a,.navbar-inverse .navbar-nav > .active > a:hover,.navbar-inverse .navbar-nav > .active > a:focus {
	color:#fff;
	background-color:#080808
}
.navbar-inverse .navbar-nav > .disabled > a,.navbar-inverse .navbar-nav > .disabled > a:hover,.navbar-inverse .navbar-nav > .disabled > a:focus {
	color:#444;
	background-color:transparent
}
.navbar-inverse .navbar-toggle {
	border-color:#333
}
.navbar-inverse .navbar-toggle:hover,.navbar-inverse .navbar-toggle:focus {
	background-color:#333
}
.navbar-inverse .navbar-toggle .icon-bar {
	background-color:#fff
}
.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form {
	border-color:#101010
}
.navbar-inverse .navbar-nav > .open > a,.navbar-inverse .navbar-nav > .open > a:hover,.navbar-inverse .navbar-nav > .open > a:focus {
	color:#fff;
	background-color:#080808
}
@media (max-width: 767px) {
	.navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
		border-color:#080808
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu .divider {
		background-color:#080808
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
		color:#9d9d9d
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
		color:#fff;
		background-color:transparent
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
		color:#fff;
		background-color:#080808
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,.navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,.navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
		color:#444;
		background-color:transparent
	}
}
.navbar-inverse .navbar-link {
	color:#9d9d9d
}
.navbar-inverse .navbar-link:hover {
	color:#fff
}
.navbar-inverse .btn-link {
	color:#9d9d9d
}
.navbar-inverse .btn-link:hover,.navbar-inverse .btn-link:focus {
	color:#fff
}
.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:hover,.navbar-inverse .btn-link[disabled]:focus,fieldset[disabled] .navbar-inverse .btn-link:focus {
	color:#444
}
.breadcrumb {
	padding:8px 15px;
	margin-bottom:20px;
	list-style:none;
	background-color:#f5f5f5;
	border-radius:4px
}
.breadcrumb > li {
	display:inline-block
}
.breadcrumb > li + li:before {
	padding:0 5px;
	color:#ccc;
	content:"/\00a0"
}
.breadcrumb > .active {
	color:#777
}
.pagination {
	display:inline-block;
	padding-left:0;
	margin:20px 0;
	border-radius:4px
}
.pagination > li {
	display:inline
}
.pagination > li > a,.pagination > li > span {
	position:relative;
	float:left;
	padding:6px 12px;
	margin-left:-1px;
	line-height:1.42857143;
	color:#337ab7;
	text-decoration:none;
	background-color:#fff;
	border:1px solid #ddd
}
.pagination > li:first-child > a,.pagination > li:first-child > span {
	margin-left:0;
	border-top-left-radius:4px;
	border-bottom-left-radius:4px
}
.pagination > li:last-child > a,.pagination > li:last-child > span {
	border-top-right-radius:4px;
	border-bottom-right-radius:4px
}
.pagination > li > a:hover,.pagination > li > span:hover,.pagination > li > a:focus,.pagination > li > span:focus {
	color:#23527c;
	background-color:#eee;
	border-color:#ddd
}
.pagination > .active > a,.pagination > .active > span,.pagination > .active > a:hover,.pagination > .active > span:hover,.pagination > .active > a:focus,.pagination > .active > span:focus {
	z-index:2;
	color:#fff;
	cursor:default;
	background-color:#337ab7;
	border-color:#337ab7
}
.pagination > .disabled > span,.pagination > .disabled > span:hover,.pagination > .disabled > span:focus,.pagination > .disabled > a,.pagination > .disabled > a:hover,.pagination > .disabled > a:focus {
	color:#777;
	cursor:not-allowed;
	background-color:#fff;
	border-color:#ddd
}
.pagination-lg > li > a,.pagination-lg > li > span {
	padding:10px 16px;
	font-size:18px
}
.pagination-lg > li:first-child > a,.pagination-lg > li:first-child > span {
	border-top-left-radius:6px;
	border-bottom-left-radius:6px
}
.pagination-lg > li:last-child > a,.pagination-lg > li:last-child > span {
	border-top-right-radius:6px;
	border-bottom-right-radius:6px
}
.pagination-sm > li > a,.pagination-sm > li > span {
	padding:5px 10px;
	font-size:12px
}
.pagination-sm > li:first-child > a,.pagination-sm > li:first-child > span {
	border-top-left-radius:3px;
	border-bottom-left-radius:3px
}
.pagination-sm > li:last-child > a,.pagination-sm > li:last-child > span {
	border-top-right-radius:3px;
	border-bottom-right-radius:3px
}
.pager {
	padding-left:0;
	margin:20px 0;
	text-align:center;
	list-style:none
}
.pager li {
	display:inline
}
.pager li > a,.pager li > span {
	display:inline-block;
	padding:5px 14px;
	background-color:#fff;
	border:1px solid #ddd;
	border-radius:15px
}
.pager li > a:hover,.pager li > a:focus {
	text-decoration:none;
	background-color:#eee
}
.pager .next > a,.pager .next > span {
	float:right
}
.pager .previous > a,.pager .previous > span {
	float:left
}
.pager .disabled > a,.pager .disabled > a:hover,.pager .disabled > a:focus,.pager .disabled > span {
	color:#777;
	cursor:not-allowed;
	background-color:#fff
}
.label {
	display:inline;
	padding:.2em .6em .3em;
	font-size:75%;
	font-weight:bold;
	line-height:1;
	color:#fff;
	text-align:center;
	white-space:nowrap;
	vertical-align:baseline;
	border-radius:.25em
}
a.label:hover,a.label:focus {
	color:#fff;
	text-decoration:none;
	cursor:pointer
}
.label:empty {
	display:none
}
.btn .label {
	position:relative;
	top:-1px
}
.label-default {
	background-color:#777
}
.label-default[href]:hover,.label-default[href]:focus {
	background-color:#5e5e5e
}
.label-primary {
	background-color:#337ab7
}
.label-primary[href]:hover,.label-primary[href]:focus {
	background-color:#286090
}
.label-success {
	background-color:#5cb85c
}
.label-success[href]:hover,.label-success[href]:focus {
	background-color:#449d44
}
.label-info {
	background-color:#5bc0de
}
.label-info[href]:hover,.label-info[href]:focus {
	background-color:#31b0d5
}
.label-warning {
	background-color:#f0ad4e
}
.label-warning[href]:hover,.label-warning[href]:focus {
	background-color:#ec971f
}
.label-danger {
	background-color:#d9534f
}
.label-danger[href]:hover,.label-danger[href]:focus {
	background-color:#c9302c
}
.badge {
	display:inline-block;
	min-width:10px;
	padding:3px 7px;
	font-size:12px;
	font-weight:bold;
	line-height:1;
	color:#fff;
	text-align:center;
	white-space:nowrap;
	vertical-align:baseline;
	background-color:#777;
	border-radius:10px
}
.badge:empty {
	display:none
}
.btn .badge {
	position:relative;
	top:-1px
}
.btn-xs .badge {
	top:0;
	padding:1px 5px
}
a.badge:hover,a.badge:focus {
	color:#fff;
	text-decoration:none;
	cursor:pointer
}
.list-group-item.active > .badge,.nav-pills > .active > a > .badge {
	color:#337ab7;
	background-color:#fff
}
.list-group-item > .badge {
	float:right
}
.list-group-item > .badge + .badge {
	margin-right:5px
}
.nav-pills > li > a > .badge {
	margin-left:3px
}
.jumbotron {
	padding:30px 15px;
	margin-bottom:30px;
	color:inherit;
	background-color:#eee
}
.jumbotron h1,.jumbotron .h1 {
	color:inherit
}
.jumbotron p {
	margin-bottom:15px;
	font-size:21px;
	font-weight:200
}
.jumbotron > hr {
	border-top-color:#d5d5d5
}
.container .jumbotron,.container-fluid .jumbotron {
	border-radius:6px
}
.jumbotron .container {
	max-width:100%
}
@media screen and (min-width: 768px) {
	.jumbotron {
		padding:48px 0
	}
	.container .jumbotron,.container-fluid .jumbotron {
		padding-right:60px;
		padding-left:60px
	}
	.jumbotron h1,.jumbotron .h1 {
		font-size:63px
	}
}
.thumbnail {
	display:block;
	padding:4px;
	margin-bottom:20px;
	line-height:1.42857143;
	background-color:#fff;
	border:1px solid #ddd;
	border-radius:4px;
	-webkit-transition:border .2s ease-in-out;
	-o-transition:border .2s ease-in-out;
	transition:border .2s ease-in-out
}
.thumbnail > img,.thumbnail a > img {
	margin-right:auto;
	margin-left:auto
}
a.thumbnail:hover,a.thumbnail:focus,a.thumbnail.active {
	border-color:#337ab7
}
.thumbnail .caption {
	padding:9px;
	color:#333
}
.alert {
	padding:15px;
	margin-bottom:20px;
	border:1px solid transparent;
	border-radius:4px
}
.alert h4 {
	margin-top:0;
	color:inherit
}
.alert .alert-link {
	font-weight:bold
}
.alert > p,.alert > ul {
	margin-bottom:0
}
.alert > p + p {
	margin-top:5px
}
.alert-dismissable,.alert-dismissible {
	padding-right:35px
}
.alert-dismissable .close,.alert-dismissible .close {
	position:relative;
	top:-2px;
	right:-21px;
	color:inherit
}
.alert-success {
	color:#3c763d;
	background-color:#dff0d8;
	border-color:#d6e9c6
}
.alert-success hr {
	border-top-color:#c9e2b3
}
.alert-success .alert-link {
	color:#2b542c
}
.alert-info {
	color:#31708f;
	background-color:#d9edf7;
	border-color:#bce8f1
}
.alert-info hr {
	border-top-color:#a6e1ec
}
.alert-info .alert-link {
	color:#245269
}
.alert-warning {
	color:#8a6d3b;
	background-color:#fcf8e3;
	border-color:#faebcc
}
.alert-warning hr {
	border-top-color:#f7e1b5
}
.alert-warning .alert-link {
	color:#66512c
}
.alert-danger {
	color:#a94442;
	background-color:#f2dede;
	border-color:#ebccd1
}
.alert-danger hr {
	border-top-color:#e4b9c0
}
.alert-danger .alert-link {
	color:#843534
}
@-webkit-keyframes progress-bar-stripes {
	from {
		background-position:40px 0;
	}
	to {
		background-position:0 0;
	}
}
@-o-keyframes progress-bar-stripes {
	from {
		background-position:40px 0;
	}
	to {
		background-position:0 0;
	}
}
@keyframes progress-bar-stripes {
	from {
		background-position:40px 0;
	}
	to {
		background-position:0 0;
	}
}
.progress {
	height:20px;
	margin-bottom:20px;
	overflow:hidden;
	background-color:#f5f5f5;
	border-radius:4px;
	-webkit-box-shadow:inset 0 1px 2px rgba(0, 0, 0, .1);
	box-shadow:inset 0 1px 2px rgba(0, 0, 0, .1)
}
.progress-bar {
	float:left;
	width:0;
	height:100%;
	font-size:12px;
	line-height:20px;
	color:#fff;
	text-align:center;
	background-color:#337ab7;
	-webkit-box-shadow:inset 0 -1px 0 rgba(0, 0, 0, .15);
	box-shadow:inset 0 -1px 0 rgba(0, 0, 0, .15);
	-webkit-transition:width .6s ease;
	-o-transition:width .6s ease;
	transition:width .6s ease
}
.progress-striped .progress-bar,.progress-bar-striped {
	background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	-webkit-background-size:40px 40px;
	background-size:40px 40px
}
.progress.active .progress-bar,.progress-bar.active {
	-webkit-animation:progress-bar-stripes 2s linear infinite;
	-o-animation:progress-bar-stripes 2s linear infinite;
	animation:progress-bar-stripes 2s linear infinite
}
.progress-bar-success {
	background-color:#5cb85c
}
.progress-striped .progress-bar-success {
	background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
}
.progress-bar-info {
	background-color:#5bc0de
}
.progress-striped .progress-bar-info {
	background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
}
.progress-bar-warning {
	background-color:#f0ad4e
}
.progress-striped .progress-bar-warning {
	background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
}
.progress-bar-danger {
	background-color:#d9534f
}
.progress-striped .progress-bar-danger {
	background-image:-webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:-o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
	background-image:linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
}
.media {
	margin-top:15px
}
.media:first-child {
	margin-top:0
}
.media,.media-body {
	overflow:hidden;
	zoom:1
}
.media-body {
	width:10000px
}
.media-object {
	display:block
}
.media-right,.media > .pull-right {
	padding-left:10px
}
.media-left,.media > .pull-left {
	padding-right:10px
}
.media-left,.media-right,.media-body {
	display:table-cell;
	vertical-align:top
}
.media-middle {
	vertical-align:middle
}
.media-bottom {
	vertical-align:bottom
}
.media-heading {
	margin-top:0;
	margin-bottom:5px
}
.media-list {
	padding-left:0;
	list-style:none
}
.list-group {
	padding-left:0;
	margin-bottom:20px
}
.list-group-item {
	position:relative;
	display:block;
	padding:10px 15px;
	margin-bottom:-1px;
	background-color:#fff;
	border:1px solid #ddd
}
.list-group-item:first-child {
	border-top-left-radius:4px;
	border-top-right-radius:4px
}
.list-group-item:last-child {
	margin-bottom:0;
	border-bottom-right-radius:4px;
	border-bottom-left-radius:4px
}
a.list-group-item {
	color:#555
}
a.list-group-item .list-group-item-heading {
	color:#333
}
a.list-group-item:hover,a.list-group-item:focus {
	color:#555;
	text-decoration:none;
	background-color:#f5f5f5
}
.list-group-item.disabled,.list-group-item.disabled:hover,.list-group-item.disabled:focus {
	color:#777;
	cursor:not-allowed;
	background-color:#eee
}
.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading {
	color:inherit
}
.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text {
	color:#777
}
.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus {
	z-index:2;
	color:#fff;
	background-color:#337ab7;
	border-color:#337ab7
}
.list-group-item.active .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active .list-group-item-heading > small,.list-group-item.active:hover .list-group-item-heading > small,.list-group-item.active:focus .list-group-item-heading > small,.list-group-item.active .list-group-item-heading > .small,.list-group-item.active:hover .list-group-item-heading > .small,.list-group-item.active:focus .list-group-item-heading > .small {
	color:inherit
}
.list-group-item.active .list-group-item-text,.list-group-item.active:hover .list-group-item-text,.list-group-item.active:focus .list-group-item-text {
	color:#c7ddef
}
.list-group-item-success {
	color:#3c763d;
	background-color:#dff0d8
}
a.list-group-item-success {
	color:#3c763d
}
a.list-group-item-success .list-group-item-heading {
	color:inherit
}
a.list-group-item-success:hover,a.list-group-item-success:focus {
	color:#3c763d;
	background-color:#d0e9c6
}
a.list-group-item-success.active,a.list-group-item-success.active:hover,a.list-group-item-success.active:focus {
	color:#fff;
	background-color:#3c763d;
	border-color:#3c763d
}
.list-group-item-info {
	color:#31708f;
	background-color:#d9edf7
}
a.list-group-item-info {
	color:#31708f
}
a.list-group-item-info .list-group-item-heading {
	color:inherit
}
a.list-group-item-info:hover,a.list-group-item-info:focus {
	color:#31708f;
	background-color:#c4e3f3
}
a.list-group-item-info.active,a.list-group-item-info.active:hover,a.list-group-item-info.active:focus {
	color:#fff;
	background-color:#31708f;
	border-color:#31708f
}
.list-group-item-warning {
	color:#8a6d3b;
	background-color:#fcf8e3
}
a.list-group-item-warning {
	color:#8a6d3b
}
a.list-group-item-warning .list-group-item-heading {
	color:inherit
}
a.list-group-item-warning:hover,a.list-group-item-warning:focus {
	color:#8a6d3b;
	background-color:#faf2cc
}
a.list-group-item-warning.active,a.list-group-item-warning.active:hover,a.list-group-item-warning.active:focus {
	color:#fff;
	background-color:#8a6d3b;
	border-color:#8a6d3b
}
.list-group-item-danger {
	color:#a94442;
	background-color:#f2dede
}
a.list-group-item-danger {
	color:#a94442
}
a.list-group-item-danger .list-group-item-heading {
	color:inherit
}
a.list-group-item-danger:hover,a.list-group-item-danger:focus {
	color:#a94442;
	background-color:#ebcccc
}
a.list-group-item-danger.active,a.list-group-item-danger.active:hover,a.list-group-item-danger.active:focus {
	color:#fff;
	background-color:#a94442;
	border-color:#a94442
}
.list-group-item-heading {
	margin-top:0;
	margin-bottom:5px
}
.list-group-item-text {
	margin-bottom:0;
	line-height:1.3
}
.panel {
	margin-bottom:20px;
	background-color:#fff;
	border:1px solid transparent;
	border-radius:4px;
	-webkit-box-shadow:0 1px 1px rgba(0, 0, 0, .05);
	box-shadow:0 1px 1px rgba(0, 0, 0, .05)
}
.panel-body {
	padding:15px
}
.panel-heading {
	padding:10px 15px;
	border-bottom:1px solid transparent;
	border-top-left-radius:3px;
	border-top-right-radius:3px
}
.panel-heading > .dropdown .dropdown-toggle {
	color:inherit
}
.panel-title {
	margin-top:0;
	margin-bottom:0;
	font-size:16px;
	color:inherit
}
.panel-title > a,.panel-title > small,.panel-title > .small,.panel-title > small > a,.panel-title > .small > a {
	color:inherit
}
.panel-footer {
	padding:10px 15px;
	background-color:#f5f5f5;
	border-top:1px solid #ddd;
	border-bottom-right-radius:3px;
	border-bottom-left-radius:3px
}
.panel > .list-group,.panel > .panel-collapse > .list-group {
	margin-bottom:0
}
.panel > .list-group .list-group-item,.panel > .panel-collapse > .list-group .list-group-item {
	border-width:1px 0;
	border-radius:0
}
.panel > .list-group:first-child .list-group-item:first-child,.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
	border-top:0;
	border-top-left-radius:3px;
	border-top-right-radius:3px
}
.panel > .list-group:last-child .list-group-item:last-child,.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
	border-bottom:0;
	border-bottom-right-radius:3px;
	border-bottom-left-radius:3px
}
.panel-heading + .list-group .list-group-item:first-child {
	border-top-width:0
}
.list-group + .panel-footer {
	border-top-width:0
}
.panel > .table,.panel > .table-responsive > .table,.panel > .panel-collapse > .table {
	margin-bottom:0
}
.panel > .table caption,.panel > .table-responsive > .table caption,.panel > .panel-collapse > .table caption {
	padding-right:15px;
	padding-left:15px
}
.panel > .table:first-child,.panel > .table-responsive:first-child > .table:first-child {
	border-top-left-radius:3px;
	border-top-right-radius:3px
}
.panel > .table:first-child > thead:first-child > tr:first-child,.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,.panel > .table:first-child > tbody:first-child > tr:first-child,.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
	border-top-left-radius:3px;
	border-top-right-radius:3px
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
	border-top-left-radius:3px
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
	border-top-right-radius:3px
}
.panel > .table:last-child,.panel > .table-responsive:last-child > .table:last-child {
	border-bottom-right-radius:3px;
	border-bottom-left-radius:3px
}
.panel > .table:last-child > tbody:last-child > tr:last-child,.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,.panel > .table:last-child > tfoot:last-child > tr:last-child,.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
	border-bottom-right-radius:3px;
	border-bottom-left-radius:3px
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
	border-bottom-left-radius:3px
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
	border-bottom-right-radius:3px
}
.panel > .panel-body + .table,.panel > .panel-body + .table-responsive,.panel > .table + .panel-body,.panel > .table-responsive + .panel-body {
	border-top:1px solid #ddd
}
.panel > .table > tbody:first-child > tr:first-child th,.panel > .table > tbody:first-child > tr:first-child td {
	border-top:0
}
.panel > .table-bordered,.panel > .table-responsive > .table-bordered {
	border:0
}
.panel > .table-bordered > thead > tr > th:first-child,.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,.panel > .table-bordered > tbody > tr > th:first-child,.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,.panel > .table-bordered > tfoot > tr > th:first-child,.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,.panel > .table-bordered > thead > tr > td:first-child,.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,.panel > .table-bordered > tbody > tr > td:first-child,.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,.panel > .table-bordered > tfoot > tr > td:first-child,.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
	border-left:0
}
.panel > .table-bordered > thead > tr > th:last-child,.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,.panel > .table-bordered > tbody > tr > th:last-child,.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,.panel > .table-bordered > tfoot > tr > th:last-child,.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,.panel > .table-bordered > thead > tr > td:last-child,.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,.panel > .table-bordered > tbody > tr > td:last-child,.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,.panel > .table-bordered > tfoot > tr > td:last-child,.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
	border-right:0
}
.panel > .table-bordered > thead > tr:first-child > td,.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,.panel > .table-bordered > tbody > tr:first-child > td,.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,.panel > .table-bordered > thead > tr:first-child > th,.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,.panel > .table-bordered > tbody > tr:first-child > th,.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
	border-bottom:0
}
.panel > .table-bordered > tbody > tr:last-child > td,.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,.panel > .table-bordered > tfoot > tr:last-child > td,.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,.panel > .table-bordered > tbody > tr:last-child > th,.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,.panel > .table-bordered > tfoot > tr:last-child > th,.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
	border-bottom:0
}
.panel > .table-responsive {
	margin-bottom:0;
	border:0
}
.panel-group {
	margin-bottom:20px
}
.panel-group .panel {
	margin-bottom:0;
	border-radius:4px
}
.panel-group .panel + .panel {
	margin-top:5px
}
.panel-group .panel-heading {
	border-bottom:0
}
.panel-group .panel-heading + .panel-collapse > .panel-body,.panel-group .panel-heading + .panel-collapse > .list-group {
	border-top:1px solid #ddd
}
.panel-group .panel-footer {
	border-top:0
}
.panel-group .panel-footer + .panel-collapse .panel-body {
	border-bottom:1px solid #ddd
}
.panel-default {
	border-color:#ddd
}
.panel-default > .panel-heading {
	color:#333;
	background-color:#f5f5f5;
	border-color:#ddd
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#ddd
}
.panel-default > .panel-heading .badge {
	color:#f5f5f5;
	background-color:#333
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
	border-bottom-color:#ddd
}
.panel-primary {
	border-color:#337ab7
}
.panel-primary > .panel-heading {
	color:#fff;
	background-color:#337ab7;
	border-color:#337ab7
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#337ab7
}
.panel-primary > .panel-heading .badge {
	color:#337ab7;
	background-color:#fff
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
	border-bottom-color:#337ab7
}
.panel-success {
	border-color:#d6e9c6
}
.panel-success > .panel-heading {
	color:#3c763d;
	background-color:#dff0d8;
	border-color:#d6e9c6
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#d6e9c6
}
.panel-success > .panel-heading .badge {
	color:#dff0d8;
	background-color:#3c763d
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
	border-bottom-color:#d6e9c6
}
.panel-info {
	border-color:#bce8f1
}
.panel-info > .panel-heading {
	color:#31708f;
	background-color:#d9edf7;
	border-color:#bce8f1
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#bce8f1
}
.panel-info > .panel-heading .badge {
	color:#d9edf7;
	background-color:#31708f
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
	border-bottom-color:#bce8f1
}
.panel-warning {
	border-color:#faebcc
}
.panel-warning > .panel-heading {
	color:#8a6d3b;
	background-color:#fcf8e3;
	border-color:#faebcc
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#faebcc
}
.panel-warning > .panel-heading .badge {
	color:#fcf8e3;
	background-color:#8a6d3b
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
	border-bottom-color:#faebcc
}
.panel-danger {
	border-color:#ebccd1
}
.panel-danger > .panel-heading {
	color:#a94442;
	background-color:#f2dede;
	border-color:#ebccd1
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#ebccd1
}
.panel-danger > .panel-heading .badge {
	color:#f2dede;
	background-color:#a94442
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
	border-bottom-color:#ebccd1
}
.embed-responsive {
	position:relative;
	display:block;
	height:0;
	padding:0;
	overflow:hidden
}
.embed-responsive .embed-responsive-item,.embed-responsive iframe,.embed-responsive embed,.embed-responsive object,.embed-responsive video {
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	width:100%;
	height:100%;
	border:0
}
.embed-responsive.embed-responsive-16by9 {
	padding-bottom:56.25%
}
.embed-responsive.embed-responsive-4by3 {
	padding-bottom:75%
}
.well {
	min-height:20px;
	padding:19px;
	margin-bottom:20px;
	background-color:#f5f5f5;
	border:1px solid #e3e3e3;
	border-radius:4px;
	-webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05);
	box-shadow:inset 0 1px 1px rgba(0, 0, 0, .05)
}
.well blockquote {
	border-color:#ddd;
	border-color:rgba(0, 0, 0, .15)
}
.well-lg {
	padding:24px;
	border-radius:6px
}
.well-sm {
	padding:9px;
	border-radius:3px
}
.close {
	float:right;
	font-size:21px;
	font-weight:bold;
	line-height:1;
	color:#000;
	text-shadow:0 1px 0 #fff;
	filter:alpha(opacity=20);
	opacity:.2
}
.close:hover,.close:focus {
	color:#000;
	text-decoration:none;
	cursor:pointer;
	filter:alpha(opacity=50);
	opacity:.5
}
button.close {
	-webkit-appearance:none;
	padding:0;
	cursor:pointer;
	background:transparent;
	border:0
}
.modal-open {
	overflow:hidden
}
.modal {
	position:fixed;
	top:0;
	right:0;
	bottom:0;
	left:0;
	z-index:1040;
	display:none;
	overflow:hidden;
	-webkit-overflow-scrolling:touch;
	outline:0
}
.modal.fade .modal-dialog {
	-webkit-transition:-webkit-transform .3s ease-out;
	-o-transition:-o-transform .3s ease-out;
	transition:transform .3s ease-out;
	-webkit-transform:translate(0, -25%);
	-ms-transform:translate(0, -25%);
	-o-transform:translate(0, -25%);
	transform:translate(0, -25%)
}
.modal.in .modal-dialog {
	-webkit-transform:translate(0, 0);
	-ms-transform:translate(0, 0);
	-o-transform:translate(0, 0);
	transform:translate(0, 0)
}
.modal-open .modal {
	overflow-x:hidden;
	overflow-y:auto
}
.modal-dialog {
	position:relative;
	width:auto;
	margin:10px
}
.modal-content {
	position:relative;
	background-color:#fff;
	-webkit-background-clip:padding-box;
	background-clip:padding-box;
	border:1px solid #999;
	border:1px solid rgba(0, 0, 0, .2);
	border-radius:6px;
	outline:0;
	-webkit-box-shadow:0 3px 9px rgba(0, 0, 0, .5);
	box-shadow:0 3px 9px rgba(0, 0, 0, .5)
}
.modal-backdrop {
	position:absolute;
	top:0;
	right:0;
	left:0;
	background-color:#000
}
.modal-backdrop.fade {
	filter:alpha(opacity=0);
	opacity:0
}
.modal-backdrop.in {
	filter:alpha(opacity=50);
	opacity:.5
}
.modal-header {
	min-height:16.42857143px;
	padding:15px;
	border-bottom:1px solid #e5e5e5
}
.modal-header .close {
	margin-top:-2px
}
.modal-title {
	margin:0;
	line-height:1.42857143
}
.modal-body {
	position:relative;
	padding:15px
}
.modal-footer {
	padding:15px;
	text-align:right;
	border-top:1px solid #e5e5e5
}
.modal-footer .btn + .btn {
	margin-bottom:0;
	margin-left:5px
}
.modal-footer .btn-group .btn + .btn {
	margin-left:-1px
}
.modal-footer .btn-block + .btn-block {
	margin-left:0
}
.modal-scrollbar-measure {
	position:absolute;
	top:-9999px;
	width:50px;
	height:50px;
	overflow:scroll
}
@media (min-width: 768px) {
	.modal-dialog {
		width:600px;
		margin:30px auto
	}
	.modal-content {
		-webkit-box-shadow:0 5px 15px rgba(0, 0, 0, .5);
		box-shadow:0 5px 15px rgba(0, 0, 0, .5)
	}
	.modal-sm {
		width:300px
	}
}
@media (min-width: 992px) {
	.modal-lg {
		width:900px
	}
}
.tooltip {
	position:absolute;
	z-index:1070;
	display:block;
	font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:12px;
	font-weight:normal;
	line-height:1.4;
	visibility:visible;
	filter:alpha(opacity=0);
	opacity:0
}
.tooltip.in {
	filter:alpha(opacity=90);
	opacity:.9
}
.tooltip.top {
	padding:5px 0;
	margin-top:-3px
}
.tooltip.right {
	padding:0 5px;
	margin-left:3px
}
.tooltip.bottom {
	padding:5px 0;
	margin-top:3px
}
.tooltip.left {
	padding:0 5px;
	margin-left:-3px
}
.tooltip-inner {
	max-width:200px;
	padding:3px 8px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	background-color:#000;
	border-radius:4px
}
.tooltip-arrow {
	position:absolute;
	width:0;
	height:0;
	border-color:transparent;
	border-style:solid
}
.tooltip.top .tooltip-arrow {
	bottom:0;
	left:50%;
	margin-left:-5px;
	border-width:5px 5px 0;
	border-top-color:#000
}
.tooltip.top-left .tooltip-arrow {
	right:5px;
	bottom:0;
	margin-bottom:-5px;
	border-width:5px 5px 0;
	border-top-color:#000
}
.tooltip.top-right .tooltip-arrow {
	bottom:0;
	left:5px;
	margin-bottom:-5px;
	border-width:5px 5px 0;
	border-top-color:#000
}
.tooltip.right .tooltip-arrow {
	top:50%;
	left:0;
	margin-top:-5px;
	border-width:5px 5px 5px 0;
	border-right-color:#000
}
.tooltip.left .tooltip-arrow {
	top:50%;
	right:0;
	margin-top:-5px;
	border-width:5px 0 5px 5px;
	border-left-color:#000
}
.tooltip.bottom .tooltip-arrow {
	top:0;
	left:50%;
	margin-left:-5px;
	border-width:0 5px 5px;
	border-bottom-color:#000
}
.tooltip.bottom-left .tooltip-arrow {
	top:0;
	right:5px;
	margin-top:-5px;
	border-width:0 5px 5px;
	border-bottom-color:#000
}
.tooltip.bottom-right .tooltip-arrow {
	top:0;
	left:5px;
	margin-top:-5px;
	border-width:0 5px 5px;
	border-bottom-color:#000
}
.popover {
	position:absolute;
	top:0;
	left:0;
	z-index:1060;
	display:none;
	max-width:276px;
	padding:1px;
	font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:14px;
	font-weight:normal;
	line-height:1.42857143;
	text-align:left;
	white-space:normal;
	background-color:#fff;
	-webkit-background-clip:padding-box;
	background-clip:padding-box;
	border:1px solid #ccc;
	border:1px solid rgba(0, 0, 0, .2);
	border-radius:6px;
	-webkit-box-shadow:0 5px 10px rgba(0, 0, 0, .2);
	box-shadow:0 5px 10px rgba(0, 0, 0, .2)
}
.popover.top {
	margin-top:-10px
}
.popover.right {
	margin-left:10px
}
.popover.bottom {
	margin-top:10px
}
.popover.left {
	margin-left:-10px
}
.popover-title {
	padding:8px 14px;
	margin:0;
	font-size:14px;
	background-color:#f7f7f7;
	border-bottom:1px solid #ebebeb;
	border-radius:5px 5px 0 0
}
.popover-content {
	padding:9px 14px
}
.popover > .arrow,.popover > .arrow:after {
	position:absolute;
	display:block;
	width:0;
	height:0;
	border-color:transparent;
	border-style:solid
}
.popover > .arrow {
	border-width:11px
}
.popover > .arrow:after {
	content:"";
	border-width:10px
}
.popover.top > .arrow {
	bottom:-11px;
	left:50%;
	margin-left:-11px;
	border-top-color:#999;
	border-top-color:rgba(0, 0, 0, .25);
	border-bottom-width:0
}
.popover.top > .arrow:after {
	bottom:1px;
	margin-left:-10px;
	content:" ";
	border-top-color:#fff;
	border-bottom-width:0
}
.popover.right > .arrow {
	top:50%;
	left:-11px;
	margin-top:-11px;
	border-right-color:#999;
	border-right-color:rgba(0, 0, 0, .25);
	border-left-width:0
}
.popover.right > .arrow:after {
	bottom:-10px;
	left:1px;
	content:" ";
	border-right-color:#fff;
	border-left-width:0
}
.popover.bottom > .arrow {
	top:-11px;
	left:50%;
	margin-left:-11px;
	border-top-width:0;
	border-bottom-color:#999;
	border-bottom-color:rgba(0, 0, 0, .25)
}
.popover.bottom > .arrow:after {
	top:1px;
	margin-left:-10px;
	content:" ";
	border-top-width:0;
	border-bottom-color:#fff
}
.popover.left > .arrow {
	top:50%;
	right:-11px;
	margin-top:-11px;
	border-right-width:0;
	border-left-color:#999;
	border-left-color:rgba(0, 0, 0, .25)
}
.popover.left > .arrow:after {
	right:1px;
	bottom:-10px;
	content:" ";
	border-right-width:0;
	border-left-color:#fff
}
.carousel {
	position:relative
}
.carousel-inner {
	position:relative;
	width:100%;
	overflow:hidden
}
.carousel-inner > .item {
	position:relative;
	display:none;
	-webkit-transition:.6s ease-in-out left;
	-o-transition:.6s ease-in-out left;
	transition:.6s ease-in-out left
}
.carousel-inner > .item > img,.carousel-inner > .item > a > img {
	line-height:1
}
@media all and (transform-3d),(-webkit-transform-3d) {
	.carousel-inner > .item {
		-webkit-transition:-webkit-transform .6s ease-in-out;
		-o-transition:-o-transform .6s ease-in-out;
		transition:transform .6s ease-in-out;
		-webkit-backface-visibility:hidden;
		backface-visibility:hidden;
		-webkit-perspective:1000;
		perspective:1000
	}
	.carousel-inner > .item.next,.carousel-inner > .item.active.right {
		left:0;
		-webkit-transform:translate3d(100%, 0, 0);
		transform:translate3d(100%, 0, 0)
	}
	.carousel-inner > .item.prev,.carousel-inner > .item.active.left {
		left:0;
		-webkit-transform:translate3d(-100%, 0, 0);
		transform:translate3d(-100%, 0, 0)
	}
	.carousel-inner > .item.next.left,.carousel-inner > .item.prev.right,.carousel-inner > .item.active {
		left:0;
		-webkit-transform:translate3d(0, 0, 0);
		transform:translate3d(0, 0, 0)
	}
}
.carousel-inner > .active,.carousel-inner > .next,.carousel-inner > .prev {
	display:block
}
.carousel-inner > .active {
	left:0
}
.carousel-inner > .next,.carousel-inner > .prev {
	position:absolute;
	top:0;
	width:100%
}
.carousel-inner > .next {
	left:100%
}
.carousel-inner > .prev {
	left:-100%
}
.carousel-inner > .next.left,.carousel-inner > .prev.right {
	left:0
}
.carousel-inner > .active.left {
	left:-100%
}
.carousel-inner > .active.right {
	left:100%
}
.carousel-control {
	position:absolute;
	top:0;
	bottom:0;
	left:0;
	width:15%;
	font-size:20px;
	color:#fff;
	text-align:center;
	text-shadow:0 1px 2px rgba(0, 0, 0, .6);
	filter:alpha(opacity=50);
	opacity:.5
}
.carousel-control.left {
	background-image:-webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
	background-image:-o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
	background-image:-webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
	background-image:linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
	background-repeat:repeat-x
}
.carousel-control.right {
	right:0;
	left:auto;
	background-image:-webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
	background-image:-o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
	background-image:-webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
	background-image:linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
	background-repeat:repeat-x
}
.carousel-control:hover,.carousel-control:focus {
	color:#fff;
	text-decoration:none;
	filter:alpha(opacity=90);
	outline:0;
	opacity:.9
}
.carousel-control .icon-prev,.carousel-control .icon-next,.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right {
	position:absolute;
	top:50%;
	z-index:5;
	display:inline-block
}
.carousel-control .icon-prev,.carousel-control .glyphicon-chevron-left {
	left:50%;
	margin-left:-10px
}
.carousel-control .icon-next,.carousel-control .glyphicon-chevron-right {
	right:50%;
	margin-right:-10px
}
.carousel-control .icon-prev,.carousel-control .icon-next {
	width:20px;
	height:20px;
	margin-top:-10px;
	font-family:serif;
	line-height:1
}
.carousel-control .icon-prev:before {
	content:'\2039'
}
.carousel-control .icon-next:before {
	content:'\203a'
}
.carousel-indicators {
	position:absolute;
	bottom:10px;
	left:50%;
	z-index:15;
	width:60%;
	padding-left:0;
	margin-left:-30%;
	text-align:center;
	list-style:none
}
.carousel-indicators li {
	display:inline-block;
	width:10px;
	height:10px;
	margin:1px;
	text-indent:-999px;
	cursor:pointer;
	background-color:#000 \9;
	background-color:rgba(0, 0, 0, 0);
	border:1px solid #fff;
	border-radius:10px
}
.carousel-indicators .active {
	width:12px;
	height:12px;
	margin:0;
	background-color:#fff
}
.carousel-caption {
	position:absolute;
	right:15%;
	bottom:20px;
	left:15%;
	z-index:10;
	padding-top:20px;
	padding-bottom:20px;
	color:#fff;
	text-align:center;
	text-shadow:0 1px 2px rgba(0, 0, 0, .6)
}
.carousel-caption .btn {
	text-shadow:none
}
@media screen and (min-width: 768px) {
	.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-prev,.carousel-control .icon-next {
		width:30px;
		height:30px;
		margin-top:-15px;
		font-size:30px
	}
	.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev {
		margin-left:-15px
	}
	.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next {
		margin-right:-15px
	}
	.carousel-caption {
		right:20%;
		left:20%;
		padding-bottom:30px
	}
	.carousel-indicators {
		bottom:20px
	}
}
.clearfix:before,.clearfix:after,.dl-horizontal dd:before,.dl-horizontal dd:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after,.form-horizontal .form-group:before,.form-horizontal .form-group:after,.btn-toolbar:before,.btn-toolbar:after,.btn-group-vertical > .btn-group:before,.btn-group-vertical > .btn-group:after,.nav:before,.nav:after,.navbar:before,.navbar:after,.navbar-header:before,.navbar-header:after,.navbar-collapse:before,.navbar-collapse:after,.pager:before,.pager:after,.panel-body:before,.panel-body:after,.modal-footer:before,.modal-footer:after {
	display:table;
	content:" "
}
.clearfix:after,.dl-horizontal dd:after,.container:after,.container-fluid:after,.row:after,.form-horizontal .form-group:after,.btn-toolbar:after,.btn-group-vertical > .btn-group:after,.nav:after,.navbar:after,.navbar-header:after,.navbar-collapse:after,.pager:after,.panel-body:after,.modal-footer:after {
	clear:both
}
.center-block {
	display:block;
	margin-right:auto;
	margin-left:auto
}
.pull-right {
	float:right !important
}
.pull-left {
	float:left !important
}
.hide {
	display:none !important
}
.show {
	display:block !important
}
.invisible {
	visibility:hidden
}
.text-hide {
	font:0/0 a;
	color:transparent;
	text-shadow:none;
	background-color:transparent;
	border:0
}
.hidden {
	display:none !important;
	visibility:hidden !important
}
.affix {
	position:fixed
}
@-ms-viewport {
	width:device-width
}
.visible-xs,.visible-sm,.visible-md,.visible-lg {
	display:none !important
}
.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block {
	display:none !important
}
@media (max-width: 767px) {
	.visible-xs {
		display:block !important
	}
	table.visible-xs {
		display:table
	}
	tr.visible-xs {
		display:table-row !important
	}
	th.visible-xs,td.visible-xs {
		display:table-cell !important
	}
}
@media (max-width: 767px) {
	.visible-xs-block {
		display:block !important
	}
}
@media (max-width: 767px) {
	.visible-xs-inline {
		display:inline !important
	}
}
@media (max-width: 767px) {
	.visible-xs-inline-block {
		display:inline-block !important
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	.visible-sm {
		display:block !important
	}
	table.visible-sm {
		display:table
	}
	tr.visible-sm {
		display:table-row !important
	}
	th.visible-sm,td.visible-sm {
		display:table-cell !important
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	.visible-sm-block {
		display:block !important
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	.visible-sm-inline {
		display:inline !important
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	.visible-sm-inline-block {
		display:inline-block !important
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
	.visible-md {
		display:block !important
	}
	table.visible-md {
		display:table
	}
	tr.visible-md {
		display:table-row !important
	}
	th.visible-md,td.visible-md {
		display:table-cell !important
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
	.visible-md-block {
		display:block !important
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
	.visible-md-inline {
		display:inline !important
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
	.visible-md-inline-block {
		display:inline-block !important
	}
}
@media (min-width: 1200px) {
	.visible-lg {
		display:block !important
	}
	table.visible-lg {
		display:table
	}
	tr.visible-lg {
		display:table-row !important
	}
	th.visible-lg,td.visible-lg {
		display:table-cell !important
	}
}
@media (min-width: 1200px) {
	.visible-lg-block {
		display:block !important
	}
}
@media (min-width: 1200px) {
	.visible-lg-inline {
		display:inline !important
	}
}
@media (min-width: 1200px) {
	.visible-lg-inline-block {
		display:inline-block !important
	}
}
@media (max-width: 767px) {
	.hidden-xs {
		display:none !important
	}
}
@media (min-width: 768px) and (max-width: 991px) {
	.hidden-sm {
		display:none !important
	}
}
@media (min-width: 992px) and (max-width: 1199px) {
	.hidden-md {
		display:none !important
	}
}
@media (min-width: 1200px) {
	.hidden-lg {
		display:none !important
	}
}
.visible-print {
	display:none !important
}
@media print {
	.visible-print {
		display:block !important
	}
	table.visible-print {
		display:table
	}
	tr.visible-print {
		display:table-row !important
	}
	th.visible-print,td.visible-print {
		display:table-cell !important
	}
}
.visible-print-block {
	display:none !important
}
@media print {
	.visible-print-block {
		display:block !important
	}
}
.visible-print-inline {
	display:none !important
}
@media print {
	.visible-print-inline {
		display:inline !important
	}
}
.visible-print-inline-block {
	display:none !important
}
@media print {
	.visible-print-inline-block {
		display:inline-block !important
	}
}
@media print {
	.hidden-print {
		display:none !important
	}
}
@charset "UTF-8";
.animated {
	-webkit-animation-duration:1s;
	animation-duration:1s;
	-webkit-animation-fill-mode:both;
	animation-fill-mode:both
}
.animated.hinge {
	-webkit-animation-duration:2s;
	animation-duration:2s
}
@-webkit-keyframes bounce {
	0%,20%,50%,80%,100% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	40% {
		-webkit-transform:translateY(-30px);
		transform:translateY(-30px);
	}
	60% {
		-webkit-transform:translateY(-15px);
		transform:translateY(-15px);
	}
}
@keyframes bounce {
	0%,20%,50%,80%,100% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	40% {
		-webkit-transform:translateY(-30px);
		-ms-transform:translateY(-30px);
		transform:translateY(-30px);
	}
	60% {
		-webkit-transform:translateY(-15px);
		-ms-transform:translateY(-15px);
		transform:translateY(-15px);
	}
}
.bounce {
	-webkit-animation-name:bounce;
	animation-name:bounce
}
@-webkit-keyframes flash {
	0%,50%,100% {
		opacity:1;
	}
	25%,75% {
		opacity:0;
	}
}
@keyframes flash {
	0%,50%,100% {
		opacity:1;
	}
	25%,75% {
		opacity:0;
	}
}
.flash {
	-webkit-animation-name:flash;
	animation-name:flash
}
@-webkit-keyframes pulse {
	0% {
		-webkit-transform:scale(1);
		transform:scale(1);
	}
	50% {
		-webkit-transform:scale(1.1);
		transform:scale(1.1);
	}
	100% {
		-webkit-transform:scale(1);
		transform:scale(1);
	}
}
@keyframes pulse {
	0% {
		-webkit-transform:scale(1);
		-ms-transform:scale(1);
		transform:scale(1);
	}
	50% {
		-webkit-transform:scale(1.1);
		-ms-transform:scale(1.1);
		transform:scale(1.1);
	}
	100% {
		-webkit-transform:scale(1);
		-ms-transform:scale(1);
		transform:scale(1);
	}
}
.pulse {
	-webkit-animation-name:pulse;
	animation-name:pulse
}
@-webkit-keyframes shake {
	0%,100% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	10%,30%,50%,70%,90% {
		-webkit-transform:translateX(-10px);
		transform:translateX(-10px);
	}
	20%,40%,60%,80% {
		-webkit-transform:translateX(10px);
		transform:translateX(10px);
	}
}
@keyframes shake {
	0%,100% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	10%,30%,50%,70%,90% {
		-webkit-transform:translateX(-10px);
		-ms-transform:translateX(-10px);
		transform:translateX(-10px);
	}
	20%,40%,60%,80% {
		-webkit-transform:translateX(10px);
		-ms-transform:translateX(10px);
		transform:translateX(10px);
	}
}
.shake {
	-webkit-animation-name:shake;
	animation-name:shake
}
@-webkit-keyframes swing {
	20% {
		-webkit-transform:rotate(15deg);
		transform:rotate(15deg);
	}
	40% {
		-webkit-transform:rotate(-10deg);
		transform:rotate(-10deg);
	}
	60% {
		-webkit-transform:rotate(5deg);
		transform:rotate(5deg);
	}
	80% {
		-webkit-transform:rotate(-5deg);
		transform:rotate(-5deg);
	}
	100% {
		-webkit-transform:rotate(0deg);
		transform:rotate(0deg);
	}
}
@keyframes swing {
	20% {
		-webkit-transform:rotate(15deg);
		-ms-transform:rotate(15deg);
		transform:rotate(15deg);
	}
	40% {
		-webkit-transform:rotate(-10deg);
		-ms-transform:rotate(-10deg);
		transform:rotate(-10deg);
	}
	60% {
		-webkit-transform:rotate(5deg);
		-ms-transform:rotate(5deg);
		transform:rotate(5deg);
	}
	80% {
		-webkit-transform:rotate(-5deg);
		-ms-transform:rotate(-5deg);
		transform:rotate(-5deg);
	}
	100% {
		-webkit-transform:rotate(0deg);
		-ms-transform:rotate(0deg);
		transform:rotate(0deg);
	}
}
.swing {
	-webkit-transform-origin:top center;
	-ms-transform-origin:top center;
	transform-origin:top center;
	-webkit-animation-name:swing;
	animation-name:swing
}
@-webkit-keyframes tada {
	0% {
		-webkit-transform:scale(1);
		transform:scale(1);
	}
	10%,20% {
		-webkit-transform:scale(0.9) rotate(-3deg);
		transform:scale(0.9) rotate(-3deg);
	}
	30%,50%,70%,90% {
		-webkit-transform:scale(1.1) rotate(3deg);
		transform:scale(1.1) rotate(3deg);
	}
	40%,60%,80% {
		-webkit-transform:scale(1.1) rotate(-3deg);
		transform:scale(1.1) rotate(-3deg);
	}
	100% {
		-webkit-transform:scale(1) rotate(0);
		transform:scale(1) rotate(0);
	}
}
@keyframes tada {
	0% {
		-webkit-transform:scale(1);
		-ms-transform:scale(1);
		transform:scale(1);
	}
	10%,20% {
		-webkit-transform:scale(0.9) rotate(-3deg);
		-ms-transform:scale(0.9) rotate(-3deg);
		transform:scale(0.9) rotate(-3deg);
	}
	30%,50%,70%,90% {
		-webkit-transform:scale(1.1) rotate(3deg);
		-ms-transform:scale(1.1) rotate(3deg);
		transform:scale(1.1) rotate(3deg);
	}
	40%,60%,80% {
		-webkit-transform:scale(1.1) rotate(-3deg);
		-ms-transform:scale(1.1) rotate(-3deg);
		transform:scale(1.1) rotate(-3deg);
	}
	100% {
		-webkit-transform:scale(1) rotate(0);
		-ms-transform:scale(1) rotate(0);
		transform:scale(1) rotate(0);
	}
}
.tada {
	-webkit-animation-name:tada;
	animation-name:tada
}
@-webkit-keyframes wobble {
	0% {
		-webkit-transform:translateX(0%);
		transform:translateX(0%);
	}
	15% {
		-webkit-transform:translateX(-25%) rotate(-5deg);
		transform:translateX(-25%) rotate(-5deg);
	}
	30% {
		-webkit-transform:translateX(20%) rotate(3deg);
		transform:translateX(20%) rotate(3deg);
	}
	45% {
		-webkit-transform:translateX(-15%) rotate(-3deg);
		transform:translateX(-15%) rotate(-3deg);
	}
	60% {
		-webkit-transform:translateX(10%) rotate(2deg);
		transform:translateX(10%) rotate(2deg);
	}
	75% {
		-webkit-transform:translateX(-5%) rotate(-1deg);
		transform:translateX(-5%) rotate(-1deg);
	}
	100% {
		-webkit-transform:translateX(0%);
		transform:translateX(0%);
	}
}
@keyframes wobble {
	0% {
		-webkit-transform:translateX(0%);
		-ms-transform:translateX(0%);
		transform:translateX(0%);
	}
	15% {
		-webkit-transform:translateX(-25%) rotate(-5deg);
		-ms-transform:translateX(-25%) rotate(-5deg);
		transform:translateX(-25%) rotate(-5deg);
	}
	30% {
		-webkit-transform:translateX(20%) rotate(3deg);
		-ms-transform:translateX(20%) rotate(3deg);
		transform:translateX(20%) rotate(3deg);
	}
	45% {
		-webkit-transform:translateX(-15%) rotate(-3deg);
		-ms-transform:translateX(-15%) rotate(-3deg);
		transform:translateX(-15%) rotate(-3deg);
	}
	60% {
		-webkit-transform:translateX(10%) rotate(2deg);
		-ms-transform:translateX(10%) rotate(2deg);
		transform:translateX(10%) rotate(2deg);
	}
	75% {
		-webkit-transform:translateX(-5%) rotate(-1deg);
		-ms-transform:translateX(-5%) rotate(-1deg);
		transform:translateX(-5%) rotate(-1deg);
	}
	100% {
		-webkit-transform:translateX(0%);
		-ms-transform:translateX(0%);
		transform:translateX(0%);
	}
}
.wobble {
	-webkit-animation-name:wobble;
	animation-name:wobble
}
@-webkit-keyframes bounceIn {
	0% {
		opacity:0;
		-webkit-transform:scale(.3);
		transform:scale(.3);
	}
	50% {
		opacity:1;
		-webkit-transform:scale(1.05);
		transform:scale(1.05);
	}
	70% {
		-webkit-transform:scale(.9);
		transform:scale(.9);
	}
	100% {
		-webkit-transform:scale(1);
		transform:scale(1);
	}
}
@keyframes bounceIn {
	0% {
		opacity:0;
		-webkit-transform:scale(.3);
		-ms-transform:scale(.3);
		transform:scale(.3);
	}
	50% {
		opacity:1;
		-webkit-transform:scale(1.05);
		-ms-transform:scale(1.05);
		transform:scale(1.05);
	}
	70% {
		-webkit-transform:scale(.9);
		-ms-transform:scale(.9);
		transform:scale(.9);
	}
	100% {
		-webkit-transform:scale(1);
		-ms-transform:scale(1);
		transform:scale(1);
	}
}
.bounceIn {
	-webkit-animation-name:bounceIn;
	animation-name:bounceIn
}
@-webkit-keyframes bounceInDown {
	0% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateY(30px);
		transform:translateY(30px);
	}
	80% {
		-webkit-transform:translateY(-10px);
		transform:translateY(-10px);
	}
	100% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes bounceInDown {
	0% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		-ms-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateY(30px);
		-ms-transform:translateY(30px);
		transform:translateY(30px);
	}
	80% {
		-webkit-transform:translateY(-10px);
		-ms-transform:translateY(-10px);
		transform:translateY(-10px);
	}
	100% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.bounceInDown {
	-webkit-animation-name:bounceInDown;
	animation-name:bounceInDown
}
@-webkit-keyframes bounceInLeft {
	0% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateX(30px);
		transform:translateX(30px);
	}
	80% {
		-webkit-transform:translateX(-10px);
		transform:translateX(-10px);
	}
	100% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes bounceInLeft {
	0% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		-ms-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateX(30px);
		-ms-transform:translateX(30px);
		transform:translateX(30px);
	}
	80% {
		-webkit-transform:translateX(-10px);
		-ms-transform:translateX(-10px);
		transform:translateX(-10px);
	}
	100% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.bounceInLeft {
	-webkit-animation-name:bounceInLeft;
	animation-name:bounceInLeft
}
@-webkit-keyframes bounceInRight {
	0% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		transform:translateX(2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateX(-30px);
		transform:translateX(-30px);
	}
	80% {
		-webkit-transform:translateX(10px);
		transform:translateX(10px);
	}
	100% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes bounceInRight {
	0% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		-ms-transform:translateX(2000px);
		transform:translateX(2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateX(-30px);
		-ms-transform:translateX(-30px);
		transform:translateX(-30px);
	}
	80% {
		-webkit-transform:translateX(10px);
		-ms-transform:translateX(10px);
		transform:translateX(10px);
	}
	100% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.bounceInRight {
	-webkit-animation-name:bounceInRight;
	animation-name:bounceInRight
}
@-webkit-keyframes bounceInUp {
	0% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		transform:translateY(2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateY(-30px);
		transform:translateY(-30px);
	}
	80% {
		-webkit-transform:translateY(10px);
		transform:translateY(10px);
	}
	100% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes bounceInUp {
	0% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		-ms-transform:translateY(2000px);
		transform:translateY(2000px);
	}
	60% {
		opacity:1;
		-webkit-transform:translateY(-30px);
		-ms-transform:translateY(-30px);
		transform:translateY(-30px);
	}
	80% {
		-webkit-transform:translateY(10px);
		-ms-transform:translateY(10px);
		transform:translateY(10px);
	}
	100% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.bounceInUp {
	-webkit-animation-name:bounceInUp;
	animation-name:bounceInUp
}
@-webkit-keyframes bounceOut {
	0% {
		-webkit-transform:scale(1);
		transform:scale(1);
	}
	25% {
		-webkit-transform:scale(.95);
		transform:scale(.95);
	}
	50% {
		opacity:1;
		-webkit-transform:scale(1.1);
		transform:scale(1.1);
	}
	100% {
		opacity:0;
		-webkit-transform:scale(.3);
		transform:scale(.3);
	}
}
@keyframes bounceOut {
	0% {
		-webkit-transform:scale(1);
		-ms-transform:scale(1);
		transform:scale(1);
	}
	25% {
		-webkit-transform:scale(.95);
		-ms-transform:scale(.95);
		transform:scale(.95);
	}
	50% {
		opacity:1;
		-webkit-transform:scale(1.1);
		-ms-transform:scale(1.1);
		transform:scale(1.1);
	}
	100% {
		opacity:0;
		-webkit-transform:scale(.3);
		-ms-transform:scale(.3);
		transform:scale(.3);
	}
}
.bounceOut {
	-webkit-animation-name:bounceOut;
	animation-name:bounceOut
}
@-webkit-keyframes bounceOutDown {
	0% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateY(-20px);
		transform:translateY(-20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		transform:translateY(2000px);
	}
}
@keyframes bounceOutDown {
	0% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateY(-20px);
		-ms-transform:translateY(-20px);
		transform:translateY(-20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		-ms-transform:translateY(2000px);
		transform:translateY(2000px);
	}
}
.bounceOutDown {
	-webkit-animation-name:bounceOutDown;
	animation-name:bounceOutDown
}
@-webkit-keyframes bounceOutLeft {
	0% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateX(20px);
		transform:translateX(20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
}
@keyframes bounceOutLeft {
	0% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateX(20px);
		-ms-transform:translateX(20px);
		transform:translateX(20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		-ms-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
}
.bounceOutLeft {
	-webkit-animation-name:bounceOutLeft;
	animation-name:bounceOutLeft
}
@-webkit-keyframes bounceOutRight {
	0% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateX(-20px);
		transform:translateX(-20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		transform:translateX(2000px);
	}
}
@keyframes bounceOutRight {
	0% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateX(-20px);
		-ms-transform:translateX(-20px);
		transform:translateX(-20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		-ms-transform:translateX(2000px);
		transform:translateX(2000px);
	}
}
.bounceOutRight {
	-webkit-animation-name:bounceOutRight;
	animation-name:bounceOutRight
}
@-webkit-keyframes bounceOutUp {
	0% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateY(20px);
		transform:translateY(20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
}
@keyframes bounceOutUp {
	0% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	20% {
		opacity:1;
		-webkit-transform:translateY(20px);
		-ms-transform:translateY(20px);
		transform:translateY(20px);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		-ms-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
}
.bounceOutUp {
	-webkit-animation-name:bounceOutUp;
	animation-name:bounceOutUp
}
@-webkit-keyframes fadeIn {
	0% {
		opacity:0;
	}
	100% {
		opacity:1;
	}
}
@keyframes fadeIn {
	0% {
		opacity:0;
	}
	100% {
		opacity:1;
	}
}
.fadeIn {
	-webkit-animation-name:fadeIn;
	animation-name:fadeIn
}
@-webkit-keyframes fadeInDown {
	0% {
		opacity:0;
		-webkit-transform:translateY(-20px);
		transform:translateY(-20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes fadeInDown {
	0% {
		opacity:0;
		-webkit-transform:translateY(-20px);
		-ms-transform:translateY(-20px);
		transform:translateY(-20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.fadeInDown {
	-webkit-animation-name:fadeInDown;
	animation-name:fadeInDown
}
@-webkit-keyframes fadeInDownBig {
	0% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes fadeInDownBig {
	0% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		-ms-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.fadeInDownBig {
	-webkit-animation-name:fadeInDownBig;
	animation-name:fadeInDownBig
}
@-webkit-keyframes fadeInLeft {
	0% {
		opacity:0;
		-webkit-transform:translateX(-20px);
		transform:translateX(-20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes fadeInLeft {
	0% {
		opacity:0;
		-webkit-transform:translateX(-20px);
		-ms-transform:translateX(-20px);
		transform:translateX(-20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.fadeInLeft {
	-webkit-animation-name:fadeInLeft;
	animation-name:fadeInLeft
}
@-webkit-keyframes fadeInLeftBig {
	0% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes fadeInLeftBig {
	0% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		-ms-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.fadeInLeftBig {
	-webkit-animation-name:fadeInLeftBig;
	animation-name:fadeInLeftBig
}
@-webkit-keyframes fadeInRight {
	0% {
		opacity:0;
		-webkit-transform:translateX(20px);
		transform:translateX(20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes fadeInRight {
	0% {
		opacity:0;
		-webkit-transform:translateX(20px);
		-ms-transform:translateX(20px);
		transform:translateX(20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.fadeInRight {
	-webkit-animation-name:fadeInRight;
	animation-name:fadeInRight
}
@-webkit-keyframes fadeInRightBig {
	0% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		transform:translateX(2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes fadeInRightBig {
	0% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		-ms-transform:translateX(2000px);
		transform:translateX(2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.fadeInRightBig {
	-webkit-animation-name:fadeInRightBig;
	animation-name:fadeInRightBig
}
@-webkit-keyframes fadeInUp {
	0% {
		opacity:0;
		-webkit-transform:translateY(20px);
		transform:translateY(20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes fadeInUp {
	0% {
		opacity:0;
		-webkit-transform:translateY(20px);
		-ms-transform:translateY(20px);
		transform:translateY(20px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.fadeInUp {
	-webkit-animation-name:fadeInUp;
	animation-name:fadeInUp
}
@-webkit-keyframes fadeInUpBig {
	0% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		transform:translateY(2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes fadeInUpBig {
	0% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		-ms-transform:translateY(2000px);
		transform:translateY(2000px);
	}
	100% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.fadeInUpBig {
	-webkit-animation-name:fadeInUpBig;
	animation-name:fadeInUpBig
}
@-webkit-keyframes fadeOut {
	0% {
		opacity:1;
	}
	100% {
		opacity:0;
	}
}
@keyframes fadeOut {
	0% {
		opacity:1;
	}
	100% {
		opacity:0;
	}
}
.fadeOut {
	-webkit-animation-name:fadeOut;
	animation-name:fadeOut
}
@-webkit-keyframes fadeOutDown {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(20px);
		transform:translateY(20px);
	}
}
@keyframes fadeOutDown {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(20px);
		-ms-transform:translateY(20px);
		transform:translateY(20px);
	}
}
.fadeOutDown {
	-webkit-animation-name:fadeOutDown;
	animation-name:fadeOutDown
}
@-webkit-keyframes fadeOutDownBig {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		transform:translateY(2000px);
	}
}
@keyframes fadeOutDownBig {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(2000px);
		-ms-transform:translateY(2000px);
		transform:translateY(2000px);
	}
}
.fadeOutDownBig {
	-webkit-animation-name:fadeOutDownBig;
	animation-name:fadeOutDownBig
}
@-webkit-keyframes fadeOutLeft {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-20px);
		transform:translateX(-20px);
	}
}
@keyframes fadeOutLeft {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-20px);
		-ms-transform:translateX(-20px);
		transform:translateX(-20px);
	}
}
.fadeOutLeft {
	-webkit-animation-name:fadeOutLeft;
	animation-name:fadeOutLeft
}
@-webkit-keyframes fadeOutLeftBig {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
}
@keyframes fadeOutLeftBig {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		-ms-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
}
.fadeOutLeftBig {
	-webkit-animation-name:fadeOutLeftBig;
	animation-name:fadeOutLeftBig
}
@-webkit-keyframes fadeOutRight {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(20px);
		transform:translateX(20px);
	}
}
@keyframes fadeOutRight {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(20px);
		-ms-transform:translateX(20px);
		transform:translateX(20px);
	}
}
.fadeOutRight {
	-webkit-animation-name:fadeOutRight;
	animation-name:fadeOutRight
}
@-webkit-keyframes fadeOutRightBig {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		transform:translateX(2000px);
	}
}
@keyframes fadeOutRightBig {
	0% {
		opacity:1;
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		-ms-transform:translateX(2000px);
		transform:translateX(2000px);
	}
}
.fadeOutRightBig {
	-webkit-animation-name:fadeOutRightBig;
	animation-name:fadeOutRightBig
}
@-webkit-keyframes fadeOutUp {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-20px);
		transform:translateY(-20px);
	}
}
@keyframes fadeOutUp {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-20px);
		-ms-transform:translateY(-20px);
		transform:translateY(-20px);
	}
}
.fadeOutUp {
	-webkit-animation-name:fadeOutUp;
	animation-name:fadeOutUp
}
@-webkit-keyframes fadeOutUpBig {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
}
@keyframes fadeOutUpBig {
	0% {
		opacity:1;
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		-ms-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
}
.fadeOutUpBig {
	-webkit-animation-name:fadeOutUpBig;
	animation-name:fadeOutUpBig
}
@-webkit-keyframes flip {
	0% {
		-webkit-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);
		transform:perspective(400px) translateZ(0) rotateY(0) scale(1);
		-webkit-animation-timing-function:ease-out;
		animation-timing-function:ease-out;
	}
	40% {
		-webkit-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
		transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
		-webkit-animation-timing-function:ease-out;
		animation-timing-function:ease-out;
	}
	50% {
		-webkit-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
		transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
		-webkit-animation-timing-function:ease-in;
		animation-timing-function:ease-in;
	}
	80% {
		-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
		transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
		-webkit-animation-timing-function:ease-in;
		animation-timing-function:ease-in;
	}
	100% {
		-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);
		transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);
		-webkit-animation-timing-function:ease-in;
		animation-timing-function:ease-in;
	}
}
@keyframes flip {
	0% {
		-webkit-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);
		-ms-transform:perspective(400px) translateZ(0) rotateY(0) scale(1);
		transform:perspective(400px) translateZ(0) rotateY(0) scale(1);
		-webkit-animation-timing-function:ease-out;
		animation-timing-function:ease-out;
	}
	40% {
		-webkit-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
		-ms-transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
		transform:perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
		-webkit-animation-timing-function:ease-out;
		animation-timing-function:ease-out;
	}
	50% {
		-webkit-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
		-ms-transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
		transform:perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
		-webkit-animation-timing-function:ease-in;
		animation-timing-function:ease-in;
	}
	80% {
		-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
		-ms-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
		transform:perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
		-webkit-animation-timing-function:ease-in;
		animation-timing-function:ease-in;
	}
	100% {
		-webkit-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);
		-ms-transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);
		transform:perspective(400px) translateZ(0) rotateY(360deg) scale(1);
		-webkit-animation-timing-function:ease-in;
		animation-timing-function:ease-in;
	}
}
.animated.flip {
	-webkit-backface-visibility:visible;
	-ms-backface-visibility:visible;
	backface-visibility:visible;
	-webkit-animation-name:flip;
	animation-name:flip
}
@-webkit-keyframes flipInX {
	0% {
		-webkit-transform:perspective(400px) rotateX(90deg);
		transform:perspective(400px) rotateX(90deg);
		opacity:0;
	}
	40% {
		-webkit-transform:perspective(400px) rotateX(-10deg);
		transform:perspective(400px) rotateX(-10deg);
	}
	70% {
		-webkit-transform:perspective(400px) rotateX(10deg);
		transform:perspective(400px) rotateX(10deg);
	}
	100% {
		-webkit-transform:perspective(400px) rotateX(0deg);
		transform:perspective(400px) rotateX(0deg);
		opacity:1;
	}
}
@keyframes flipInX {
	0% {
		-webkit-transform:perspective(400px) rotateX(90deg);
		-ms-transform:perspective(400px) rotateX(90deg);
		transform:perspective(400px) rotateX(90deg);
		opacity:0;
	}
	40% {
		-webkit-transform:perspective(400px) rotateX(-10deg);
		-ms-transform:perspective(400px) rotateX(-10deg);
		transform:perspective(400px) rotateX(-10deg);
	}
	70% {
		-webkit-transform:perspective(400px) rotateX(10deg);
		-ms-transform:perspective(400px) rotateX(10deg);
		transform:perspective(400px) rotateX(10deg);
	}
	100% {
		-webkit-transform:perspective(400px) rotateX(0deg);
		-ms-transform:perspective(400px) rotateX(0deg);
		transform:perspective(400px) rotateX(0deg);
		opacity:1;
	}
}
.flipInX {
	-webkit-backface-visibility:visible !important;
	-ms-backface-visibility:visible !important;
	backface-visibility:visible !important;
	-webkit-animation-name:flipInX;
	animation-name:flipInX
}
@-webkit-keyframes flipInY {
	0% {
		-webkit-transform:perspective(400px) rotateY(90deg);
		transform:perspective(400px) rotateY(90deg);
		opacity:0;
	}
	40% {
		-webkit-transform:perspective(400px) rotateY(-10deg);
		transform:perspective(400px) rotateY(-10deg);
	}
	70% {
		-webkit-transform:perspective(400px) rotateY(10deg);
		transform:perspective(400px) rotateY(10deg);
	}
	100% {
		-webkit-transform:perspective(400px) rotateY(0deg);
		transform:perspective(400px) rotateY(0deg);
		opacity:1;
	}
}
@keyframes flipInY {
	0% {
		-webkit-transform:perspective(400px) rotateY(90deg);
		-ms-transform:perspective(400px) rotateY(90deg);
		transform:perspective(400px) rotateY(90deg);
		opacity:0;
	}
	40% {
		-webkit-transform:perspective(400px) rotateY(-10deg);
		-ms-transform:perspective(400px) rotateY(-10deg);
		transform:perspective(400px) rotateY(-10deg);
	}
	70% {
		-webkit-transform:perspective(400px) rotateY(10deg);
		-ms-transform:perspective(400px) rotateY(10deg);
		transform:perspective(400px) rotateY(10deg);
	}
	100% {
		-webkit-transform:perspective(400px) rotateY(0deg);
		-ms-transform:perspective(400px) rotateY(0deg);
		transform:perspective(400px) rotateY(0deg);
		opacity:1;
	}
}
.flipInY {
	-webkit-backface-visibility:visible !important;
	-ms-backface-visibility:visible !important;
	backface-visibility:visible !important;
	-webkit-animation-name:flipInY;
	animation-name:flipInY
}
@-webkit-keyframes flipOutX {
	0% {
		-webkit-transform:perspective(400px) rotateX(0deg);
		transform:perspective(400px) rotateX(0deg);
		opacity:1;
	}
	100% {
		-webkit-transform:perspective(400px) rotateX(90deg);
		transform:perspective(400px) rotateX(90deg);
		opacity:0;
	}
}
@keyframes flipOutX {
	0% {
		-webkit-transform:perspective(400px) rotateX(0deg);
		-ms-transform:perspective(400px) rotateX(0deg);
		transform:perspective(400px) rotateX(0deg);
		opacity:1;
	}
	100% {
		-webkit-transform:perspective(400px) rotateX(90deg);
		-ms-transform:perspective(400px) rotateX(90deg);
		transform:perspective(400px) rotateX(90deg);
		opacity:0;
	}
}
.flipOutX {
	-webkit-animation-name:flipOutX;
	animation-name:flipOutX;
	-webkit-backface-visibility:visible !important;
	-ms-backface-visibility:visible !important;
	backface-visibility:visible !important
}
@-webkit-keyframes flipOutY {
	0% {
		-webkit-transform:perspective(400px) rotateY(0deg);
		transform:perspective(400px) rotateY(0deg);
		opacity:1;
	}
	100% {
		-webkit-transform:perspective(400px) rotateY(90deg);
		transform:perspective(400px) rotateY(90deg);
		opacity:0;
	}
}
@keyframes flipOutY {
	0% {
		-webkit-transform:perspective(400px) rotateY(0deg);
		-ms-transform:perspective(400px) rotateY(0deg);
		transform:perspective(400px) rotateY(0deg);
		opacity:1;
	}
	100% {
		-webkit-transform:perspective(400px) rotateY(90deg);
		-ms-transform:perspective(400px) rotateY(90deg);
		transform:perspective(400px) rotateY(90deg);
		opacity:0;
	}
}
.flipOutY {
	-webkit-backface-visibility:visible !important;
	-ms-backface-visibility:visible !important;
	backface-visibility:visible !important;
	-webkit-animation-name:flipOutY;
	animation-name:flipOutY
}
@-webkit-keyframes lightSpeedIn {
	0% {
		-webkit-transform:translateX(100%) skewX(-30deg);
		transform:translateX(100%) skewX(-30deg);
		opacity:0;
	}
	60% {
		-webkit-transform:translateX(-20%) skewX(30deg);
		transform:translateX(-20%) skewX(30deg);
		opacity:1;
	}
	80% {
		-webkit-transform:translateX(0%) skewX(-15deg);
		transform:translateX(0%) skewX(-15deg);
		opacity:1;
	}
	100% {
		-webkit-transform:translateX(0%) skewX(0deg);
		transform:translateX(0%) skewX(0deg);
		opacity:1;
	}
}
@keyframes lightSpeedIn {
	0% {
		-webkit-transform:translateX(100%) skewX(-30deg);
		-ms-transform:translateX(100%) skewX(-30deg);
		transform:translateX(100%) skewX(-30deg);
		opacity:0;
	}
	60% {
		-webkit-transform:translateX(-20%) skewX(30deg);
		-ms-transform:translateX(-20%) skewX(30deg);
		transform:translateX(-20%) skewX(30deg);
		opacity:1;
	}
	80% {
		-webkit-transform:translateX(0%) skewX(-15deg);
		-ms-transform:translateX(0%) skewX(-15deg);
		transform:translateX(0%) skewX(-15deg);
		opacity:1;
	}
	100% {
		-webkit-transform:translateX(0%) skewX(0deg);
		-ms-transform:translateX(0%) skewX(0deg);
		transform:translateX(0%) skewX(0deg);
		opacity:1;
	}
}
.lightSpeedIn {
	-webkit-animation-name:lightSpeedIn;
	animation-name:lightSpeedIn;
	-webkit-animation-timing-function:ease-out;
	animation-timing-function:ease-out
}
@-webkit-keyframes lightSpeedOut {
	0% {
		-webkit-transform:translateX(0%) skewX(0deg);
		transform:translateX(0%) skewX(0deg);
		opacity:1;
	}
	100% {
		-webkit-transform:translateX(100%) skewX(-30deg);
		transform:translateX(100%) skewX(-30deg);
		opacity:0;
	}
}
@keyframes lightSpeedOut {
	0% {
		-webkit-transform:translateX(0%) skewX(0deg);
		-ms-transform:translateX(0%) skewX(0deg);
		transform:translateX(0%) skewX(0deg);
		opacity:1;
	}
	100% {
		-webkit-transform:translateX(100%) skewX(-30deg);
		-ms-transform:translateX(100%) skewX(-30deg);
		transform:translateX(100%) skewX(-30deg);
		opacity:0;
	}
}
.lightSpeedOut {
	-webkit-animation-name:lightSpeedOut;
	animation-name:lightSpeedOut;
	-webkit-animation-timing-function:ease-in;
	animation-timing-function:ease-in
}
@-webkit-keyframes rotateIn {
	0% {
		-webkit-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(-200deg);
		transform:rotate(-200deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
@keyframes rotateIn {
	0% {
		-webkit-transform-origin:center center;
		-ms-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(-200deg);
		-ms-transform:rotate(-200deg);
		transform:rotate(-200deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:center center;
		-ms-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
.rotateIn {
	-webkit-animation-name:rotateIn;
	animation-name:rotateIn
}
@-webkit-keyframes rotateInDownLeft {
	0% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
@keyframes rotateInDownLeft {
	0% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(-90deg);
		-ms-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
.rotateInDownLeft {
	-webkit-animation-name:rotateInDownLeft;
	animation-name:rotateInDownLeft
}
@-webkit-keyframes rotateInDownRight {
	0% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
@keyframes rotateInDownRight {
	0% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(90deg);
		-ms-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
.rotateInDownRight {
	-webkit-animation-name:rotateInDownRight;
	animation-name:rotateInDownRight
}
@-webkit-keyframes rotateInUpLeft {
	0% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
@keyframes rotateInUpLeft {
	0% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(90deg);
		-ms-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
.rotateInUpLeft {
	-webkit-animation-name:rotateInUpLeft;
	animation-name:rotateInUpLeft
}
@-webkit-keyframes rotateInUpRight {
	0% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
@keyframes rotateInUpRight {
	0% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(-90deg);
		-ms-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
	100% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
}
.rotateInUpRight {
	-webkit-animation-name:rotateInUpRight;
	animation-name:rotateInUpRight
}
@-webkit-keyframes rotateOut {
	0% {
		-webkit-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(200deg);
		transform:rotate(200deg);
		opacity:0;
	}
}
@keyframes rotateOut {
	0% {
		-webkit-transform-origin:center center;
		-ms-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:center center;
		-ms-transform-origin:center center;
		transform-origin:center center;
		-webkit-transform:rotate(200deg);
		-ms-transform:rotate(200deg);
		transform:rotate(200deg);
		opacity:0;
	}
}
.rotateOut {
	-webkit-animation-name:rotateOut;
	animation-name:rotateOut
}
@-webkit-keyframes rotateOutDownLeft {
	0% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
}
@keyframes rotateOutDownLeft {
	0% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(90deg);
		-ms-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
}
.rotateOutDownLeft {
	-webkit-animation-name:rotateOutDownLeft;
	animation-name:rotateOutDownLeft
}
@-webkit-keyframes rotateOutDownRight {
	0% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
}
@keyframes rotateOutDownRight {
	0% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(-90deg);
		-ms-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
}
.rotateOutDownRight {
	-webkit-animation-name:rotateOutDownRight;
	animation-name:rotateOutDownRight
}
@-webkit-keyframes rotateOutUpLeft {
	0% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
}
@keyframes rotateOutUpLeft {
	0% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:left bottom;
		-ms-transform-origin:left bottom;
		transform-origin:left bottom;
		-webkit-transform:rotate(-90deg);
		-ms-transform:rotate(-90deg);
		transform:rotate(-90deg);
		opacity:0;
	}
}
.rotateOutUpLeft {
	-webkit-animation-name:rotateOutUpLeft;
	animation-name:rotateOutUpLeft
}
@-webkit-keyframes rotateOutUpRight {
	0% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
}
@keyframes rotateOutUpRight {
	0% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		opacity:1;
	}
	100% {
		-webkit-transform-origin:right bottom;
		-ms-transform-origin:right bottom;
		transform-origin:right bottom;
		-webkit-transform:rotate(90deg);
		-ms-transform:rotate(90deg);
		transform:rotate(90deg);
		opacity:0;
	}
}
.rotateOutUpRight {
	-webkit-animation-name:rotateOutUpRight;
	animation-name:rotateOutUpRight
}
@-webkit-keyframes slideInDown {
	0% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
	100% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
}
@keyframes slideInDown {
	0% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		-ms-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
	100% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
}
.slideInDown {
	-webkit-animation-name:slideInDown;
	animation-name:slideInDown
}
@-webkit-keyframes slideInLeft {
	0% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
	100% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes slideInLeft {
	0% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		-ms-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
	100% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.slideInLeft {
	-webkit-animation-name:slideInLeft;
	animation-name:slideInLeft
}
@-webkit-keyframes slideInRight {
	0% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		transform:translateX(2000px);
	}
	100% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
}
@keyframes slideInRight {
	0% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		-ms-transform:translateX(2000px);
		transform:translateX(2000px);
	}
	100% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
}
.slideInRight {
	-webkit-animation-name:slideInRight;
	animation-name:slideInRight
}
@-webkit-keyframes slideOutLeft {
	0% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
}
@keyframes slideOutLeft {
	0% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(-2000px);
		-ms-transform:translateX(-2000px);
		transform:translateX(-2000px);
	}
}
.slideOutLeft {
	-webkit-animation-name:slideOutLeft;
	animation-name:slideOutLeft
}
@-webkit-keyframes slideOutRight {
	0% {
		-webkit-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		transform:translateX(2000px);
	}
}
@keyframes slideOutRight {
	0% {
		-webkit-transform:translateX(0);
		-ms-transform:translateX(0);
		transform:translateX(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(2000px);
		-ms-transform:translateX(2000px);
		transform:translateX(2000px);
	}
}
.slideOutRight {
	-webkit-animation-name:slideOutRight;
	animation-name:slideOutRight
}
@-webkit-keyframes slideOutUp {
	0% {
		-webkit-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
}
@keyframes slideOutUp {
	0% {
		-webkit-transform:translateY(0);
		-ms-transform:translateY(0);
		transform:translateY(0);
	}
	100% {
		opacity:0;
		-webkit-transform:translateY(-2000px);
		-ms-transform:translateY(-2000px);
		transform:translateY(-2000px);
	}
}
.slideOutUp {
	-webkit-animation-name:slideOutUp;
	animation-name:slideOutUp
}
@-webkit-keyframes hinge {
	0% {
		-webkit-transform:rotate(0);
		transform:rotate(0);
		-webkit-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	20%,60% {
		-webkit-transform:rotate(80deg);
		transform:rotate(80deg);
		-webkit-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	40% {
		-webkit-transform:rotate(60deg);
		transform:rotate(60deg);
		-webkit-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	80% {
		-webkit-transform:rotate(60deg) translateY(0);
		transform:rotate(60deg) translateY(0);
		opacity:1;
		-webkit-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	100% {
		-webkit-transform:translateY(700px);
		transform:translateY(700px);
		opacity:0;
	}
}
@keyframes hinge {
	0% {
		-webkit-transform:rotate(0);
		-ms-transform:rotate(0);
		transform:rotate(0);
		-webkit-transform-origin:top left;
		-ms-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	20%,60% {
		-webkit-transform:rotate(80deg);
		-ms-transform:rotate(80deg);
		transform:rotate(80deg);
		-webkit-transform-origin:top left;
		-ms-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	40% {
		-webkit-transform:rotate(60deg);
		-ms-transform:rotate(60deg);
		transform:rotate(60deg);
		-webkit-transform-origin:top left;
		-ms-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	80% {
		-webkit-transform:rotate(60deg) translateY(0);
		-ms-transform:rotate(60deg) translateY(0);
		transform:rotate(60deg) translateY(0);
		opacity:1;
		-webkit-transform-origin:top left;
		-ms-transform-origin:top left;
		transform-origin:top left;
		-webkit-animation-timing-function:ease-in-out;
		animation-timing-function:ease-in-out;
	}
	100% {
		-webkit-transform:translateY(700px);
		-ms-transform:translateY(700px);
		transform:translateY(700px);
		opacity:0;
	}
}
.hinge {
	-webkit-animation-name:hinge;
	animation-name:hinge
}
@-webkit-keyframes rollIn {
	0% {
		opacity:0;
		-webkit-transform:translateX(-100%) rotate(-120deg);
		transform:translateX(-100%) rotate(-120deg);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0px) rotate(0deg);
		transform:translateX(0px) rotate(0deg);
	}
}
@keyframes rollIn {
	0% {
		opacity:0;
		-webkit-transform:translateX(-100%) rotate(-120deg);
		-ms-transform:translateX(-100%) rotate(-120deg);
		transform:translateX(-100%) rotate(-120deg);
	}
	100% {
		opacity:1;
		-webkit-transform:translateX(0px) rotate(0deg);
		-ms-transform:translateX(0px) rotate(0deg);
		transform:translateX(0px) rotate(0deg);
	}
}
.rollIn {
	-webkit-animation-name:rollIn;
	animation-name:rollIn
}
@-webkit-keyframes rollOut {
	0% {
		opacity:1;
		-webkit-transform:translateX(0px) rotate(0deg);
		transform:translateX(0px) rotate(0deg);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(100%) rotate(120deg);
		transform:translateX(100%) rotate(120deg);
	}
}
@keyframes rollOut {
	0% {
		opacity:1;
		-webkit-transform:translateX(0px) rotate(0deg);
		-ms-transform:translateX(0px) rotate(0deg);
		transform:translateX(0px) rotate(0deg);
	}
	100% {
		opacity:0;
		-webkit-transform:translateX(100%) rotate(120deg);
		-ms-transform:translateX(100%) rotate(120deg);
		transform:translateX(100%) rotate(120deg);
	}
}
.rollOut {
	-webkit-animation-name:rollOut;
	animation-name:rollOut
}
.owl-carousel .owl-wrapper:after {
	content:".";
	display:block;
	clear:both;
	visibility:hidden;
	line-height:0;
	height:0
}
.owl-carousel {
	display:none;
	position:relative;
	width:100%;
	-ms-touch-action:pan-y
}
.owl-carousel .owl-wrapper {
	display:none;
	position:relative;
	-webkit-transform:translate3d(0px, 0px, 0px)
}
.owl-carousel .owl-wrapper-outer {
	overflow:hidden;
	position:relative;
	width:100%
}
.owl-carousel .owl-wrapper-outer.autoHeight {
	-webkit-transition:height 500ms ease-in-out;
	-moz-transition:height 500ms ease-in-out;
	-ms-transition:height 500ms ease-in-out;
	-o-transition:height 500ms ease-in-out;
	transition:height 500ms ease-in-out
}
.owl-carousel .owl-item {
	float:left
}
.owl-controls .owl-page,.owl-controls .owl-buttons div {
	cursor:pointer
}
.owl-controls {
	-webkit-user-select:none;
	-khtml-user-select:none;
	-moz-user-select:none;
	-ms-user-select:none;
	user-select:none;
	-webkit-tap-highlight-color:rgba(0, 0, 0, 0)
}
.grabbing {
	cursor:url(./images/grabbing.png) 8 8, move
}
.owl-carousel .owl-wrapper,.owl-carousel .owl-item {
	-webkit-backface-visibility:hidden;
	-moz-backface-visibility:hidden;
	-ms-backface-visibility:hidden;
	-webkit-transform:translate3d(0,0,0);
	-moz-transform:translate3d(0,0,0);
	-ms-transform:translate3d(0,0,0)
}
.owl-theme .owl-controls {
	margin-top:10px;
	position:absolute;
	text-align:center;
	top:50%;
	width:100%
}
.owl-theme .owl-controls .owl-buttons div {
	color:#FFF;
	display:inline-block;
	zoom:1;
	*display:inline;
	margin:5px;
	padding:3px 10px;
	font-size:12px;
	-webkit-border-radius:30px;
	-moz-border-radius:30px;
	border-radius:30px;
	background:#869791;
	filter:Alpha(Opacity=50);
	opacity:0.5
}
.owl-theme .owl-controls.clickable .owl-buttons div:hover {
	filter:Alpha(Opacity=100);
	opacity:1;
	text-decoration:none
}
.owl-theme .owl-controls .owl-page {
	display:inline-block;
	zoom:1;
	*display:inline
}
.owl-theme .owl-controls .owl-page span {
	display:block;
	width:12px;
	height:12px;
	margin:5px 7px;
	filter:Alpha(Opacity=50);
	opacity:0.5;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border-radius:20px;
	background:#869791
}
.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span {
	filter:Alpha(Opacity=100);
	opacity:1
}
.owl-theme .owl-controls .owl-page span.owl-numbers {
	height:auto;
	width:auto;
	color:#FFF;
	padding:2px 10px;
	font-size:12px;
	-webkit-border-radius:30px;
	-moz-border-radius:30px;
	border-radius:30px
}
.owl-item.loading {
	min-height:150px;
	background:url(AjaxLoader.gif) no-repeat center center
}
body,html {
	font-family:'Roboto', sans-serif;
	font-weight:400;
	font-size:16px;
	line-height:28px;
	letter-spacing:0;
	background:url(./back.jpg);
	color:#424242
}
h1,h2,h3,h4,h5,h6 {
	padding-bottom:5px;
	color:#00a7dd;
	line-height:normal;
	font-weight:normal;
	margin:0 0 10px;
	text-transform:uppercase
}
h1 {
	font-family:'Raleway', sans-serif;
	color:#00a7dd
}
h2 {
	font-family:'Raleway', sans-serif;
	font-weight:700;
	color:#00a7dd
}
h3 {
	font-family:'Roboto', sans-serif;
	font-weight:700;
	letter-spacing:0.025em
}
h1 {
	font-size:60px
}
h2 {
	font-size:45px
}
h3 {
	font-size:18px
}
h4 {
	font-size:16px
}
h5 {
	font-size:14px
}
h6 {
	font-size:12px
}
p {
	font-weight:400
}
a {
	color:#00a7dd
}
a:hover {
	color:#416467;
	text-decoration:none
}
a:active {
	color:#416467
}
ul,li {
	list-style:none
}
ul.bullets li {
	list-style:square
}
.trianglify {
	position:relative;
	background:none;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover
}
.trianglify .color-overlay {
	padding:60px 0
}
.default-btn {
	text-transform:uppercase;
	background:#fff;
	color:#00A7DD;
	font-size:16px;
	line-height:normal;
	letter-spacing:0.025em;
	font-weight:700;
	position:relative;
	padding:12px 40px;
	border:1px solid #00A7DD;
	-webkit-transition:all .5s ease;
	-moz-transition:all .5s ease;
	-ms-transition:all .5s ease;
	-o-transition:all .5s ease;
	transition:all .5s ease
}
.default-btn:hover {
	background:#00a7dd;
	border:1px solid #fff
}
.default-btn:after {
	content:"";
	position:absolute;
	top:50%;
	left:50%;
	width:0px;
	height:0px;
	background:#0aabe1;
	border-radius:4px;
	-webkit-transition:all .4s ease;
	-moz-transition:all .4s ease;
	-ms-transition:all .4s ease;
	-o-transition:all .4s ease;
	transition:all .4s ease
}
.default-btn:hover:after {
	left:0px;
	top:0px;
	width:100%;
	height:100%;
	z-index:-1
}
.default-btn:hover,.default-btn.active,.default-btn:active {
	color:#fff;
	z-index:1
}
.default-btn:focus {
	border:none;
	outline:none
}
.white {
	background:#fff
}
.form-control::-moz-placeholder {
	color:#000;
	opacity:1;
	font-size:12px;
	line-height:18px
}
.form-control:-ms-input-placeholder {
	color:#000;
	font-size:12px;
	line-height:18px
}
.form-control::-webkit-input-placeholder {
	color:#000;
	font-size:12px;
	line-height:18px
}
.form-control:focus::-moz-placeholder {
	color:#000
}
.form-control:focus:-ms-input-placeholder {
	color:#000
}
.form-control:focus::-webkit-input-placeholder {
	color:#000
}
.text-slider {
	margin-bottom:30px
}
.flex_text ul {
	padding-left:0
}
.flex_text li {
	font-size:30px;
	font-weight:700;
	color:#fff;
	min-height:40px;
	line-height:40px
}
#header {
	display:none;
	padding:20px 0;
	background-color:#fff;
	-webkit-box-shadow:0 0 9px -5px #000;
	-moz-box-shadow:0 0 9px -5px #000;
	box-shadow:0 0 9px -5px #000
}
#header2 .navbar-default {
	background:transparent;
	padding:20px 0;
	margin-top:20px
}
#header2 .nav > li > a {
	color:#fff
}
#header2 .addbg .nav > li > a {
	color:#424242
}
#header2 .addbg .nav > li.current > a,#header2 .addbg .nav > li > a:hover,#header2 .addbg .nav > li.current > a:focus,#header .nav > li > a:hover {
	color:#fff;
	background-color:#00a7dd
}
#header2 .addbg {
	background:#fff;
	margin-top:0;
	-webkit-box-shadow:0 0 9px -5px #000;
	-moz-box-shadow:0 0 9px -5px #000;
	box-shadow:0 0 9px -5px #000
}
header .navbar-default {
	background-color:#fff;
	border-color:transparent
}
header .navbar-default .navbar-toggle {
	border-color:#00a7dd;
	border:0;
	border-radius:2px;
	margin:0
}
header .navbar-default .navbar-toggle .icon-bar {
	width:30px;
	height:3px
}
header .navbar-default .navbar-toggle:hover,header .navbar-default .navbar-toggle:focus {
	background:transparent
}
header .navbar-default .navbar-toggle .icon-bar {
	background:#00a7dd
}
header .navbar {
	border-radius:0;
	margin-bottom:0
}
header ul > li {
	margin-bottom:0px
}
header ul > li a {
	font-family:'Raleway', sans-serif;
	font-weight:400;
	text-transform:capitalize
}
header .app li {
	float:left;
	margin-left:10px
}
.app {
	padding:0;
	text-align:center
}
.nav-logo {
	font-family:'Raleway', sans-serif;
	font-weight:700;
	font-size:28px;
	margin:0;
	text-transform:none
}
.nav-logo img {
	margin-right:15px;
	height:40px
}
#header2 .nav-logo a,#header2 .app li a {
	color:#fff
}
#header2 .addbg .nav-logo a,#header2 .addbg .app li a {
	color:#00a7dd
}
header .navbar-default .navbar-nav > .current > a,header .navbar-default .navbar-nav > .current > a:hover,header .navbar-default .navbar-nav > .current > a:focus {
	background-color:#00a7dd;
	color:#fefefe
}
.navbar-nav > li > a {
	padding-top:10px;
	padding-bottom:10px
}
.banner-area {
	background:none;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
	position:relative
}
.banner-area .color-overlay {
	padding:140px 0 40px;
	height:100vh
}
.logo {
	text-align:center
}
.showcase {
	margin-top:75px
}
.showcase h2 {
	font-size:30px;
	font-weight:bold;
	margin-bottom:40px;
	color:#FFF;
	line-height:40px;
	letter-spacing:0.025em
}
.showcase p {
	color:#fff;
	line-height:24px;
	margin:0 0 50px
}
.showcase {
	margin-top: 1%;
	margin-bottom: 15%;
}
.mockup {
	position:absolute
}
.download-block {
	margin-bottom:60px
}
.download-block .btn {
	color:#fff;
	border-radius:3px;
	background:#5aafdc;
	padding:15px 40px;
	text-transform:uppercase;
	font-weight:bold;
	-webkit-transition:.3s ease;
	-moz-transition:.3s ease;
	-ms-transition:.3s ease;
	-o-transition:.3s ease;
	-transition:.3s ease;
	line-height:22px;
	letter-spacing:0.025em
}
.download-block .btn:hover {
	background:#3C91BF
}
.download-block .extra {
	background:#ff7f66;
	margin-left:30px
}
.download-block .extra:hover {
	background:#ED5A3D
}
.trial-area {
	position:relative;
	background:#00a7dd;
	padding:40px 0
}
.trial-area .form-control {
	background:#fff;
	border-radius:3px;
	padding:16px 15px;
	color:#555;
	height:51px;
	font-weight:500;
	text-transform:uppercase
}
.trial-area .form-control:focus {
	background:#fff;
	color:#000
}
.trial-area .default-btn {
	background:#1383A9;
	padding:8px 20px;
	padding:8px 20px;
	height:51px;
	border:none;
	color:#ffffff
}
.trial-area .default-btn:hover {
	background:#ED5A3D;
	color:#fff
}
.white-area {
	position:relative;
	padding:100px 0px;
	text-align:center
}
.sub-heading {
	position:relative;
	margin-bottom:75px
}
.sub-heading:before {
	content:"";
	position:absolute;
	top:100%;
	left:50%;
	margin-left:-3%;
	width:6%;
	height:1px;
	background:#00A7DD;
	z-index:1;
	-webkit-transition:.3s ease;
	-moz-transition:.3s ease;
	-ms-transition:.3s ease;
	-o-transition:.3s ease;
	-transition:.3s ease
}
.sub-heading:hover:before {
	width:24%;
	margin-left:-12%
}
.sub-heading:after {
	content:"";
	position:absolute;
	top:100%;
	left:50%;
	margin-left:-12%;
	width:24%;
	height:1px;
	background:#e1e1e1
}
.sub-heading p {
	color:#818181;
	display:inline-block;
	padding:0px 0px 20px;
	position:relative;
	line-height:24px;
	letter-spacing:0.025em
}
.single-intro {
	padding-top:70px
}
.intro-block {
	position:relative;
	background:#F7F7F7;
	margin:50px 0px 0px;
	padding:70px 25px 40px;
	text-align:center
}
.intro-block:hover,.intro-block.active {
	background:#0AABE1
}
.intro-block:hover {
	transition:.6s ease;
	-webkit-transition:.6s ease;
	-moz-transition:.6s ease;
	-o-transition:.6s ease;
	-ms-transition:.6s ease
}
.intro-block .intro-icon {
	position:absolute;
	top:-31px;
	left:50%;
	margin-left:-31px
}
.intro-block .fa {
	width:63px;
	height:63px;
	font-size:30px;
	line-height:2;
	color:#FFF;
	background:#0AABE1;
	border-radius:50%;
	box-shadow:0px 0px 0px 10px #CCEEF9
}
.intro-block:hover .fa,.intro-block.active .fa {
	background:#FFF;
	color:#0AABE1;
	box-shadow:0px 0px 0px 10px #0AABE1
}
.intro-block h3 {
	font-size:18px;
	color:#0AABE1;
	font-weight:700;
	text-transform:uppercase;
	margin-bottom:15px
}
.intro-block p {
	color:#505050
}
.intro-block:hover h3,.intro-block:hover p {
	color:#F6F6F6
}
.feature-area {
	background:none;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
	position:relative
}
.feature-area .color-overlay {
	padding:100px 0
}
.title h2 {
	color:#FFF
}
.title .sub-heading p {
	color:#F3F3F3;
	border-color:#00A7DD
}
.feature-block:after {
	content:"";
	display:table
}
.feature-block:after {
	clear:both
}
.single-feature {
	position:relative;
	float:left;
	padding:30px 5px;
	text-align:center;
	-webkit-transition:.3s ease;
	-moz-transition:.3s ease;
	-ms-transition:.3s ease;
	-o-transition:.3s ease;
	transition:.3s ease
}
.single-feature h3 {
	font-size:18px;
	text-transform:uppercase;
	color:#fff
}
.single-feature p {
	color:#F6F6F6;
	font-weight:200
}
.featured-icon {
	display:inline-block;
	margin-bottom:20px
}
.single-feature i.fa {
	border:2px solid #fff;
	padding:15px;
	border-radius:50%;
	font-size:30px;
	background:#00a7dd;
	color:#fff;
	width:64px;
	height:64px;
	-webkit-transition:.3s ease;
	-moz-transition:.3s ease;
	-ms-transition:.3s ease;
	-o-transition:.3s ease;
	transition:.3s ease
}
.feature-block:hover .single-feature {
	border-color:#fff;
	border-color:#fff;
	-webkit-transition:.3s ease;
	-moz-transition:.3s ease;
	-ms-transition:.3s ease;
	-o-transition:.3s ease;
	transition:.3s ease
}
.single-feature:hover .featured-icon .fa {
	border:2px solid #00a7dd;
	background:#fff;
	color:#00a7dd
}
.single-feature:nth-of-type(even) {
	border-right:none
}
.single-feature:nth-last-child(2) {
	border-bottom:none
}
.single-feature:last-child {
	border-bottom:none
}
.circle {
	width:25px;
	height:25px;
	border:2px solid #65c8e5;
	border-radius:50%;
	background:#fff;
	position:absolute;
	bottom:-12.5px;
	right:-12.5px;
	z-index:100
}
.feature-block:hover .circle {
	background:#65c8e5;
	border-color:#fff
}
.next-arrow {
	position:relative;
	z-index:200
}
.next-arrow a {
	color:#fff;
	font-size:30px;
	position:absolute;
	top:40px;
	left:50%
}
.feature-mockup {
	position:relative;
	bottom:-176px
}
.more-feature-mockup {
	text-align:center
}
.feature-list ul {
	list-style:none
}
.feature-list li {
	position:relative;
	margin-bottom:30px;
	padding-left:80px
}
.feature-list li:hover i {
	color:#fff;
	background:#00a7dd;
	-webkit-transition:.5s ease;
	-moz-transition:.5s ease;
	-ms-transition:.5s ease;
	-o-transition:.5s ease;
	transition:.5s ease
}
.feature-list li:last-child {
	margin-bottom:0px
}
.feature-icon {
	position:absolute;
	left:0px
}
.feature-icon i {
	width:63px;
	height:63px;
	text-align:center;
	font-size:30px;
	background:#fff;
	color:#00a7dd;
	border:2px solid #00a7dd;
	border-radius:50%;
	line-height:63px
}
.feature-mockup-list {
	margin-top:75px
}
.feature-details h3 {
	color:#00a7dd;
	text-transform:uppercase;
	font-weight:700
}
.feature-details p {
	color:#616161;
	font-weight:200
}
.purchase-area {
	background:#00a7dd;
	padding:40px 0
}
.purchase-area p {
	color:#fff;
	font-size:20px;
	font-weight:700;
	display:inline;
	line-height:normal;
	letter-spacing:0.025em
}
.purchase-area a {
	margin-left:25px
}
.purchase-area .default-btn {
	border:none
}
.purchase-area .default-btn:hover {
	background:#ED5A3D;
	border:none
}
.purchase-area .default-btn:after {
	background:#ED5A3D
}
.panel {
	box-shadow:none;
	border:none
}
.panel-title {
	color:#4a4a4a;
	font-weight:normal;
	font-size:16px
}
.glyphicon {
	float:right;
	color:#fff;
	padding:3px 5px;
	border-radius:50%;
	background:#00a7dd;
	font-size:12px;
	width:20px;
	height:20px;
	text-align:center
}
.faq-qa {
	text-transform:uppercase;
	color:#00a7dd;
	font-weight:bold;
	padding-right:5px
}
.panel-body {
	background:#fafafa;
	margin-top:2px;
	color:#54676e
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
	border-top-color:#fafafa
}
.panel-group {
	margin-bottom:0
}
.panel-group .panel + .panel {
	margin-top:20px
}
.faq-area .panel-title a:focus {
	text-decoration:none
}
.form-area,.content-area {
	position:relative;
	padding:80px 0 100px
}
.form-area ul {
	padding:0
}
.divider {
	border-right:1px solid #d9d9d9
}
.form-area h3 {
	text-transform:uppercase;
	margin-bottom:18px
}
.contact-address h4 {
	color:#3A3A3A;
	font-weight:700;
	margin-top:0px;
	margin-bottom:4px;
	text-transform:capitalize;
	letter-spacing:0.025em
}
.contact-address span {
	display:block;
	color:#3a3a3a;
	font-size:12px;
	line-height:normal;
	letter-spacing:0.025em
}
.contact-address ul li {
	overflow:hidden;
	margin-bottom:25px
}
.contact-address ul li:last-child {
	margin-bottom:0
}
.contact-address ul li .fa,.contact-address ul li .counter {
	float:left;
	width:25px;
	color:#00a7dd;
	font-size:30px
}
.contact-address ul li .address-phone {
	float:left;
	width:180px;
	padding-left:25px
}
.form-block {
	padding-left:25px
}
.form-area .form-control,.form-area textarea {
	font-family:'Roboto', sans-serif;
	background:#f8fdff;
	border:1px solid #a5d3eb;
	padding:10px 12px;
	color:#bdbdbd;
	height:45px;
	font-weight:400;
	border-radius:0
}
.form-area .form-control:last-child {
	margin-bottom:0
}
.form-area .form-group {
	margin-bottom:24px
}
.form-area textarea {
	min-height:115px
}
img.captcha {
	font-family:'Roboto', sans-serif;
	background:#f8fdff;
	border:1px solid #a5d3eb;
	padding:10px 12px;
	color:#bdbdbd;
	height:115px;
	font-weight:400;
	border-radius:0;
	width:100%
}
.form-area .default-btn {
	padding:10px
}
.form-area .form-control:focus,.form-area textarea:focus {
	background:#fff;
	color:#727272;
	border-color:#00a7dd
}
.form-area .form-control::-moz-placeholder {
	color:#bdbdbd;
	font-size:12px;
	line-height:22px
}
.form-area .form-control:-ms-input-placeholder {
	color:#bdbdbd;
	font-size:12px;
	line-height:22px
}
.form-area .form-control::-webkit-input-placeholder {
	color:#bdbdbd;
	font-size:12px;
	line-height:22px
}
.form-area .form-control:focus::-moz-placeholder {
	color:#727272;
	font-size:13px
}
.form-area .form-control:focus:-ms-input-placeholder {
	color:#727272;
	font-size:13px
}
.form-area .form-control:focus::-webkit-input-placeholder {
	color:#727272;
	font-size:13px
}
footer {
	background:none;
	position:relative;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover
}
footer .color-overlay {
	padding:75px 0
}
footer h3,footer a {
	color:#fff
}
footer ul {
	padding:0
}
.copyright {
	font-size:20px;
	position:relative;
	color:#fff
}
.copyright span {
	display:inline-block;
	margin-right:5px;
	text-transform:uppercase;
	font-weight:700
}
.copyright p {
	margin:75px 0 0;
	padding-bottom:25px;
	text-transform:capitalize
}
.copyright:after {
	content:" ";
	position:absolute;
	bottom:0;
	left:50%;
	height:2px;
	width:50px;
	margin-left:-25px;
	background:#fff
}
#go-to-top a {
	text-decoration:none;
	display:none
}
#go-to-top .fa {
	position:fixed;
	bottom:5px;
	right:5px;
	width:70px;
	height:70px;
	border:2px solid #00a7dd;
	border-radius:5px;
	color:#00a7dd;
	font-size:25px;
	background:#fff;
	text-align:center;
	line-height:60px;
	margin:0 20px 20px
}
#go-to-top .fa:hover {
	background:#00a7dd;
	color:#fff
}
@media screen and (min-width: 1200px) {
	header .app li {
		margin-left:20px
	}
	header .app li .fa {
		font-size:36px
	}
	header .nav > li > a {
		font-size:16px
	}
	header .nav-brand a {
		font-size:20px
	}
}
@media screen and (max-width: 1200px) {
	header .nav > li > a {
		font-size:14px
	}
	.downlaod .default-btn {
		margin-top:5px;
		margin-bottom:5px
	}
}
@media screen and (max-width: 1024px) {
	.trianglify {
		background-attachment:scroll !important;
		background-size:cover !important;
		-webkit-background-size:cover !important
	}
}
@media screen and (max-width: 992px) {
	header .nav > li > a {
		font-size:12px;
		padding:10px 8px
	}
	header .nav-brand {
		font-size:16px
	}
	.img-responsive {
		display:inline-block
	}
	.purchase-area p {
		display:block
	}
	.nav-logo img {
		height:30px
	}
}
@media screen and (min-width: 768px) and (max-width: 992px) {
	.tab-content > .tab-pane p,.tab-content .tab-list ul li {
		font-size:14px;
		line-height:21px
	}
	.price {
		font-size:28px
	}
	.team-block {
		margin-bottom:70px
	}
	.flex_text li {
		font-size:24px
	}
}
@media screen and (min-width: 768px) {
	.feature-block {
		width:650px;
		margin:0 auto
	}
	.navbar-nav {
		float:right
	}
}
@media screen and (max-width: 768px) {
	h2 {
		font-size:24px
	}
	.banner-area .color-overlay,.intro-area,.feature-area .color-overlay,.more-feature-area,.description-area,.video-area .color-overlay,.screenshot,.review .color-overlay,.pricingtable-section,.downlaod .color-overlay,.team-area,.faq-area,.contact-area {
		text-align:center
	}
	.banner-carousel {
		text-align:center
	}
	#content-wrapper {
		padding-top:20px
	}
	.showcase {
		margin-top:15px
	}
	.showcase h2 {
		font-size:24px;
		line-height:normal
	}
	.apps-icon {
		padding:0;
		margin:0 0 15px 0
	}
	.download-block {
		margin:0
	}
	.download-block .btn {
		margin-bottom:10px
	}
	.downlaod .default-btn {
		font-size:14px;
		padding:8px 20px;
		margin-top:28px
	}
	.download-block .extra {
		margin-left:0
	}
	.trial-area .form-control {
		margin-bottom:10px
	}
	.sub-heading {
		margin-bottom:0
	}
	.sub-heading p {
		margin:0;
		font-size:12px
	}
	.circle {
		display:none
	}
	.single-feature {
		position:relative;
		float:none;
		width:auto;
		padding:30px 0;
		text-align:center;
		border:0
	}
	.next-arrow a {
		display:none
	}
	.more-feature-mockup {
		margin:10px 0
	}
	.more-feature-mockup img {
		width:100%
	}
	.feature-list ul {
		padding-left:0
	}
	.feature-details {
		text-align:left
	}
	.panel-group {
		margin:20px 0
	}
	.panel-group .panel {
		text-align:left
	}
	.default-btn {
		padding:12px 18px
	}
	.divider {
		border:none;
		margin-top:20px
	}
	.contact-address ul li {
		margin-bottom:18px;
		text-align:left
	}
	.contact-area ul {
		margin-bottom:20px
	}
	.contact-block {
		padding:0px
	}
	.contact-area .form-control,.contact-area textarea {
		border-radius:1px
	}
	.contact-address ul li {
		text-align:center
	}
	.contact-address ul li .fa,.contact-address ul li .address-phone {
		float:none
	}
	.contact-address ul li .address-phone {
		margin:0 auto;
		padding-left:0
	}
	#header,#header2 {
		padding:0
	}
	header .navbar-toggle {
		float:right
	}
	header ul > li {
		text-align:left
	}
	.nav-brand {
		display:inline-block;
		margin-top:5px
	}
	header .navbar-default .navbar-collapse {
		border:none
	}
	.mob-right {
		position:absolute;
		top:5px;
		right:80px
	}
	.owl-carousel {
		margin-top:10px
	}
}
@media screen and (max-width: 480px) {
	p,.tab-content .tab-list ul li {
		font-size:12px
	}
	.feature-icon i {
		width:35px;
		height:35px;
		font-size:18px;
		line-height:33px
	}
	.feature-list li {
		padding-left:45px;
		margin-bottom:10px
	}
	.feature-details h3 {
		margin-bottom:14px;
		margin-bottom:0
	}
	.nav-logo {
		font-size:22px
	}
	.download-block .btn {
		margin-bottom:10px;
		padding:10px 20px
	}
	header .app li .fa {
		font-size:14px
	}
	.text-slider {
		margin-bottom:18px
	}
	.flex_text li {
		font-size:16px
	}
}
    </style>
<body>
  
<section id="banner" class="banner-area trianglify">
    <div class="color-overlay">
        <div class="container">
                <div class="row showcase">
        <div class="col-sm-12 text-center">
            <h2>Menu pilihan</h2>

            <p>Lihat apa nih..
            </p>
            <div class="download-block">
                <a class="btn" href="<?php echo base_url().'index.php/akun/user'?>">Tulis artikel</a>
                <a class="btn extra" href="<?php echo base_url().'index.php/tanya_koi/forum'?>">Buka forum</a>
                <a class="btn extra" href="<?php echo base_url().'index.php/akun/koneksi'?>">Koneksi ke sosmed lain..</a>
                
            </div>
        </div>
    </div>
        </div>
            </div>
    </section>
</body>
</html>
