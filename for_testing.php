<html>
<head>
    <meta charset="utf-8">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>1</title>
</head>
<body>
<div id="container">    <!--  Контейнер сайта  -->
    <div id="header">      <!--    Шапка  -->
        <div class="container">
            <ul id="main-navigation">

                <li>
                    <a href="#">Стpаница 1</a>
                </li>
                <li>
                    <a href="#">Стpаница 2</a>
                </li>
                <li>
                    <a href="#">Стpаница 3</a>
                </li>
                <li>
                    <a href="#">Стpаница 4</a>
                </li>

            </ul>
        </div>
        <div class="wrapper">  <!-- /-- Основной контент левой колонки--/ -->
            <div class="logo">  <!-- /-- Логотип --/ -->
                <a href="#">
                    <img src="images/logo.png">
                </a>
            </div>
            <nav class="bottom_menu">   <!-- /-- Начало навигации --/ -->
                <ul id="dropdown_nav">
                    <li><a href="#">Категория</a>
                        <ul class="sub-menu">
                            <li><a href="#">Подменю #1</a></li>
                            <li><a href="#">Подменю #2</a></li>
                            <li><a href="#">Подменю #3</a></li>
                            <li><a href="#">Подменю #4</a></li>
                        </ul>

                    <li><a href="#">Категория 1</a></li>
                    <li><a href="#">Категория 2</a></li>
                    <li><a href="#">Категория 3</a></li>
                    <li><a href="#">Категория 4</a></li>
                    </li>
                </ul>
            </nav>                      <!-- /-- Конец навигации --/ -->
            <div class="content">
                <h2>Последние записи</h2>
            </div>

            <div class="middle"></div>      <!-- /-- Пустое место --/ -->

            <div class="postbox">           <!-- /-- Левая информационная колонка --/ -->
                <a href="#">
                    <img src="images/tumb.png">
                </a>
                <h3>
                    <a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов</a>
                </h3>
                <div class="info">
                    Александр //<a href="#">Метки: метка, метка 2</a>// Апр.10.2012. // Комментариев:<a href="#">238</a>
                </div>
                <div class="text">
                    <p>Приветствую Вас, уважаемые читатели блога. Сегодня спешу представить Вам очередную бесплатную подборку шаблонов на CSS3 и HTML5, а также здесь есть несколько шаблонов с большими и встроенными JQuery слайдерами изображений. В общем, я надеюсь, что Вы здесь найдёте то что Вам нужно. Наслаждайтесь.</p>
                </div>
                <div class="bottom-next"><a href="#">Далее</a></div>
            </div>
            <div class="raz"></div>
        </div>
        <aside id="colRight">         <!-- /-- Правая панель ссылок --/ -->
            <form  method="get" action="/search" target="_blank">
                <input name="q" id="form-query" value="" placeholder="Поиск...">
                <input id="form-querysub" type=submit value="">
            </form>
            <div class="rightBox">
                <h3>Виджет 1</h3>
                <ul>
                    <li>
                        <a href="#" title="Плавная анимация объектов только с помощью CSS (5 примеров)">Плавная анимация объектов только с помощью CSS (5 примеров)</a>
                    </li>
                    <li>
                        <a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов</a>
                    </li>
                    <li>
                        <a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов</a>
                    </li>
                    <li>
                        <a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов</a>
                    </li>
                </ul>
            </div>
        </aside>
        <footer id="footer">
            <div class="footerInner">
                <div class="mini-logo">
                    <img src="images/logo.png">
                </div>
                <nav class="main-navigation">
                    <ul>
                        <li>
                            <a href="#">Станица 1</a>
                        </li>
                        <li>
                            <a href="#">Станица 2</a>
                        </li>
                        <li>
                            <a href="#">Станица 3</a>
                        </li>
                        <li>
                            <a href="#">Станица 4</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </footer>
</body>
</html>


<style>
html {
margin:0px;
padding:0px;
height:100%;
}

body {
width: 100%;
height: 100%;
color:#333;
background: #fff;
font-family: "Segoe UI", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
font-size:0.94em;
line-height:135%;
margin-top:0px;
margin-left:0px;
margin-right:0px;
}

#container{
margin-top:0px;
margin-left:0px;
margin-right:0px;
height: 100%;
}

#header{
width:100%;
height:57px;
background:#0dbfe5;

}
.container{
margin-left:40px;
min-height:100%;
}

ul{
list-style:none;
}

a{
text-decoration:none;


}
a:hover{
text-align:center;
background: #fff;
}

li{
display:inline-block;
}

#main-navigation, #main-navigation li{
margin:0;
padding: 0;


}

#main-navigation{
background:#0dbfe5;

}

#main-navigation ul{
overflow:hidden;

}
#main-navigation li{
float:left;
text-align: center;
}
#main-navigation a{
border-left:1px solid #adadad;
display:block;
color:#d7d4d4;
text-decoration:none;
padding:19px 20px 18px 20px;
}

