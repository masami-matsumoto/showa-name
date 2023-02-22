<?php
/*
Template Name: 取扱品目
*/
get_header();
?>
<main role="main"> 
  <!-- main -->
  <div class="main-image">
    <div class="main-bg">
      <div class="container">
        <h2>HANDLING ITEM<span>取扱品目</span></h2>
      </div>
    </div>
  </div>
  <section id="manufacturing-table">
    <div class="container padding-top-lg padding-bottom-lg">
      <table>
        <tr class="table-title">
          <th class="table-title">分類</th>
          <th class="table-title">材料名</th>
          <th class="table-title">用途実績</th>
        </tr>
        <tr>
          <td rowspan="5" class="table-itme border-white"><span>金属</span></td>
          <td>アルミニウム </td>
          <td rowspan="5" class="border-solid">銘板 / 板金 他</td>
        </tr>
        <tr>
          <td>ステンレス </td>
        </tr>
        <tr>
          <td>真鍮 </td>
        </tr>
        <tr>
          <td>鉄 </td>
        </tr>
        <tr class="border-solid">
          <td>ブリキ </td>
        </tr>
        <tr>
          <td rowspan="6" class="table-itme border-white"><span>樹脂</span></td>
          <td>ＰＥＴ(ペット) </td>
          <td rowspan="3">銘板 / 加工品 他</td>
        </tr>
        <tr>
          <td>ＰＣ(ポリカーボ) </td>
        </tr>
        <tr>
          <td>ＰＶＣ(塩化ビニール) </td>
        </tr>
        <tr>
          <td>ゴム類 </td>
          <td>スペーサー / 滑り止め 他</td>
        </tr>
        <tr>
          <td>発泡材類 </td>
          <td>スペーサー / 緩衝材 他</td>
        </tr>
        <tr>
          <td class="border-solid">各種エンプラ </td>
          <td class="border-solid">樹脂成型品 他</td>
        </tr>
        <tr>
          <td rowspan="2" class="table-itme"><span>紙材</span></td>
          <td>紙(上質紙、コート紙、アート紙 等) </td>
          <td>製本 / 包装紙 他 </td>
        </tr>
        <tr>
          <td>板紙 </td>
          <td>段ボール / 化粧箱 / 什器 他 </td>
        </tr>
      </table>
      <p class="margin-top-sm">各種加工、手配承っております。<br>
        詳細は<a href="<?php echo esc_url( home_url( 'technique') ); ?>">加工技術</a>のページをご覧下さい。 </p>
    </div>
  </section>
  <!-- main -->
  <section>
    <div class="container"> </div>
  </section>
</main>
<?php get_footer(); ?>
