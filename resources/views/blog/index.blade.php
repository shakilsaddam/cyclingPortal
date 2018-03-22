<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Spore | Wordpress theme for dev</title>

	<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="/blog_img/small-logo-01.png" />
    <link href="/blog_css/spore-font.css" rel="stylesheet" />
    <link href="/blog_css/animate.css" rel="stylesheet" />
    <link href="/blog_css/spore-animate.css" rel="stylesheet" />
<style>

/*
Theme Name: Spore
Theme URI: https://dcrazed.com/spore-html5-masonry-blog-template/
Author: Rijo Abraham
Author URI: https://dcrazed.com
Description: Spore is a magnificent free HTML5 masonry blog template for displaying amazing blog posts, portfolio, photography or design works in a distinctive way. A wordpress version is a work in progress. Stay tuned with us.
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: white, three-columns, responsive-layout, featured-images, full-width-template, blogging

*/

/* CONTENT BODY SETTINGS - DON'T TOUCH ! */

html,body{
	height: 100%; /** Adaptative screen **/
    margin:0;padding:0;
}

/* HEADER / BODY */

.blank{
	position:relative; /** Div for the transition when your leave the url - fade out/in white color **/
	width:100%;
	height:100%;
	z-index:50;
	background-color:#FFF;
}


#A0{
	background: url(/blog_img/gallery-in-a-page.jpg)  50% 50% no-repeat; /** Background image - change it here !**/
	position:absolute;
    background-size: cover;
	-webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
	z-index:1;
	
}

#A1-main{
	position:relative; /** Main div to adapt all the element to the body**/
	width:100%;
	height:100%;
	z-index:1;
}


#A1{
	position:relative; /** Sub div to adapt the background for the body**/
	width:100%;
	height:100%;
	z-index:1;
}


#A0-2{
	background-color:#101613; /** Transparent background across the background **/
	opacity:0.5;
	position:absolute;
    width:100%;
	height:100%;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
	z-index:2;
}

#trame{
	background-image: url(/blog_img/trame.svg); /** Pattern - overlay **/
	background-repeat:repeat;
	position:absolute;
    width:100%;
	height:100%;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
	z-index:3;
	opacity:0.8;
}

#wrapper-head{
	position:absolute; /** Main div for the title, arrow icon and button learn more **/
	height:100%;
	width:100%;
	z-index:5;
	opacity:0;
	top:0;
}

#title{
	position:absolute;
	z-index:4;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:24px;
	line-height:130%;
	color:#FFF;
    font-family: 'open_sansregular';
	width:50%;
	margin-left:25%;
	height:100%;
	top:50%;
}

#wrapper-logo{
	position:absolute;
	width:169px;
	height:45px;
	margin-left:-500px;
	left:50%;
	top:50px;
	z-index:11;
	overflow: hidden;
	opacity:0;
}

#logo{
	width:100%;
	height:100%;
	position:absolute;
	left:0;
	top:0;
	background-repeat:no-repeat;
	cursor:pointer;
}

#wrapper-plus{
	background-image: url(/blog_img/plus.svg);
	background-repeat:no-repeat;
	position:absolute;
	width:32px;
	height:32px;
	left:50%;
	margin-left:450px;
	z-index:5;
	top:60px;
	cursor:pointer;
	opacity:0;
}

#fleche1{
	position:absolute;
	background-image: url(/blog_img/ancre.svg);
	background-repeat:no-repeat;
	width:40px;
	height:40px;
	top:90%;
	left:50%;
	margin-left:-20px;
	z-index:4;
	cursor:pointer;
}

#wrapper-learnmore{
	position:absolute;
	width:140px;
	height:45px;
	left:50%;
	margin-left:-70px;
	top:65%;
	opacity:1;
	z-index:4;
	cursor:pointer;
}

.bouton-learnmore{
	position:absolute;
	width:100%;
	height:100%;
	left:0;
	opacity:1;
	top:0;
	background-color:#transparent;
	border:solid 2px #FFF;
	border-radius:10px;
}

.text-learnmore{
	position:absolute;
	z-index:1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:18px;
	line-height:45px;
	height:45px;
	color:#FFF;
    font-family: 'open_sanssemibold';
	width:80%;
	margin-left:10%;
}

/* TAB MENU / HEADER */

#main-wrapper-menu{
	position:relative;
	width:100%;
	height:0;
	z-index:10;
	background-color:#FFF;
}

#wrapper-menu{
	position:absolute;
	height:auto;
	width:100%;
	left:50%;
	margin-left:-50%;
	top:50%;
	margin-top:-20%;
	
}


.recent-post{
	position:relative;
	width:100%;
	height:auto;
	z-index:1;
	display:none;	
}

#recent-post-title,#recent-post-1,#recent-post-2,#recent-post-3,#recent-post-4{
	position:relative;
	width:70%;
	left:50%;
	margin-left:-35%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:17px;
	line-height:150%;
	color:#666;
	font-family: 'open_sanssemibold';
	letter-spacing:-1px;
	padding-bottom:10px;
	height:auto;
}

.category-post{
	position:relative;
	width:100%;
	height:auto;
	z-index:1;
	padding-top:15px;
	display:none;
}

#category-post-title,#category-post-1,#category-post-2,#category-post-3{
	position:relative;
	width:70%;
	left:50%;
	margin-left:-35%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:17px;
	line-height:150%;
	color:#666;
    font-family: 'open_sanssemibold';
	letter-spacing:-1px;
	padding-bottom:10px;
	height:auto;
}

#line-category-post{
	position:relative;
	width:75px;
	height:1px;
	background-color:#CCC;
	left:50%;
	margin-left:-37.5px;
	margin-bottom:15px;
}

#wrapper-cross{
	background-image: url(/blog_img/cross.svg);
	background-repeat:no-repeat;
	position:absolute;
	width:32px;
	height:32px;
	left:50%;
	margin-left:450px;
	z-index:11;
	bottom:10%;
	cursor:pointer;
	opacity:1;
}

