<h1>Add Memebers</h1>
<form method="POST" action="/edit">
@csrf 
<input type="hidden" name="id"  value="{{ $members['id'] }} " required>
<input type="text" name="name" value="{{ $members['name'] }} " required><br><br>
<input type="text" name="height" value="{{ $members['height'] }} " required><br><br>
<input type="text" name="mass" value="{{ $members['mass'] }} " required><br><br>
<input type="text" name="hair_color" value="{{ $members['hair_color'] }} " required><br><br>
<input type="text" name="skin_color" value="{{ $members['skin_color'] }} " required><br><br>
<input type="text" name="eye_color" value="{{ $members['eye_color'] }} " required><br><br>
<input type="text" name="birth_year" value="{{ $members['birth_year'] }} " required><br><br>
<input type="text" name="films" value="{{ $members['films'] }} " required><br><br>
<input type="text" name="gender" value="{{ $members['gender'] }} " required><br><br>
<input type="text" name="homeworld" value="{{ $members['homeworld'] }} " required><br><br>
<input type="text" name="species" value="{{ $members['species'] }} " required><br><br>
<input type="text" name="vehicles" value="{{ $members['vehicles'] }} " required><br><br>
<input type="text" name="starships" value="{{ $members['starships'] }} " required><br><br>
<button type="submit" name="submit">Update </button>
</form>