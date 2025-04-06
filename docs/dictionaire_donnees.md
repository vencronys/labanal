# Dictionnaire de Données V 0.0.2

## Table `patient`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_patient          | INT          | Identifiant unique du patient               | Clé primaire, Auto-incrémenté        |
| nom_patient         | VARCHAR(100) | Nom du patient                              | Non nul                             |
| prenom_patient      | VARCHAR(100) | Prénom du patient                           | Non nul                             |
| cin_patient         | VARCHAR(20)  | Numéro d'identité nationale                 | Non nul                             |
| date_naissance_patient | DATE       | Date de naissance du patient                | Non nul                             |
| sexe_patient        | ENUM('M', 'F')| Sexe du patient                             | Non nul                             |
| civilite_patient    | ENUM('Mr', 'Mme', 'Mlle') | Civilité du patient                  | Non nul                             |
| adresse_patient     | TEXT         | Adresse du patient                          | Non nul                             |
| telephone_patient   | VARCHAR(20)  | Numéro de téléphone du patient              | Non nul                             |
| email_patient       | VARCHAR(100) | Adresse e-mail du patient                   | Non nul                             |

---

## Table `ordonnance`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_ordonnace        | INT          | Identifiant unique de l'ordonnance          | Clé primaire, Auto-incrémenté        |
| date_ordonnance     | DATE         | Date de l'ordonnance                        | Non nul                             |
| contenu_ordonnace   | TEXT         | Contenu de l'ordonnance                     | Non nul                             |
| id_patient          | INT          | Référence au patient                        | Clé étrangère (Référence à `patient`)|

---

## Table `secretaire`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_secretaire       | INT          | Identifiant unique de la secrétaire         | Clé primaire, Auto-incrémenté        |
| nom_secretaire      | VARCHAR(100) | Nom de la secrétaire                        | Non nul                             |
| prenom_secretaire   | VARCHAR(100) | Prénom de la secrétaire                     | Non nul                             |
| cin_secretaire      | VARCHAR(20)  | Numéro d'identité de la secrétaire          | Non nul                             |
| date_naissance_secretaire | DATE    | Date de naissance de la secrétaire          | Non nul                             |
| sexe_secretaire     | ENUM('M', 'F')| Sexe de la secrétaire                       | Non nul                             |
| civilite_secretaire | ENUM('Mr', 'Mme', 'Mlle') | Civilité de la secrétaire           | Non nul                             |
| adresse_secretaire  | TEXT         | Adresse de la secrétaire                    | Non nul                             |
| telephone_secretaire| VARCHAR(20)  | Numéro de téléphone de la secrétaire        | Non nul                             |
| email_secretaire    | VARCHAR(100) | Adresse e-mail de la secrétaire             | Non nul                             |
| status_secretaire   | ENUM('Actif', 'Inactif') | Statut de la secrétaire               | Non nul                             |
| date_embauche_secretaire | DATE    | Date d'embauche de la secrétaire            | Non nul                             |
| salaire_secretaire  | DECIMAL(10,2)| Salaire de la secrétaire                    | Non nul                             |

---

## Table `rdv`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_rdv              | INT          | Identifiant unique du rendez-vous           | Clé primaire, Auto-incrémenté        |
| date_rdv            | DATETIME     | Date et heure du rendez-vous                | Non nul                             |
| motif_rdv           | TEXT         | Motif du rendez-vous                        | Non nul                             |
| status_rdv          | ENUM('Confirmé', 'Annulé', 'En attente') | Statut du rendez-vous           | Non nul                             |
| id_patient          | INT          | Référence au patient                        | Clé étrangère (Référence à `patient`)|
| id_secretaire       | INT          | Référence à la secrétaire                   | Clé étrangère (Référence à `secretaire`)|

---

## Table `facture`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_facture          | INT          | Identifiant unique de la facture            | Clé primaire, Auto-incrémenté        |
| montant_facture     | DECIMAL(10,2)| Montant total de la facture                 | Non nul                             |
| date_emission_facture | DATETIME   | Date d'émission de la facture               | Non nul                             |
| date_payement_facture | DATETIME   | Date de paiement de la facture              |                                      |
| status_facture      | ENUM('Payée', 'Impayée', 'Partiellement payée') | Statut de la facture       | Non nul                             |
| methode_paiment_facture | ENUM('Carte', 'Espèces', 'Chèque') | Méthode de paiement             | Non nul                             |
| description_facture | TEXT         | Description de la facture                   | Non nul                             |
| id_rdv              | INT          | Référence au rendez-vous                    | Clé étrangère (Référence à `rdv`)    |

---

## Table `analyse_generale`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_analyse_generale | INT          | Identifiant unique de l'analyse générale    | Clé primaire, Auto-incrémenté        |
| date_analyse_generale | DATETIME    | Date de l'analyse générale                  | Non nul                             |
| statut_analyse_generale | ENUM('En attente', 'Effectuée', 'Annulée') | Statut de l'analyse générale | Non nul                             |
| id_prelevement      | INT          | Référence au prélèvement                    | Clé étrangère (Référence à `prelevement`) |

---