/* PART 2 - TITLE */

#A2{
	position:relative;
	width:100%;
	min-height:250px;
	z-index:1;
}

#text-2{
	position:absolute;
	background-color:transparent;
	width:550px;
	height:90px;
	top:50%;
	margin-top:-45px;
	left:50%;
	margin-left:-275px;
	z-index:3;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:23px;
	line-height:150%;
	color:#444549;
    font-family: 'open_sansregular';
	letter-spacing:-1px;
}

/* PART 3 PORTFOLIO ARTICLES 3 GRID LEFT/RIGHT/MID */


#wrapper-A3{
	position:relative;
	width:1000px;
	z-index:1;
	left:50%;
	margin-left:-500px;
	height:auto;
	padding-top:50px;
	overflow:hidden;
}

#A3-right,#A3-left,#A3-middle{
   background-color:#FFF;
    float:left;    
	width:30%;
	height:auto;
	z-index:1;
}

#A3-right{margin-right:0;}
#A3-left{padding-right:5%;}
#A3-middle{left:35%;padding-right:5%;}

.calage
{
    clear: both;
    height: 50px;
    width: 100%;
}

/* ARTICLES 1-9 EXAMPLE */

#wrapper-post1,#wrapper-post4,#wrapper-post7{
	position:relative;
	width:100%;
	height:auto;

}

#wrapper-A3-left-date-1,#wrapper-A3-left-date-2,#wrapper-A3-left-date-3,#wrapper-A3-middle-date-4,#wrapper-A3-middle-date-5,#wrapper-A3-middle-date-6,#wrapper-A3-right-date-7,#wrapper-A3-right-date-8,#wrapper-A3-right-date-9{
	position:relative;
	width:100%;
	height:40px;
	z-index:1;
	top:15px;
	left:0;
}

#A3-left-date-1,#A3-left-date-2,#A3-left-date-3,#A3-middle-date-4,#A3-middle-date-5,#A3-middle-date-6,#A3-right-date-7,#A3-right-date-8,#A3-right-date-9{
	position:absolute;
	width:100%;
	height:100%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:15px;
	line-height:160%;
	color:#C6C6C6;
    font-family: 'open_sansbold';
	margin-left:35px;
}

#A3-left-icone-1,#A3-left-icone-2,#A3-left-icone-3,#A3-middle-icone-4,#A3-middle-icone-5,#A3-middle-icone-6,#A3-right-icone-7,#A3-right-icone-8,#A3-right-icone-9{
	position:absolute;
	background-image: url(/blog_img/icone1.svg);
	background-repeat:no-repeat;
	width:27px;
	height:18px;
	left:0;
	top:3px;

}


#A3-left-title-1,#A3-left-title-2,#A3-left-title-3,#A3-middle-title-4,#A3-middle-title-5,#A3-middle-title-6,#A3-right-title-7,#A3-right-title-8,#A3-right-title-9{
	position:relative;
	width:95%;
	left:0;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:21px;
	line-height:160%;
	color:#444549;
    font-family: 'open_sanssemibold';
	top:15px;
	letter-spacing:-1px;
}

#A3-left-text-1,#A3-left-text-2,#A3-left-text-3,#A3-middle-text-4,#A3-middle-text-5,#A3-middle-text-6,#A3-right-text-7,#A3-right-text-8,#A3-right-text-9{
	position:relative;
	width:95%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:16px;
	line-height:140%;
	left:0;
	color:#9C9C9C;
    font-family: 'open_sansregular';
	top:35px;
}

#wrapper-post2,#wrapper-post3,#wrapper-post5,#wrapper-post6,#wrapper-post8,#wrapper-post9{
	position:relative;
	width:100%;
	height:auto;
	margin-top:100px;

}

#A3-left-image-2,#A3-left-image-3,#A3-middle-image-4,#A3-middle-image-5,#A3-middle-image-6,#A3-right-image-8,#A3-right-image-9{
	position:relative;
	width:100%;
	z-index:1;
	top:0;
	left:0;
	overflow:hidden;
}

#A3-left-image-2 img,#A3-left-image-3 img,#A3-middle-image-4 img,#A3-middle-image-5 img,#A3-middle-image-6 img,#A3-right-image-8 img,#A3-right-image-9 img{
	width:100%;
}

/* ARTICLES FOR THE VIDEO - EXTENDED DIV NECESSARY TO WATCH THE VIDEO*/

iframe {
    width:100%;
    height:auto;
 }

.video-container-1,.video-container-6,.video-container-7 {
    position:relative;
    padding-bottom:56.25%;
    padding-top:30px;
    height:0;
    overflow:hidden;
	top:0;
	left:0;
 }

.video-container-1 iframe,.video-container-6 iframe,.video-container-7 iframe,.video-container-1 object,.video-container-6 object,.video-container-7 object,.video-container-1 embed,.video-container-6 embed,.video-container-7 embed {
    width:100%;
    height:100%;
    position:absolute;
    top:0;
    left:0;
}

/* PART 4 - BOUTON PAGE 1-4*/



#A4{
	position:relative;
	width:100%;
	height:200px;
	z-index:1;
    background-color:#FFF;
	
}

#wrapper-A4{
	position:absolute;
	width:300px;
	height:45px;
	margin-left:-150px;
	left:50%;
	top:50%;
	margin-top:-22.5px;
}

#page1{
	position:absolute;
	left:15%;
	border-radius:50%;
	height:35px;
	width:35px;
	background-color:transparent;/*add a background color*/
	border:solid 4px #444549;/*add a color border*/
	cursor:pointer;
	z-index:1;
	
}

#text-page1{
    position:absolute;
    font-family: 'open_sanssemibold';
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-size:15px;
	height:35px;
	top:0;
	left:0;
	line-height:35px;
	color:#444549;
	text-align:center;
	width:100%;
	z-index:2;
}

#text-page2,#text-page3,#text-page4{
    position:absolute;
    font-family: 'open_sansregular';
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-size:15px;
	height:350px;
	top:0;
	left:0;
	line-height:35px;
	color:#FFF;
	text-align:center;
	width:100%;
	z-index:2;
}

#main-page2,#main-page3,#main-page4{
	position:absolute;
	width:35px;
	height:35px;
	top:0;
}

#main-page2{left:38.5%;margin-left:-11.7px;}
#main-page3{right:38.5%;margin-right:-11.7px;}
#main-page4{right:15%;}

#page2,#page3,#page4{
	position:absolute;
	left:0;
	border-radius:50%;
	height:35px;
	width:35px;
	background-color:#9C9C9C;
	cursor:pointer;
	border:solid 4px #9C9C9C;
}

/* PART 5 - MENU WITH SHORTCUTS*/

#A5{
	position:relative;
	width:100%;
	z-index:1;
	height:auto;
	padding-top:50px;
	background-color:#31323a;
}

#wrapper-A5{
	position:relative;
	width:1000px;
	z-index:1;
	left:50%;
	margin-left:-500px;
	height:auto;
	padding-top:20px;
}

#A5-left,#A5-middle,#A5-right{
    float:left;    
    width:30%;
	height:auto;
	z-index:1;
}

#A5-left,#A5-middle{padding-right:5%;}
#A5-middle{left:35%;}
#A5-right {margin-right:0;}

.A5-calage{clear:both;height:50px;width:100%;}

#wrapper-part-left,#wrapper-part-mid,#wrapper-part-right{
	position:relative;
	width:100%;
	height:auto;
}

#left-line-post,#mid-line-post,#right-line-post{
	position:relative;
	background-color:#1E1F26;
	width:33%;
	left:0;
	height:1px;
}

#left-line2-post,#mid-line2-post,#right-line2-post{
	position:relative;
	background-color:#545559;
	width:33%;
	left:0;
	height:1px;
}

#left-text-post,#mid-text-post,#right-text-post{
	position:relative;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:17px;
	color:#FFF;
	font-family: 'open_sansregular';
	left:0;
	width:250px;
	top:0;
	line-height:130%;
	z-index:5;
	padding-bottom:20px;
}

#left-text-post-1,#mid-text-post-1,#right-text-post-1{
	position:relative;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:16px;
	color:#CCC;
	font-family: 'open_sansregular';
	left:0;
	width:100%;
	top:0;
	z-index:5;
	line-height:130%;
	letter-spacing:-0.5px;
	padding-top:20px;
}

#left-text-post-4,#mid-text-post-4,#right-text-post-4{
	padding-bottom:50px;
}

#left-text-post-2,#left-text-post-3,#mid-text-post-2,#mid-text-post-3,#right-text-post-2,#right-text-post-3,#left-text-post-4,#mid-text-post-4,#right-text-post-4{
	position:relative;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:16px;
	color:#CCC;
	font-family: 'open_sansregular';
	left:0;
	width:100%;
	top:0;
	z-index:5;
	line-height:130%;
	letter-spacing:-0.5px;
	padding-top:15px;
}

/* PART 5 BIS - RELATED BLOG NUMBERS */

#A5b{
	position:relative;
	width:100%;
	z-index:1;
	height:auto;
	padding-top:50px;
	background-color:#444549;
}

#wrapper-A5b{
	position:relative;
	width:1000px;
	z-index:1;
	left:50%;
	margin-left:-500px;
	height:auto;
	padding-top:20px;
}

#A5b-left,#A5b-middle,#A5b-right{
    float:left;    
    width:30%;
	height:auto;
	z-index:1;
}

#A5b-left,#A5b-middle{padding-right:5%;}
#A5b-middle{left:35%;}
#A5b-right {margin-right:0;}

.A5b-calage{clear:both;height:50px;width:100%;}

#wrapper-A5b-part-left,#wrapper-A5b-part-mid,#wrapper-A5b-part-right{
	position:relative;
	width:100%;
	height:auto;
}

#left-A5b-line-post,#mid-A5b-line-post,#right-A5b-line-post{
	position:relative;
	background-color:#1E1F26;
	width:100px;
	left:50%;
	height:1px;
}
#left-A5b-line-post,#left-A5b-line2-post,#left-A5b-text-post,#left-A5b-text-post-1{margin-left:-125px;}
#mid-A5b-line-post,#mid-A5b-line2-post,#mid-A5b-text-post,#mid-A5b-text-post-1{margin-left:-50px;}
#right-A5b-line-post,#right-A5b-line2-post,#right-A5b-text-post,#right-A5b-text-post-1{margin-left:25px;}


#left-A5b-line2-post,#mid-A5b-line2-post,#right-A5b-line2-post{
	position:relative;
	background-color:#545559;
	width:100px;
	left:50%;
	height:1px;
}

#left-A5b-text-post,#mid-A5b-text-post,#right-A5b-text-post{
	position:relative;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:40px;
	color:#CCC;
	font-family: 'open_sansregular';
	left:50%;
	width:100px;
	top:0;
	line-height:130%;
	z-index:5;
	padding-bottom:20px;
}

#left-A5b-text-post-1,#mid-A5b-text-post-1,#right-A5b-text-post-1{
	position:relative;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:16px;
	color:#9B9DA3;
	font-family: 'open_sansregular';
	left:50%;
	width:100px;
	top:0;
	z-index:5;
	line-height:130%;
	letter-spacing:-0.5px;
	padding-top:20px;
	padding-bottom:20px;
}


/* PART 6 - SOCIAL LINKS*/

#A6{
	position:relative;
	height:275px;
	width:100%;
	z-index:1;
	background-color:#FFF;
}

#wrapper-social{
	position:absolute;
	width:300px;
	left:50%;
	margin-left:-150px;
	top:125px;
	z-index:5;
	height:50px;
}


#main-behance,#main-dribbble,#main-facebook,#main-google,#main-linked{
	position:absolute;
	top:0;
	height:100%;
	width:18%;
	cursor: pointer;
}

#main-behance{left:1%;}
#main-dribbble{left:21%;}
#main-facebook{left:41%;}
#main-google{left:61%;}
#main-linked{left:81%;}

#behance,#dribbble,#facebook,#google,#linked{
    font-family: 'socialicoregular';
	position:absolute;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:left;
	font-size:35px;
	cursor:pointer;
	color:#66676D;
	left:50%;
	top:50%;
	margin-top:-25%;
}

#cadre-behance,#cadre-dribbble,#cadre-facebook,#cadre-google,#cadre-linked{
	position:absolute;
	background-color:transparent;
	height:90%;
	width:90%;
	left:0;
	top:0;
	border-radius:5%;
	margin-left:5%;
}

#dribbble{margin-left:-12px;}
#facebook{margin-left:-8.5px;}
#google{margin-left:-8px;}
#linked{margin-left:-10px;}
#behance{margin-left:-15px;}

/* PART 7 - FOOTER - COPYRIGHT*/

#A7{
	position:relative;
	background-color:#FFF;
	height:60px;
	width:100%;
	top:0;
	z-index:1;
}

#wrapper-A7{
	position:relative;
	height:100%;
	width:100%;
	top:0;
	z-index:1;
}

#line-A7{
	position:absolute;
	height:1px;
	width:1000px;
	left:50%;
	margin-left:-500px;
	top:0;
	z-index:1;
	background-color:#444549;
	opacity:0.2;
}

#copyright{
	position:absolute;
	width:100%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align:center;
	font-size:13px;
	height:60px;
	line-height:60px;
	color:#9B9DA3;
	z-index:2;
	font-family: 'open_sansregular';
	text-transform: uppercase;
	letter-spacing:-1px;
}

/* RESPONSIVE DESIGN ! IMPORTANT DONT TOUCH IT */

/* X-LARGE */
@media (max-width: 1500px) {
#wrapper-menu{margin-top:-17.5%;}
}

/* VERY LARGE SCREEN */
@media (max-width: 1280px) {
#wrapper-menu{margin-top:-20%;}
}

/* PERSONNAL RESPONSIVE DESIGN FOR COMPUTER SMALL SCREEN, MEDIA SCREEN AND IPAD HORIZONTAL*/
@media (max-width: 1080px) {
#wrapper-logo{margin-left:-420px;}
#wrapper-plus,#wrapper-cross{margin-left:370px;}
#wrapper-A5,#line-A7,#wrapper-A5b{width:900px;margin-left:-450px;}
}

/*HYBRID*/
@media (max-width: 1000px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b,#line-A7{width:700px;margin-left:-350px;}
#wrapper-logo{margin-left:-320px;}
#wrapper-plus,#wrapper-cross{margin-left:270px;}
}

/*FOR VERTICAL IPAD NATIVE 801px INCLUDING THE NEW TABLETS HYBRID*/
@media (max-width: 801px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b,#line-A7{width:580px;margin-left:-290px;}
#wrapper-logo{margin-left:-260px;}
#wrapper-plus,#wrapper-cross{margin-left:210px;}
#A3-left,#A3-middle,#A3-right,#A5-left,#A5-middle,#A5-right,#A5b-left,#A5b-middle,#A5b-right{float:none;position:relative;width:100%;height:auto;left:0;padding-right:none;padding-top:50px;padding-bottom:50px;}
#left-text-post,#mid-text-post,#right-text-post,#left-text-post-2,#left-text-post-3,#mid-text-post-2,#mid-text-post-3,#right-text-post-2,#right-text-post-3,#left-text-post-4,#mid-text-post-4,#right-text-post-4,#left-text-post-1,#mid-text-post-1,#right-text-post-1{text-align:center;}
#left-text-post,#mid-text-post,#right-text-post{width:100%;}
#left-line-post,#mid-line-post,#right-line-post{width:33%;left:50%;margin-left:-16.6%;}
#left-line2-post,#mid-line2-post,#right-line2-post{width:33%;left:50%;margin-left:-16.6%;}
#left-A5b-line-post,#left-A5b-line2-post,#left-A5b-text-post,#left-A5b-text-post-1,#right-A5b-line-post,#right-A5b-line2-post,#right-A5b-text-post,#right-A5b-text-post-1{margin-left:-50px;}
#title{font-size:22px;line-height:130%;width:60%;margin-left:20%;top:40%;}
#wrapper-menu{margin-top:-25%;}
}

/* MQUERIES FOR SMARTPHONE VERY LARGE & E-READERS */
@media (max-width: 640px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b,#line-A7{width:460px;margin-left:-230px;}
#wrapper-plus,#wrapper-cross{margin-left:150px;}
#A5b-left,#A5b-middle,#A5-left,#A5-middle,#A3-left,#A3-middle{padding-right:0;}
#A7{display:none;}
#text-2{font-size:20px;width:80%;margin-left:10%;left:0%;}
#wrapper-logo{margin-left:-195px;}
#wrapper-menu{margin-top:-30%;}

}

/* MQUERIES FOR NEW SMARTPHONE HYBRID AND SMALL TABLET BY HEIGHT */
@media (max-height: 600px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b,#line-A7{width:400px;margin-left:-200px;}
#wrapper-logo{margin-left:-195px;}
#wrapper-plus,#wrapper-cross{margin-left:145px;}
#wrapper-menu{margin-top:-35%;}
}


/* MQUERIES FOR SMARTPHONE LARGE & IPHONE 4 HORIZONTAL */
@media (max-width: 480px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b{width:400px;margin-left:-200px;}
#wrapper-plus,#wrapper-cross{margin-left:145px;}
#A7{display:none;}
#text-2{font-size:20px;}
#wrapper-logo{margin-left:-185px;}
#wrapper-menu{margin-top:-35%;}
}

