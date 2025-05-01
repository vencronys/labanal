package main.ma.medlab.view;

import main.ma.medlab.model.ChefTechnicien;
import main.ma.medlab.model.Compte;
import main.ma.medlab.model.Technicien;
import main.ma.medlab.repository.CompteRepository;
import java.util.Scanner;

public class MainMenuView {
    private Scanner scanner;
    private CompteRepository compteRepository;

    public MainMenuView() {
        scanner = new Scanner(System.in);
        compteRepository = new CompteRepository();
    }

    public void display() {
        while (true) {
            System.out.println("\n=== MedLab Login System ===");
            System.out.println("1. Login");
            System.out.println("2. Exit");
            System.out.print("Choose an option: ");

            String choice = scanner.nextLine();

            switch (choice) {
                case "1":
                    handleLogin();
                    break;
                case "2":
                    System.out.println("Goodbye!");
                    return;
                default:
                    System.out.println("Invalid choice. Please try again.");
            }
        }
    }

    private void handleLogin() {
        System.out.print("Email: ");
        String email = scanner.nextLine();

        System.out.print("Password: ");
        String password = scanner.nextLine();

        try {
            Compte compte = compteRepository.authenticate(email, password);

            if (compte != null) {
                System.out.println("Login successful!");
                switch (compte.getPrivilege()) {
                    case technicien:
                        Technicien technicien = new Technicien(compte.getId(), compte.getEmail());
                        new TechnicienView(technicien).display();
                        break;
                    case chef_technicien:
                        ChefTechnicien chefTechnicien = new ChefTechnicien(compte.getId(), compte.getEmail());
                        new ChefTechnicienView(chefTechnicien).display();
                        break;
                    default:
                        System.out.println("Unknown privilege level");
                }
            } else {
                System.out.println("Invalid credentials. Please try again.");
            }
        } catch (Exception e) {
            System.out.println("Error during login: " + e.getMessage());
        }
    }
}