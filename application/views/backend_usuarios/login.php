<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>

            <h1 class="logo-name">CI3+</h1>

        </div>
        <h3>Welcome to CI3+</h3>
        <p>Esta es un demo basada en Codeigniter 3.0 + INSPINIA 2.5, lista para ser usada
        en cualquier proyecto web.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>#HTML5, CSS3, #JQUERY, #BOOTSTRAP3</p>
        
        <?php if ( $this->session->flashdata('ControllerMessage') != '' ){ ?>
            <p>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('ControllerMessage'); ?>
                </div>
            </p>
        <?php } ?>
                
        <form class="m-t" role="form" method="post" action="">
            <div class="form-group">
                <input type="email" name="usuario" class="form-control" placeholder="Usuario" required="">
            </div>
            <div class="form-group">
                <input type="password" name="passfrase" class="form-control" placeholder="Contraseña" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Ingreso</button>

        </form>
        <p class="m-t"> <small>Implementado por David Chávarri &copy; 2015</small> </p>
    </div>
</div>