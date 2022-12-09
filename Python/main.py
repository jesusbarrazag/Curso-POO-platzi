from car import Car 
from account import Account
from UberX import UberX
from User import User

if __name__ == '__main__':
    print("Inicializando la informacion de los autos")
    print("Car....")
    car = Car("AMS234", Account("Jesus Barraza", "3456434","jesus.ba@gmail.com","4321"))
    print(vars(car))
    print(vars(car.driver))

    print("UberX....")
    uberX = UberX("KLO564", Account("Luis Cabrales", "123994233", "Luis.c344@hotmail.com", "5643"), brand = "Toyota", model="Frontier")
    print(vars(uberX))
    print(vars(uberX.driver))

    print("User....")
    user = User("Mariana del Valle", "32565434", "mariana@yahoo.com", "14545")
    print(vars(user))
   
    

    

