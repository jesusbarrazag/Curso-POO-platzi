from Python.payment import Payment

class Card(Payment):
    cardName = str
    cardNumber = int
    ccv = int
    expirationDate = int

    def __init__(self, cardName, cardNumber, ccv, expirationDate):
        super().__init__(id)
        self.cardName = cardName
        self.cardNumber = cardNumber
        self.ccv = ccv
        self.expirationDate = expirationDate