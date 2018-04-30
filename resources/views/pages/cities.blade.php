@extends('layout/main')

@section('content')

    <br>

    <form method="POST" action="/country/{{$country->id}}/city" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label for="city_name" class="col-sm-2 control-label">Miesto pavadinimas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="city_name" id="city_name">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>


    <div class="row">
        <h2>{{ucfirst($country->country_name)}} miestai:</h2>
        <table class="table table-bordered">
            @foreach($country->cities as $city)
                <tr>
                    <td>
                        <p>{{ucfirst($city->city_name)}}</p>
                    </td>
                    <td>
                        <p><a href="/country/{{$country->id}}/{{$city->id}}/delete">Trinti</a></p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection