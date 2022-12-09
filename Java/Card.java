public class Card extends Payment {
    Integer id;
    String cardName;
    Integer cardNumber;
    Integer ccv;
    Integer expirationDate;

    public Card(Integer id, String cardName, Integer cardNumber, Integer ccv, Integer expirationDate) {
        super(id);
        this.cardName = cardName;
        this.cardNumber = cardNumber;
        this.ccv = ccv;
        this.expirationDate = expirationDate;
    
}
}
