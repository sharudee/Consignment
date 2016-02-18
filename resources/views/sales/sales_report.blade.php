<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sales Report</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
       <table>
       @foreach($data as $dbarr)
	<tr>
	<td>{{$dbarr}}
	</td>
	</tr>
	@endforeach
	</table>
       
    </body>
</html>