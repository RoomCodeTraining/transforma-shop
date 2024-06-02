@if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bye bye! </strong> {{ session()->get('message') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry! </strong> {{ session()->get('error') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif