@extends('layouts.admin.admin-layout')

@section('content')
    <x-data-table :columnsName="$club" :records="$datas"></x-data-table>
@endsection
