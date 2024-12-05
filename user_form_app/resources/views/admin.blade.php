@extends('app')

@section('content')
    <h2>Полученные данные</h2>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 3px;
            text-align: center;
        }

        th {
            font-weight: bold;
            background-color: #f2f2f2;
        }
    </style>

    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Сообщение</th>
                <th>Согласие на рассылку</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->message }}</td>
                    <td>{{ $item->mails }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
