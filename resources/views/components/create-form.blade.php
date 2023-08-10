<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="header">
            <h2>{{ $title }}</h2>
        </div>
        <div class="body">
            @foreach ($columnsName as $clnName)
                @if (!in_array($clnName, $ignoreColumns))
                    <div class="input-group input-group-sm mb-3">
                        <input name="{{$clnName}}" placeholder="Enter {{$clnName}}" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                @endif
            @endforeach

            <x-select2-dropdown></x-select2-dropdown>
            
            <div style="display: flex; justify-content: right; align-items: center; margin-top: 12px;">
                <x-button type="primary" text="Create"></x-button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>