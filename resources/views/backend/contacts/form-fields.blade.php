
<div class="row">
    <div class="col-md-8">
        @php $input = 'name' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Name</label>
            <input type="text" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" value="{{ isset($row) ? $row->{$input} : '' }}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-8">
        @php $input = 'email' @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email</label>
            <input type="text" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" value="{{ isset($row) ? $row->{$input} : '' }}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>