/* MQUERIES FOR SMARTPHONE LARGE & IPHONE 4 HORIZONTAL */
@media (max-width: 400px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b{width:300px;margin-left:-150px;}
#wrapper-plus,#wrapper-cross{margin-left:135px;}
#wrapper-logo{margin-left:-175px;}
#wrapper-menu{margin-top:-40%;}
}

/* MQUERIES ADDITIONAL FOR SMARTPHONE IPHONE 3 & 4 VERTICAL POSITION BY HEIGHT*/
@media (max-width: 320px) {
#wrapper-A3,#wrapper-A5,#wrapper-A5b{width:280px;margin-left:-140px;}
#wrapper-plus,#wrapper-cross{margin-left:90px;}
#wrapper-plus{top:40px;}
#wrapper-social,#wrapper-A4{width:280px;margin-left:-140px;}
#wrapper-logo{margin-left:-135px;top:30px;}
#wrapper-menu{margin-top:-45%;}
#recent-post-title,#recent-post-1,#recent-post-2,#recent-post-3,#recent-post-4{line-height:115%;}
#category-post-title,#category-post-1,#category-post-2,#category-post-3{line-height:115%;}
}

/* MEDIA QUERIES FOR HYBRID MOBILE*/
@media (max-height: 650px) {
#title{font-size:19px;line-height:130%;width:60%;margin-left:20%;top:34%;}
#wrapper-learnmore{top:74%;}
#fleche1{display:none;}
#wrapper-menu{margin-top:-47.5%;}

}

/* MEDIA QUERIES FOR IPHONE 5 VERTICAL AND OLD VERSION*/
@media (max-height: 568px) {
#title{font-size:17px;line-height:130%;width:60%;margin-left:20%;top:37%;}
}

/* MQUERIES ADDITIONAL FOR SMARTPHONE IPHONE 3 & 4 HORIZONTAL POSITIONBY HEIGHT*/
@media (max-height: 330px) {
#wrapper-logo{top:30px;margin-left:-84.5px;}
#wrapper-plus,#wrapper-cross{display:none;}
#main-wrapper-menu{display:none;}
}



</style>

</head>
<body>

<!-- MENU TAB -->
<div id="main-wrapper-menu">
  <div id="wrapper-cross"></div>
	<div id="wrapper-menu">
	
    <div class="recent-post text-part-menutab">
        <ul>
        <li><div id="recent-post-title">Our recent post</div></li>
    	<li><div id="recent-post-1"><a href="spore-post1.html">Post a youtube video</a></div></li>
		<li><div id="recent-post-2"><a href="spore-post2.html">Post an animated image</a></div></li>
		<li><div id="recent-post-3"><a href="spore-post5.html">Post featured image</a></div></li>
		<li><div id="recent-post-4"><a href="spore-post3.html">Auto-resized image</a></div></li>
        </ul>
    </div>
    
	<div class="category-post text-part-menutab">
    	<div id="line-category-post"></div>
        <ul>
        <li><div id="category-post-title">Categories post</div></li>
    	<li><div id="category-post-1"><a href="spore-cat-video.html">Video articles</a></div></li>
		<li><div id="category-post-2"><a href="spore-cat-hotpost.html">Hot articles</a></div></li>
		<li><div id="category-post-3"><a href="spore-cat-image.html">Images</a></div></li>
        </ul>
    </div>
    
    </div>
</div>

<!-- BOUTON MENU TAB -->

<div id="wrapper-plus" class="object"></div>

<!-- HEADER -->

<div id="A1-main">
	    
    <div id="wrapper-logo" class="object">
	<a href="#"><div id="logo" class="shadow object" ><img src="/blog_img/logotop.svg" width="169" height="45"/></div></a>
	</div>
    
    <div id="A1">
    
    	<div class="blank"></div>
    
    	<div id="A0"></div>
    	<div id="A0-2"></div>
    	<div id="trame"></div>
        
		
    	<div id="wrapper-head">
   			<div id="title" class="object">Spore is a creative onepage wordpress theme for web developers who change the world.</div>
            <div id="wrapper-learnmore">
            	<div class="bouton-learnmore object">
        			<div class="text-learnmore object">Learn more</div>
    			</div>
            </div>
           <a href="#ancre"><div id="fleche1"></div></a>
   	    </div>


		<div id="wrapper-plus" class="object"></div>
        
	</div>
        
</div>

<a name="ancre"></a>

<!-- PART 2 - TITLE -->

<div id="A2">
    
    <div id="text-2" class="wow fadeIn" data-wow-offset="10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore <span style="color:#999;"> magna aliquam.</span></div>
    
</div>
    
<!-- PART 3 - PORTFOLIO ARTICLES 3 GRID -->

