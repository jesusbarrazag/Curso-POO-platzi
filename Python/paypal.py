from Python.payment import Payment

class paypal(Payment):
    email = str

    def __init__(self, id, email):
        super().__init__(id)
        self.email = email