@extends('homepage')

@section('title', 'Manage Figure Category')
@section('content')

<div class="grid-content" style="margin-left: 13%">

        <h1 style="text-align: left; padding: 2% 30% ">MANAGE FIGURE CATEGORY</h1>

        <div style="text-align: left; margin-left: 5.065%; margin-bottom: 2%">
            <button id="manageFigurecategory" name="manageFigurecategory" type="submit" style="width: 200px; line-height: 35px;">
                Insert New Category
            </button>    
        </div>

        <table style="width: 70%; margin: 0% 0% 0% 5%;">
            {{-- Table Head --}}
            <thead>
                <tr>
                    <th style="90%">Manage Category</th>
                    <th style="width: 2.5%">Edit</th>
                    <th style="width: 2.5%">Delete</th>
                </tr>
            </thead>
            {{-- Table Body --}}
            <tbody>
            {{-- @foreach($cart as $p) --}}
                <tr>
                    <td class="tbody-mfc-content" style="padding: 2% 2%">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias exercitationem repudiandae harum minus incidunt dolore eius.
                    </td>
                    <td class="tbody-mfc-content" style="width: 2.5%">
                        <img src="/storage/edit.png" width="50px" height="50px" alt="">
                    </td>
                    <td class="tbody-mfc-content" style="width: 2.5%">
                        <img src="/storage/delete.png" width="50px" height="50px" alt="">
                    </td>
                </tr>
            {{-- @endforeach --}}
            </tbody>
        </table>
    
</div>


@endsection