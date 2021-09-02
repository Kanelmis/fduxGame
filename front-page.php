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


</head>

<body>
    <!--社交媒体-->
    <!-- 蒙版 -->
    <div id="fadeQR" onClick="lightbox_close_wechat();">

    </div>
    <div id="lightQR">
        <img src="<?php bloginfo('template_url'); ?>./images/download.png" />
    </div>
    <div id="lightText"><span>球球了<br>关注乃琳Queen吧<br>是乃淇淋捏<br><img
                src="<?php bloginfo('template_url'); ?>./images/jiaran.jpg" /></span></div>
    <div class="mainHeader layoutHeader">
        <div class="headerUser"><a class="headerUserButton" id="userLogin" href="javascript:void(0);">登录</a><a
                class="headerUserButton" id="userCenter" href="https://ak.hypergryph.com/user"
                target="_blank">个人中心</a><span class="sep">|</span><a class="headerUserButton" id="userRegister"
                href="https://ak.hypergryph.com/user" target="_blank">注册</a><a class="headerUserButton" id="userLogout"
                href="javascript:void(0);">登出</a></div>
        <div class="headerMedia">
            <div class="headerMediaSwitch" data-cursor="pointer"><a href="#" onclick="lightbox_open_wechat();"><svg
                        version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 300 300">
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

    <!-- <nav id="nav"> -->
    <!--Spacer 排版用-->
    <!--	<div class="navBtn"><i class="navBtnIcon"><span class="navBtnIconBar"></span><span
					class="navBtnIconBar"></span></i></div>
		<div class="navContent">
    -->

    <!--固定在Absolute位置-->
    <!--		<ol class="navMenu">
				<li class="navMenuItem active" data-key="homepage" data-cursor="pointer"><a
						href="javascript:void(0);"><span class="navMenuItemName">HOME</span><span
							class="navMenuItemTitle">首页</span></a></li>
				<li class="navMenuItem" data-key="information" data-cursor="pointer"><a href="section information"><span
							class="navMenuItemName">NEWS</span><span class="navMenuItemTitle">情报</span></a></li>
				<li class="navMenuItem" data-key="staff" data-cursor="pointer"><a href="javascript:void(0);"><span
							class="navMenuItemName">CHARACTER</span><span class="navMenuItemTitle">角色</span></a></li>
			</ol>
		</div>
	-->
    <!--页脚显示当前页数-->
    <!--		<div class="navPagination">
			<span id="myspan" class="navpaginationCurrent"> 01</span><span>/</span><span
				class="navPaginationTotal">03</span>
		</div>
	</nav>
    -->


    <!--滚轮提示-->




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
                        <source src="<?php bloginfo('template_url'); ?>./videos/videoplayback.mp4" type="video/mp4">
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
                        onclick="popReserve()"><span>立即预约</span></button>
                </div>

                <!-- 预约弹窗-->
                <form role="form" id="reserve_form" class="reservePop" action="#" method="POST">
                    <a class="boxclose2" id="boxclose2" onclick="close_reservePop();"></a>
                    <div id="checkType">
                        <input type="checkbox" id="post_ios" name="ios" value="ios" checked="true"
                            onclick="checkBox(this.value)">
                        <label for="ios">IOS</label>
                        <input type="checkbox" id="post_android" name="android" value="android"
                            onclick="checkBox(this.value)">
                        <label for="android">安卓</label>

                    </div>
                    <div class="inputWrapper">

                        <div class="getPhoneNumber" style="height: 6rem;">
                            <i class="icon-phone"></i>
                            <input id="reserve-phone" type="text" name="reserve-phone" placeholder="请输入手机号码">

                        </div>
                        <div class="validation">
                            <div class="validInput">
                                <i class="icon-key"></i>
                                <input id="reserve-validate" type="text" placeholder="请输入验证码" style="height:5rem;">
                            </div>
                            <button type="button" id="sendValidation"
                                onclick="alert('大胸好女人真希波, 今天也很可爱哦(*^_^*)')">获取验证码</button>
                        </div>
                    </div>
                    <div class="checkPrivacyPolicy">
                        <input type="checkbox" id="checkPrivacy" name="checkPrivacy" value="checkPrivacy"
                            onclick="checkBox(this.value)">
                        <label for="checkPrivacy">我已详细阅读并同意<a href="">《用户协议》</a>和<a href="">《隐私政策》</a>
                    </div>
                    <p>
                    <input type="submit" value="你被强化了快去送" name="btnsave" id="btnsave">
                    </p>
                </form>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script type="text/javascript">
                    jQuery('form#reserve_form').on('submit', function (e) {
                        e.preventDefault();


                        var phone = jQuery('#reserve-phone').val();
                        var type;
                        

                        if($('#post_ios').is(":checked")){
                            type = "ios";
                        }else{
                            type = "android"
                        }
                       

                        if ($('#post_ios' ).is(":checked")){
                            type =  jQuery("#post_ios").val();
                        }else{
                            type =  jQuery("#post_android").val();
                        }

                        if( jQuery('#reserve-phone').val()=== ""  ||  jQuery('#reserve-validate').val()==="" || !$('#checkPrivacy').is(":checked")){
                            alert("请填写所有信息");
                            return;
                        }
                        
                        //检查手机号码是否正确
                        var phone_pattern =/^1[3|4|5|8][0-9]\d{4,8}$/; 

                        if( !phone_pattern.test( phone)){
                            alert("请输入正确的手机号码")
                            document.getElementById("reserve_form").reset();
                            return;
                        }else{
                             $.ajax({
                            type: 'POST',
                            dataType: 'json',
                            url: "<?php echo admin_url('admin-ajax.php'); ?>",
                            data: {
                                'action': 'add_reserve',
                                'phone': phone,
                                'type': type,
                            },
                            success: function (data) {
                                if (data.res == true) {
                                    alert(data.message);    // success message
                                } else {
                                    alert(data.message);    // fail
                                }
                            }
                            
                        });
                        }
                           
                        

                        // calling ajax
                       
                    });
                </script>

                <!-- 下载链接 
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
                -->
                <div class="scrollTips" id="scrollTips">
                    <div class="scrollTipsText">SCROLL</div>
                    <span class="scrollTipsArrow" :first-of-type></span><span class="scrollTipsArrow"
                        :last-of-type></span>
                </div>

            </div>
            <div class="section section-2" id="section-information">
                <!--情报页-->
                <!--依照相同的模板添加新的块-->
                <div class="sectionDisplay">
                    <div class="articleCategory informationCategory">
                        <span>新闻</span>
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
                            <ol class="articleList" data-category-key="LATEST">
                                <li class="articleItem display"><a class="articleItemLink" href="/news/2021089306.html"
                                        target="_blank"><span class="articleItemDate">2021-08-02</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> [XXX]绝赞开发中</h1>
                                    </a></li>
                                <li class="articleItem display"><a class="articleItemLink" href="/news/2021079658.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">活动</span>
                                        <h1 class="articleItemTitle">快来一起打派派</h1>
                                    </a></li>
                                <li class="articleItem display"><a class="articleItemLink" href="/news/2021079619.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">快来一起打LOL</h1>
                                    </a></li>
                                <li class="articleItem display"><a class="articleItemLink" href="/news/2021079381.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">OW狗都不玩</h1>
                                    </a></li>
                                <li class="articleItem display"><a class="articleItemLink" href="/news/2021079342.html"
                                        target="_blank"><span class="articleItemDate">2021-07-25</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle">真香</h1>
                                    </a></li>
                                <li class="articleItem display"><a class="articleItemLink" href="/news/2021079395.html"
                                        target="_blank"><span class="articleItemDate">2021-07-30</span><span
                                            class="articleItemCate">公告</span>
                                        <h1 class="articleItemTitle"> 震惊！氪金母猪竟是我自己</h1>
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



            <!-- 展示角色 -->
            <div class="section section-3">
                <div class="insection insection-1">
                    <div class="character_display">
                        <div class="intro">

                            <p>
                                我不想喜欢乃琳小姐了。
                                原因有很多。
                                她是虚拟偶像，我是真实的，两条平行线注定碰不到一起。
                                她是资本包装的商品，贩卖情感需求，只是觊觎我的钱包。
                                她的表演大多是为了讨好观众获得流量，我只不过是她捞金的垫脚石。
                                她是万众瞩目的偶像，我只不过一介平民，无论我多么喜欢，在她那里注定得不到任何正反馈……
                                我想通了，决定出脑。
                                今晚的直播不看了，关注，壁纸，牌子，收藏通通删干净，眼不见心不烦，还能保住我的钱包，这不是好事一桩?
                                第二天，我正常起床，洗漱，吃饭，没什么变数。我换好衣服，准备出门。
                                当我踏出门外的那一刻，我才意识到，坏事了。
                                我不知道该往哪个方向迈出下一步了。
                                平时一览无余的街道，现在竟然充满了迷雾。我仿佛是没有罗盘的一艘船，在茫茫大海里打转。四面八方都是海水，都是一样的蓝，我该往哪走? 我要去哪? 我要干什么?
                                船没有了罗盘，我丢失了方向，人生缺少了目标。
                                这是很可怕的一件事，我至此以来做过的所有事情都化为了泡影，没有了意义，全部灰飞烟灭。
                                路边跳过一只蓝色的猫，看了我一眼，好像在嘲笑我的落魄。
                                我害怕了。我逃回家里，打开电视平板手机，全部把乃琳找出来，直到乃琳笑着对我说，奶淇淋宝，爱你们哦！我把迷迭香循环播放了无数遍，直到我听着它沉沉睡去。
                                梦里，我恍然大悟。
                                人总要有个盼头，有个让你追逐的东西。它可以赋予你的努力以价值。
                                原来这就是乃琳小姐存在的意义啊，我所做的一切，不就是为了追逐乃琳小姐，为了让她能笑着对我说，你的努力，我看到了。
                                没错，乃琳小姐确实是虚拟的，但是她却让我真实的生活拥有了动力与目标。
                                我不想喜欢乃琳小姐了。
                                原因只有一个。
                                我已经爱上乃琳小姐了。[给心心][给心心]
                            </p>

                            <div class="articleMore"><a class="articleMoreButton" href="/news.html"
                                    target="_blank"><span>更多情报</span><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 18">
                                        <path d="M6 13 h35 l-6 -6" fill="none"></path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="char_infor">
                            <img class="drawing" src="<?php bloginfo('template_url');?>./images/Voca/Miku.png" />
                            <div class="char_name">
                                <span>Miku</span>

                                <a href="#" id="playsound1" onclick="playAudio('voice_miku')"><img
                                        src="<?php bloginfo('template_url');?>./images/audio.png"></a>
                                <audio id="voice_miku">
                                    <source src="<?php bloginfo('template_url');?>./audios/char/miku.mp3"
                                        type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="insection insection-2">
                    <div class="character_display">
                        <div class="intro">

                            <p>
                                ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⠖⠫⣍⢿⣯⡄⠠⡀ <br>
                                ⠀⠀⠀⠀⠀⠀⠀⠀⢀⡶⠋⠀⠀⠀⣹⢿⢿⡇ <br>
                                ⠀⠀⠀⠀⠀⠀⠀⣠⠉⠄⠀⣀⣤⠟⠛⠋⠙⡇ <br>
                                ⠀⠀⠀⠀⠀⠀⢠⠇⣴⢿⢿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈ <br>
                                ⠀⠀⠀⠀⠀⠀⡿⢠⣺⢿⠏⢤⣦⣤⣉⠢⠀⢱⡘⠀⠀⠀⡀ <br>
                                ⠀⠀⠀⠀⠀⢠⢀⢸⡘⠀⠀⠈⠻⠿⠙⠀⠀⠈⢿⢦⠀⠀⢀ <br>
                                ⠀⠀⠀⠀⠀⠆⡇⠘⢿⣾⠀⠀⠀⠀⠀⠀⠀⢿⠿⢿⠐⡕⣼ <br>
                                ⠀⠀⠀⠀⡾⡄⠀⠀⢿⢿⣷⠀⠀⠰⣠⡀⠀⠀⣴⡏⠟⠘⣁ <br>
                                ⠀⠀⢤⢿⢠⣼⠀⢀⢿⡿⠉⠿⣄⠀⠀⣀⣴⢿⣶⠀⡤⠁⡇ <br>
                                ⠂⠐⡱⢀⢿⢿⠀⣇⢻⢿⣶⣰⢿⣏⢿⢿⢿⢿⢿⠀⠀⠀⡇ <br>
                                ⠀⡰⡠⠋⡾⢿⠀⠘⢎⣀⠈⠛⢿⢿⠛⠀⠛⠉⠙⡇⡂⠀⠻ <br>
                                ⠛⢠⠃⢞⣰⠿⡆⠀⠄⠀⠀⠒⣷⣾⣟⢿⣄⠀⠀⢻⢱⣄⠀⠙⢀ <br>
                                ⠔⠠⣩⠁⠀⠀⡇⠀⡇⢀⠀⠀⢿⠉⠃⠀⠉⠻⣶⣼⣧⢿⣦ <br>
                                ⠀⢿⣼⠀⠀⠀⢱⠀⡇⡟⠀⠈⠀⠢⣤⣄⠀⠀⠀⠀⢿⠀⠈⢷ <br>
                                <br>
                                ⠀⠀⢀⡤⠤⣠⠒⠲⡄ <br>
                                ⠀⠀⢸⠀⠀⠀⠀⢠⠇ <br>
                                ⠀⠀⠈⠓⢤⣀⡰⠋⠀⠀⠀⠀⠀⠀⢠⠖⠒⢄ <br>
                                ⠀⠀⠀⠀⠠⠉⠀⠀⠀⠀⠀⠀⠀⠀⠸⡀⠀⠈⠉⠉⡇ <br>
                                ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢳⣀⣤⠤⠖⠁ <br>
                                ⠀⠀⠀⠀⠀⡆⠒⢦⣀⠀⠀⠀⠀⠀⠀⠀⠀⠄⠰⠄ <br>
                                ⠀⠀⠀⠀⠀⠙⢦⣀⠉⠉⠉⠉⣹ <br>
                                ⠀⠀⠀⠀⠀⠀⠀⠉⠉⡽⠁⢿⠁ <br>
                                ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠳⣤⠞ <br>
                            </p>
                            <div class="articleMore"><a class="articleMoreButton" href="/news.html"
                                    target="_blank"><span>更多情报</span><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 18">
                                        <path d="M6 13 h35 l-6 -6" fill="none"></path>
                                    </svg></a></div>
                        </div>
                        <div class="char_infor">
                            <img class="drawing" src="<?php bloginfo('template_url');?>./images/Voca/Luka.png" />
                            <div class="char_name">
                                <span>Luka</span>

                                <a href="#" id="playsound2" onclick="playAudio('voice_miku')"><img
                                        src="<?php bloginfo('template_url');?>./images/audio.png"></a>
                                <audio id="voice_miku">
                                    <source src="<?php bloginfo('template_url');?>./audios/char/miku.mp3"
                                        type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="insection insection-3">
                    <div class="character_display">
                        <div class="intro">
                            <p>
                                看asoul不看珈乐，就像四大名著不看红楼梦，说明这个人文学造诣和自我修养不足，他理解不了这种内在的阳春白雪的高雅艺术，他只能看到外表的辞藻堆砌，参不透其中深奥的精神内核，他整个人的层次就卡在这里了，只能度过一个相对失败的人生

                                而看asoul不看乃琳，就像，就像嘿嘿🤤🤤乃琳🤤🤤我的乃琳🤤🤤🤤
                            </p>
                            <div class="articleMore"><a class="articleMoreButton" href="/news.html"
                                    target="_blank"><span>更多情报</span><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 18">
                                        <path d="M6 13 h35 l-6 -6" fill="none"></path>
                                    </svg></a></div>
                        </div>
                        <div class="char_infor">
                            <img class="drawing" src="<?php bloginfo('template_url');?>./images/Voca/Meiko.png" />
                            <div class="char_name">
                                <span>Meiko</span>

                                <a href="#" id="playsound3" onclick="playAudio('voice_Meiko')"><img
                                        src="<?php bloginfo('template_url');?>./images/audio.png"></a>
                                <audio id="voice_miku">
                                    <source src="<?php bloginfo('template_url');?>./audios/char/miku.mp3"
                                        type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="insection insection-4">
                    <div class="character_display">
                        <div class="intro">
                            <p>
                                枝江老赖珈乐的欠债记录:
                                2020年12月27日，抽3个皇珈骑士帮珈乐写3W字的自我介绍， 《飞鸟和蝉》完整版。
                                2021年2月15日，和贝拉的《今天你要嫁给我》。
                                2021年2日16日，珈乐说给大家跳蒙古舞。
                                2021年2月17日，《七里香》（1/20）和 《云烟成雨》（5/20） 24节气的舞（已还芒种，惊蛰，霜降，白露，春分），说要带大家了解民族乐器和民族文化。
                                2021年3月17日，《杀死那个石庄人》（改词再唱）。
                                2021年4月7日，和贝拉约了好多邓丽君的歌。
                                2021年6月2日，学b-box撩皇珈骑士。
                                2021年7月15日，和晚晚约了动次打次的舞。
                                2021年7月16日，与贝拉约了芭蕾。
                                2021年7月18日，舞力全开游戏回，和贝拉的《冬天里的一把火》
                                2021年7月28日，19.37，珈特琳欠下一首《可能否》。
                                2021年8月4日，未知乐器 《骑在银龙的背上》《桃花朵朵开》
                                2021年8月11日，19:38，琳狼组合(珈特琳)欠结尾歌一首。

                                分割线----------------------------

                                附:

                                2021年8月8日，22：12，在乃琳的生日会中，珈乐说自己过生日不会哭。
                                2021年8月11日，19:27，在与乃琳一起的双播中，珈乐说自己过生日不会哭
                                2021年8月14日，21:33，在七夕抖限直播中，珈乐说生日回不会哭。
                            </p>
                            <div class="articleMore"><a class="articleMoreButton" href="/news.html"
                                    target="_blank"><span>更多情报</span><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 18">
                                        <path d="M6 13 h35 l-6 -6" fill="none"></path>
                                    </svg></a></div>
                        </div>
                        <div class="char_infor">
                            <img class="drawing" src="<?php bloginfo('template_url');?>./images/Voca/Rin.png" />
                            <div class="char_name">
                                <span>Rin</span>

                                <a href="#" id="playsound4" onclick="playAudio('voice_miku')"><img
                                        src="<?php bloginfo('template_url');?>./images/audio.png"></a>
                                <audio id="voice_miku">
                                    <source src="<?php bloginfo('template_url');?>./audios/char/miku.mp3"
                                        type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="insection insection-5">
                    <div class="character_display">
                        <div class="intro">

                            <p>想和乃琳去100個城市來99個擁抱看個擁抱看98場日落要97次接吻拍96張照片買95朵玫瑰去94家餐館看93次大海走92條小巷打91次雨傘
                                <br>
                                還要90場牽手種89個草莓蓋88次被子遞87杯溫水熱86次剩飯看85次電影做84頓午飯切83個水果吃82次甜品喝81次暖茶
                                <br>
                                要80次的擁抱吃79遍燒烤烤78次肉串涮77次火鍋來76次海鮮吃75種小吃參74場晚宴喝73杯喜酒吃72次西餐嘗71顆糖果
                                <br>
                                給你70枚香吻盪69遍鞦韆看68次日出躺67次草地看66次星空聞65次頭髮抱64次肩胛吻63次臉頰親62次鎖骨咬61次耳朵然後
                                <br>
                                60次相擁看59場鬼片喝58杯奶茶吃57桶米花逛56個商廈打55次的士坐54次公交等53次地鐵開52次自駕站51遍路燈睡
                                <br>
                                50次懷裡去49個鬼屋看48場表演逗47隻動物坐46次飛車玩45次激流滑44次滑梯坐43次飛椅轉42次陀螺吊41次吊索然後
                                <br>
                                40個接吻捂39次肚子揉38次肩膀捶37次後背捏36次小腿暖35次腳丫摸34次腦袋撮33次肋骨撓32次手心逗31場大笑然後
                                <br>
                                30次擁吻放29個氣球釣28隻大魚玩27次飛鏢放26次風箏沖25次瀑布滑24艘小船蹦23場蹦極跳22次跳傘漂21次河流在
                                <br>
                                20次麼麼騎19次單車看18場大雪玩17遍飛艇去16次森林m探15個峽谷踏14個小溪爬13座高山看12個沙漠坐11次輪船寫
                                <br>
                                10封情書唱9首情歌堆8個雪人摘7朵野花看6場流星許5個願醉4次酒養3隻狗吵2場架愛1輩子然後回归乃0
                            </p>
                            <div class="articleMore"><a class="articleMoreButton" href="/news.html"
                                    target="_blank"><span>更多情报</span><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 18">
                                        <path d="M6 13 h35 l-6 -6" fill="none"></path>
                                    </svg></a></div>

                        </div>
                        <div class="char_infor">
                            <img class="drawing" src="<?php bloginfo('template_url');?>./images/Voca/Yurika.png" />
                            <div class="char_name">
                                <span>Yurika</span>

                                <a href="#" id="playsound5" onclick="playAudio('voice_miku')"><img
                                        src="<?php bloginfo('template_url');?>./images/audio.png"></a>
                                <audio id="voice_miku">
                                    <source src="<?php bloginfo('template_url');?>./audios/char/miku.mp3"
                                        type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="section section-4" id="section-footer">
                <!--情报页-->
                <!--依照相同的模板添加新的块-->
                <div class="sectionDisplay">
                    <P>Hello</P>

                </div>
            </div>
        </div>
    </div>
    </div>




    <script src="<?php bloginfo('template_url'); ?>./js/PageScroll.js"></script>
    <script type="text/javascript">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        $("#prospects_form").submit(function (e) {
            e.preventDefault();
        });
        //播放语音

        function playAudio(x) {
            var p = document.getElementById(x);
            p.play();
        }
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