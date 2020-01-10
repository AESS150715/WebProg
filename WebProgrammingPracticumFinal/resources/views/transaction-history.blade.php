@extends('homepage')

@section('title', 'Transaction History')
@section('content')

<div class="grid-content">

        <div style="text-align: left; margin-left: 5.065%; margin-bottom: 2%">
            <span class="trans-detail">Transaction Date :</span><br>
            <span class="trans-detail">Transaction Number :</span><br>
            <span class="trans-detail">Buyer Name : </span><br>
        </div>

        <table style="width: 90%; margin: 0% 0% 0% -3.75%;">
            {{-- Table Head --}}
            <thead>
                <tr>
                    <th>Figure Picture</th>
                    <th>Figure Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            {{-- Table Body --}}
            <tbody>
            {{-- @foreach($cart as $p) --}}
                <tr>
                    <th class="tbody-mf-content">
                        <img src="/storage/raphtalia.jpg" style="padding: 10% 0%" alt="" width="100px" height="150px">
                    </th>
                    <th class="tbody-mf-content">
                        Raphtalia
                    </th>
                    <td class="tbody-mf-content">
                        <input type="number" name="figureStock" style="width: 100px" disabled placeholder="10">
                    </td>
                    {{-- price & button remove --}}
                    <td class="tbody-mf-content">
                        Rp. 1.500.000,00
                    </td>
                    <td class="tbody-mf-content" style="width: 7.5%">
                        Rp. 5.000.000,00
                    </td>
                </tr>
            {{-- @endforeach --}}
            </tbody>

            <tfoot>
                <tr style="background-color: lightskyblue; color:white">
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    <td style="background-color: white"></td>
                    {{-- <th></th> --}}
                    <th>
                        <span>Total</span>
                    </th>
                    <th>
                        <span>Rp. 10.000.000,00</span>
                    </th>
                </tr>
            </tfoot>
        </table>
    
</div>


@endsection