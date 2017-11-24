<form method="POST" action="submit.php">
	Användarnamn:
		<input text="text" name="Username">
	</br>
	Lösenord:
		<input text="text" name="Password">
	</br>
	
	Födelsedatum:
	</br>
	<select name="Year">
	<?php
		for($i = 2018 ; $i >= 1900 ; $i--){
			echo "<option value='$i'>$i</option>";
		}
	?>
	</select>
	
		<select name="Month">
		<option value="01">Jan</option>
		<option value="02">Feb</option>
		<option value="03">Mar</option>
		<option value="04">Apr</option>
		<option value="05">Maj</option>
		<option value="06">Jun</option>
		<option value="07">Jul</option>
		<option value="08">Aug</option>
		<option value="09">Sep</option>
		<option value="10">Oct</option>
		<option value="11">Nov</option>
		<option value="12">Dec</option>
	</select>
	
	<select name="Date" >
		<?php
		for($i = 31 ; $i >= 1 ; $i--){
			echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	
	</br>
	Förnamn:
		<input type="text" name="Firstname">
		</br>
	Efternamn:
		<input type="text" name="Lastname">
		</br>
		Mail:
		<input type="text" name="Mail">
	</br>
		<input type="submit" value="Send">
	
</form>