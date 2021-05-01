<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="span12">
            <form class="form-horizontal" action='{{ route('admin.login.go') }}' method="POST">
                @csrf
                <fieldset>
                    <div id="legend">
                        <legend class="">Admin Login Access </legend>
                    </div>
                    @if (session('msg'))
                        <div class="alert alert-info" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Access Key</label>
                        <div class="controls">
                            <input type="password" id="password" name="pass" placeholder="" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Gain Acess</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
