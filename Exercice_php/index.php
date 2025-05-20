<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
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

.form-group {
    margin-bottom: 25px;
    position: relative;
}

.form-group i {
    position: absolute;
    top: 40px;
    left: 15px;
    color: var(--primary-extra-dark); 
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    font-size: 15px;
    color: var(--primary-extra-dark); 
}

input, select {
    width: 100%;
    padding: 12px 15px 12px 45px;
    border: 1px solid #ddd;
    border-radius: var(--border-radius);
    font-size: 15px;
    transition: all 0.3s ease;
}

input:focus, select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(224, 176, 255, 0.2); 
    outline: none;
}

.photo-upload-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 25px;
}

.photo-preview {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-color: var(--light-bg);
    margin-bottom: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border: 3px solid var(--primary-light);
}

.photo-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.photo-placeholder {
    font-size: 48px;
    color: var(--primary-dark);
}

.photo-upload-btn {
    background-color: var(--primary-light);
    border: none;
    border-radius: var(--border-radius);
    padding: 8px 15px;
    color: var(--primary-extra-dark);
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

.photo-upload-btn:hover {
    background-color: var(--primary-dark);
    color: white;
}

.file-input {
    display: none;
}

button {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    color: white;
    border: none;
    border-radius: var(--border-radius);
    padding: 12px 20px;
    width: 100%;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

button:hover {
    background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-extra-dark) 100%); 
    transform: translateY(-2px);
    box-shadow: 0 7px 14px rgba(160, 120, 180, 0.2);
}

button:active {
    transform: translateY(0);
}

.form-footer {
    text-align: center;
    padding: 15px 30px 30px;
    color: var(--primary-extra-dark); 
    font-size: 14px;
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
}
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Créez votre compte</h1>
            <p>Remplissez le formulaire ci-dessous pour commencer</p>
        </div>
        
        <form action="cible.php" method="post" class="form-content" enctype="multipart/form-data">
            <div class="photo-upload-container">
                <div class="photo-preview" id="photoPreview">
                    <div class="photo-placeholder">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                
                <label for="photo_profil" class="photo-upload-btn">
                    <i class="fas fa-camera"></i>
                    Choisir une photo
                </label>
                <input type="file" id="photo_profil" name="photo_profil" accept="image/*" class="file-input">
            </div>
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <i class="fas fa-user"></i>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            </div>
            
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <i class="fas fa-user"></i>
                <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Entrez votre adresse email" required>
            </div>
            
            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <i class="fas fa-phone"></i>
                <input type="tel" id="telephone" name="telephone" placeholder="Entrez votre numéro de téléphone" required>
            </div>
            
            <div class="form-group">
                <label for="date_naissance">Date de naissance</label>
                <i class="fas fa-calendar-alt"></i>
                <input type="date" id="date_naissance" name="date_naissance" required>
            </div>
            
            <div class="form-group">
                <label for="sexe">Sexe</label>
                
                <select id="sexe" name="sexe" required>
                    <option value="">-- Sélectionnez votre sexe --</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    
                </select>
            </div>
            
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Créez un mot de passe sécurisé" required>
            </div>
            
            <button type="submit">S'inscrire maintenant</button>
        </form>
        
        <div class="form-footer">
            En vous inscrivant, vous acceptez nos conditions d'utilisation et notre politique de confidentialité.
        </div>
    </div>

    <script>
        // Script pour afficher l'aperçu de l'image
        const photoInput = document.getElementById('photo_profil');
        const photoPreview = document.getElementById('photoPreview');
        
        photoInput.addEventListener('change', function() {
            const file = this.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.addEventListener('load', function() {
                    photoPreview.innerHTML = `<img src="${this.result}" alt="Photo de profil">`;
                });
                
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>