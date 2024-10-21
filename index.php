<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<div class="main_wrap">
    <div class="sec01 banner">
        <article class="container" data-aos="fade-up">
            <p class="main_banner_txt">J Smart Solution</p>
            <a href="" class="contact_link btn">문의하기</a>
        </article>
    </div>
    <div class="division_sec division_sec1"></div>
    <div class="sec02">
        <article class="container">
            <p class="main_big_tit" data-aos="fade-up" data-aos-delay="1000">WHY "AToZ" SOLUTION</p>
            <div class="main_sec2_cont">
                <ul class="division">
                    <li data-aos="fade-up" data-aos-delay="500">
                        <div class="img_wrap">
                            <img src="<?echo G5_THEME_IMG_URL?>/main/main_sec02_icon1.png" alt="">
                        </div>
                        <p>
                        생산성 향상 및 원가 절감을 위해<br>맞춤형 IT Solution 제공
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="700">
                        <div class="img_wrap">
                            <img src="<?echo G5_THEME_IMG_URL?>/main/main_sec02_icon2.png" alt="">
                        </div>
                        <p>
                        안정적인 시스템 운영 및 보안을 위한<br>서버 Solution 제공
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="900">
                        <div class="img_wrap">
                            <img src="<?echo G5_THEME_IMG_URL?>/main/main_sec02_icon3.png" alt="">
                        </div>
                        <p>
                        생산 현장의 유효한 정보에 대한<br>실시간 관리 Solution 제공
                        </p>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="1100">
                        <div class="img_wrap">
                            <img src="<?echo G5_THEME_IMG_URL?>/main/main_sec02_icon4.png" alt="">
                        </div>
                        <p>
                        다양한 업종에 구축된 사례 제공
                        </p>
                    </li>
                </ul>
            </div>
        </article>
    </div>
    <div class="sec03">
        <article class="container">
            <div class="division">
                <div class="img_wrap" data-aos="fade-right" data-aos-delay="1100">
                    <img src="<?echo G5_THEME_IMG_URL?>/main/main_sec_img.png" alt="">
                </div>
                <div class="txt_wrap" data-aos="fade-left" data-aos-delay="1100">
                    <p class="sec_tit">J SMART SOLUTION</p>
                    <p class="sec_txt">
                        실질적인 고객가치 증대를 위해<br>
                        하드웨어와 IT Solution을 결합하여<br>
                        최상의 서비스를 제공합니다.
                    </p>
                </div>
            </div>
            <div class="product_info" data-aos="fade-up">
                <ul>
                    <li>
                        <p><span>AToZ 디지털트윈/메티버스</span>디지털 트윈 Battery 제조공장 3D 관제, 제조 고무 약품 배합공정 메타버스, 철도 모의 관제 훈련 시뮬레이터</p>
                    </li>
                    <li>
                        <p><span>AToZ ERP / MES</span>MES, 스마트 기기 활용, 기타 업무용 맞춤 솔루션</p>
                    </li>
                    <li>
                        <p><span>AToZ IOT / 모니터링 시스템</span>설비관리시스템, 데이터 수집 및 제어 아키텍처, 현장에 맞는 네트워크 구성</p>
                    </li>
                    <li>
                        <p><span>AToZ AI</span>바리스트 유형 학습을 통한 CAD 도면 데이터 수집, APS, 설비 IOT 센서 데이터 수집 및 AI기반 시계열 분석 예측 시스템</p>
                    </li>
                </ul>
            </div>
        </article>
    </div>
    <!-- <div class="division_sec"></div> -->
    <div class="sec04">
        <article class="container">
            <div class="">
                <div class="txt_wrap">
                    <p class="sec_tit" data-aos="fade-up">(주)제이스마트솔루션의 비전</p>
                    <p class="sec_txt" data-aos="fade-up">
                    “프로세스 분석 & IT 기술 융합으로<br>
                    새로운 가치 창출을 지향합니다.
                    </p>
                    <p class="sec_small_txt" data-aos="fade-up">
                    (주)제이스마트솔루션(J Smart Solution)은 지난 10년간의 경험을 바탕으로<br>
                    분석한 업종별 최적의 프로세스를 프로그램화하여 도입기업에게 안정적인<br>
                    실적 분석 및 경영을 가능하게 합니다.
                    </p>
                </div>
            </div>
        </article>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');