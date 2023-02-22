<?php
/*
Template Name: お問い合わせ
*/
get_header();
?>
<main role="main"> 
  <!-- main -->
  <section class="padding-top-lg padding-bottom-md">
    <div class="container padding-top-lg"><img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" alt="問い合わせ" width="900" height="337" class="img-responsive center-block"/> </div>
  </section>
  <hr>
  <section class="l-content-fixed" id="contactForm">
    <p class="form-text">ご質問やお見積りの依頼などありましたら<br>
      下記のフォームに記載して送信ボタンを押してください。<br>
      後ほど弊社よりご連絡をさせていただきます。</p>
    <div class="section-form form-container">
      <form class="form-simple" action="confirm.php" method="post" name="form" onsubmit="return validate()">
        <div class="form-group">
          <label for="text">会社名　<span class="badge badge-danger">必須</span> </label>
          <input type="text" class="form-control" id="company" name="company" required>
        </div>
        <div class="form-group">
          <label for="text">部署</label>
          <input type="text" class="form-control" id="department" name="department">
        </div>
        <div class="form-group">
          <label for="text">名前　<span class="badge badge-danger">必須</span></label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="text">フリガナ　<span class="badge badge-danger">必須</span></label>
          <input type="text" class="form-control" id="kana" name="kana" required>
        </div>
        <div class="form-group">
          <label for="text">住所　<span class="badge badge-danger">必須</span> </label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="text">電話番号　<span class="badge badge-danger">必須</span> </label>
          <input type="text" class="form-control" id="tel" name="tel" required>
        </div>
        <div class="form-group">
          <label for="text">メールアドレス　<span class="badge badge-danger">必須</span> </label>
          <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="select">お問い合わせ種類　(下記項目よりお選びください)　<span class="badge badge-danger">必須</span></label>
          <select id="select" class="form-control" name="select" required>
            <option>取扱品目について </option>
            <option>加工技術について </option>
            <option>品質・環境活動について </option>
            <option>その他のお問い合わせ </option>
          </select>
        </div>
        <span class="badge badge-danger">必須</span>
        <div class="custom-control custom-radio">
          <input type="radio" id="rb1" name="radio" class="custom-control-input" value="電話" required>
          <label class="custom-control-label" for="rb1">電話での返信希望</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="rb2" name="radio" class="custom-control-input" value="メール" required>
          <label class="custom-control-label" for="rb2">メールでの返信希望</label>
        </div>
        <div class="form-group">
          <label for="area">お問い合わせ内容　<span class="badge badge-danger">必須</span> </label>
          <textarea id="area" class="form-control" name="area" rows="6" required></textarea>
        </div>
        <div class="policy-area">
          <h3>個人情報の取扱い内容について</h3>
          <ol class="policy">
            <li>
              <h3>1.利用目的</h3>
              <p>メール、電話等で取得した個人情報は、お問い合わせに回答するため、又は業務遂行のために利用させていただきます。
                また、お問い合わせにご回答するため、社名、氏名、電話番号、ホームページアドレス等を確認させていただきます。
                尚、個人情報の開示・提供はお客様の任意となりますが、必要事項について確認できない場合、
                お客様のご要望にお応えできない場合がありますのでご了承ください。</p>
            </li>
            <li>
              <h3>2.第三者への非開示</h3>
              当社は以下の場合を除き、お客様の承諾なく、個人情報を第三者に開示することはありません。
              <ul class="privacy-list">
                <li>・法令に基づく場合。</li>
                <li>・人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                <li>・公衆衛生の向上又は児童の健全な育成推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                <li>・国の機関若しくは地方公共団体又はその受託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、
                  本人の同意を得ることによって当該事務の遂行に支障を及ぼすおそれがあるとき。</li>
              </ul>
            </li>
            <li>
              <h3>3.個人情報の委託</h3>
              <p>当社は、情報処理やメンテナンス等、業務上の必要性により、お客様の個人情報を外部に委託する場合があります。
                委託先については、個人情報取扱いの安全性確認、秘密保持契約の締結等、適切な管理を行っています。</p>
            </li>
            <li>
              <h3>4.本人が容易に認識できない方法による個人情報の取得</h3>
              <p>当社は、クッキー等を用いるなどをして、本人が容易に認識できない方法による個人情報の取得は行っておりません。</p>
            </li>
            <li>
              <h3>5.個人情報の保有期間</h3>
              <p>取得した個人情報の弊社での保存期間は、お問い合わせに対する回答が終了した後、2年間保存し、その後安全に破棄させていただきます。</p>
            </li>
            <li>
              <h3>6.個人情報に関するお問合せ</h3>
              <p>お客様の個人情報の取扱いに関するお問い合わせは、個人情報保護管理責任者までお申し出ください。</p>
            </li>
            <p class="address">昭和ネームプレート株式会社　代表取締役社長　瀬田　大吉<br>
              蒲生工場:〒343-0838　埼玉県越谷市蒲生3882-1<br>
              TEL　(048) 988-7611 (代表)　FAX　(048) 986-6261<br>
              受付時間　9：00～17：00（土・日・祝日・年末年始は除く）</p>
          </ol>
        </div>
        <p>個人情報の取扱いにご同意いただけましたらチェックを入れてください。<span class="required">必須</span></p>
        <p class="form-checkbox">
          <label>内容を確認したので同意する。
            <input type="checkbox" name="agree" required>
          </label>
        </p>
        <div class="form-btn-holder">
          <div class="form-btn-holder-submit">
            <button type="submit" class="btn submit-btn btn-primary">確認する</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
<?php get_footer(); ?>
