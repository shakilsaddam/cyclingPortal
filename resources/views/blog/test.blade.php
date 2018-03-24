<div class="col-sm-12">
    @foreach($info as $info)

        <div class="col-sm-4">
            <label>Name: {{$info->name}}</label>
            <label>ID: {{$info->id}}</label>
        </div>

    @endforeach
</div>