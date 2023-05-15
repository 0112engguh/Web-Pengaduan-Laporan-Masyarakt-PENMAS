<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<body>

<h2 style="text-align: center">Laporan</h2>

<table>
  <thead>
    <tr style="background: #004346;color:#ffff">
      <th>Tanggal</th>
      <th>Laporan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td>{{date('d F Y', strtotime($item->created_at))}}</td>
        <td>{{$item->laporan}}</td>
        <td>{{$item->status}}</td>
      </tr>  
    @endforeach
  </tbody>
</table>

</body>
</html>
