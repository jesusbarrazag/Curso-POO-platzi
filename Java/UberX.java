class UberX extends Car {
    String brand;
    String model;

    public UberX(String license, Account driver, String brand, String model) {
        super(license, driver);
        this.brand = brand;
        this.model = model;

    }

    void printUberX(){
        System.out.println("License: " + license + " Name Driver: " + driver.name + " Model: " + model + "Brand: " + brand);

    }
}