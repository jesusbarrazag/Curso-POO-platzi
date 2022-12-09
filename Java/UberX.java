class UberX extends Car {
    String brand;
    String model;

    public UberX(String license, Account driver, String brand, String model) {
        super(license, driver);
        this.brand = brand;
        this.model = model;

    }

    public void setPassenger(Integer passenger) {
        if(passenger == 6){
            this.passenger = passenger;
        }else{
            System.out.println("Necesitas asignar 6 pasajeros");
        }
    }
        
        void printDataCar(){
        super.printDataCar();
        System.out.println("Model: " + model + " Brand: " + brand);

    }

}