<h1>Members List</h1>
<a href="addmember" > Add Memeber </a>
<br><br>
<table border="1" >
<tr>
<td><b>Name<b></td>
<td><b>Mass<b></td>
<td><b>Height<b></td>
<td><b>Hair Color<b></td>
<td><b>Skin Color<b></td>
<td><b>Eye Color<b></td>
<td><b>Birth Year<b></td>
<td><b>Gender<b></td>
<td><b>Homeworld<b></td>
<td><b>Films<b></td>
<td><b>Species<b></td>
<td><b>Vehicles<b></td>
<td><b>Starships<b></td>
<td><b>Url<b></td>
<td><b>Created<b></td>
<td><b>Edited<b></td>
<td>Action</td>
</tr>
@foreach($members as $row)
<tr style="padding:5px;">
<td>{{ $row['name'] }}</td>
<td>{{ $row['mass'] }}</td>
<td>{{ $row['height'] }}</td>
<td>{{ $row['hair_color'] }}</td>
<td>{{ $row['skin_color'] }}</td>
<td>{{ $row['eye_color'] }}</td>
<td>{{ $row['birth_year'] }}</td>
<td>{{ $row['gender'] }}</td>
<td>{{ $row['homeworld'] }}</td>
<td>{{ $row['films'] }}</td>
<td>{{ $row['species'] }}</td>
<td>{{ $row['vehicles'] }}</td>
<td>{{ $row['starships'] }}</td>
<td>{{ $row['url'] }}</td>
<td>{{ $row['created'] }}</td>
<td>{{ $row['edited'] }}</td>


<td><a href={{"edit/".$row['id']}}>Edit</a>
<a href={{"delete/".$row['id']}}>Delete</a></td>
</tr>
@endforeach
</table>