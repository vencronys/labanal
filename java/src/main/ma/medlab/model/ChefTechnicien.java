package main.ma.medlab.model;

import main.ma.medlab.enums.Statut;

public class ChefTechnicien extends Technicien {

    /**
     * Constructor to create a Technicien object.
     *
     * @param id
     * @param nom
     * @param prenom
     * @param cin
     * @param statut
     */
    public ChefTechnicien(int id, String nom, String prenom, String cin, Statut statut, Compte compte) {
        super(id, nom, prenom, cin, statut, compte);
    }

    public ChefTechnicien(int id, String nom) {
        super(id, nom, null, null, null, null);
    }
}
