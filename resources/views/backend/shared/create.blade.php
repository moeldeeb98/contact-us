<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary inbox-head">
                <h4 class="card-title">{{ $page_title }}</h4>
                <p class="card-category">{{ $page_desc }}</p>
            </div>
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
