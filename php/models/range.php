<?php
class Range {

  public $value;
  public $upload_date;
  public $card_count = null;
  public $used_count = null;
  public $region;

   function __construct($value, $upload_date, $region)
    {
      $this->value = $value;
      $this->upload_date = $upload_date;
      $this->region = $region;
    }

    public function set_used_count($count)
    {
      $this->used_count = $count;
    }
    public function set_card_count($count)
    {
      $this->card_count = $count;
    }
}
?>
