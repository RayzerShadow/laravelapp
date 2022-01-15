@extends('layouts.app')

@section('content')
<div class="container">
<br>
<br>
<br>
<br>
        <h3 class="section-title">Edytujesz użytkownika: {{ $service_user->name}} </h3>
        <div class="section-title-divider"></div>
        <br />
<br>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Formularz edytowania użytkownika</h3>
            </div>
            <div class="panel-body">
                <br />
                <form method="put" action="{{ route('user.update_user', ['id' => $service_user->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Imie i Nazwisko</label>
                            <div class="col-md-8">
                                <input value="{{ $service_user->name}}" type="text" name="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input value="{{ $service_user->Email}}"  type="text" name="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Konto utworzono</label>
                            <div class="col-md-8">
                                <input value="{{ $service_user->created_at}}" type="text" name="created_at" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Zweryfikowano maila</label>
                            <div class="col-md-8">
                                <input value="{{ $service_user->email_verified_at}}"  type="time" name="email_verified_at" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Ostatniia modyfikacja konta</label>
                            <div class="col-md-8">
                                <input value="{{ $service_user->updated_at}}"  type="time" name="updated_at" class="form-control" />
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
