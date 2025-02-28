<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<style>
#menuOffcanvas .offcanvas-title .btn-menu {
  display: none;
}
</style>
<div class="offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas" aria-labelledby="menuOffcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title px-2" id="menuOffcanvasLabel">
      <?php echo $offcanvas_buttons ?>
    </h5>
    <button type="button" class="btn-close nofocus" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body pt-0">

    <div class="na-menu">
      <div class="nav nav-pills nav-vertical">

  <?php
if (!empty($config['cf_9'])) {
    ?>
        <div class="nav-item">
          <a class="nav-link" href="<?php echo $config['cf_9'];?>" data-placement="left" target="_blank">
            <i class="bi-youtube nav-icon"></i>
            <span class="nav-link-title">
                [♥] 다모앙 라방 (가칭 : 사랑방)
            </span>
          </a>
        </div>
    <?php
}
?>
        <div class="nav-item">
          <a class="nav-link" href="/bbs/noti.php" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [A] 알림보기
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/notice" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [K] 공지사항
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/free" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [F] 자유게시판
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/qa" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [Q] 질문과 답변
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/hello" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [I] 가입인사
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/new" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [N] 새소게(새소식)
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/tutorial" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [T] 사용기
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="https://damoang.net/lecture" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [T] 강좌
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="https://damoang.net/pds" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [P] 자료실
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/economy" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [E] 알뜰구매
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/gallery" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [G] 갤러리
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link dropdown-toggle collapsed collapsed" href="#sidebar-sub-s8" role="button"
            data-bs-toggle="collapse" data-bs-target="#sidebar-sub-s8" aria-expanded="false"
            aria-controls="sidebar-sub-s8">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title" onclick="na_href('/bbs/group.php?gr_id=group','_self');">
              [S] 소모임
            </span>
          </a>
          <div id="sidebar-sub-s8" class="nav-collapse collapse" data-bs-parent="#sidebar-site-menu">
            <a class="nav-link" href="/ai" target="_self">
              AI당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/android" target="_self">
              안드로메당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/applewatch" target="_self">
              애플워치당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/baseball" target="_self">
              야구당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/bicycle" target="_self">
              자전거당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/bread" target="_self">
             빵친당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/camping" target="_self">
              캠핑간당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/car" target="_self">
              굴러간당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/cat" target="_self">
              냐옹이당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/coffee" target="_self">
              클다방 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/console" target="_self">
              콘솔한당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/cooking" target="_self">
              요리당 </a>
            <a class="nav-link" href="/cryptocurrency" target="_self">
              가상화폐당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/daegu" target="_self">
              대구당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/development" target="_self">
              개발한당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/diablo" target="_self">
              디아블로당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/dongsup" target="_self">
              동숲한당 </a>
            <a class="nav-link" href="/drawing" target="_self">
              그림그린당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/fishing" target="_self">
              낙시당 </a>
            <a class="nav-link" href="/fly" target="_self">
              날아간당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/formula" target="_self">
              포물러당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/game" target="_self">
              게임한당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/golf" target="_self">
              골프당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/gym" target="_self">
              땀흘린당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/homebuilding" target="_self">
              집짓는당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/iphone" target="_self">
              아이포니앙 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/japanlive" target="_self">
              일본산당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/keyboard" target="_self">
              키보드당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/lego" target="_self">
              레고당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/linux" target="_self">
              리눅서당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/MaClien" target="_self">
              MaClien <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/mbike" target="_self">
              이륜차당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/military" target="_self">
              밀리터리당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/movie" target="_self">
              영화본당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>

            <a class="nav-link" href="/photo" target="_self">
              찰칵찍당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/photoshop" target="_self">
              포토샵당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/nas" target="_self">
              나스당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/ott" target="_self">
              OTT당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="https://damoang.net/overseas" target="_self">
              바다건너당 <span class="small">

                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/parenting" target="_self">
              육아당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/playmobil" target="_self">
              플레이모빌당 </a>
            <a class="nav-link" href="/youtube" target="_self">
              Youtube 당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/wine" target="_self">
              와인마신당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/whiskey" target="_self">
              위스키당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/pathofexile" target="_self">
              패스오브엑자일당 </a>
            <a class="nav-link" href="/running" target="_self">
              달린당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/server" target="_self">
              서버당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/watches" target="_self">
              시계당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/seniorcenter" target="_self">
              경로당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/vr" target="_self">
              VR당 </a>
            <a class="nav-link" href="/soccer" target="_self">
              축구당 </a>
            <a class="nav-link" href="/soccerline" target="_self">
              싸줄한당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/socialgame" target="_self">
              소셜게임한당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/stationery" target="_self">
              필구도구당 </a>
            <a class="nav-link" href="/stock" target="_self">
              주식한당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/swim" target="_self">
              퐁당퐁당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
            <a class="nav-link" href="/tabletennis" target="_self">
              탁구당 <span class="small">
                <b class="badge bg-primary rounded-pill fw-normal"></b>
              </span>
            </a>
          </div>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/governance" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [V] 거버넌스
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/bbs/group.php?gr_id=community" data-placement="left"
            target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [C] 커뮤니티
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/bug" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [B] 유지관리
            </span>
          </a>
        </div>
        <div class="nav-item">
          <a class="nav-link" href="/truthroom" data-placement="left" target="_self">
            <i class="bi-clipboard nav-icon"></i>
            <span class="nav-link-title">
              [J] 진실의 방으로
            </span>
          </a>
        </div>
      </div>

      <div class="dropdown-header">
        Miscellaneous
      </div>

      <div id="offcanvas-misc-menu" class="mb-3">
        <?php
					// 현재접속자

					$iRow = array();
					$iRow[] = array(G5_BBS_DIR.'-page-faq', 'bi-question-circle', 'FAQ', G5_BBS_URL.'/faq.php');
					$iRow[] = array(G5_BBS_DIR.'-page-new', 'bi-pencil', '새글모음', G5_BBS_URL.'/new.php');
					$iRow[] = array(G5_BBS_DIR.'-page-tag', 'bi-tags', '태그모음', G5_BBS_URL.'/tag.php');
					$iRow[] = array(G5_BBS_DIR.'-page-search', 'bi-search', '게시물검색', G5_BBS_URL.'/search.php');

					for ($i=0; $i < count($iRow); $i++) { 
				?>
        <div class="nav-item">
          <a class="nav-link<?php echo ($page_id == $iRow[$i][0]) ? ' active' : ''; ?>"
            href="<?php echo $iRow[$i][3] ?>" data-placement="left">
            <i class="<?php echo $iRow[$i][1] ?> nav-icon"></i>
            <span class="nav-link-title"><?php echo $iRow[$i][2] ?></span>
          </a>
        </div>
        <?php } ?>
      </div>

      <div class="dropdown-header">
        About us
      </div>

      <div id="offcanvas-misc-menu" class="mb-3">
        <?php
						$iRow = array();
						$iRow[] = array(G5_BBS_DIR.'-content-company', 'bi-balloon-heart', '사이트 소개', get_pretty_url('content', 'company'));
						$iRow[] = array(G5_BBS_DIR.'-content-provision', 'bi-check2-square', '서비스 이용약관', get_pretty_url('content', 'provision'));
						$iRow[] = array(G5_BBS_DIR.'-content-privacy', 'bi-person-lock', '개인정보 처리방침', get_pretty_url('content', 'privacy'));

						for ($i=0; $i < count($iRow); $i++) { 
					?>
        <div class="nav-item">
          <a class="nav-link<?php echo ($page_id == $iRow[$i][0]) ? ' active' : ''; ?>"
            href="<?php echo $iRow[$i][3] ?>" data-placement="left">
            <i class="<?php echo $iRow[$i][1] ?> nav-icon"></i>
            <span class="nav-link-title"><?php echo $iRow[$i][2] ?></span>
          </a>
        </div>
        <?php } ?>

        <?php if (IS_YC) { ?>
        <div class="nav-item">
          <a class="nav-link" href="<?php echo (IS_SHOP) ? G5_URL : G5_SHOP_URL; ?>" data-placement="left">
            <i class="bi-door-open nav-icon"></i>
            <span class="nav-link-title">
              <?php if(IS_SHOP) { ?>
              <?php echo $config['cf_title'] ?>
              <?php } else { ?>
              <?php echo (isset($nariya['seo_shop_title']) && $nariya['seo_shop_title']) ? $nariya['seo_shop_title'] : '쇼핑몰'; ?>
              <?php } ?>
            </span>
          </a>
        </div>
        <?php } ?>

        <div class="nav-item">
          <a class="nav-link" href="<?php echo get_device_change_url() ?>" data-placement="left">
            <i class="<?php echo (G5_IS_MOBILE) ? 'bi-pc-display' : 'bi-tablet'; ?> nav-icon"></i>
            <span class="nav-link-title"><?php echo (G5_IS_MOBILE) ? 'PC' : '모바일'; ?> 버전</span>
          </a>
        </div>

      </div>
    </div>
  </div><!-- end .na-menu -->


</div>
</div>