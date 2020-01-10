@extends('homepage')

@section('title', 'Cart Page')
@section('content')

<div class="grid-content">
        <table id="cart-table">
            {{-- Table Head --}}
            <thead id="table-header">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            {{-- Table Body --}}
            <tbody>
            {{-- @foreach($cart as $p) --}}
                <tr>
                    <th class="table-content">
                        <img src="/storage/raphtalia.jpg" style="padding: 10% 0%" alt="" width="100px" height="150px">
                        <br>
                        <span>Raphtalia</span>
                    </th>
                    <th class="table-content">
                        <input type="number" name="figureStock" disabled placeholder="10">
                    </th>
                    {{-- price & button remove --}}
                    <th id="price-rmbtn"> 
                        <span style="padding-right: 10%; width: 100%">Rp. 1.500.000,00</span>
                        <form action="/cart" method="post" >
                            @csrf
                            <button type="submit" name="removeBtn" style="background-color: red; color: white; width: 150px; height: 35px;" value="">Remove</button>
                        </form>
                    </th>
                    <th style="border: none; background-color:white;">
                        
                    </th>
                </tr>
            {{-- @endforeach --}}
            </tbody>
                
            <tr style="background-color: lightskyblue">
                    <th style="background-color: white;"></th>
                    {{-- <th></th> --}}
                    <th>
                        <span>Total</span>
                    </th>
                    <th>
                        <span>Rp. </span>
                    </th>
            </tr>

            <tfoot style="background-color: white;">
                {{-- <td></td> --}}
                <td></td>
                <td></td>
                <td>
                    <form action="" method="">
                        @csrf
                    <button id="btn_checkout" name="checkoutBtn" type="submit">CHECKOUT</button>
                    </form>
                </td>
            </tfoot>
        </table>
    
</div>


@endsection