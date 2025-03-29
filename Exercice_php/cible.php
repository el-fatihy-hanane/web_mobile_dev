<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color:rgb(184, 48, 211); 
            --primary-light: #ECD1FF; 
            --primary-dark: #C08FE0;  
            --primary-extra-dark:rgb(113, 81, 135); 
            --primary-pale: #F5E8FF;
            --secondary-color: #9A70B7; 
            --error-color: rgb(201, 18, 146)
            --text-color: #333;
            --light-bg: #F5E8FF; 
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(160, 120, 180, 0.15); 
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #F5E8FF 0%, #E0B0FF 100%);
            color: var(--text-color);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            width: 100%;
            max-width: 550px;
        }
        
        .form-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%); 
            color: white;
            padding: 25px 30px;
            text-align: center;
        }
        
        .form-header h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .form-header p {
            font-size: 16px;
            opacity: 0.9;
        }
        
        .form-content {
            padding: 30px;
        }
        
        .success-message {
            background-color: rgba(46, 204, 113, 0.1);
            border-left: 4px solid var(--secondary-color);
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 4px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group i {
            position: absolute;
            top: 40px;
            left: 15px;
            color: #777;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 15px;
            color: #555;
        }
        
        input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius);
            font-size: 15px;
            background-color: var(--light-bg);
            color: #333;
            font-weight: 500;
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        
        .btn {
            padding: 12px 20px;
            border-radius: var(--border-radius);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            text-decoration: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            color: white;
            border: none;
            flex: 1;
            margin-right: 10px;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-extra-dark) 100%);
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.1);
        }
        
        .btn-secondary {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            flex: 1;
            margin-left: 10px;
        }
        
        .btn-secondary:hover {
            background-color: rgba(52, 152, 219, 0.1);
            transform: translateY(-2px);
        }
        
        .form-footer {
            text-align: center;
            padding: 0 30px 30px;
            color: var(--primary-extra-dark);
            font-size: 14px;
        }
        
        .data-item {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }
        
        .data-label {
            font-weight: 600;
            margin-right: 10px;
            min-width: 120px;
        }
        
        @media (max-width: 576px) {
            .container {
                border-radius: 0;
            }
            
            .form-header {
                padding: 20px;
            }
            
            .form-content {
                padding: 20px;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .btn-primary, .btn-secondary {
                margin: 5px 0;
            }
        }
    </style>
</head>
<body>
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "";
        $prenom = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "";
        $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
        $telephone = isset($_POST["telephone"]) ? htmlspecialchars($_POST["telephone"]) : "";
        $date_naissance = isset($_POST["date_naissance"]) ? htmlspecialchars($_POST["date_naissance"]) : "";
        $sexe = isset($_POST["sexe"]) ? htmlspecialchars($_POST["sexe"]) : "";
        $mot_de_passe = isset($_POST["mot_de_passe"]) ? "********" : ""; 
    ?>

    <div class="container">
        <div class="form-header">
            <h1>Inscription réussie !</h1>
            <p>Merci de vous être inscrit</p>
        </div>
        
        <div class="form-content">
            <div class="success-message">
                <p><i class="fas fa-check-circle" style="color: var(--secondary-color); margin-right: 10px;"></i> Votre compte a été créé avec succès. Voici vos informations.</p>
            </div>
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <i class="fas fa-user"></i>
                <input type="text" id="nom" value="<?php echo $nom; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <i class="fas fa-user"></i>
                <input type="text" id="prenom" value="<?php echo $prenom; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" value="<?php echo $email; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <i class="fas fa-phone"></i>
                <input type="tel" id="telephone" value="<?php echo $telephone; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="date_naissance">Date de naissance</label>
                <i class="fas fa-calendar-alt"></i>
                <input type="text" id="date_naissance" value="<?php echo $date_naissance; ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="sexe">Sexe</label>
                
                <input type="text" id="sexe" value="<?php echo ucfirst($sexe); ?>" readonly>
            </div>
            
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <i class="fas fa-lock"></i>
                <input type="text" id="mot_de_passe" value="<?php echo $mot_de_passe; ?>" readonly >
            </div>
            
            <div class="action-buttons">
                <a href="index.php" class="btn btn-primary">Modifier les informations</a>
                <a href="index.php" class="btn btn-secondary">Retour</a>
            </div>
        </div>
        
        <div class="form-footer">
            Un email de confirmation a été envoyé à votre adresse.
        </div>
    </div>

    <?php
    } else {
        // Si la page est accédée directement sans passer par le formulaire
    ?>
    <div class="container">
        <div class="form-header" style="background: linear-gradient(135deg, var(--error-color) 0%, #c0392b 100%);">
            <h1>Erreur</h1>
            <p>Accès non autorisé</p>
        </div>
        
        <div class="form-content">
            <div style="text-align: center; padding: 20px 0;">
                <i class="fas fa-exclamation-triangle" style="font-size: 48px; color: var(--error-color);"></i>
                <p style="margin-top: 20px;">Veuillez remplir le formulaire d'inscription pour accéder à cette page.</p>
            </div>
            
            <div style="text-align: center; margin-top: 20px;">
                <a href="index.php" class="btn btn-primary" style="display: inline-block; width: auto;">Retour au formulaire</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>