## Table `analyse_cholesterol`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_analyse_cholesterol | INT       | Identifiant unique de l'analyse du cholestérol | Clé primaire, Auto-incrémenté       |
| cholesterol_total    | DECIMAL(10,2)| Cholestérol total                          | Non nul                             |
| cholesterol_ldl      | DECIMAL(10,2)| Cholestérol LDL                            | Non nul                             |
| cholesterol_hdl      | DECIMAL(10,2)| Cholestérol HDL                            | Non nul                             |
| triglycerides        | DECIMAL(10,2)| Triglycérides                              | Non nul                             |
| cholesterol_unit     | VARCHAR(20)  | Unité de mesure du cholestérol              | Non nul                             |
| triglycerides_unit   | VARCHAR(20)  | Unité de mesure des triglycérides           | Non nul                             |
| interpretation_cholesterol | TEXT   | Interprétation du cholestérol               |                                      |
| commentaire_glucose | TEXT         | Commentaire sur l'analyse du cholestérol     |                                      |
| statut_analyse_cholesterol | ENUM('En attente', 'Effectuée', 'Annulée') | Statut de l'analyse  | Non nul                             |
| id_analyse_generale | INT          | Référence à l'analyse générale              | Clé étrangère (Référence à `analyse_generale`) |
| id_examen           | INT          | Référence à l'examen                        | Clé étrangère (Référence à `examen`) |
| id_technicien       | INT          | Référence au technicien                     | Clé étrangère (Référence à `technicien`) |
| id_chef_technicien  | INT          | Référence au chef technicien                | Clé étrangère (Référence à `chef_technicien`) |
| id_medecin_bio      | INT          | Référence au médecin biologiste             | Clé étrangère (Référence à `medecin_bio`) |

---

## Table `analyse_glucose`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_analyse_glucose  | INT          | Identifiant unique de l'analyse de glucose  | Clé primaire, Auto-incrémenté        |
| glucose             | DECIMAL(10,2)| Niveau de glucose                          | Non nul                             |
| glucose_unit        | VARCHAR(20)  | Unité de mesure du glucose                  | Non nul                             |
| interpretation_glucose | TEXT       | Interprétation de l'analyse de glucose      |                                      |
| commentaire_glucose | TEXT         | Commentaire sur l'analyse de glucose        |                                      |
| statut_analyse_glucose | ENUM('En attente', 'Effectuée', 'Annulée') | Statut de l'analyse  | Non nul                             |
| id_analyse_generale | INT          | Référence à l'analyse générale              | Clé étrangère (Référence à `analyse_generale`) |
| id_examen           | INT          | Référence à l'examen                        | Clé étrangère (Référence à `examen`) |
| id_technicien       | INT          | Référence au technicien                     | Clé étrangère (Référence à `technicien`) |
| id_chef_technicien  | INT          | Référence au chef technicien                | Clé étrangère (Référence à `chef_technicien`) |
| id_medecin_bio      | INT          | Référence au médecin biologiste             | Clé étrangère (Référence à `medecin_bio`) |

---

## Table `analyse_hemoglobine`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_analyse_hemoglobine | INT        | Identifiant unique de l'analyse d'hémoglobine | Clé primaire, Auto-incrémenté       |
| hemoglobine          | DECIMAL(10,2)| Niveau d'hémoglobine                        | Non nul                             |
| hemoglobine_unit     | VARCHAR(20)  | Unité de mesure de l'hémoglobine             | Non nul                             |
| interpretation_hemoglobine | TEXT    | Interprétation de l'analyse d'hémoglobine   |                                      |
| commentaire_hemoglobine | TEXT      | Commentaire sur l'analyse d'hémoglobine     |                                      |
| statut_analyse_hemoglobine | ENUM('En attente', 'Effectuée', 'Annulée') | Statut de l'analyse | Non nul                             |
| id_analyse_generale | INT          | Référence à l'analyse générale              | Clé étrangère (Référence à `analyse_generale`) |
| id_examen           | INT          | Référence à l'examen                        | Clé étrangère (Référence à `examen`) |
| id_technicien       | INT          | Référence au technicien                     | Clé étrangère (Référence à `technicien`) |
| id_chef_technicien  | INT          | Référence au chef technicien                | Clé étrangère (Référence à `chef_technicien`) |
| id_medecin_bio      | INT          | Référence au médecin biologiste             | Clé étrangère (Référence à `medecin_bio`) |

---

## Table `analyse_vitamine_d`

| Attribut            | Type         | Description                                 | Contraintes                          |
|---------------------|--------------|---------------------------------------------|--------------------------------------|
| id_analyse_vitamine_d | INT        | Identifiant unique de l'analyse de vitamine D | Clé primaire, Auto-incrémenté      |
| vitamine_d          | DECIMAL(10,2)| Niveau de vitamine D                        | Non nul                             |
| vitamine_d_unit     | VARCHAR(20)  | Unité de mesure de la vitamine D            | Non nul                             |
| interpretation_vitamine_d | TEXT    | Interprétation de l'analyse de vitamine D   |                                      |
| commentaire_vitamine_d | TEXT      | Commentaire sur l'analyse de vitamine D     |                                      |
| statut_analyse_vitamine_d | ENUM('En attente', 'Effectuée', 'Annulée') | Statut de l'analyse | Non nul                             |
| id_analyse_generale | INT          | Référence à l'analyse générale              | Clé étrangère (Référence à `analyse_generale`) |
| id_examen           | INT          | Référence à l'examen                        | Clé étrangère (Référence à `examen`) |
| id_technicien       | INT          | Référence au technicien                     | Clé étrangère (Référence à `technicien`) |
| id_chef_technicien  | INT          | Référence au chef technicien                | Clé étrangère (Référence à `chef_technicien`) |
| id_medecin_bio      | INT          | Référence au médecin biologiste             | Clé étrangère (Référence à `medecin_bio`) |

---

Cela couvre toutes les tables que nous avons créées jusqu'à présent. Si vous avez besoin de plus de détails ou d'autres tables, n'hésitez pas à demander !
