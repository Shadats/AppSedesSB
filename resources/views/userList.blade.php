<!DOCTYPE html>
<html>
<head>
	<title>userList</title>
</head>
<body>
 

 
   <table>
     <tr>
     	<th>Nombre</th>
     	<th>Apellido</th>
     	<th>email</th>
     	<th>perfil</th>
     </tr>
     @foreach($users as $user)
     <tr>
     	<td>{{$user->name}}</td>
     	<td>{{$user->lastname}}</td>
     	<td>{{$user->email}}</td>
     	<td>{{$user->profiles['descripcion']}}</td>
     </tr>
    @endforeach
   	</table> 
   


</body>
</html>