
  <section class="contact" id="contact">


<div class="container text-center">

  <div class="contact_headeing">
    <h5>Contact</h5>
    <h1>お問い合わせ</h1>
    <div class="headding-underline_W"></div>

  </div>
  <div class="row">
    <div class="col-12">




      <div class="input_area container">
        <form action="" method="POST" novalidate>

          <div class="form-group">
            <div class="row">
              <div class="col-lg-4">
                <label for="inputName">お名前<br>(必須)</label>
              </div>

              <div class="col-lg-8">
                <input type="text" name="name" id="inputName" class="form-control" required  value="<?php echo htmlspecialchars($post['name']); ?>">
                <?php if ($error['name'] === 'blank') : ?>
                  <p class="error_msg">※お名前をご記入ください</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-lg-4">
                <label for="inputEmail">メールアドレス (必須)</label>
              </div>

              <div class="col-lg-8">
                <input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo htmlspecialchars($post['email']); ?> " required>
                <?php if ($error['email'] === 'blank') : ?>
                  <p class="error_msg">※メールアドレスをご記入ください</p>
                <?php endif; ?>
                <?php if ($error['email'] === 'email') : ?>
                  <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-lg-4">
                <label for="inputContent">お問い合わせ内容 (必須)</label>
              </div>

              <div class="col-lg-8">
                <textarea name="contact" id="inputContent" rows="10" class="form-control" maxlength='500' required><?php echo htmlspecialchars($post['contact']); ?></textarea>
                <?php if ($error['contact'] === 'blank') : ?>
                  <p class="error_msg">※お問い合わせ内容をご記入ください</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 offset-6">
              <button class="btn_w" type="submit">確認画面へ</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>