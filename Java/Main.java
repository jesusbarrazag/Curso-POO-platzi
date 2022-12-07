class Main {
    public static void main(String[] args) {
        System.out.println("Hello World!");
        Car car = new Car("AMQ123", new Account("Andrea Pirlo", "And123"));
        car.passegenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE567", new Account("Andrea Herrera", "ANDA786"));
        car2.passegenger = 3;
        car2.printDataCar();
    }

}