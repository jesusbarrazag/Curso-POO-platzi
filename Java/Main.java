class Main {
    public static void main(String[] args) {
        System.out.println("Inicializando....");
        System.out.println("Car......");
        Car car = new Car("AMQ123", new Account("Andrea Pirlo", "And123", "andrea123@hotmail.com","12748"));
        car.passegenger = 4;
        car.printDataCar();

        System.out.println("UberX.....");
        UberX uberX = new UberX("MKL185", new Account("Maria Celeste", "23647584", "maria.celes@gmail.com", "12748"),"Toyota","Corolla");
        uberX.printUberX();

        System.out.println("User.....");
        User User = new User("John", "JK2345", "Jhonj21@hotmail.com", "13455");
        User.printDataUser();

        System.out.println("Driver.....");
        Driver driver = new Driver("Alvaro Meza", "32454345", "Alvaro.m@gmail.com", "465773");
        driver.printDataDriver();
    }

}