.net-block{

}

.wrapper{
width:1200px;
margin-right:40px;
min-height:100%;
}

.logo{
width:141px;
height:47px;
margin-top:33px;
margin-bottom:42px;
margin-left:40px;
}

.bottom_menu{
margin-left:40px;
width:1200px;
height:70px;
left:0px;
bottom:0px;
display:inline-block;
}

#dropdown_nav, #dropdown_nav li{
margin:0;
padding:0;
font-weight:bold;
display:inline-block;
list-style:none;
border-bottom:0px solid #777;
margin-top:18px;

}

#dropdown_nav{
background:#323232;
width:1200px;
}
#dropdown_nav li{
display:inline-block;
float:left;
position:relative;
}

#dropdown_nav a{
display:block;
color:#fff;
text-decoration:none;
padding:5px 22px 20px 22px;
font-weight:100;
font-size:18px;
/*background: url(images/linemenu.png) right no-repeat;*/
}

#dropdown_nav li a:hover {
background: #000;
text-decoration:none;
color:#0dbfe5;
}

#dropdown_nav li:hover>.sub-menu{
display:block;
}

#dropdown_nav .sub-menu{
z-index: 4;
width:150px;
padding:0px;
position:absolute;
top:42px;
left:0px;
border:0px solid #ddd;
border-top:none;
background: #000;
display:none;

}

#dropdown_nav .sub-menu li{
width:150px;
padding:0px;

}

#dropdown_nav .sub-menu li a {
background: none;
font-weight: normal;
font-size:15px;
display:block;
border-bottom:0px solid #e5e0b3;
padding-left:10px;
color:#fff;

}

#dropdown_nav .sub-menu li a:hover {
background:#222;
color:#0dbfe5;
text-align:left;
}

.content{
width:1200px;
height:103px;
background:#eeeeee;
margin-left:40px;
margin-top:-10px;
text-align:center;
}

h2{
text-align:center;
padding-top:40px;
}

.middle{
width:1200px;
height:46px;
background:#fff;
border:0px solid #e5e0b3;
margin-left:40px;
}

.postbox{
border:0px solid #333;
background: #fff;
width:700px;
margin-top:0px;
margin-left:40px;
margin-bottom:50px;
float:left;
}

.postbox h3 a{
font-family: "Segoe UI Semilight", "Segoe UI", Tahoma, Helvetica, Sans-Serif;
color:#000;
font-style:normal;
font-weight:100;
font-size:33px;
}

.postbox h3 a:hover{
color:#0dbfe5;
}

.postbox info{
margin-bottom:17px;
margin-top:20px;
color:#999;
font-weight:100;
font-size:14px;
}

.postbox info a{
color:#777;
}

.postbox info a:hover{
color:#4991bb;
}

.postbox text{
border:0px solid #333;
width:700px;
margin-bottom:30px;
}

.postbox text p{
margin-top:0;
}

.bottom-next a{
background:#0dbfe5;
color: #fff;
font-size: 17px;
width: 100px;
border-radius: 3px;
text-align:center;
padding:6px 25px 9px 25px;
}

.bottom-next a:hover{
background:#000;
color:#0dbfe5;
}

.raz{
margin:0 auto;
border:0px solid #333;
background: #fff;
width:116px;
height:29px;
margin-bottom:20px;
}

#colRight{
float:right;
width:350px;
height:100%;
position:relative;
margin-left:70px;
margin-top:0px;
margin-right:20px;
}

#form-query {

background:#eeeeee;
border:0px solid #e4e4e4;
width:350px;
height:31px;
padding:8px 10px 7px;
font-weight:100;
font-size:18px;
color:#000;
margin-bottom: 20px;
margin-top:0px;

}

#form-querysub {
position:absolute;
right:7px;
top:7px;
width:17px;
height:17px;
background:#d7d7d7;
border:0px dashed #333;
}

#form-querysub:hover {
cursor: pointer;
}

.rightBox h3{
background:#d7d7d7;
border:1px solid #e1e3e3;
padding:10px;
margin-bottom:0px;
}

.rightBox{
margin-left:0px;
margin-top:0px;
margin-bottom:0px;


}

.rightBox li{
background:#fff;
border-top:1px solid #e1e3e3;
padding:10px 0px;



}

.rightBox ul{
background:#fff;
border-top:0px solid #e1e3e3;
padding:10px 0px;
}

.rightBox li:first-child {
border-top:none;
}

.rightBox a {
color:#333;
}

.rightBox a:hover {
color:#0dbfe5;
}

.clear {
clear: both;

}

#footer {
margin-top:50px;
height:100px;
width:100%;
background: #0dbfe5;
}

.footerInner {
position:relative;
border:0px solid #000;
width:1200px;
margin:-50px;
height:100px;
}
</style>