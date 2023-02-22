<?php
/*
Template Name: 加工技術
*/
get_header();
?>
<main role="main"> 
  <!-- main -->
  <section>
    <div class="container padding-bottom-md">
      <h1 class="page-header titleType1">加工技術</h1>
      <p class="margin-top-md text-center titleType2">CATEGORY</p>
      <hr>
      <div class="technique-wrapper margin-bottom-lg">
        <div class="technique-box"><a href="<?php echo esc_url( home_url( 'offset') ); ?>">
          <div class="technique-img sr-img"><img src="<?php echo get_template_directory_uri(); ?>/images/offset3.jpg" alt="offset" width="200" height="150" class="img-responsive center-block img-fluid"></div>
          <h3>オフセット</h3>
          <p>現代でこそ活きる、オールドプリンター</p>
          </a> </div>
        <div class="technique-box"><a href="<?php echo esc_url( home_url( 'panel') ); ?>">
          <div class="technique-img sr-img"> <img src="<?php echo get_template_directory_uri(); ?>/images/paneru2.jpg" alt="panel" width="200" height="150" class="img-responsive center-block img-fluid"></div>
          <h3>シルクスクリーン</h3>
          <p>進化し続ける、オールマイティプリント</p>
          </a> </div>
        <div class="technique-box"><a href="<?php echo esc_url( home_url( 'seal') ); ?>">
          <div class="technique-img sr-img"><img src="<?php echo get_template_directory_uri(); ?>/images/seal4.jpg" alt="seal" width="200" height="150" class="img-responsive center-block img-fluid"></div>
          <h3>シール</h3>
          <p>最速で最高のラベルを</p>
          </a> </div>
        <div class="technique-box"><a href="<?php echo esc_url( home_url( 'name-plate') ); ?>">
          <div class="technique-img sr-img"><img src="<?php echo get_template_directory_uri(); ?>/images/meihan3.jpg" alt="name plate" width="200" height="150" class="img-responsive center-block img-fluid"></div>
          <h3>プレス</h3>
          <p>製品を形付ける、ものづくりの最終工程</p>
          </a> </div>
      </div>
      <div>
        <h2 class="technique-title">協力会社とのパートナーシップ</h2>
        <p>印刷物以外のお問い合わせも承ります。60年で築き上げた協力会社との連携を持って対応させていただきます。<br>
          弊社は時代の流れに合わせて多種多様なご要望にお応えし、多くの協力工場と共に歩んで参りました。どこに依頼して良いか分からない案件や工程が多く購買先が細分化され過ぎている等ございましたら、是非お申し付け下さい。多様な協力工場との連携を図り弊社にて一括対応させていただきます。</p>
        <div class="row padding-bottom-md">
          <div class="col-sm-4 col-xs-6">
            <ul>
              <li class="pdf">アルマイト</li>
              <li class="pdf">エッチング</li>
              <li class="pdf">インクジェット印刷各種</li>
              <li class="pdf">カッティングシート作成</li>
              <li class="pdf">オンデマンド印刷</li>
            </ul>
          </div>
          <div class="col-sm-4 col-xs-6">
            <ul>
              <li class="pdf">各種金属加工</li>
              <li class="pdf">各種プラスチック加工</li>
              <li class="pdf">昇華転写印刷</li>
              <li class="pdf">各種アッセンブリ</li>
              <li class="pdf">タンポ印刷</li>
            </ul>
          </div>
          <div class="col-sm-4 col-xs-6">
            <ul>
              <li class="pdf">箔押し</li>
              <li class="pdf">機械彫刻</li>
              <li class="pdf">各種レーザー加工</li>
              <li class="pdf">溶剤塗装</li>
            </ul>
          </div>
        </div>
        <p>上記加工はH30.10月迄の実績を基に掲載しております。</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/flow.png" alt="フロー" width="1539" class="img-responsive center-block"/> </div>
    </div>
  </section>
  </main>
 <?php get_footer(); ?>