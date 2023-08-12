<div class="modal fade launch-pricing-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding-top: 12px;">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>{{ $title }}</h2>
                    </div>
                    <div class="body">
                        @foreach ($columnsName as $clnName)
                            @if (!in_array($clnName, $ignoreColumns))
                                <div class="input-group input-group-sm mb-3">
                                    @if ($clnName != 'password')
                                        <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="text" class="form-control create-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" autocomplete="off">
                                    @else
                                        <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="password" class="form-control create-form-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                    @endif
                                </div>
                            @endif
                        @endforeach
            
                        {{-- <x-select2-dropdown></x-select2-dropdown> --}}
                        
                        <div style="display: flex; justify-content: right; align-items: center; margin-top: 12px;">
                            <x-button classes="create-form-submit-button" type="primary" text="Create"></x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        document.querySelector('.launch-pricing-modal').click();
    }
</script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>