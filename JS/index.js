var car = new Car("AWM456", new Account("Andres Barraza", "QWE234", "andres-barraza@yahoo.com", "57656334"));
car.passenger = 4;
car.printDataCar();

console.log("UberX")
var uberX = new UberX("AW456", new Account("Andrea Barraza", "ANDA765", "andrea9945@gmail.com", "3767523"), "Chevrolet", "Spark")
uberX.passenger = 6;
uberX.printDataUberX();

console.log("****User****")
var user = new User("Damian Rios", "13454233", "damian@gmail.com", "3242567");
user.printDataUser();

