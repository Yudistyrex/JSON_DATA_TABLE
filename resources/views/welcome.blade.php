@extends('./Layout/main')

@section('content')

<table class="table">
    <div class="add" style="display: flex;">
        <a href="/add" class="btn btn-success btn-lg" style="height: 50px;margin-left: auto;" role="button" aria="true">Add Data</a>
    </div>

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Amount</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Status</th>
            <th scope="col">Transaction Date</th>
            <th scope="col">Create By</th>
            <th scope="col">Create On</th>
            <th scope="col"></th>

        </tr>
    </thead>

    <tbody>
        @foreach ($datas['data'] as $d)
        <tr>
            <td>{{ $d['id'] }}</td>
            <td>{{ $d['productID'] }}</td>
            <td>{{ $d['productName'] }}</td>
            <td>{{ $d['amount'] }}</td>
            <td>{{ $d['customerName'] }}</td>
            <td>{{ $d['status'] }}</td>
            <td>{{ $d['transactionDate'] }}</td>
            <td>{{ $d['createBy'] }}</td>
            <td>{{ $d['createOn'] }}</td>


            <td  style="display: flex;">
                <div class="b" style="margin-left: auto">
                    <a href="/edit/{{ $d['id'] }}" class="btn btn-primary btn-lg" style="height: 50px;margin-right: 20px" role="button" aria="true">EDIT</a>

                    <a href="/detail/{{ $d['id'] }}" class="btn btn-warning btn-lg" style="height: 50px" role="button" aria="true">DETAIL</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection


