@extends('admin.master')
@section('title')
    Đổi màu page
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mt-2 text-center">
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-pink color" data-color="pink_color">Pink</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-sunset color" data-color="sunset_color">Sunset</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-blue color" data-color="blue_color">Blue</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-purple color" data-color="purple_color">Purple</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-fern color" data-color="fern_color">Fern</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-daisy color" data-color="daisy_color">Daisy</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-outrange color" data-color="outrange_color">Outrageous Orange</button>
                    </div>
                    <div class="col-md-3 mb-2">
                        <button class="btn btn-pine color" data-color="pine_color">Pine Green</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(e){
        $('.color').click(function(e){
            var color = $(this).data('color');
            payload = {
                'color' : color,
            };
            $.ajax({
                url     : '/change-color',
                type    : 'post',
                data    : payload,
                success: function(res){
                    if(res.status){
                        toastr.success('Đổi màu thành công');
                    }else{
                        toastr.error('Xảy ra lỗi bất ngờ');
                    }
                },
            });
        });
    });
</script>

@endsection
