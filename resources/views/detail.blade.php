@extends('./Layout/main')

@section('content')

<h1>
    Transaction Detail Number : {{ $data['id'] }}
</h1>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>

      <tr class="row">
        <td class="col-6" ><h3>Prouct ID : </h3></td>
        <td class="col-6" ><h3>{{ $data['productID'] }}</h3></td>
      </tr>


      <tr class="row">
        <td class="col-6" ><h3>Product Name : </h3></td>
        <td class="col-6" ><h3>{{ $data['productName'] }}</h3></td>
      </tr>


      <tr class="row">
        <td class="col-6" ><h3>Amount : </h3></td>
        <td class="col-6" ><h3>{{ $data['amount'] }}</h3></td>
      </tr>

      <tr class="row">
        <td class="col-6" ><h3>Customer Name : </h3></td>
        <td class="col-6" ><h3>{{ $data['customerName'] }}</h3></td>
      </tr>

      <tr class="row">
        <td class="col-6" ><h3>Status : </h3></td>
        <td class="col-6" ><h3>{{ $data['status'] }}</h3></td>
      </tr>

      <tr class="row">
        <td class="col-6" ><h3>Transaction Date : </h3></td>
        <td class="col-6" ><h3>{{ $data['transactionDate'] }}</h3></td>
      </tr>

      <tr class="row">
        <td class="col-6" ><h3>Created By : </h3></td>
        <td class="col-6" ><h3>{{ $data['createBy'] }}</h3></td>
      </tr>

      <tr class="row">
        <td class="col-6" ><h3>Created On : </h3></td>
        <td class="col-6" ><h3>{{ $data['createOn'] }}</h3></td>
      </tr>

    </tbody>
  </table>
@endsection


