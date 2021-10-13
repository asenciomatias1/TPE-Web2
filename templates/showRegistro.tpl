{include file="header.tpl"}

    {* <form action="registro/nuevo" method="post">
    <p>E-mail: <input type="text" name="emailUsuario"></p>
    <p>Password: <input type="password" name="passUsuario"></p>
    <input type="submit" value="Registrar">
    </form> *}

    <div class="content">
        <div class="login-form">
            <form action="registro/nuevo" method="post">
                <h2 class="text-center">Registro de Usuario</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" required="required" name="emailUsuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="passUsuario">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>

{include file="footer.tpl"}