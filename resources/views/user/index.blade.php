@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as a user!') }}
                </div>
            </div>

            <br>
            <br>
            <br>
            <h3 class="section-title">Twoje dane:</h3>
            
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

                @foreach ($data as $row)

                        <?php if($id == $row['id']) :?>
                        <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>{{ $row->email_verified_at }}</td>
                        <td>{{ $row->updated_at }}</td>
                        </td>
                        </tr>
                        <?php endif; ?>
                        @endforeach
                    {!! $data->links() !!}
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
