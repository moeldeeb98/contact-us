@php $input = 'name'; @endphp
<div class="col-md-6">
    <label>Name</label>
    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="nc-icon nc-single-02"></i>
          </span>
        </div>
        <input type="text" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" placeholder="Name">
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

@php $input = 'email'; @endphp
<div class="col-md-6">
    <label>Email</label>
    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
              <i class="nc-icon nc-email-85"></i>
          </span>
        </div>
        <input type="text" name="{{ $input }}" class="form-control @error($input) is-invalid @enderror" placeholder="Email">
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

@php $input = 'message'; @endphp
<div class="col-md-12">
    <label>Message</label>
    <div class="input-group">
        <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
        @error($input)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

