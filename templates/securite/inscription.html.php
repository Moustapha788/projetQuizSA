
<section class="content-register">
    <!-- // todo check information to sign in -->
    <div class="check-info" id="check-info">
        <!-- // ! libele -->
        <div class="libele-form-register">
            <h2>S'inscrire</h2>
            <small>Pour proposer des quizz</small>
        </div>
        <!-- // ! the form -->
        <form class="connexion-form-inscrip" id="connexion-form" action="<?= WEB_ROOT?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="controller" value="securite">
            <input type="hidden" name="action" value="inscription">
            
            
            <div class="control-group-inscription">
                <?php /* gestion des erreurs */  if (isset($errors['inscription'])):?>
                     <small class="ERROR-LAY RED-ERROR"><?= $errors['inscription'] ?></small>
                <?php endif; ?>

                <!--//! prenom -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="prenom">Prénom</Label>
                    <input class="input-register" type="text"  name="prenom" id="prenom" class="login" placeholder="entrez votre prenom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['prenom'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['prenom'] ?></small>
                <?php endif; ?>


                <!--//! nom -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="nom">Nom</Label>
                    <input class="input-register" type="text"  name="nom" id="nom" class="login" placeholder="entrez votre nom">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['nom'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['nom'] ?></small>
                <?php endif; ?>


                <!--//! login -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="login">Login</Label>
                    <input class="input-register" type="email"  name="login" id="login" class="login" placeholder="entrez votre email">
                </div>
                <?php /* gestion des erreurs */ if (isset($errors['login'])):?>
                    <small class="ERROR-LAY RED-ERROR"><?= $errors['login'] ?></small>
                <?php endif; ?>


                <!--//! password1 -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password1">Password</Label>
                    <input class="input-register" type="password"  name="password1" id="password1" class="login" placeholder="votre mot de passe">
                </div>


                <!--//! password2 -->
                <div class="forms-group-inscrip">
                    <Label class="label-connexion" for="password2">Confirm password</Label>
                    <input class="input-register" type="password"  name="password2" id="password2" class="login" placeholder="confirmez votre mot de passe">
                </div>
                <?php /* //!gestion des erreurs de validation et de correspondance de deux mots de passe  */
                    if (isset($errors['password'])):?>
                        <small class="ERROR-LAY RED-ERROR"><?= $errors['password'] ?></small>
                <?php endif; ?>



                <!--//! fichier -->
                <div class="forms-group-inscrip choose-file">
                    <Label class="label-connexion" for="file">Avatar</Label>
                    <input class="input-register" type="file" name="file" accept="image/jpg, image/png, image/jpeg" id="file" placeholder="Choississez votre avatar">
                    <div class="btn-upload">Choisir votre avatar</div>

                </div>


                <!-- //!press on submit button -->
                <div class="last-control">
                    <button id="register" type="submit">Créer un compte</button>
                </div>
            </div>        
        </form>
    </div>
    <!-- // todo choose your avatar -->
    <div class="choose-avatar" id="choose-avatar">
        <figure>
            <img src="<?=  WEB_PUBLIC.'img'.DIRECTORY_SEPARATOR.'avatar'.DIRECTORY_SEPARATOR.'avatar-login.jpg'  ?>" alt="avatar joueur" srcset="">
        </figure>
        <small>avatar joueur</small>
    </div>


</section>
