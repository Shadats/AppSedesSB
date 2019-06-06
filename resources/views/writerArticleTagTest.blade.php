<!DOCTYPE html>
<html>

<head>
    <style>
    table, td, th {
    border: 1px solid black;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th {
      height: 50px;
    }
    </style>
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
     @foreach($writer->articles as $article)
     @foreach ($article->tags as $tag) 
     <tr>
     	<td>{{$writer->authors_name}}</td>
     	<td>{{$writer->real_name}}</td>
      

        <td>{{$article['title']}}</td>
     	<td>{{$article['about']}}</td>

            
     	  <td>{{$tag['name']}}</td>
         
     </tr>
    @endforeach          
    @endforeach
    @endforeach
   	</table> 
   


</body>
</html>