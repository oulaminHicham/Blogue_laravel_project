@section('form')
    <form action="{{route('posts.store')}}" method="POST" class="w-75 mx-auto">
        @csrf
        <div class="mb-3 mt-3">
            <label for="titel" class="form-label">Title:</label>
            <input type="text" class="form-control" id="titel" placeholder="Enter Title" name="title">
        </div>

        <div class="mb-3 mt-3">
            <label for="dex">Descreption:</label>
            <textarea class="form-control" rows="5" id="dex" name="dex"></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="poste-cretor" class="form-label">Poste Creator:</label>
            <select class="form-select" name="creator">
                <option value="Ahmed">Ahmed</option>
                <option value="Mohammed">Mohamed</option>
            </select>
        </div>
        <div class="mb-3 mt-3">
            @yield('autherContent')
        </div>
        <button type="submit" class="btn btn-success">@yield('buttonVal')</button>
    </form>
@show