<?php
/*
*
* Template Name: contact_form.php
*
*/
?>
<?php	get_header(); ?>
  <main class="contact_form">
    <h3 class="headingTop">
      お問い合わせ
    </h3>
    <p>
      当ホームページに関するお問い合わせやご要望がある場合こちらからご連絡ください。
    </p>
    <div class="contents">
      <div class="formWrap">
        <form>
          <div class="item">
            <div class="label">お名前<span>(必須)</span></div>
            <input class="inputs" type="text" name="name">
          </div>
          <div class="item">
            <div class="label">メールアドレス<span>(必須)</span></div>
            <input class="inputs" type="email" name="email">
          </div>
          <div class="item">
            <div class="label">お問い合わせ内容<span>(必須)</span></div>
            <textarea class="inputs"></textarea>
          </div>
          <div class="submit">
            <input type="submit" formaction="<?php echo content_url(); ?>/contact_confirm" value="確認" class="btn">
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php	get_footer(); ?>



