	@font-face{
	font-family: 'Segoe UI';
	src:local('Segoe UI'),url('/fonts/SegoeUIRegular.eot');
	font-display: swap;
	}
	@font-face{
	font-family: 'Segoe UI';
	src:local('Segoe UI'),
	url('/fonts/SegoeUIRegular.woff') format('woff'),
	url('/fonts/SegoeUIRegular.ttf') format('truetype');
	font-display: swap;
	}


	.container {
	min-width:1100px;
	max-width: 1700px;
	width:auto;
	}

	body{
	min-width:1101px;}

/*body.is_show_bblocks #content section.block_on_main >div>div, body.is_show_bblocks .wrap_block_on_main{max-width:1100px;position:relative;margin-right:auto;margin-left:auto;}*/

	/*шрифты*/
	body {font-family: 'Segoe UI', Helvetica, sans-serif}
	h1.title , #main_page p.title,#content .block_on_main .fz_title {font-family: 'Segoe UI', Helvetica, sans-serif}
	nav#G_MENU ,#left_nav , #right_nav, #content_nav  {font-family: 'Segoe UI', Helvetica, sans-serif}

	#content ,#BLOCK_ON_MAIN , body.redactor,.block_on_main{font-size: 17px /*FONT_SIZE_CONTENT*/}
	header{font-size: 18px/*FONT_SIZE_HEADER*/}
	footer{font-size: 18px/*FONT_SIZE_FOOTER*/}
	#content h1.title , .fz_title {font-size: 24px/*FONT_SIZE_H1_TITLE*/}
	#content .block_on_main .fz_title {font-size: 40px/*FONT_SIZE_BLOCK_ON_MAIN_TITLE*/}
	#content .block_on_main section {font-size: 18px/*FONT_SIZE_BLOCK_ON_MAIN_TEXT*/}
	aside .block p.title {font-size: 22px/*FONT_SIZE_BB_TITLE*/;    margin-bottom: 15px;}
	aside .block .text{font-size: 16px/*FONT_SIZE_BB_CONTENT*/}
	.news_row .title , .blog_post .title ,.catalog_map_element .title,.post .title{font-size: 22px/*FONT_SIZE_NEWS_TITLE*/}
	body.is_main .news_row .title ,
	body.is_main .blog_post .title,
	body.is_main .catalog_map_element .title,
	.title_on_main,
	body.is_main .post .title {
	font-size: 16px/*MAINPAGE_FONT_SIZE_NEWS_TITLE*/
	}
	nav#G_MENU li>span>a,.style_FONT_SIZE_G_MENU{font-size: 17px/*FONT_SIZE_G_MENU*/}
	aside #left_nav li>a {font-size: 16px/*FONT_SIZE_V_MENU*/}
	#content_nav li>a {font-size: 16px/*FONT_SIZE_V_MENU*/;text-decoration:none;}

	a , .crumbs a, .crumbs span , .alblink .albom_title, .style_a_color{ color: rgb(97, 98, 155)/*A_COLOR*/ }
	/*.btn {    border-color: rgb(97, 98, 155) ;}*/
	a.site_tag:hover{background-color: rgb(97, 98, 155)/*A_COLOR*/}
	a:hover, .alblink:hover .albom_title, .style_a_color:hover ,.style_a_color_hover { color: rgb(40, 42, 174)/*A_COLOR_HOVER*/}
	.gallink:hover img,.alblink.four_img:hover .wrap_four_img ,.btn:hover{
	border-color: rgb(40, 42, 174)/*A_COLOR_HOVER*/;
	}
	.alblink:hover .img {background-color:rgb(40, 42, 174)/*A_COLOR_HOVER*/}
	body:not(.redactor) {background: rgb(255, 255, 255) url('/images/bg/img_body.jpg?uts=1771243016') repeat 50% 0 ;/*WINDOW_BG_COLOR*/}
	.main_page_is_blocks .container{ background-color:initial}
	.main_page_is_blocks .container, .container { background-color:rgba(252, 220, 255, 0)/*SITE_BG_COLOR*/}
					header, header .container, header.container  {background: rgb(255, 255, 255) url('/images/bg/top.jpg?uts=1771243016') repeat 50% 0;/*HEADER_BG_COLOR*/}
		@media (max-width: 400px){
		header, header .container, header.container  {background-color: rgb(255, 255, 255) /*HEADER_BG_COLOR*/}
		}
	
	nav#G_MENU, nav#G_MENU .container, .nav_wrapper {background-color: rgb(77, 77, 77);/*NAV_BG_COLOR*/}
	#scrolltop.btn_as_botton >div {background-color: rgb(77, 77, 77);/*NAV_BG_COLOR*/}
	nav#G_MENU  ul  li a,#js-btn-showing-nav span ,	#scrolltop.btn_as_botton >div {color:rgb(255, 255, 255)/*NAV_A_COLOR*/}
	#js-btn-showing-nav .my__line {border-color:rgb(255, 255, 255)/*NAV_A_COLOR*/}

	#gorizont_spoiler_menu_but .fa,#gorizont_spoiler_menu_but,nav#G_MENU  ul  li .has_child_i {color: rgb(255, 255, 255)/*NAV_A_COLOR*/;}
	nav#G_MENU ul.ul_lvl_1 > li.active > span > a  {background-color: rgb(97, 98, 155)/*NAV_BG_COLOR_ACTIVE*/;color:rgb(255, 250, 195)/*NAV_A_COLOR_ACTIVE*/}
	.my_btn:not(.red):hover  {background-color: rgb(97, 98, 155)/*NAV_BG_COLOR_ACTIVE*/;color:rgb(255, 250, 195)/*NAV_A_COLOR_ACTIVE*/}
	nav#G_MENU ul.ul_lvl_1 > li:hover > span > a {background-color: rgb(97, 98, 155)/*NAV_BG_COLOR_HOVER*/;color:rgb(255, 255, 255)/*NAV_A_COLOR_HOVER*/}
	#gorizont_spoiler_menu_but:hover .fa{color:rgb(255, 255, 255)/*NAV_A_COLOR_HOVER*/}
	#gorizont_spoiler_menu_but:hover {background-color: rgb(97, 98, 155)/*NAV_BG_COLOR_HOVER*/;}
	nav#G_MENU ul.ul_lvl_1 > li > ul  a.active {color:rgb(255, 250, 195)/*NAV_A_COLOR_SUB_ACTIVE*/}
	nav#G_MENU ul.ul_lvl_1 > li > ul {background-color: rgb(97, 98, 155);color:rgb(255, 255, 255)/*NAV_A_COLOR_SUB*/}
	nav#G_MENU ul.ul_lvl_1 > li > ul li a , nav#G_MENU ul.ul_lvl_1 > li > ul li a:hover{color:rgb(255, 255, 255)/*NAV_A_COLOR_SUB*/}
	nav#G_MENU ul.ul_lvl_1 > li > ul > li {border-bottom: 1px dashed rgb(217, 217, 217)/*NAV_SEPARATOR_COLOR*/;}
	nav#G_MENU ul.ul_lvl_1 > li > ul > li:last-child {border-bottom: none}

	nav#G_MENU ul.ul_lvl_1{ text-align:center}
	nav#G_MENU ul.ul_lvl_1 ul li{ text-align:left}

	#left_nav div{background-color: rgb(255, 255, 255)/*NAV_LEFT_BG_COLOR*/; text-align:left}
	#left_nav div ul > li a , #left_nav div ul li ul li a{color:rgb(77, 77, 77)/*NAV_LEFT_A_COLOR*/}
	#left_nav  ul > li.active >  a , #left_nav > ul > li > ul > li >  a.active {background: rgb(97, 98, 155)/*NAV_LEFT_BG_COLOR_ACTIVE*/;color:rgb(255, 250, 195)/*NAV_LEFT_A_COLOR_ACTIVE*/}
	#left_nav div  ul > li a:hover,#left_nav div ul li ul li a:hover {background-color: rgb(77, 77, 77)/*NAV_LEFT_BG_COLOR_HOVER*/;color:rgb(255, 255, 255)/*NAV_LEFT_A_COLOR_HOVER*/}
	#left_nav div ul > li > ul {background-color: rgb(217, 217, 217)/*NAV_LEFT_BG_COLOR_SUB*/;color:rgb(77, 77, 77)/*NAV_LEFT_A_COLOR_SUB*/}
	#left_nav div ul > li > ul > li a {color:rgb(77, 77, 77)/*NAV_LEFT_A_COLOR_SUB*/}
	#left_nav div ul > li {border-bottom: 1px solid rgb(217, 217, 217)/*NAV_LEFT_SEPARATOR_COLOR*/;}
	#left_nav div ul > li:last-child {border-bottom: none}
	#left_nav div ul li ul li a.active {color:rgb(97, 98, 155)/*NAV_LEFT_A_COLOR_SUB_ACTIVE*/}

	#content_nav ul{text-align:left}
	#content_nav li>a {background: rgb(255, 255, 255)/*NAV_LEFT_BG_COLOR*/;color:rgb(77, 77, 77)/*NAV_LEFT_A_COLOR*/}
	#content_nav  ul > li.active  > a , #content_nav > ul > li > ul > li  > a.active {background: rgb(97, 98, 155)/*NAV_LEFT_BG_COLOR_ACTIVE*/;color:rgb(255, 250, 195)/*NAV_LEFT_A_COLOR_ACTIVE*/}

	#content_nav  ul > li  > a:hover , #content_nav > ul > li > ul > li > a:hover{background-color: rgb(77, 77, 77)/*NAV_LEFT_BG_COLOR_HOVER*/;color:rgb(255, 255, 255)/*NAV_LEFT_A_COLOR_HOVER*/}
	#content_nav .founded_uL_lvl_2 ul > li > a{background-color: rgb(217, 217, 217)/*NAV_LEFT_BG_COLOR_SUB*/;color:rgb(77, 77, 77)/*NAV_LEFT_A_COLOR_SUB*/}
	#content_nav .founded_uL_lvl_2 ul > li a.active {color:rgb(97, 98, 155)/*NAV_LEFT_A_COLOR_SUB_ACTIVE*/}
	footer .container{ background-color:initial;}
	
			footer
		{
	color: rgb(255, 250, 195) /*FOOTER_TEXT_COLOR*/ ;
	background-color:rgba(77, 77, 77, 0) /*$_FOOTER_BG_COLOR*/;
				background:rgba(77, 77, 77, 0) url('/images/bg/foot.jpg?uts=1771243016') repeat center 0%/*_FOOTER_BG_COLOR*/;
			}

	@media (max-width: 600px){
	header,header .container{background-image:none}
		footer{background-image:none}
		}
		footer a, footer a:hover , .style_footer_a_color{    color: rgb(255, 255, 255) ;   }
	header a , header a:hover{    color: rgb(97, 98, 155) ;   }
	.wrap {
	border: 2px solid rgb(217, 217, 217);
	background-color: rgb(255, 255, 255);
	color:rgb(28, 28, 28);
	padding: 20px;
	}
	#left_nav ul li {margin: 0 20px;}
	#left_nav ul {
	margin: 0 -20px;
	}
	#left_nav ul li a {
	padding-left: 20px;
	padding-right: 20px;
	margin: 0 -20px;
	}
	#BLOCK_ON_MAIN {
	background-color: rgb(147, 196, 125);
		}
	.news .post:not(:last-child), .blog .blog_post:not(:last-child), .catalog_map_element:not(:last-child){
	border-color:  rgb(217, 217, 217);}

	body.redactor{ background-color: rgb(255, 255, 255);}
	#nivoSlider {
	border: 1px solid rgb(217, 217, 217);
	}
	#nivoSlider img,#nivoSlider{
	/*width: 1240px !important;*/
	height: 500px !important;
	}
	#slider ,#owl_slider .slide,#owl_slider ,  .top_slider:not(.container) {
	height: 500px;}
	#calendar .days.m a {border:1px solid rgb(255, 255, 255)}
	h2.title , h1.title, .block>p.title ,.messages .question .p .name, .messages .answer .p .name, .comment dt .name ,.color_title{
	color: rgb(97, 98, 155);
	}
	header .header_text {color:rgb(28, 28, 28)}
#content .post .cover_img  {
max-width: 200px;
}
h1.title{text-align:left}
.block_on_main .fz_title{text-align:center}
aside:not(.genered_aside ) .block , aside:not(.genered_aside ) .block.block_type_calendar   ,aside:not(.genered_aside ) a.special {width:240px}
@media (max-width: 555px){
}
