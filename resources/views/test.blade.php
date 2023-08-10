@extends('layouts.admin.admin-layout')

@section('content')
    <x-data-table :columnsName="$club"></x-data-table>
@endsection
