package main.ma.medlab.model;

import main.ma.medlab.enums.Privilege;

/**
 * Represents a bank account entity in the MedLab system.
 * This class maps to the 'compte' table in the database.
 */
public class Compte {
    private final int id;
    private final String email;
    private final Privilege privilege;


    /**
     * Constructor to create a Compte object.
     * @param id kljlkjdsljljk
     * @param email
     * @param privilege
     */
    public Compte(int id, String email, Privilege privilege) {
        this.id = id;
        this.email = email;
        this.privilege = privilege;
    }

    /**
     * Returns the unique identifier of this account.
     *
     * @return the account ID
     */
    public int getId() {
        return id;
    }

    /**
     * Returns the email address associated with this account.
     *
     * @return the email address
     */
    public String getEmail() {
        return email;
    }

    /**
     * Returns the privilege level of this account.
     *
     * @return the privilege level
     */
    public Privilege getPrivilege() {
        return privilege;
    }

    /**
     * Returns a string representation of this account.
     *
     * @return a string representation of the account
     */
    @Override
    public String toString() {
        return "Compte{" +
                "id=" + id +
                ", email='" + email + '\'' +
                ", privilege=" + privilege +
                '}';
    }
}