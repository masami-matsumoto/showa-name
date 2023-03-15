<?php get_header(); ?>
<main role="main"> 
  <!-- main -->
  <section>
    <div class="container-fluid fluid02">
      <div class="main-slider">
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row justify-content-center mb60">
        <div class="col-lg-12 text-center">
          <h1 class="text-center titleType4" data-scroll>昭和ネームプレートは<br>
            シルク印刷を中心に、<br>
            さまざまな素材、形状への<br>
            印刷を行っております。</h1>
        </div>
      </div>
      <div class="grid">
        <figure class="effect-lexi"> <img src="<?php echo get_template_directory_uri(); ?>/images/image_companylink.jpg" alt="company">
          <figcaption>
            <h2>会社概要</h2>
            <p>詳細へ</p>
            <a href="<?php echo esc_url( home_url( 'company') ); ?>#factory"> </a></figcaption>
        </figure>
        <figure class="effect-lexi"> <img src="<?php echo get_template_directory_uri(); ?>/images/image_qualitylink.jpg" alt="quality">
          <figcaption>
            <h2>取扱品目</h2>
            <p>詳細へ</p>
            <a href="<?php echo esc_url( home_url( 'item') ); ?>"> </a></figcaption>
        </figure>
        <figure class="effect-lexi"> <img src="<?php echo get_template_directory_uri(); ?>/images/image_techniquelink.jpg" alt="technique">
          <figcaption>
            <h2>加工技術</h2>
            <p>詳細へ</p>
            <a href="<?php echo esc_url( home_url( 'technique') ); ?>"> </a></figcaption>
        </figure>
        <figure class="effect-lexi"> <img src="<?php echo get_template_directory_uri(); ?>/images/image_ecolink.jpg" alt="contact">
          <figcaption>
            <h2>お問い合わせ</h2>
            <p>CONTACT</p>
            <a href="<?php echo esc_url( home_url( 'contact') ); ?>"> </a></figcaption>
        </figure>
      </div>
    </div>
  </section>
  <!-- 設備案内 -->
  <section class="factory">
    <div class="container">
      <h2 class="titleType3">設備案内</h2>
      <div class="card"> <figure class="card__image"><img src="<?php echo get_template_directory_uri(); ?>/images/top_facility.jpg" alt=""/></figure>
        <div class="card-body">
          <h5 class="titleType1">多様な設備を完備</h5>
          <p class="card-text">昭和ネームプレートでは、生産量･形態に合わせた多様な設備を導入しており、お客様のご要望に幅広くお応えできる環境を用意しています。<br>
            安全・安心な施設環境の確保のため、設備の老朽化対策として、日常の保全や中長期的に入れ替え時期を定め、さらなる万全の体制をもって、従業員一丸となり「顧客満足への挑戦」を目指します。 </p>
          <a href="<?php echo get_template_directory_uri(); ?>/factory/" class="btn btn-lg btn-danger">設備案内へ</a> </div>
      </div>
    </div>
  </section>
  <!-- background-image -->
  <div class="top-bg"></div>
  <!-- news -->
  <section class="margin-top-sm">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-left">
          <?php $term_obj = get_term_by( 'slug', 'news', 'category'); ?>
          <h2 class="titleType3"><?php echo $term_obj->name; ?></h2>
          <div class="panel-group margin-top-sm" id="ac1">
            <?php
            $args = array(
              'post_type' => 'post',
              'category_name' => 'news',
              'posts_per_page' => 5,
            );
            $news_posts = new WP_Query( $args );
            if ( $news_posts->have_posts() ):
              while ( $news_posts->have_posts() ): $news_posts->the_post();
            ?>
            <!-- 1番目のパネル -->
            <div class="panel panel-default accordion">
              <div class="panel-heading accordion_title"><span class="accordion_toggle"></span>
                <h3 class="panel-title">
                  <?php the_time('Y.m.d'); ?>
                  <?php the_title(); ?>
                </h3>
              </div>
              <div id="01dec" class="panel-collapse collapse in" style="display: none;">
                <div class="panel-body">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- button group -->
  <section class="margin-bottom-lg">
    <div class="container">
      <h2 class="titleType3">品質保証と環境への取り組み</h2>
      <div class="row">
        <div class="text-center col-xs-12 margin-top-sm col-md-6"><a href="<?php echo esc_url( home_url( 'quality') ); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/quality_button.png" alt="eco" width="334" class="img-fluid"> </a> </div>
        <div class="text-center col-xs-12 margin-top-sm col-md-6"><a href="<?php echo esc_url( home_url( 'eco') ); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/eco_button.png" alt="iso9001" width="334"> </a> </div>
      </div>
    </div>
  </section>
</main>
<script>
	jQuery(function($) {
	$(".accordion_title").click(function() {
		$(this).toggleClass("active").next().slideToggle();
		return false;
	});
	});</script>
<?php get_footer(); ?>
