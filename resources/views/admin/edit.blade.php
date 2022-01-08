@extends('layouts.app')

@section('content')
<div class="container">
<br>
<br>
<br>
<br>
        <h3 class="section-title">Edytujesz usługę: {{ $service->name}} </h3>
        <div class="section-title-divider"></div>
        <br />
<br>
     

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Formularz dodawania usługi</h3>
            </div>
            <div class="panel-body">
                <br />
                <form method="put" action="{{ route('services.update', ['id' => $service->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Nazwa</label>
                            <div class="col-md-8">
                                <input value="{{ $service->name}}" type="text" name="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Cena</label>
                            <div class="col-md-8">
                                <input value="{{ $service->price}}"  type="text" name="price" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Opis</label>
                            <div class="col-md-8">
                                <input value="{{ $service->description}}" type="text" name="description" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Czas trwania</label>
                            <div class="col-md-8">
                                <input value="{{ $service->time}}"  type="time" name="time" class="form-control" />
                            </div>
                        </div>
                    </div>

                 
                    <div class="form-group">
                        <br />
                        <br />
                        <input type="submit" name="store_image" class="btn btn-primary" value="Zapisz" />
                    </div>
                </form>
            </div>
        </div>

        </div>

        <br>
<br>
<br>


@endsection
