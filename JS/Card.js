class Car extends Payment{
    constructor(id, cardName, cardNumber, ccv, expirationDate) {
        super(id);
        this.cardName = cardName;
        this.cardNumber = cardNumber;
        this.ccv = ccv;
        this.expirationDate = expirationDate;
}
}