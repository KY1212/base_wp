<?php
/*
*
* Template Name: contact_confirm.php
*
*/
?>
<?php	get_header(); ?>
  <div class="contact_confirm">
    <h3 class="headingTop">
      お問い合わせ
    </h3>
    <p class="confirm">
      以下の内容でよろしければ<span>送信</span>を押してください。
    </p>
    <div class="contents">
      <div class="infoWrap">
        <p class="info">
          お名前
        </p>
        <p class="details">
          山田太郎
        </p>
      </div>
      <div class="infoWrap">
        <p class="info">
          メールアドレス
        </p>
        <p class="details">
          example@example.com
        </p>
      </div>
      <div class="infoWrap">
        <p class="info">
          お問い合わせ内容
        </p>
        <p class="details">
          ここにお問い合わせの内容が入ってきます。
        </p>
      </div>
      <div class="btnWrap">
        <p class="fixBtn">
          <a href="contact_form" class="btn">
            修正
          </a>
        </p>
        <p class="sendBtn">
          <a href="<?php echo content_url(); ?>/contact_complete" class="btn">
            送信
          </a>
        </p>
      </div>
    </div>
  </div>
  <?php	get_footer(); ?>



