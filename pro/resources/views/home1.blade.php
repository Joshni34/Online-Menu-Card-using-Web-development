<<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body >
<form method="post"  action="/addqry" style="width:45%;">
<input type="hidden" name="_token" value="{{csrf_token()}}"></input>
<label>ice cream</label>	
<input type="text"  name="name" class="form-control"><br></input>
<label>Price</label>	
<input type="number"  name="price" class="form-control"><br></input>
<input type="submit" name="add" class="btn btn-info" value="insert"></input>
</form>
<table border=1>
<tr>
	<th>ice cream</th>
	<th>price</th>
	<th>edit</th>
	<th>delete</th>
</tr>
	@foreach($res as $items)
	<tr>
		<td>{{ $items->dname }}</td>
		<td>{{ $items->price }}</td>
		<td><a href="/edit/{{ $items->id }}">edit</a></td>
		<td><a href="/delete/{{ $items->id }}">delete</a></td>	
	</tr>
	@endforeach
</table>
</body>
</html>