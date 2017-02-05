
<form action="<?=$wwwroot?>/register/action.php" method="POST">
	<label>Name: <input type="text" name="name"></label>
	<label>Email: <input type="text" name="email"></label>
	<input type="hidden" name="action" value="save">
	<input type="submit" value="save">
</form>