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
  <h2 align="center">{{$project->name}} Project {{$file->name}} Report</h2>
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
        <td>{{number_format($project->files->sum('total'))}} </td>
      </tr>
    </tbody>
  </table>
  <br>
  <table > 
    <caption><strong>File Items</strong></caption>
      <thead>
        <tr>
          <th>Item Name</th>
          <th>Amount Paid</th>
          <th>Payment Date</th>
          <th>Paid To</th>
          <th>Payment Type</th>
        </tr>
      </thead>
    <tbody>
      
        @foreach($materials as $key => $material)
          <tr>
            <td>{{ $material->material_name }}</td>
            <td>{{number_format($material->amount_paid) }}</td>
            <td>{{ $material->payment_date->toFormattedDateString()}}</td>
            <td>{{ $material->paid_to }}</td>
            <td>{{ $material->payment_type }}</td>
          </tr>
        @endforeach      
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Total</strong></td>
        <td>{{number_format($materials->sum('amount_paid'))}} </td>
      </tr>
    </tbody>
  </table> 
  <footer>
    <p align="center">BuildOptions Limited, Suite 10,12,13 Amma Center, Oro Ago Crescent, Garki 2 - Abuja</p>
  </footer>   
</body>
</html>