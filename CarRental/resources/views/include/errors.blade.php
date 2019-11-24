@if(count($errors) > 0)
    {!! Html::script('assets/js/jquery-2.2.4.min.js') !!}
    <script>
        $( document ).ready(function() {
            $('#modal_error').modal('show');
        });
    </script>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal_error">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border-bottom: none; display: block">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="font-size: 2em; font-weight: bold; text-align: center; display: block">Thông báo</h4>
                </div>
                <div class="modal-body"  style="padding: 60px 70px 40px; text-align: center;">
                    @foreach($errors->all() as $error)
                        <p>  <i class="fa fa-warning text-danger"></i>{{$error}}.</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
