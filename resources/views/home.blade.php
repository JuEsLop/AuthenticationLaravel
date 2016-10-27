@extends('app')
@section('content')
<!DOCTYPE html>
<htmls>
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            htmls, bodys {
                height: 100%;
            }
            bodys {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .containers {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .contents {
                text-align: center;
                display: inline-block;
            }
            .titles {
                font-size: 96px;
                margin-bottom: 40px;
            }

        </style>
    </head>
    <bodys>
        <div class="containers">
            <div class="contents">
                <div class="titles">Laravel 5</div>
            </div>
        </div>
    </bodys>
</htmls>
@endsection