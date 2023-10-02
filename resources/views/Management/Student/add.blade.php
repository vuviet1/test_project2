<div class="modal fade" id="staticBackdropAdd" data-backdrop="static" data-keyboard="false"
     tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Form thêm thông tin học sinh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">

                    <div class="row g-3">
                        <div class="col">
                            <label for="idClass" class="form-label">Mã hoc sinh</label>
                            <input type="text" class="form-control"
                                   placeholder="Mã hoc sinh"
                                   name="id">
                        </div>
                        <div class="col">
                            <label for="nameStudent" class="form-label">Số lần đóng</label>
                            <input type="text" class="form-control"
                                   placeholder="Số lần đóng"
                                   name="number_course">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col">
                            <label for="idClass" class="form-label">Học bổng</label>
                            <input type="text" class="form-control"
                                   placeholder="Số tiền"
                                   name="id">
                        </div>
                    </div>

                    <div class="row g-3">
{{--                        <div class="col">--}}
{{--                            <label for="idClass" class="form-label">Mã tài khoản</label>--}}
{{--                            <input type="text" class="form-control"--}}
{{--                                   placeholder="Mã tài khoản"--}}
{{--                                   name="id" disabled>--}}
{{--                        </div>--}}
                        <div class="col">
                            <label for="nameStudent" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control"
                                   placeholder="Họ và tên"
                                   name="number_course" disabled>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Thêm mới</button>
            </div>
        </div>
    </div>
</div>
