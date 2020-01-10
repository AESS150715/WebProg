@extends('homepage')

@section('title', 'Manage Feedback Page')
@section('content')

<div class="grid-content" style="margin-left: 13%">

        <h1 style="text-align: left; padding: 2% 25% ">MANAGE FEEDBACK</h1>

        <table style="width: 80%; margin: 1% 0% 20% -7.5%;">
            {{-- Table Head --}}
            <thead>
                <tr>
                    <th style="width: 65%">Feedback Description</th>
                    <th style="width: 15%">Status</th>
                    <th style="width: 10%">Approve</th>
                    <th style="width: 10%">Reject</th>
                </tr>
            </thead>
            {{-- Table Body --}}
            <tbody>
            {{-- @foreach($cart as $p) --}}
                <tr>
                    <td class="tbody-mfc-content" style="padding: 2% 2%;width: 65%">
                        Lorem ipsum dolor sit amet consectetur!
                    </td>
                    <td class="tbody-mfc-content" style="padding: 2% 2%; width: 15%;">
                        Approved
                    </td>
                    <td class="tbody-mfc-content" style="width: 10%">
                        <a href=""><img src="/storage/Approved.png" width="50px" height="50px" alt=""></a>
                    </td>
                    <td class="tbody-mfc-content" style="width: 10%">
                        <a href=""><img src="/storage/Reject.png" width="50px" height="50px" alt=""></a>
                    </td>
                </tr>
            {{-- @endforeach --}}
            </tbody>
        </table>
    
</div>


@endsection