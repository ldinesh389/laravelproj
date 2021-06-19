<h1>Add Memebers</h1>
<form method="POST" action="add">
@csrf 
<input type="text" name="name" placeholder="Enter name" required><br><br>
<input type="text" name="height" placeholder="Enter height" required><br><br>
<input type="text" name="mass" placeholder="Enter mass" required><br><br>
<input type="text" name="hair_color" placeholder="Enter hair color" required><br><br>
<input type="text" name="skin_color" placeholder="Enter skin color" required><br><br>
<input type="text" name="eye_color" placeholder="Enter eye color" required><br><br>
<input type="text" name="birth_year" placeholder="Enter birth year" required><br><br>
<input type="text" name="films" placeholder="Enter films" required><br><br>
<input type="text" name="gender" placeholder="Enter gender" required><br><br>
<input type="text" name="homeworld" placeholder="Enter homeworld" required><br><br>
<input type="text" name="species" placeholder="Enter species" required><br><br>
<input type="text" name="vehicles" placeholder="Enter vehicles" required><br><br>
<input type="text" name="starships" placeholder="Enter starships" required><br><br>
<button type="submit" name="submit">Add </button>
</form>