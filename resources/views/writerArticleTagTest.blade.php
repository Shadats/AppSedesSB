<!DOCTYPE html>
<html>
<head>
	<title>Writers</title>
</head>
<body>
 

 
   <table>
     <tr>
     	<th>Nombre de autor</th>
     	<th>Nombre real</th>
     	<th>Titulo de articulo</th>
     	<th>Tema del articulo</th>
        <th>Tags del articulo</th>
     </tr>
     @foreach($writers as $writer)
     <tr>
     	<td>{{$writer->authors name}}</td>
     	<td>{{$writer->real name}}</td>
        @foreach($articles as $article)
        <td>{{$writer->articles['title']}}</td>
     	<td>{{$writer->articles['about']}}</td>
     	<td>{{$article->tags['name']}}</td>
        @endforeach
     </tr>
    @endforeach
   	</table> 
   


</body>
</html>