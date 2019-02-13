@if(count($errors) > 0)
<div class="container">
    <div class="col-sm-12 mt-5">
        <div class="box-color warn">
            <div class="box-header">
                <h3>لطفا نکات گفته شده در زیر را رعایت نمایید :</h3>
                <small>با دقت پر نمایید :)</small>
            </div>
            <div class="box-body">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
