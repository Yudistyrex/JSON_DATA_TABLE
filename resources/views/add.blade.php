@extends('./Layout/main')

@section('content')

<h1>INPUT DATA TO TABLE</h1>

<form action="{{ route('input') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

    <table class="table">

        <thead>
            <tr>
                <th scope="col-6"></th>
                <th scope="col-6"></th>
            </tr>
        </thead>

        <tbody>

            <tr class="row">
                <td class="col-6">ID </td>
                <td class="col-6"><input type="text" id="id" name="id" style="width: 100%"><br></td>
            </tr>

            <tr class="row">
                <td class="col-6">Product ID </td>
                <td class="col-6"><input type="text" id="productID" name="productID" style="width: 100%"><br></td>
            </tr>

            <tr class="row">
                <td class="col-6">Product Name </td>
                <td class="col-6"><input type="text" id="productName" name="productName" style="width: 100%"><br></td>
            </tr>

            <tr class="row">
                <td class="col-6">Amount </td>
                <td class="col-6"><input type="text" id="amount" name="amount" style="width: 100%"><br></td>
            </tr>

            <tr class="row">
                <td class="col-6">Customer Name </td>
                <td class="col-6"><input type="text" id="customerName" name="customerName"  style="width: 100%"><br></td>
            </tr>

            <tr class="row">
                <td class="col-6">Status</td>
                <td class="col-6"><input type="text" id="status" name="status" style="width: 100%"><br></td>
            </tr>

          <tr class="row">
            <td class="col-6">Transaction Date</td>
            <td class="col-6"><input type="text" id="transactionDate" name="transactionDate" style="width: 100%"><br></td>
          </tr>

          <tr class="row">
            <td class="col-6">Create By</td>
            <td class="col-6"><input type="text" id="createBy" name="createBy" style="width: 100%"><br></td>
          </tr>

          <tr class="row">
            <td class="col-6">Create On</td>
            <td class="col-6"><input type="text" id="createOn" name="createOn" style="width: 100%"><br></td>
          </tr>

        </tbody>
      </table>




    <button type="submit">Submit</button>

</form>
@endsection


