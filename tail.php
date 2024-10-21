<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
 <footer>
    <div class="container division">
        <div class="left">
        <p class="company_name">(주)제이스마트솔루션</p>
        <p class="adress"><span>서울 금천구 가산디지털1로 75-15, 6층</span><span>사업자 등록 번호 : 189-86-02703</span></p>
        <p class="tel"><span>TEL : 02&#41;6265-6016</span><span>FAX : 070-4275-5084 </span></p>
        </div>
        <div class="right">
        <p class="copyright">Copyright @ J Smart Solution. ALL RIGHT RESERVED</p>
        </div>
    </div>
 </footer>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
AOS.init({
  once: true, 
  disable: function () {
    var desktop = 981;
    return window.innerWidth < desktop;
  }
});
</script>
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");