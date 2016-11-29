<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BuildOptions | {{$project->name}} </title>	
  <style type="text/css">
    table{
      width: 70%;
      margin: 0 auto;
      border-collapse: collapse;      
      
    }

    th, td {
      width: 70%;
      border: 1px solid black;
      margin: 0 auto;
    }
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin: 0 0 5px; 
    }
    footer {
        position: absolute;
        left: 0;
        bottom: 0;
        height: 5px;
        width: 100%;
    }
  </style>
</head>      
<body>	
  <h3 align="center">BuildOptions Limited</h3>
  <h2 align="center">{{$project->name}} Project Report</h2>
  <h4 align="center">{{$project->location}}</h4>
  
  <table>    
      <thead>
        <tr>
        <th>Project Budget</th>
        <th>Project Expenditure</th></tr>
      </thead>    
    <tbody>
      <tr>
        <td>{{number_format($project->budget)}} </td>
        <td>{{number_format($files->sum('total'))}} </td>
      </tr>
    </tbody>
  </table>
  <br>
  <table > 
    <caption><strong>Project Files Breakdown</strong></caption>
      <thead>
        <tr>
          <th>File Name</th>
          <th>Total</th>
        </tr>
      </thead>
    <tbody>
      
        @foreach($files as $key => $file)
          <tr>
            <td>{{$file->name}} </td>
            <td>{{number_format($file->total)}}</td>
          
        @endforeach
      </tr>
      <tr>
        <td><strong>Total</strong></td>
        <td>{{number_format($files->sum('total'))}} </td>
      </tr>
    </tbody>
  </table> 
  <footer>
    <p align="center">BuildOptions Limited, Suite 10,12,13 Amma Center, Oro Ago Crescent, Garki 2 - Abuja</p>
  </footer>   
</body>
</html>