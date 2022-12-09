class Driver extends Account {
   
    public Driver(String name, String document, String email, String password) {
        super(name, document, email, password);

}

    void printDataDriver(){
        System.out.println("Name: " + name);
        System.out.println("Document: " + document);
        System.out.println("Email: " + email);
        System.out.println("Password: " + password);
    }
}
