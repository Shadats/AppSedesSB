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
     	<td>{{$writer->authors_name}}</td>
     	<td>{{$writer->real_name}}</td>
        @foreach($writer->articles as $article)
        <td>{{article['title']}}</td>
     	<td>{{article['about']}}</td>
     	<td>{{$article->tags['name']}}</td>
        @endforeach
     </tr>
    @endforeach
   	</table> 
   


</body>
</html>