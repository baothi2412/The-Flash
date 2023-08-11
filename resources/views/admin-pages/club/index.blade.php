@extends('layouts.admin.admin-layout')


@section('content')
    <x-create-form title="Create New User" :columnsName="$clubs"></x-create-form>
    <x-jquery-data-table :records="$records" :columnsName="$clubs" title="Example Title"
        subTitle="Basic Example"></x-jquery-data-table>
@endsection
