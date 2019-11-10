<?php
require_once('Form.php');
require_once('../database.php');

class FormController extends Form {
  private $page_flg = 0;
  private $errors   = [];

  public function __construct() {
    $this->page_flg = 0;
    $this->errors   = [];
  }

  public function getPageFlg() {
    return $this->page_flg;
  }

  public function setPageFlg($count) {
    $this->page_flg = $count;
  }

  public function getErrors() {
    return $this->errors;
  }

  public function validate($request) {
    if (empty($request['category'])) {
      $this->errors[] = "error_1";
    }
    if (!empty($request['url']) && !preg_match("/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i", $request['url'])) {
      $this->errors[] = "error_2";
    }
    if (empty($request['name'])) {
      $this->errors[] = "error_3";
    }
    if (!preg_match("/^[ァ-ヾ]+$/u", $request['nameKana']) || empty($request['nameKana'])) {
      $this->errors[] = "error_4";
    }
    if ($request['mail'] != $request['mail2']) {
      $this->errors[] = "error_5";
    }
    if (empty($request['contact'])) {
      $this->errors[] = "error_6";
    }
    if (empty($request['request'])) {
      $this->errors[] = "error_7";
    }
    if (empty($request['radio_privacy']) || $request['radio_privacy'] == 0) {
      $this->errors[] = "error_8";
    }
  }

  public function setPage($request) {
    if (!empty($request['btn_submit'])) {
      $this->submit($request);
    } elseif ($request['btn_confirm']) {
      $this->confirm($request);
    } else {
      $this->page_flg = 0;
    }
  }

  public function confirm($request) {
    $this->validate($request);
    if ($request['btn_confirm'] == "確認画面へ" && $this->errors == []) {
      $this->page_flg = 1;
    } elseif ($request['btn_confirm'] == "リセット") {
      $this->page_flg = 0;
      $_POST = [];
    } else {
      $this->page_flg = 0;
    }
  }

  public function submit($request) {
    if ($request['btn_submit'] == "送信する") {
      $this->page_flg = 2;
      $post = new Form(
        putSeparated($request['category']),
        $request['company'],
        $request['url'],
        $request['name'],
        $request['nameKana'],
        $request['mail'],
        $request['telNum'],
        putSeparated($request['contact']),
        putSeparated($request['kikkake']),
        $request['request']
      );

      // var_dump($post);

      try {
        $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("insert into forms (category, company, url, name, nameKana, mail, telNum, contact, kikkake, request) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
          $post->category,
          $post->company,
          $post->url,
          $post->name,
          $post->nameKana,
          $post->mail,
          $post->telNum,
          $post->contact,
          $post->kikkake,
          $post->request
        ]);

        $db = null;
      } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
      }
    } else {
      $this->page_flg = 0;
    }
  }
}
