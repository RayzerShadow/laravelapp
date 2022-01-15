@extends('layouts.app')

@section('content')
<div class="container">

    <br>
    <br>
    <br>
    <h3 class="section-title">Twoje usługi</h3>
    <div class="section-title-divider"></div>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Cena</th>
                <th scope="col">Opis</th>
                <th scope="col">Czas trwania</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($data as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->description }}</td>
                <td>{{ $row->time }}</td>
                <td><a href="{{ route('admin.edit', ['id' => $row->id])}}" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                <form method="POST" action="{{ route('admin.delete', ['id' => $row->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></button>
            </form></td>
            </tr>
            @endforeach
            {!! $data->links() !!}
        </tbody>

    </table>
    <h3 class="section-title">Użytkownicy</h3>

    <div class="section-title-divider"></div>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Imie i Nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Konto utworzono</th>
                <th scope="col">Zweryfikowano maila</th>
                <th scope="col">Ostatnia modyfikacja konta</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($user as $rowu)


                <tr>
                <th scope="row">{{ $rowu->id }}</th>
                <td>{{ $rowu->name }}</td>
                <td>{{ $rowu->email }}</td>
                <td>{{ $rowu->created_at }}</td>
                <td>{{ $rowu->email_verified_at }}</td>
                <td>{{ $rowu->updated_at }}</td>
              
                <td><a href="{{ route('admin.edit_user', ['id' => $rowu->id])}}" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                <form method="POST" action="{{ route('admin.delete_user', ['id' => $rowu->id]) }}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></button>
            </form></td>
                </tr>

                @endforeach
            {!! $user->links() !!}
        </tbody>

    </table>








        <br>
        <br />
        <h3 class="section-title">Dodaj nową usługę do bazy</h3>
        <div class="section-title-divider"></div>
        <br />
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <br />

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Formularz dodawania usługi</h3>
            </div>
            <div class="panel-body">
                <br />
                <form method="post" action="{{ url('store_image/insert_image') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Nazwa</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Cena</label>
                            <div class="col-md-8">
                                <input type="text" name="price" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Opis</label>
                            <div class="col-md-8">
                                <input type="text" name="description" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Czas trwania</label>
                            <div class="col-md-8">
                                <input type="time" min="00:00" max="10:00" name="time" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-4">Zdjęcia</label>
                            <div class="col-md-8">
                                <input type="file" name="image" />
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

@endsection
