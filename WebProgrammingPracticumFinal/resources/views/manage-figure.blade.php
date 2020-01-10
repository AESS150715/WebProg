@extends('homepage')

@section('title', 'Manage Figure..')
@section('content')

<div class="grid-content">

        <div style="text-align: left; margin-left: 5.065%; margin-bottom: 2%">
            <button id="insertFigure" name="insertFigure" type="submit" style="width: 200px; line-height: 35px;">
                Insert New Figure
            </button>    
        </div>

        <table style="width: 90%; margin: 0% 0% 0% 5%;">
            {{-- Table Head --}}
            <thead>
                <tr>
                    <th>Figure Picture</th>
                    <th>Figure Name</th>
                    <th>Figure Category</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th style="width: 7.5%">Edit</th>
                    <th style="width: 7.5%">Delete</th>
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
                        Bishoujo
                    </td>
                    <td class="tbody-mf-content" style="padding: 2% 2%">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem repudiandae harum minus incidunt dolore eius.
                    </td>
                    <td class="tbody-mf-content">
                        <input type="number" name="figureStock" style="width: 100px" disabled placeholder="10">
                    </td>
                    {{-- price & button remove --}}
                    <td class="tbody-mf-content">
                        Rp. 1.500.000,00
                    </td>
                    <td class="tbody-mf-content" style="width: 7.5%">
                        <img src="/storage/edit.png" width="50px" height="50px" alt="">
                    </td>
                    <td class="tbody-mf-content" style="width: 7.5%">
                        <img src="/storage/delete.png" width="50px" height="50px" alt="">
                    </td>
                </tr>
            {{-- @endforeach --}}
            </tbody>
        </table>
    
</div>


@endsection