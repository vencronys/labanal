
package main.ma.medlab.model;

import main.ma.medlab.enums.Statut;

/**
 * Represents a technician in the MedLab system.
 * This class maps to the 'technicien' table in the database.
 */
public class Technicien {
    private final int id;
    private final String nom;
    private final String prenom;
    private final String cin;
    private final Statut statut;
    private final Compte compte;

    /**
     * Constructor to create a Technicien object.
     * @param id
     * @param nom
     * @param prenom
     * @param cin
     * @param statut
     */
    public Technicien(int id, String nom, String prenom, String cin, Statut statut, Compte compte) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.cin = cin;
        this.statut = statut;
        this.compte = compte;
    }

    /**
     * Constructor to create a Technicien object with only ID and name.
     * @param id
     * @param nom
     */
    public Technicien(int id, String nom) {
        this.id = id;
        this.nom = nom;
        this.prenom = null;
        this.cin = null;
        this.statut = null;
        this.compte = null;
    }

    /**
     * Returns the unique identifier of this technician.
     *
     * @return the technician ID
     */
    public int getId() {
        return id;
    }

    /**
     * Returns the last name of this technician.
     *
     * @return the last name
     */
    public String getNom() {
        return nom;
    }

    /**
     * Returns the first name of this technician.
     *
     * @return the first name
     */
    public String getPrenom() {
        return prenom;
    }

    /**
     * Returns the national identity card number of this technician.
     *
     * @return the national identity card number
     */
    public String getCin() {
        return cin;
    }

    /**
     * Returns the status of this technician.
     *
     * @return the status
     */
    public Statut getStatut() {
        return statut;
    }

    /**
     * Returns the account associated with this technician.
     *
     * @return the account
     */
    public Compte getCompte() {
        return compte;
    }

    /**
     * Returns a string representation of this technician.
     *
     * @return a string representation of the technician
     */
    @Override
    public String toString() {
        return "Technicien{" +
                "id=" + id +
                ", nom='" + nom + '\'' +
                ", prenom='" + prenom + '\'' +
                ", cin='" + cin + '\'' +
                ", statut=" + statut +
                ", compte=" + compte +
                '}';
    }

}