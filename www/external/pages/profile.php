<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['id_compte'])) {
    header('Location: login.php');
    exit();
}

$id_compte = $_SESSION['id_compte'];

include ('../includes/database.php');

$query = "SELECT * FROM patient WHERE id_compte = $id_compte";
$result = ($conn->query($query))->fetchAll(PDO::FETCH_ASSOC);

$nom_patient = $result[0]["nom_patient"];
$prenom_patient = $result[0]["prenom_patient"];
$cin_patient = $result[0]["cin_patient"];
$date_naissance_patient = $result[0]["date_naissance_patient"];
$sexe_patient = $result[0]["sexe_patient"];
$adresse_patient = $result[0]["adresse_patient"];
$telephone_patient = $result[0]["telephone_patient"];
$email_compte = $_SESSION['email_compte'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil - MedLab Analyses</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/pages/profile.css">
    <script src="https://kit.fontawesome.com/0197b6ebf2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sticky-top">
        <?php
        include '../includes/topbar.php';
        include '../includes/navigation.php';
        ?>
    </div>

    <main class="profile-container">
        <div class="profile-header">
            <div class="profile-avatar">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="profile-info">
                <h1>Bienvenue, <?php echo htmlspecialchars($nom_patient); ?></h1>
                <p class="last-visit">Dernière visite: <?php echo date('d/m/Y'); ?></p>
            </div>
        </div>

        <div class="profile-grid">
            <section class="profile-card personal-info">
                <h2><i class="fas fa-id-card"></i> Informations Personnelles</h2>
                <div class="info-content flex flex-dir-col">
                    <div class="info-group">
                        <label>Nom:</label>
                        <p><?php echo htmlspecialchars($nom_patient); ?></p>
                    </div>
                    <div class="info-group">
                        <label>Email:</label>
                        <p><?php echo htmlspecialchars($email_compte); ?></p>
                    </div>
                    <div class="info-group">
                        <label>Téléphone:</label>
                        <p><?php echo htmlspecialchars($telephone_patient); ?></p>
                    </div>
                    <a href="#" class="btn-edit">Modifier mes informations</a>
                </div>
            </section>

            <section class="profile-card recent-results">
                <h2><i class="fas fa-flask"></i> Derniers Résultats</h2>
                <div class="results-list">
                    <div class="result-item">
                        <div class="result-info">
                            <h3>Analyse Sanguine</h3>
                            <p class="date">28/04/2025</p>
                        </div>
                        <a href="#" class="btn-view">Voir <i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="result-item">
                        <div class="result-info">
                            <h3>Test COVID-19</h3>
                            <p class="date">15/04/2025</p>
                        </div>
                        <a href="#" class="btn-view">Voir <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="profile-card upcoming-appointments">
                <h2><i class="fas fa-calendar-alt"></i> Rendez-vous à Venir</h2>
                <div class="appointments-list">
                    <div class="appointment-item">
                        <div class="appointment-info">
                            <h3>Prise de Sang</h3>
                            <p class="date"><i class="fas fa-clock"></i> 10/05/2025 - 09:30</p>
                            <p class="location"><i class="fas fa-map-marker-alt"></i> Centre Ville</p>
                        </div>
                        <div class="appointment-actions">
                            <!-- <a href="#" class="btn-reschedule">Reprogrammer</a> -->
                            <a href="#" class="btn-cancel">Annuler</a>
                        </div>
                    </div>
                </div>
                <a href="contact-form.php" class="btn-new-appointment">Nouveau Rendez-vous</a>
            </section>

            <section class="profile-card preferences">
                <h2><i class="fas fa-cog"></i> Préférences</h2>
                <div class="preferences-content">
                    <div class="preference-item">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <span>Notifications par email</span>
                    </div>
                    <div class="preference-item">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <span>Notifications SMS</span>
                    </div>
                    <div class="preference-item">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <span>Rappels de rendez-vous</span>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>
