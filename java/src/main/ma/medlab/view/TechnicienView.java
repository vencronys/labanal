package main.ma.medlab.view;

import main.ma.medlab.model.ChefTechnicien;
import main.ma.medlab.model.Technicien;
import main.ma.medlab.util.LoggerUtil;

import java.util.Scanner;

public class TechnicienView {

    private Scanner scanner = new Scanner(System.in);
    private final Technicien technicien;

    public TechnicienView(Technicien technicien) {
        this.technicien = technicien;
    }

    public void display() {
        LoggerUtil.info("Displaying Technicien Menu");
        while (true) {
            System.out.println("\n=== Technicien Menu ===");
            System.out.println("1. View Profiles");
            System.out.println("2. Check Blood Samples");
            System.out.println("3. Logout");
            System.out.print("Choose an option: ");

            String choice = scanner.nextLine();
            LoggerUtil.info("Technicien selected option: " + choice);

            switch (choice) {
                case "1":
                    LoggerUtil.info("Attempting to view the profile");
                    System.out.println("Profile viewing not implemented yet");
                    break;
                case "2":
                    LoggerUtil.info("Attempting to check blood samples");
                    System.out.println("Blood Samples viewing not implemented yet");
                    break;
                case "3":
                    LoggerUtil.info("Technicien logging out");
                    return;
                default:
                    LoggerUtil.warning("Invalid menu choice entered in Technicien view: " + choice);
                    System.out.println("Invalid choice. Please try again.");
            }
        }
    }
}