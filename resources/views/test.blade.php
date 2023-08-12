@extends('layouts.admin.admin-layout')

@section('content')
    <x-create-form title="Create New User" :columnsName="$club"></x-create-form>
    <x-edit-form title="Edit User" :columnsName="$club"></x-edit-form>
    <x-delete-modal title="Delete Confirmation" content="Are you sure you want to delete it!"></x-delete-modal>
    <x-jquery-data-table :records="$records" :columnsName="$club" title="Example Title" subTitle="Basic Example"></x-jquery-data-table>
@endsection