<div id="wrapper-A3" class="object">
    
    	<div id="A3-left">
        
        	<div id="wrapper-post1" class="text-part-A5">
            	<div class="video-container-1">
					<iframe width="560" height="315" src="//www.youtube.com/embed/aN-zEzr4Zwc" frameborder="0" allowfullscreen></iframe>
                </div>
            
            	<div id="wrapper-A3-left-date-1">
            		<div id="A3-left-date-1">22 nov, 2014</div>
                	<div id="A3-left-icone-1"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-left-title-1"><a href="spore-post1.html">Post a Youtube video</a></div></li>
            	</ul>
                <div id="A3-left-text-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</div>  
            </div>
            
            <div id="wrapper-post2" class="text-part-A5">
            	<a href="spore-post2.html"><div id="A3-left-image-2"><img src="/blog_img/image1-01.jpg"  alt="post an image with animation" title="post an image with animation" class="grow"/></div></a>
            
            	<div id="wrapper-A3-left-date-2">
            		<div id="A3-left-date-2">21 nov, 2014</div>
                	<div id="A3-left-icone-2"></div>
            	</div> 
           		<ul>
            		<li><div id="A3-left-title-2"><a href="spore-post2.html">Post an image with animation</a></div></li> 
            	</ul>
            	<div id="A3-left-text-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
            
             <div id="wrapper-post3" class="text-part-A5">
            	<a href="spore-post3.html"><div id="A3-left-image-3"><img src="/blog_img/image6-01.jpg"  alt="Auto-resized image" title="Auto-resized image" class="grow"/></div></a>
            
            	<div id="wrapper-A3-left-date-3">
            		<div id="A3-left-date-3">20 nov, 2014</div>
                	<div id="A3-left-icone-3"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-left-title-3"><a href="spore-post3.html">Auto-resized image</a></div></li>
                </ul>  
            	<div id="A3-left-text-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
            
        </div>
  
    	<div id="A3-middle">
        	
            <div id="wrapper-post4" class="text-part-A5">
            	<a href="spore-post4.html"><div id="A3-middle-image-4"><img src="/blog_img/image3-01.jpg"  alt="Another post" title="Another post" class="grow"/></div></a>
            
            	<div id="wrapper-A3-middle-date-4">
            		<div id="A3-middle-date-4">19 nov, 2014</div>
                	<div id="A3-middle-icone-4"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-middle-title-4"><a href="spore-post4.html">Another post</a></div></li>
                </ul>  
            	<div id="A3-middle-text-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
            
            <div id="wrapper-post5" class="text-part-A5">
            	<a href="spore-post5.html"><div id="A3-middle-image-5"><img src="/blog_img/image4-01.jpg"  alt="Another post" title="Another post" class="grayscale" /></div></a>
            
            	<div id="wrapper-A3-middle-date-5">
            		<div id="A3-middle-date-5">18 nov, 2014</div>
                	<div id="A3-middle-icone-5"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-middle-title-5"><a href="spore-post5.html">Post transition image</a></div></li>
                </ul> 
            	<div id="A3-middle-text-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
            
            <div id="wrapper-post6" class="text-part-A5">
            
           		<div class="video-container-6">
            		<iframe src="//player.vimeo.com/video/108753054?portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            	</div>
                
            	<div id="wrapper-A3-middle-date-6">
            		<div id="A3-middle-date-6">17 nov, 2014</div>
                	<div id="A3-middle-icone-6"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-middle-title-6"><a href="spore-post6.html">Post a Vimeo video</a></div></li>
                </ul> 
            	<div id="A3-middle-text-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
        
        
        </div>
        
        <div id="A3-right">
        
        	    <div id="wrapper-post7" class="text-part-A5">
            	<div class="video-container-1">
					<iframe width="560" height="315" src="//www.youtube.com/embed/CLHUpONf3yI" frameborder="0" allowfullscreen></iframe>
                </div>
            
            	<div id="wrapper-A3-right-date-7">
            		<div id="A3-right-date-7">16 nov, 2014</div>
                	<div id="A3-right-icone-7"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-right-title-7"><a href="spore-post7.html">Another video post</a></div></li>
                </ul>
            	<div id="A3-right-text-7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</div>  
            </div>
            
            <div id="wrapper-post8" class="text-part-A5">
            	<a href="spore-post8.html"><div id="A3-right-image-8"><img src="/blog_img/image5-01.jpg"  alt="Post with transition image" title="Post with transition image" class="grow" /></div></a>
            
            	<div id="wrapper-A3-right-date-8">
            		<div id="A3-right-date-8">15 nov, 2014</div>
                	<div id="A3-right-icone-8"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-right-title-8"><a href="spore-post8.html">Another post</a></div></li>
                </ul>  
            	<div id="A3-right-text-8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
            
            <div id="wrapper-post9" class="text-part-A5">
            	<a href="spore-post9.html"><div id="A3-right-image-9"><img src="/blog_img/image2-01.jpg"  alt="Another post" title="Another post" class="grow"/></div></a>
            
            	<div id="wrapper-A3-right-date-9">
            		<div id="A3-right-date-9">14 nov, 2014</div>
                	<div id="A3-right-icone-9"></div>
            	</div> 
            	<ul>
            		<li><div id="A3-right-title-9"><a href="spore-post9.html">Another post</a></div></li>
                </ul>
            	<div id="A3-right-text-9">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</div>  
            </div>
        
        </div>
	<div class="calage"></div>     
</div>

<!-- PART 4 - BOUTON PAGE 1-4 -->

<div id="A4" class="object">

	<div id="wrapper-A4" class="wow bounceInRight" data-wow-offset="10">
    	
        
        <div id="page1" class="object">
        	<div id="text-page1"><strong>1</strong></div>
        </div>
        
        <div id="main-page2">
        	<div id="page2" class="object">
          		<div id="text-page2" class="object"><strong>2</strong></div>
        	</div>
        </div>
        
        <div id="main-page3">
        	<div id="page3" class="object">
            	<div id="text-page3" class="object"><strong>3</strong></div>
        	</div>
        </div>
        
		<div id="main-page4">
        	<div id="page4" class="object">
            	<div id="text-page4" class="object"><strong>4</strong></div>
        	</div>
		</div>
        
    </div>

</div>

<!-- PART 5 - SUB MENU AND SHORTCUTS -->

