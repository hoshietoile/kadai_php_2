
<div class="contact-box">
  <p>以下の内容で送信します</p>
  <form action="" method="post">
    <dl>
      <dt>お問い合わせ種別</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['category']); ?>
        </p>
      </dd>
      <dt>会社名</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['company']); ?>
        </p>
      </dd>
      <dt>url</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['url']); ?>
        </p>
      </dd>
      <dt>お名前</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['name']); ?>
        </p>
      </dd>
      <dt>お名前（フリガナ）</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['nameKana']); ?>
        </p>
      </dd>
      <dt>メールアドレス</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['mail']); ?>
        </p>
      </dd>
      <dt>メールアドレス（確認用）</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['mail2']); ?>
        </p>
      </dd>
      <dt>電話番号</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['telNum']); ?>
        </p>
      </dd>
      <dt>弊社からのご連絡</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['contact']); ?>
        </p>
      </dd>
      <dt>弊社を知ったきっかけ</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['kikkake']); ?>
        </p>
      </dd>
      <dt>お問い合わせ内容</dt>
      <dd>
        <p class="confirmation">
          <?php showValue($_POST['request']); ?>
        </p>
      </dd>

      <?php foreach((array)$_POST as $key=>$value): ?>
        <?php if (is_array($value)): ?>
          <?php foreach ($value as $k=>$v): ?>
            <input type="hidden" name="<?php echo $key ?>[]" value="<?php echo h($v) ?>">
          <?php endforeach ?>
        <?php else: ?>
          <input type="hidden" name="<?php echo $key ?>" value="<?php echo h($value) ?>">
        <?php endif ?>
      <?php endforeach ?>

    <div class="buttons">
      <ul>
        <li>
          <input type="submit" name="btn_submit" class="btn-reset" value="戻る">
        </li>
        <li>
          <input type="submit" name="btn_submit" class="btn-confirm" value="送信する">
        </li>
      </ul>
    </div>
  </form>
</div>
