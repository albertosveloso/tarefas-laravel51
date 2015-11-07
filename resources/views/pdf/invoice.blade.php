<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Relatório teste</title>
    {!! Html::style('css/pdf.css') !!}
  </head>
  <body>
 
    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>{{ $titulo }}</h1>
          <div class="date">Data do relatório: {{ $date }}</div>
        </div>
      </div>
      <br/>
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">ID</th>
            <th class="desc">Nome </th>
            <th class="unit">Preço</th>
            <th class="total">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">{{ $data['quantity'] }}</td>
            <td class="desc">{{ $data['description'] }}</td>
            <td class="unit">{{ $data['price'] }}</td>
            <td class="total">{{ $data['total'] }} </td>
          </tr>
 
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td >Total geral</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
  </body>
</html>