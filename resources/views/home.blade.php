@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to User Feedback Application</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <button type="button" class="btn btn-primary">Submit Your Feedback</button>
                    </div>
                </div>
            </div>

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Feedback Title</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            </div>
        </div>
    </div>
</div>
@endsection
