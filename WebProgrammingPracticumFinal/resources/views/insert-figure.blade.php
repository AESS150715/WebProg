@extends('homepage')

@section('title', 'Insert Figure..')
@section('content')

<div class="grid-content">
    <form class="Insert-figure-form" action="inserting-figure" method="post">
        <h2 class="Insert-figure-input-form" style="font-size: 40px;text-align: center; padding: 20px 0px;">INSERT FIGURE</h2>
        @csrf
        <div class="Insert-figure-input-form">
            <input type="text" name="figureName" minlength="5" class="Insert-figure-input-form-text" placeholder="Figure Name" style="width: 90%">
        </div>
        <div class="Insert-figure-input-form">
            <textarea name="figureDesc" rows="10" cols="47" placeholder="Description"></textarea>
        </div>
        <div class="Insert-figure-input-form">
            <input  type="number" name="figureStock" min="0" class="Insert-figure-input-form-text" placeholder="Quantity" style="width: 90%">
        </div>
        <div class="Insert-figure-input-form">
            <input type="number" name="figurePrice" min="100000" class="Insert-figure-input-form-text" name="phone" placeholder="Price" style="width: 90%">
        </div>
        <div id="Insert-figure-input-form" style="margin-bottom`: 20px">
            <select id="gender" type="combobox" class="Insert-figure-input-form" name="categoryName" required autocomplete="figureCategory">
                <option value="" selected disabled hidden>Category</option>
                <option value="Male">Bishoujo (Girl's Figurine)</option>
                <option value="Female">Shounen (Boy's Figurine)</option>
                <option value="Others">Character</option>
            </select>
        </div>
        <label for="pp">{{ __('Figure Picture') }}</label>
                        <div style="margin-top: 20px">
                            <div>
                                <input id="pp" type="file" name="figurePicture" style="font-size: 14px" required autocomplete="figurePicture">
                            </div>
                        </div>
        <div class="Insert-figure-input-form">
            <button type="submit" class="Insert-figure-input-form-text" style="width:80%; margin-top:20px; line-height: 40px; background-color: blue; color:white;">Insert</button>
        </div>
    </form>
</div>

@endsection

