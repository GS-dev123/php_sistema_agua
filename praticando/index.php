<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de cliente</title>
</head>
<body>
	<form method="post" name="formeCadastro" action="cadcliente.php">
		<h1>cadastro do cliente</h1>
		<table width="100%">
			<tr>
				<th width="100%">Nome</th>
				<td><input type="text" name="txtNome"></td>
			</tr>
			<tr>
				<th width="100%">Nome</th>
				<td><input type="text" name="txtNome"></td>
			</tr>
			<tr>
				<th width="100%">Nome</th>
				<td><input type="text" name="txtNome"></td>
			</tr>
			<tr>
				<th width="100%">Nome</th>
				<td><input type="text" name="txtNome"></td>
			</tr>
			<tr>
				<th width="100%">Sexo</th>
				<td><input type="radio" name="sexo" value="M" checked>Masculino<br>
					<input type="radio" name="sexo" value="F" checked>Femenino<
				</td>
			</tr>
			<tr>
				<th width="100%">Àreas de Interesse</th>
				<td>
					<input type="checkbox" name="checkcinema" value="true">Cinema<br>
					<input type="checkbox" name="checkcinema" value="true">Musica<br>
					<input type="checkbox" name="checkcinema" value="true">Informatica<br>
				</td>
			</tr>
			<tr>
				<th width="100%">Login</th>
				<td><input type="text" name="txtLogin"></td>
			</tr>
			<tr>
				<th width="100%">Senha</th>
				<td><input type="password" name="txtSenha"></td>
			</tr>
			<tr>
				<th width="100%">Senha</th>
				<td><input type="password" name="txtSenha"></td>
			</tr>
			
			<tr>
				<th width="100%">Confirmação de Senha</th>
				<td><input type="password" name="txtSenha2"></td>
			</tr>
			
			<tr>
				<th width="100%">Senha</th>
				<td><input type="submit" name="btnEnviar" value="Enviar"></td>
			</tr>
			<tr>
				<th width="100%">Senha</th>
				<td><input type="reset" name="btnLimpar" value="Limpar"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>