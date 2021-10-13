{include file="header.tpl"}

    {* <form action="login/enviar" method="post">
        <p>E-mail: <input type="text" name="emailUsuario"></p>
        <p>Password: <input type="password" name="passUsuario"></p>
        <input type="submit" value="Iniciar Sesion">
    </form>
    <h4 class="alert-danger">{$error}</h4> *}

    <div class="content">
        <div class="login-form">
            <form action="login/enviar" method="post">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" required="required" name="emailUsuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="passUsuario">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Iniciar Sesion</button>
                </div>
                <p class="alert-danger error-login">{$error}</p>
            </form>
        </div>
    </div>

{include file="footer.tpl"}