<div id="A5"> 
 
	<div id="wrapper-A5">
    
        <div id="wrapper-part-left" class="text-part-A5">
        	<div id="A5-left" class="wow flipInX" data-wow-offset="10">
    			<div id="left-text-post"><strong>Our recent post</strong></div>
            	<div id="left-line-post"></div>
            	<div id="left-line2-post"></div>
			<ul>	
                <li><div id="left-text-post-1"><strong><a href="spore-post1.html">Post a youtube video</a></strong></div></li>
				<li><div id="left-text-post-2"><strong><a href="spore-post2.html">Post an animated image</a></strong></div></li>
				<li><div id="left-text-post-3"><strong><a href="spore-post5.html">Post featured image</a></strong></div></li>
				<li><div id="left-text-post-4"><strong><a href="spore-post3.html">Auto-resized image</a></strong></div></li>
        	</ul>
            </div>
        </div>
        
        <div id="wrapper-part-mid" class="text-part-A5">
        	<div id="A5-middle" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.2s">
    			<div id="mid-text-post"><strong>Categories</strong></div>
            	<div id="mid-line-post"></div>
            	<div id="mid-line2-post"></div>
			<ul>	
                <li><div id="mid-text-post-1"><strong><a href="spore-cat-video.html">Video</a></strong></div></li>
				<li><div id="mid-text-post-2"><strong><a href="spore-cat-hotpost.html">Hot articles</a></strong></div></li>
				<li><div id="mid-text-post-3"><strong><a href="spore-cat-image.html">Image</a></strong></div></li>
        	</ul>
            </div>
        </div>
        
        <div id="wrapper-part-right" class="text-part-A5">
        	<div id="A5-right" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.4s">
    			<div id="right-text-post"><strong>Why will you chose my blog theme ?</strong></div>
            	<div id="right-line-post"></div>
            	<div id="right-line2-post"></div>
			<ul>	
                <li><div id="right-text-post-1"><strong><a href="http://en.wikipedia.org/wiki/Responsive_web_design">RWD - Responsive Web design</a></strong></div></li>
				<li><div id="right-text-post-2"><strong><a href="#">New javascript effect and animations</a></strong></div></li>
				<li><div id="right-text-post-3"><strong><a href="#">Extensible bloc adapted</a></strong></div></li>
				<li><div id="right-text-post-4"><strong><a href="#">No need to modify the code</a></strong></div></li>
           </ul>
           </div>
        </div>
        
    <div class="A5-calage"></div>
	</div>
    
</div>


<!-- PART 5 BIS - SUB MENU AND RELATED NUMBERS -->

<div id="A5b"> 
 
	<div id="wrapper-A5b">
    
        <div id="wrapper-A5b-part-left">
        	<div id="A5b-left" class="wow flipInX" data-wow-offset="10">
    			<div id="left-A5b-text-post">14</div>
            	<div id="left-A5b-line-post"></div>
            	<div id="left-A5b-line2-post"></div>
				<div id="left-A5b-text-post-1"><strong>Posts</strong></div>
        	</div>
        </div>
        
        <div id="wrapper-A5b-part-mid">
        	<div id="A5b-middle" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.2s">
    			<div id="mid-A5b-text-post">235</div>
            	<div id="mid-A5b-line-post"></div>
            	<div id="mid-A5b-line2-post"></div>
				<div id="mid-A5b-text-post-1"><strong>Likes</strong></div>
        	</div>
        </div>
        
        <div id="wrapper-A5b-part-right">
        	<div id="A5b-right" class="wow flipInX" data-wow-offset="10" data-wow-delay="0.4s">
    			<div id="right-A5b-text-post">6509</div>
            	<div id="right-A5b-line-post"></div>
            	<div id="right-A5b-line2-post"></div>
				<div id="right-A5b-text-post-1"><strong>Views</strong></div>
           </div>
        </div>
        
    <div class="A5b-calage"></div>
	</div>
    
</div>

<!-- PART 6 - SOCIAL PART -->

<div id="A6">

<div id="wrapper-social" class="wow bounceInLeft" data-wow-offset="10">
    
    	<div id="main-behance">
    		<div id="cadre-behance" class="object">
        		<div id="behance" class="object">E</div>
    		</div>
        </div>
        
        <div id="main-dribbble">
    		<div id="cadre-dribbble" class="object">
      	  		<div id="dribbble" class="object">D</div>
    		</div>
        </div>

		<div id="main-facebook">
    		<div id="cadre-facebook" class="object">
	        	<div id="facebook" class="object">F</div>
        	</div>
        </div>
 
		<div id="main-google">
    		<div id="cadre-google" class="object">
        		<div id="google" class="object">G</div>
        	</div>
        </div>
        
        <div id="main-linked">
    		<div id="cadre-linked" class="object">
        		<div id="linked" class="object">I</div>
        	</div>
        </div>
        
    </div>
</div>

<!-- PART 7 - COPYRIGHT -->

<div id="A7">

	<div id="wrapper-A7">
    <div id="line-A7"></div>
	<div id="copyright"><strong>© Copyright 2016. All rights reserved.&nbsp Designed by <a href="http://designscrazed.org/">Allie</a></strong></div>
    </div>
    
</div>

<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="/blog_js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="/blog_js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="/blog_js/jquery-animate-css-rotate-scale.js"></script>
    <script type="text/javascript" src="/blog_js/wow.min.js"></script>
	<script type="text/javascript">new WOW().init();</script>
      <script type="text/javascript" src="/blog_js/fastclick.js"></script>
    <script type='application/javascript'>
window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);
</script>

	<script>
	
	$(window).on('beforeunload', function(){
		$(".blank").fadeIn(300);
		$("#main-wrapper-menu,#A1-main,#A2,#A3,#A4,#A5,#A6,#A7").animate({'opacity':'0'},300);
  		$(window).delay(1000).scrollTop(0);
	});
	
   $(document).ready(function() {
	
	$.localScroll();
	
	$(".blank").delay(1000).fadeOut(300);
	$("#wrapper-head").delay(2000).animate({'opacity':'1'},500);
	$("#wrapper-logo").delay(3200).animate({'opacity':'1'},300);
	$("#wrapper-plus").delay(3200).animate({'opacity':'1'},300);
});

$(function() {
	var bar = $('#wrapper-head');
	var opacity = bar.css('opacity');
	var top = bar.css('top');
	
	$(window).scroll(function() {
		if($(this).scrollTop() > 100) {
			bar.stop().animate({ opacity :'0', top :'-10%'},250);
		} 
	});
		
	$(window).scroll(function() {
		if($(this).scrollTop() < 100) {
			bar.stop().animate({ opacity :'1', top :'0'},250);
		}	
	});
});


