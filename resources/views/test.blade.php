@extends('layouts.admin.admin-layout')

@section('content')
    <x-create-form title="Create New User" :columnsName="$club"></x-create-form>
    <x-jquery-data-table :records="$records" :columnsName="$club" title="Example Title" subTitle="Basic Example"></x-jquery-data-table>

    

    <script>
        const dataSubmit = {};
        const createFormInputs = document.querySelectorAll('input.create-form-input');
        const createFormSubmitBtn = document.querySelector('a.create-form-submit-button');

        createFormSubmitBtn.onclick = function(e) {
            createFormInputs.forEach(input => {
                const inputName = input.name;
                dataSubmit[inputName] = input.value;
            });
            apiService.post('/api/user/store', dataSubmit);
        }
    </script>
@endsection