@extends('layout/main')

@section('content')

    <br>

    <form method="POST" action="/publish" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Šalies pavadinimas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="country_name" id="country_name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>

    <br>

    <div class="row">
        <h2>Šalys:</h2>
        <table class="table table-bordered">
            @foreach($countries as $country)
                <tr>
                    <td>
                        <p><a href="country/{{$country->id}}">{{ucfirst($country->country_name)}}</a></p>
                    </td>
                    <td>
                        <p><a href="/country/{{$country->id}}/delete">Trinti</a></p>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
    {{$countries->links()}}

@endsection