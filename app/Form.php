<?php

class Form {
  protected $category = "";
  protected $company  = "";
  protected $url      = "";
  protected $name     = "";
  protected $nameKana = "";
  protected $mail     = "";
  protected $telNum   = "";
  protected $contact  = "";
  protected $kikkake  = "";
  protected $request  = "";

  public function __construct($category, $company, $url, $name, $nameKana, $mail, $telNum, $contact, $kikkake, $request) {
    $this->category = $category;
    $this->company  = $company;
    $this->url      = $url;
    $this->name     = $name;
    $this->nameKana = $nameKana;
    $this->mail     = $mail;
    $this->telNum   = $telNum;
    $this->contact  = $contact;
    $this->kikkake  = $kikkake;
    $this->request  = $request;
  }
}
