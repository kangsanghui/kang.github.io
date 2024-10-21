<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<!-- <div id="hd">
    
        <ul class="hd_login">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>

        </ul>
</div> -->
<header>
    <div class="hd_wrap division pc_view">
        <div class="logo_wrap">
            <a href="<?echo G5_URL?>" class="logo"><img src="<?echo G5_THEME_IMG_URL?>/main/logo.png" alt=""></a>
        </div>
        <nav class="menu_wrap">
            <ul class="depth1_list division">
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/company" class="depth1">회사소개</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/erp" class="depth1">제품소개</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/client" class="depth1">클라이언트</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/notice" class="depth1">고객센터</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="depth2_list_wrap division">            
        <div class="division">
            <ul class="depth2_list company">
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/company" class="depth2">회사소개</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/organization" class="depth2">조직도</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/history" class="depth2">주요연혁</a>
                </li>
            </ul>
            <ul class="depth2_list product">
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/erp" class="depth2">AToZ ERP / MES</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/iot" class="depth2">AToZ IOT / 모니터링 시스템</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/meta" class="depth2">AToZ 디지털트윈/메타버스</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/sub/ai" class="depth2">AToZ AI</a>
                </li>
            </ul>
            <ul class="depth2_list client"></ul>
            <ul class="depth2_list service_center">
                <li>
                    <a href="<?G5_THEME_PATH?>/notice" class="depth2">공지사항</a>
                </li>
                <li>
                    <a href="<?G5_THEME_PATH?>/contact" class="depth2">문의하기</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="hd_wrap m_view">
        <div class="logo_wrap">
            <a href=""><img src="<?echo G5_THEME_IMG_URL?>/main/logo.png" alt=""></a>
        </div>
        <div class="m_menu_wrap">
            <div class="menu_btn_wrap open">
                <p class="menu_btn "></p>
            </div>
            <nav class="menu_wrap">
                <ul class="depth1_list">
                    <li>
                        <a href="javascript:void(0)" class="depth1">회사소개</a>
                        <ul class="depth2_list">
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/company" class="depth2">회사소개</a>
                            </li>
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/organization" class="depth2">조직도</a>
                            </li>
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/history" class="depth2">주요연혁</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="depth1">제품소개</a>
                        <ul class="depth2_list">
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/erp" class="depth2">AToZ ERP / MES</a>
                            </li>
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/iot" class="depth2">AToZ IOT / 모니터링 시스템</a>
                            </li>
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/meta" class="depth2">AToZ 디지털트윈/메타버스</a>
                            </li>
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/ai" class="depth2">AToZ AI</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?G5_THEME_PATH?>/sub/client" class="depth1">클라이언트</a>
                        <ul class="depth2_list">
                            <li>
                                <a href="<?G5_THEME_PATH?>/sub/client" class="depth2">클라이언트</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="depth1">고객센터</a>
                        <ul class="depth2_list">
                            <li>
                                <a href="<?G5_THEME_PATH?>/notice" class="depth2">공지사항</a>
                            </li>
                            <li>
                                <a href="<?G5_THEME_PATH?>/contact" class="depth2">문의하기</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- } 상단 끝 -->
  <script>
    $(document).ready(function () {
        $('.depth2_list_wrap').hide();
        $('header .menu_wrap .depth1').mouseenter(function () {
            $('.depth2_list_wrap').slideDown();
        });
        $('header').mouseleave(function () {
            $('.depth2_list_wrap').slideUp();
        });

        $('.m_menu_wrap .menu_btn_wrap').click(function () {
            $(this).toggleClass('open');
            $(this).toggleClass('close');
            $('.m_menu_wrap .menu_wrap').toggleClass('open');
        });
       /*  $('.m_menu_wrap .menu_btn_wrap').click(function () {
            $(this).toggleClass('close');
            $(this).toggleClass('open');
            $('.m_menu_wrap .menu_wrap').toggleClass('open');
        }); */
    });
  </script>
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><?php }