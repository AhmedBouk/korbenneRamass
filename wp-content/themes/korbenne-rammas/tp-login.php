<?php /* Template Name: login */

get_header(); ?>
<div class="card" style="width: 50rem; margin:8% auto;">
    <form>
        <h3>CONNEXION</h3>
        <div class="dropdown-divider"></div>
        <div class="form-group">
        <label for="exampleInputEmail1">ADDRESSE MAIL</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text">Nous ne partagerons jamais votre adresse mail.</small>
        </div>
        <div class="form-group">
            <div class="label">
                <label for="exampleInputPassword1">MOT DE PASSE</label>
            </div>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input class="btn" type="submit" value="Envoyer">
        <button type="button" class="btn btn-primary"><a href="<?php echo esc_url(home_url('signup'));?>">Create account</a></button>
    </form>
</div>

<?php get_footer();

