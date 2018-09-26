<style>
    td {
        text-align: right;
    }

    .radio {
        margin-left: 10%;
    }
</style>

<?= form_open('formulario/index') ?>

<table>
    <tr>
        <td><label for="user">Usuário: </label></td>
        <td><input type="text" name="user" id="user"></td>
        <td><?= form_error('user')?></td>        
    </tr>
    <tr>
        <td><label for="nome">Nome: </label></td>
        <td><input type="text" name="nome" id="nome"></td>
        <td><?= form_error('nome')?></td>    
    </tr>
    <tr>
        <td><label for="sobrenome">Sobrenome: </label></td>
        <td><input type="text" name="sobrenome" id="sobrenome"></td>
        <td><?= form_error('sobrenome')?></td>    
    </tr>
    <tr>
        <td><label for="email">Email: </label></td>
        <td><input type="text" name="email" id="email"></td>
        <td><?= form_error('email')?></td>    
    </tr>
    <tr>
        <td><label for="passw">Senha: </label></td>
        <td><input type="password" name="passw" id="passw"></td>
        <td><?= form_error('passw')?></td>    
    </tr>
    <tr>
        <td><label for="cpassw">Confirme a senha: </label></td>
        <td><input type="password" name="cpassw" id="cpassw"></td>
        <td><?= form_error('cpassw')?></td>    
    </tr>
    <tr>
        <td><label for="sexo">Sexo:</label></td>
        <td><?= form_error('sexo')?></td>    
    </tr>
</table>
    
<input type="radio" name="sexo" value="masculino" class="radio"> Masculino <br/>
<input type="radio" name="sexo" value="feminino" class="radio"> Feminino <br/>
<input type="radio" name="sexo" value="outro" class="radio"> Outro <br/>

<input type="submit" value="Enviar">


<?= form_close() ?>