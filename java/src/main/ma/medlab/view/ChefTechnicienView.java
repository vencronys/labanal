package main.ma.medlab.view;

import main.ma.medlab.model.ChefTechnicien;
import main.ma.medlab.util.LoggerUtil;

import java.util.Scanner;

public class ChefTechnicienView {

    private Scanner scanner = new Scanner(System.in);
    private final ChefTechnicien chefTechnicien;

    public ChefTechnicienView(ChefTechnicien chefTechnicien) {
        this.chefTechnicien = chefTechnicien;
    }

    public void display() {
        LoggerUtil.info("Displaying ChefTechnicien Menu");
        while (true) {
            System.out.println("\n=== Technicien Menu ===");
            System.out.println("1. View Profile");
            System.out.println("2. View Tasks");
            System.out.println("3. Logout");
            System.out.print("Choose an option: ");

            String choice = scanner.nextLine();
            LoggerUtil.info("Technicien selected option: " + choice);

            switch (choice) {
                case "1":
                    LoggerUtil.info("Attempting to view the profile");
                    System.out.println(chefTechnicien.toString());
                    break;
                case "2":
                    LoggerUtil.info("Attempting to view tasks");
                    System.out.println("Task viewing not implemented yet");
                    break;
                case "3":
                    LoggerUtil.info("ChefTechnicien logging out");
                    return;
                default:
                    LoggerUtil.warning("Invalid menu choice entered in ChefTechnicien view: " + choice);
                    System.out.println("Invalid choice. Please try again.");
            }
        }
    }
}