/*CLICK PLUS AND CROSS MENU*/

var SS = document.getElementById('wrapper-plus');

SS.addEventListener('click', function() {
             $("#main-wrapper-menu").animate({'height':'100%'},500);
             $(".recent-post").delay(500).fadeIn(500);
             $(".category-post").delay(500).fadeIn(500);
			 $("#wrapper-plus").fadeOut(250);
}); 

var WC = document.getElementById('wrapper-cross');

WC.addEventListener('click', function() {
             $("#main-wrapper-menu").animate({'height':'0'},500);
			 $(".recent-post").fadeOut(250);
		     $(".category-post").fadeOut(250);
			 $("#wrapper-plus").delay(1000).fadeIn(250);			 
}); 

/*BUTTON ARROW*/

$(document).on('touchstart mouseover', '#fleche1', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#fleche1").stop().animate({'top':'92.5%'},200);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#fleche1', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#fleche1").stop().animate({'top':'90%'},200);
			 
            event.handled = true;
        } else {
            return false;
        }
});


/*BUTTON LOGO*/

$(document).on('touchstart mouseover', '#wrapper-logo', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-logo").stop().animate({'scale':'1.1','opacity':'0.5'},200);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-logo', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-logo").stop().animate({'scale':'1','opacity':'1'},200);

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PLUS*/

$(document).on('touchstart mouseover', '#wrapper-plus', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-plus").stop().animate({'opacity':'0.75','scale':'1.1'},150);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-plus', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-plus").stop().animate({'opacity':'1','scale':'1'},150);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON CROSS*/

$(document).on('touchstart mouseover', '#wrapper-cross', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-cross").stop().animate({'opacity':'0.75','scale':'1.1'},150);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-cross', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#wrapper-cross").stop().animate({'opacity':'1','scale':'1'},150);
			 
            event.handled = true;
        } else {
            return false;
        }
});


/*BUTTON FACEBOOK*/

$(document).on('touchstart mouseover', '#main-facebook', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#facebook").stop().css({'color':'#FFF'});
			 $("#cadre-facebook").stop().css({'background-color':'#7A9DED'});

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-facebook', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#facebook").stop().css({'color':'#66676D'});
			 $("#cadre-facebook").stop().css({'background-color':'transparent'});
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON DRIBBBLE*/

$(document).on('touchstart mouseover', '#main-dribbble', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#dribbble").stop().css({'color':'#FFF'});
			 $("#cadre-dribbble").stop().css({'background-color':'#E29ADE'});


            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-dribbble', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#dribbble").stop().css({'color':'#66676D'});
			 $("#cadre-dribbble").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON BEHANCE*/

$(document).on('touchstart mouseover', '#main-behance', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#behance").stop().css({'color':'#FFF'});
			 $("#cadre-behance").stop().css({'background-color':'#606060'});


            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-behance', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#behance").stop().css({'color':'#66676D'});
			 $("#cadre-behance").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON LINKED*/

$(document).on('touchstart mouseover', '#main-linked', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#linked").stop().css({'color':'#FFF'});
			 $("#cadre-linked").stop().css({'background-color':'#516182'});


            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-linked', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#linked").stop().css({'color':'#66676D'});
			 $("#cadre-linked").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON GOOGLE*/

$(document).on('touchstart mouseover', '#main-google', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#google").stop().css({'color':'#FFF'});
			 $("#cadre-google").stop().css({'background-color':'#EA6E75'});

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-google', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#google").stop().css({'color':'#66676D'});
			 $("#cadre-google").stop().css({'background-color':'transparent'});

            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PAGE2*/

$(document).on('touchstart mouseover', '#main-page2', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page2").stop().css({'background-color':'transparent','border-color':'#444549'});
			 $("#text-page2").stop().css({'color':'#444549'},250);
			 $("#main-page2").stop().animate({'scale':'1.1'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-page2', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page2").stop().css({'background-color':'#9C9C9C','border-color':'#9C9C9C'});
		     $("#text-page2").stop().css({'color':'#FFF'},250);
	         $("#main-page2").stop().animate({'scale':'1'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PAGE3*/

$(document).on('touchstart mouseover', '#main-page3', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page3").stop().css({'background-color':'transparent','border-color':'#444549'});
			 $("#text-page3").stop().css({'color':'#444549'},250);
			 $("#main-page3").stop().animate({'scale':'1.1'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-page3', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page3").stop().css({'background-color':'#9C9C9C','border-color':'#9C9C9C'});
		     $("#text-page3").stop().css({'color':'#FFF'},250);
	         $("#main-page3").stop().animate({'scale':'1'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON PAGE4*/

$(document).on('touchstart mouseover', '#main-page4', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page4").stop().css({'background-color':'transparent','border-color':'#444549'});
			 $("#text-page4").stop().css({'color':'#444549'},250);
			 $("#main-page4").stop().animate({'scale':'1.1'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#main-page4', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $("#page4").stop().css({'background-color':'#9C9C9C','border-color':'#9C9C9C'});
		     $("#text-page4").stop().css({'color':'#FFF'},250);
	         $("#main-page4").stop().animate({'scale':'1'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

/*BUTTON HEADER LEARN MORE*/

$(document).on('touchstart mouseover', '#wrapper-learnmore', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $(".bouton-learnmore").stop().css({'background-color':'#FFF'});
			 $(".text-learnmore").stop().css({'color':'#333'},250);

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-learnmore', function(event){
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			 
			 $(".bouton-learnmore").stop().css({'background-color':'transparent'});
		     $(".text-learnmore").stop().css({'color':'#FFF'},250);
			 
            event.handled = true;
        } else {
            return false;
        }
});

	</script>

</body>
</html>
