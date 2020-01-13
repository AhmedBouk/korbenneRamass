<?php /* Template Name: signup */

get_header(); ?>

<div class="card" style="width: 50rem; margin:10% auto;">
    <form>
        <h3 style="font-weight: bold;">INSCRIPTION</h3>
        <div class="dropdown-divider"></div>
        <div class="form-group">
            <label for="exampleInputEmail1">ADRESSE MAIL</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse mail.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">MOT DE PASSE</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            <small id="passwordHelpBlock" class="form-text">
                Le mot de passe doit être compris entre 6 et 20 caractères.
            </small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">CONFIRMER LE MOT DE PASSE</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input class="btn" type="submit" value="Envoyer">
        <button type="button" class="btn btn-primary"><a href="<?php echo esc_url(home_url('login'));?>">Se connecter</a></button>
    </form>
</div>

<?php get_footer();
