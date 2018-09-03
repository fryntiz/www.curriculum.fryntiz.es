<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Messages')

{{-- Descripción --}}
@section('description', 'Contact')

{{-- Palabras clave --}}
@section('keywords', 'curriculum, curriculum online, Raúl Caro Pastorino, contact')

<style>
    table {
        width: 100%;
    }
</style>

{{-- Contenido de la sección --}}
@section('content')
    <h2>Mensajes</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>email</th>
                <th>Mensaje</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($messages as $msg)
                <tr>
                    <td>{{ $msg->first_name }}</td>
                    <td>{{ $msg->last_name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop