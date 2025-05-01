package main.ma.medlab.app;

import main.ma.medlab.config.DatabaseConfig;
import main.ma.medlab.view.MainMenuView;
import main.ma.medlab.util.LoggerUtil;

import java.sql.Connection;

public class App {
    public static void main(String[] args) {
        LoggerUtil.info("Starting MedLab application...");
        
        try {
            LoggerUtil.info("Attempting to establish database connection");
            Connection connection = DatabaseConfig.getConnection();
            LoggerUtil.info("Database connection successful");
            
            // Start the application
            LoggerUtil.info("Initializing main menu");
            MainMenuView mainMenu = new MainMenuView();
            LoggerUtil.info("Displaying main menu");
            mainMenu.display();
            
        } catch (Exception e) {
            LoggerUtil.error("Failed to start application: " + e.getMessage());
            LoggerUtil.error("Stack trace: " + e.getStackTrace());
            System.err.println("Error: Unable to connect to the database!");
            System.err.println("Error details: " + e.getMessage());
            e.printStackTrace();
        } finally {
            // Always close the database connection when the application ends
            LoggerUtil.info("Application shutdown initiated");
            DatabaseConfig.closeConnection();
            LoggerUtil.info("Application shutdown complete");
        }
    }
}