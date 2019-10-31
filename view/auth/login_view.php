<h1>Login</h1>
<?php if($data != null): ?>
	<br>
	<pre><?= var_dump($data['nome']); ?></pre>
<?php endif; ?>
<br>
<form action='login.html' method='post'>
	<p>nome:</p>
	<input type='text' name='nome'/>
	<p>senha:</p>
	<input type='password' name='senha'/>
	<br>
	<br>
	<input type='submit' value='acessar'/>
</form>