<div class="code">
    <form action="{{url('php-ide')}}" {{--action='{{url("test")}}'--}} method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <textarea name="code" placeholder="Write your code here" cols="15" rows="15" class="form-control" required></textarea>
        </div>

        <input type="submit" value="Compile" name="compile" class="btn btn-danger">
    </form>
</div>