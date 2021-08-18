<?php /* 
This page is used to display the static frontpage. 
*/
 
// Fetch theme header template ?>

<!DOCTYPE html>
<html lang="zh">
<title>sample1</title>

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Zihan Zhong">
    <meta name="viewpoint" content="wodth=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="XXXXXXX官方网站">
    <link rel="icon" type="image" href="<?php bloginfo('template_url'); ?>icon.png">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/demo.css">
    <script src="<?php bloginfo('template_url'); ?>./js/index.js"></script>
    <script src="<?php bloginfo('template_url'); ?>./js/jquery-1.11.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>./js/PageScroll.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <!--Social Media -->
    <div id="fadeQR" onClick="lightbox_close_wechat();">
        
    </div>
        <div id="lightQR">
                    <img src="<?php bloginfo('template_url'); ?>./images/download.png" />                   
            </div>
            <div id="lightText"><span>球球了<br>关注乃琳Queen吧<br>是乃淇淋捏<br><img src="<?php bloginfo('template_url'); ?>./images/jiaran.jpg" /></span></div>
    <div class="mainHeader layoutHeader">
        <div class="headerUser"><a class="headerUserButton" id="userLogin" href="javascript:void(0);">登录</a><a
                class="headerUserButton" id="userCenter" href="https://ak.hypergryph.com/user"
                target="_blank">个人中心</a><span class="sep">|</span><a class="headerUserButton" id="userRegister"
                href="https://ak.hypergryph.com/user" target="_blank">注册</a><a class="headerUserButton" id="userLogout"
                href="javascript:void(0);">登出</a></div>
        <div class="headerMedia">
            <div class="headerMediaSwitch" data-cursor="pointer"><a href="#" onclick="lightbox_open_wechat();"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300">
                    <circle cx="242" cy="49" r="35"></circle>
                    <circle cx="242" cy="251" r="35"></circle>
                    <circle cx="58" cy="150" r="35"></circle>
                    <line x1="242" y1="49" x2="59" y2="150" stroke-width="20"></line>
                    <line x1="242" y1="251" x2="59" y2="150" stroke-width="20"></line>
                </svg></a></div>
        </div>
    </div>
    </div>
    <!--导航栏Nav Bar-->
    <nav id="nav">
        <!--Spacer 排版用-->
        <div class="navBtn"><i class="navBtnIcon"><span class="navBtnIconBar"></span><span
                    class="navBtnIconBar"></span></i></div>
        <div class="navContent">


            <!--固定在Absolute位置-->
            <ol class="navMenu">
                <li class="navMenuItem active" data-key="homepage" data-cursor="pointer"><a
                        href="javascript:void(0);"><span class="navMenuItemName">HOME</span><span
                            class="navMenuItemTitle">首页</span></a></li>
                <li class="navMenuItem" data-key="information" data-cursor="pointer"><a href="section information"><span
                            class="navMenuItemName">NEWS</span><span class="navMenuItemTitle">情报</span></a></li>
                <li class="navMenuItem" data-key="staff" data-cursor="pointer"><a href="javascript:void(0);"><span
                            class="navMenuItemName">CHARACTER</span><span class="navMenuItemTitle">角色</span></a></li>
            </ol>



        </div>
        <!--页脚显示当前页数-->
        <div class="navPagination">
            <span id="myspan" class="navpaginationCurrent"> 01</span><span>/</span><span
                class="navPaginationTotal">03</span>
        </div>
    </nav>

    <!--浮窗效果-->


    <!--滚轮提示-->
    <div class="scrollTips" id="scrollTips">
        <div class="scrollTipsText">SCROLL</div>
        <span class="scrollTipsArrow" :first-of-type></span><span class="scrollTipsArrow" :last-of-type></span>
    </div>



    <div id="container">
        <div class="sections">
            <div class="section section-1">
                <img class="homepageLogo" src="<?php bloginfo('template_url'); ?>./images/icon.png">
                <div class="homepageDisplay">
                    <div class="homepageTitleGrid"><span>幻</span><span>爵</span><br><span>科</span><span>技</span>
                    </div>
                </div>

                <!--PV蒙版-->
                <div id="fade" onClick="lightbox_close();"></div>
                <div id="light">
                    <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                    <video id="VisaChipCardVideo" width="600" controls>
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        <!--Browser does not support <video> tag -->
                    </video>
                </div>
                <div class="pvContainer">
                    <div class="click">
                        <a href="#" onclick="lightbox_open();">Watch video</a>
                    </div>
                </div>

                <div class="animeBg">
                    <video id="v1" autoplay loop muted>
                        <source src="<?php bloginfo('template_url'); ?>./videos/bg.mp4" type="video/mp4" />
                    </video>
                </div>



                <!--预约界面-->
                <div class="ReservationWrapper">
                    <button class="reserve" style="vertical-align:middle"
                        onclick="alert('To be done')"><span>立即预约</span></button>
                </div>

                <div class="downloadBtnWrapper mainDownload">
                    <div class="android"><a href="#" id="download_Android" onclick="openWindow(this)">Android
                            下载链接</a>
                    </div>
                </div>
                <div id="light_android" class="white_content">
                    <img src="<?php bloginfo('template_url'); ?>./images/download.png" />
                </div>
                <div id="QRfade" class="black_overlay" onclick="closeWindow()">

                </div>

            </div>
            <div class="section section-2" id="section-information">
                <!--情报页-->
                <!--依照相同的模板添加新的块-->
                <div class="sectionDisplay">
                    <div class="articleCategory informationCategory">
                        <ol class="articleCategoryList">
                            <li class="articleCategoryItem active" data-cursor="pointer" data-type="-1"
                                data-key="LATEST">最新
                            </li>
                            <li class="articleCategoryItem" data-cursor="pointer" data-type="0" data-key="ANNOUNCEMENT">
                                公告</li>
                            <li class="articleCategoryItem" data-cursor="pointer" data-type="1" data-key="ACTIVITY">活动
                            </li>
                            <li class="articleCategoryItem" data-cursor="pointer" data-type="2" data-key="NEWS">新闻</li>
                        </ol>
                    </div>
                    <div class="informationBannerWrapper">
                        <div class="banner informationBanner">
                            <div class="rwd_slider_container_wrapper">
                                <div class="rwd_slider_container">
                                    <div class="slider_container">
                                        <div>
                                            <img src="<?php bloginfo('template_url'); ?>./images/PG/1.jpeg"
                                                alt="pure css slider" />
                                        </div>
                                        <div>
                                            <img src="<?php bloginfo('template_url'); ?>./images/PG/2.jpeg"
                                                alt="pure css slider" />
                                        </div>
                                        <div>
                                            <img src="<?php bloginfo('template_url'); ?>./images/PG/3.jpeg"
                                                alt="pure css slider" />

                                        </div>
                                        <div>
                                            <img src="<?php bloginfo('template_url'); ?>./images/PG/4.jpeg"
                                                alt="pure css slider" />

                                        </div>
                                        <div>
                                            <img src="<?php bloginfo('template_url'); ?>./images/PG/5.jpeg"
                                                alt="pure css slider" />

                                        </div>
                                    </div><!-- end of .pure_slider_container -->
                                </div><!-- end of .embed-responsive -->
                            </div><!-- end of .embed-responsive-box -->
                        </div>

                    </div>
                    <div class="articleContainer informationArticleContainer">
                        <div class="articleListWrapper">
                            <ol class="articleList active" data-category-key="LATEST">
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021089306.html"
                                        target="_blank"><span class="articleItemDate">2021-08-02</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> [XXX]绝赞开发中</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079658.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle">快来一起打派派</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079619.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">快来一起打LOL</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079381.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">OW狗都不玩</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079342.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">真香</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079395.html"
                                        target="_blank"><span class="articleItemDate">2021-07-30</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> 震惊！氪金母猪竟是我自己</h1>
                                    </a></li>
                            </ol>
                            <ol class="articleList" data-category-key="ANNOUNCEMENT">
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021089306.html"
                                        target="_blank"><span class="articleItemDate">2021-08-02</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> Pika</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079619.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">Chu</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079381.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">PikaChu</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079342.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">Tyuuuuu</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079395.html"
                                        target="_blank"><span class="articleItemDate">2021-07-30</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> Pikapi Pikapik</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079374.html"
                                        target="_blank"><span class="articleItemDate">2021-07-29</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> 皮神：爷不装了</h1>
                                    </a></li>
                            </ol>
                            <ol class="articleList" data-category-key="ACTIVITY">
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079658.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle">[活动预告]夏日嘉年华限时活动即将开启</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079605.html"
                                        target="_blank"><span class="articleItemDate">2021-07-16</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle"> [活动预告]SideStory「密林悍将归来」复刻即将开启</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021079641.html"
                                        target="_blank"><span class="articleItemDate">2021-07-08</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle">[活动预告]故事集「如我所见」即将开启</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021069036.html"
                                        target="_blank"><span class="articleItemDate">2021-06-28</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle">[活动预告]联锁竞赛「荷谟伊智境」即将开启</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021069089.html"
                                        target="_blank"><span class="articleItemDate">2021-06-10</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle"> [活动预告]SideStory「沃伦姆德的薄暮」复刻即将开启</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021069935.html"
                                        target="_blank"><span class="articleItemDate">2021-06-07</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle">[活动预告]端午限时登录活动即将开启</h1>
                                    </a></li>
                            </ol>
                            <ol class="articleList" data-category-key="NEWS">
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021069004.html"
                                        target="_blank"><span class="articleItemDate">2021-06-23</span><span
                                            class="articleItemCate">新闻</span>
                                        <h1 class="articleItemTitle">《明日方舟》制作组通讯#12</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021059949.html"
                                        target="_blank"><span class="articleItemDate">2021-05-27</span><span
                                            class="articleItemCate">新闻</span>
                                        <h1 class="articleItemTitle">新版未成年人保护法施行</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021059734.html"
                                        target="_blank"><span class="articleItemDate">2021-05-20</span><span
                                            class="articleItemCate">新闻</span>
                                        <h1 class="articleItemTitle">《明日方舟》制作组通讯#11</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021059770.html"
                                        target="_blank"><span class="articleItemDate">2021-05-08</span><span
                                            class="articleItemCate">新闻</span>
                                        <h1 class="articleItemTitle">游戏适龄提示</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021049201.html"
                                        target="_blank"><span class="articleItemDate">2021-04-27</span><span
                                            class="articleItemCate">新闻</span>
                                        <h1 class="articleItemTitle">「明日方舟 x Apple 授权专营店」线下专场活动</h1>
                                    </a></li>
                                <li class="articleItem"><a class="articleItemLink" href="/news/2021049478.html"
                                        target="_blank"><span class="articleItemDate">2021-04-06</span><span
                                            class="articleItemCate">新闻</span>
                                        <h1 class="articleItemTitle">《明日方舟》制作组通讯#10期</h1>
                                    </a></li>
                            </ol>
                        </div>
                        <div class="articleFooter">
                            <div class="articlePagination"></div>
                            <div class="articleMore"><a class="articleMoreButton" href="/news.html"
                                    target="_blank"><span>更多情报</span><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 18">
                                        <path d="M6 13 h35 l-6 -6" fill="none"></path>
                                    </svg></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-3">
                <h3>the Third section</h3>
            </div>
            <div class="section section-4">the Fifth section</div>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>./js/PageScroll.js"></script>
    <script type="text/javascript">

        //插件初始化
        $('.videolist').each(function () { //遍历视频列表
            $(this).hover(function () { //鼠标移上来后显示播放按钮
                $(this).find('.videoed').show();
            }, function () {
                $(this).find('.videoed').hide();
            });
            $(this).click(function () { //这个视频被点击后执行
                var img = $(this).attr('vpath');//获取视频预览图
                var video = $(this).attr('ipath');//获取视频路径
                $('.videos').html("<video id=\"video\" poster='" + img + "' style='width: 640px' src='" + video + "' preload=\"auto\" controls=\"controls\" autoplay=\"autoplay\"></video><img onClick=\"close1()\" class=\"vclose\" src=\"img/gb.png\" width=\"25\" height=\"25\">");
                $('.videos').show();
            });
        });

        function close1() {
            var v = document.getElementById('video');//获取视频节点
            $('.videos').hide();//点击关闭按钮关闭暂停视频
            v.pause();
            $('.videos').html();
        }
        $("#container").PageScroll({
            //html结构
            selectors: {
                sections: ".sections",
                section: ".section",
                insection: ".insection",
                page: ".pages",
                active: ".active",
                controlPrev: ".control-prev",
                controlNext: ".control-next"
            },
            //页面开始的索引值,默认为0,从0开始记数
            index: 0,
            //动画效果，5种：默认为ease,linear,ease-in,ease-out,ease-in-out
            easing: "ease",
            //动画时间，单位毫秒 
            duration: 500,
            //是否循环播放
            loop: false,
            //是否进行分页处理
            pagination: true,
            //是否触发键盘事件
            keyboard: true,
            //滚动方式，默认竖屏滚动，横屏滚动为horizontal
            direction: "vertical",
            //动画执行后执行的回调函数
            callback: ""
        });
        //$("#container").PageScroll("init");
    </script>
</body>

</html>

</html>