<div class="contact-box">
  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($control->getErrors())): ?>
    <p class="alert alert-danger my-2">正しく入力されていない項目があります。内容を確認のうえ、もう一度ご入力ください。</p>
  <?php endif ?>
  <form action="" method="post">
    <dl>
      <dt>
        お問い合わせ内容
        <span>必須</span>
      </dt>
      <dd class="form-group category-form">
        <?php foreach($categories as $key=>$value): ?>
          <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <input type="checkbox" name="category[]" value="<?php echo $value ?>" id="check_category_<?php echo $key ?>" <?php if(in_array($value, $_POST['category'])) { echo 'checked'; } ?>>
            <label for="check_category_<?php echo $key; ?>" class="check_category_label text-center mx-3"><?php echo $value ?></label>
          <?php else: ?>
            <input type="checkbox" name="category[]" value="<?php echo $value ?>" id="check_category_<?php echo $key ?>">
            <label for="check_category_<?php echo $key ?>" class="check_category_label text-center mx-3"><?php echo $value ?></label>
          <?php endif ?>
        <?php endforeach ?>
      </dd>

      <dt>会社名</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="text" name="company" id="company" class="form-control bg-light" maxlength="50" value="<?php if (!empty($_POST['company'])) { h($_POST['company']); } ?>" placeholder="株式会社 カイシャ">
        <?php else: ?>
          <input type="text" name="company" id="company" class="form-control bg-light" maxlength="50" value="" placeholder="株式会社 カイシャ">
        <?php endif ?>
      </dd>

      <dt>URL</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="url" name="url" id="url" class="form-control <?php echo in_array("error_2", $control->getErrors()) ? "alert alert-danger" : "bg-light" ; ?>" maxlength="50" value="<?php if (!empty($_POST['url'])) { h($_POST['url']); } ?>" placeholder="http://kaisya.com.jp">
        <?php else: ?>
          <input type="url" name="url" id="url" class="form-control bg-light" maxlength="50" value="" placeholder="http://kaisya.com.jp">
        <?php endif ?>
      </dd>

      <dt>お名前</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="text" name="name" id="name" class="form-control bg-light" maxlength="50" value="<?php if (!empty($_POST['name'])) { h($_POST['name']); } ?>" placeholder="会社 たろう" required>
        <?php else: ?>
          <input type="text" name="name" id="name" class="form-control bg-light" maxlength="50" value="" placeholder="会社 たろう" required>
        <?php endif ?>
      </dd>

      <dt>お名前（フリガナ）</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="text" name="nameKana" id="nameKana" class="form-control <?php echo in_array("error_4", $control->getErrors()) ? "alert alert-danger" : "bg-light" ; ?>" maxlength="50" value="<?php if (!empty($_POST['nameKana'])) { h($_POST['nameKana']); } ?>" placeholder="カイシャ タロウ" required>
        <?php else: ?>
          <input type="text" name="nameKana" id="nameKana" class="form-control bg-light" maxlength="50" value="" placeholder="カイシャ タロウ" required>
        <?php endif ?>
      </dd>

      <dt>メールアドレス</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="email" name="mail" id="mail" class="form-control bg-light" maxlength="50" value="<?php if (!empty($_POST['mail'])) { h($_POST['mail']); } ?>" placeholder="kaisya_tarou@gmail.com" required>
        <?php else: ?>
          <input type="email" name="mail" id="mail" class="form-control bg-light" maxlength="50" value="" placeholder="kaisya_tarou@gmail.com" required>
        <?php endif ?>
      </dd>

      <dt>メールアドレス（確認用）</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="email" name="mail2" id="mail2" class="form-control <?php echo in_array("error_5", $control->getErrors()) ? "alert alert-danger" : "bg-light" ; ?>" maxlength="50" value="<?php if (!empty($_POST['mail2'])) { h($_POST['mail2']); } ?>" placeholder="kaisya_tarou@gmail.com" required>
        <?php else: ?>
          <input type="email" name="mail2" id="mail2" class="form-control bg-light" maxlength="50" value="" placeholder="kaisya_tarou@gmail.com" required>
        <?php endif ?>
      </dd>

      <dt>電話番号</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <input type="tel" name="telNum" id="telNum" class="form-control bg-light" maxlength="50" value="<?php if (!empty($_POST['telNum'])) { h($_POST['telNum']); } ?>" placeholder="000-0000-0000">
        <?php else: ?>
          <input type="tel" name="telNum" id="telNum" class="form-control bg-light" maxlength="50" value="" placeholder="000-0000-0000">
        <?php endif ?>
      </dd>

      <dt>弊社からのご連絡</dt>
      <dd class="form-check bg-light">
        <?php foreach($contacts as $key=>$value): ?>
          <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="contact[]" value="<?php echo $value ?>" id="check_contact_<?php echo $key ?>" class="custom-control-input" <?php if(in_array($value, $_POST['contact'])) { echo 'checked'; } ?>>
              <label for="check_contact_<?php echo $key ?>" class="check_contact_label custom-control-label"><?php echo $value ?></label>
            </div>
          <?php else: ?>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="contact[]" value="<?php echo $value ?>" class="custom-control-input" id="check_contact_<?php echo $key ?>">
              <label for="check_contact_<?php echo $key ?>" class="check_contact_label custom-control-label"><?php echo $value ?></label>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </dd>

      <dt>弊社を知ったきっかけ</dt>
      <dd class="form-check bg-light">
        <?php foreach($kikkakes as $key=>$value): ?>
          <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="kikkake[]" value="<?php echo $value ?>" id="check_kikkake_<?php echo $key ?>" class="custom-control-input" <?php if(in_array($value, $_POST['kikkake'])) { echo 'checked'; } ?>>
              <label for="check_kikkake_<?php echo $key ?>" class="check_kikkake_label custom-control-label"><?php echo $value ?></label>
            </div>
          <?php else: ?>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="kikkake[]" value="<?php echo $value ?>" class="custom-control-input" id="check_kikkake_<?php echo $key ?>">
              <label for="check_kikkake_<?php echo $key ?>" class="check_kikkake_label custom-control-label"><?php echo $value ?></label>
            </div>
          <?php endif ?>
        <?php endforeach ?>
      </dd>

      <dt>お問い合わせ内容</dt>
      <dd class="form-group">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <textarea name="request" id="request" class="form-control <?php echo in_array("error_7", $control->getErrors()) ? "alert alert-danger" : "bg-light" ; ?>" cols="40" rows="4"><?php h($_POST['request']) ?></textarea>
        <?php else: ?>
          <textarea name="request" id="request" class="form-control bg-light" cols="40" rows="4"></textarea>
        <?php endif ?>
      </dd>

      <p class="mb15px">当社の<a href="#">「プライバシーポリシー」</a>に同意の上ご利用ください。同意していただける場合には下の「同意する」をクリックしてください。
      </p>
      <dd class="form-ckeck form-privacy">
        <div class="privacy-wrap">
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
          <?php foreach ($privacy as $key=>$value): ?>
            <div class="custom-radio">
              <input type="radio" name="radio_privacy" class="custom-control-input" id="radio_<?php echo $key ?>" value="<?php echo $key ?>" <?php if ($_POST['radio_privacy'] == $key) { echo 'checked'; }?>>
              <label for="radio_<?php echo $key ?>" class="custom-control-label"><?php echo $value ?></label>
            </div>
          <?php endforeach ?>
        <?php else: ?>
          <?php foreach ($privacy as $key=>$value): ?>
            <div class="custom-radio">
              <input type="radio" name="radio_privacy" class="custom-control-input" id="radio_<?php echo $key ?>" value="<?php echo $key ?>">
              <label for="radio_<?php echo $key ?>" class="custom-control-label"><?php echo $value ?></label>
            </div>
          <?php endforeach ?>
        <?php endif ?>
        </div>
      </dd>
      <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && in_array("error_8", $control->getErrors())): ?>
        <p class="text-danger text-center">「同意する」にチェックされていません</p>
      <?php endif ?>

    </dl>
    <div class="buttons">
      <ul>
        <li>
          <input type="submit" name="btn_confirm" class="btn-reset" value="リセット">
        </li>
        <li>
          <input type="submit" name="btn_confirm" class="btn-confirm" value="確認画面へ">
        </li>
      </ul>
    </div>
  </form>
</div>
