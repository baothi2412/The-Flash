@extends('layouts.admin.admin-layout')

@section('content')
    <x-data-table :records="$records" :columnsName="$club"></x-data-table>
@endsection
