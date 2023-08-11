@extends('layouts.admin.admin-layout')


@section('content')
<x-create-form title="Create New User" :columnsName="$matches"></x-create-form>
    <x-jquery-data-table :records="$records" :columnsName="$matches" title="Example Title" subTitle="Basic Example"></x-jquery-data-table>
@endsection
