@extends('layouts.notifications.inquire')
@section('content')

    <tr>
        <td style="padding:20px 0px 20px 50px">
            <p style="font-size:18px"><b>Mensaje de</b>: {{$name}}</p>
            <p>Mensaje del formulario principal.</p>
            <center style="background:#f6f6f6; padding:10px;">
                <table>
                    <tbody>
                    <tr>
                        <td style="text-align:left">
                            <p><strong>Package: {{$package}}</strong></p>
                            <p><strong>Travellers: {{$number}}</strong></p>
                            <p><strong>Email: {{$email}}</strong></p>
                            <p><strong>Phone: {{$tel}}</strong></p>
                            <p><strong>Date: {{$date}}</strong></p>
                            <p><strong>Accommodation: {{$accommodation}}</strong></p>
                            <p><strong>Comment: {{$comment}}</strong></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>

@stop