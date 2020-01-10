@extends('homepage')

@section('title', 'Manage User')
@section('content')

<div class="grid-content">

        <div style="text-align: left; margin-left: -5%; margin-bottom: 2%">
            <button id="manageUser" name="manageUser" type="submit" style="width: 200px; line-height: 35px; background-color: lightskyblue; color: white;">
                Insert New User
            </button>    
        </div>

        <table style="width: 100%; margin: 0% 0% 0% -5%;">
            {{-- Table Head --}}
            <thead>
                <tr>
                    <th class="tbody-mu-content" style="width:10.875%">Profile Picture</th>
                    <th class="tbody-mu-content" style="width:9%">Fullname</th>
                    <th class="tbody-mu-content" style="width:13.75%">E-mail</th>
                    <th class="tbody-mu-content" style="width:8%">Phone</th>
                    <th class="tbody-mu-content" style="width:13.875%">Address</th>
                    <th class="tbody-mu-content" style="width:5%">Gender</th>
                    <th class="tbody-mu-content" style="width:5%">Role</th>
                    <th class="tbody-mu-content" style="width: 4%">Edit</th>
                    <th class="tbody-mu-content" style="width: 4%">Delete</th>
                </tr>
            </thead>
            {{-- Table Body --}}
            <tbody>
            {{-- @foreach($cart as $p) --}}
                <tr>
                    <th class="tbody-mu-content" style="width:10.875%">
                        <img src="/storage/Naruto.jpg" style="padding: 10% 0%" alt="" width="100px" height="150px">
                    </th>
                    <th class="tbody-mu-content" style="width:9%">
                        Albert Sutanto
                    </th>
                    <td class="tbody-mu-content" style="width:13.75%">
                        albertsutanto@gmail.com
                    </td>
                    <td class="tbody-mu-content" style="width: 8%">
                        089689986341
                    </td>
                    <td class="tbody-mu-content" style="width:13.875%">
                        Jl. bukit gading raya barat
                    </td>
                    {{-- price & button remove --}}
                    <td class="tbody-mu-content" style="width:5%">
                        Male
                    </td>
                    <td class="tbody-mu-content" style="width:4%">
                        Admin
                    </td>
                    <td class="tbody-mu-content" style="width: 4%">
                       <a href=""><img src="/storage/edit.png" width="50px" height="50px" alt=""></a> 
                    </td>
                    <td class="tbody-mu-content" style="width: 5%">
                        <img src="/storage/delete.png" width="50px" height="50px" alt="">
                    </td>
                </tr>
            {{-- @endforeach --}}
            </tbody>
        </table>
    
</div>


@endsection