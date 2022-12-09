<?php
require_once ("payment.php");

class Card extends Payment {
    public $cardName;
    public $cardNumber;
    public $ccv;
    public $expirationDate;

    public function __construct($id, $cardName, $cardNumber, $ccv, $expirationDate) {
        parent::__construct($id);
        $this->cardName = $cardName;
        $this->cardNumber = $cardNumber;
        $this->ccv = $ccv;
        $this->expirationDate = $expirationDate;
    }
}
?>