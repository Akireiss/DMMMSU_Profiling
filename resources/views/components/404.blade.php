@include('layouts.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <h1 class="display-4">404</h1>
                <h3>Page Not Found</h3>
                <p>The requested page could not be found.</p>
                <a href="{{ url()->previous() }}"  class="btn btn-primary bg-success">Return Back</a>
            </div>
        </div>
    </div>
</div>
