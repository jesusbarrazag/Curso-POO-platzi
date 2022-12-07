from car import Car 
if __name__ == '__main__':
    print("Hola mundo")
    car = Car()
    car.license = "AMS234"
    car.driver = "Jesus Barraza"
    print(vars(car))

    car2 = Car()
    car2.license = "QWE568"
    car2.driver = "Martha Lopez"
    print(vars(car2))

