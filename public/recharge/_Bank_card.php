<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
$title = "Nạp thẻ cào";
$showDatabase = true;
include_once '../layouts/head.php';
?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Cards</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User/ bank</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cards</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-primary bg-primary text-white">
                        <ul>
                            <ol>Hệ thống Auto nạp thẻ cam kết 5s/thẻ, ổn định.</ol>
                            <ol>Công nghệ API cam kết không nuốt thẻ không làm chậm web của đối tác.</ol>
                            <ol>Vào mùa cước cam kết chiết khấu cực tốt chỉ từ 20% đến 25%.</ol>
                            <ol>Quý khách lưu ý không nhập các ký tự đặc biệt vào mã thẻ hay seri như các ký tự = + - ~ ! # $ % ^ & * () _ / . , " ' ; :.</ol>
                        </ul>
                    </div>
                    <div class="card shadow mt-2">
                        <div class="card-body">
                            <form action="<?= BASE_URL('recharge/tsr/v2') ?>" method="POST" request-ajax="LBD" href="?comfirm" call="swal">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Loại thẻ</label>
                                            <select name="loaithe" id="loaithe" class="form-control">
                                                <option value="">--Chọn thẻ--</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VINAPHONE">VINAPHONE</option>
                                                <option value="MOBIFONE">MOBIFONE</option>
                                                <option value="ZING">ZING</option>
                                                <option value="VNMOBI">VNMOBI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Mệnh giá</label>
                                            <select name="menhgia" id="menhgia" class="form-control">
                                                <option value="">--Chọn mệnh giá--</option>
                                                <option value="10000">10.000</option>
                                                <option value="20000">20.000</option>
                                                <option value="20000">20.000</option>
                                                <option value="30000">30.000</option>
                                                <option value="50000">50.000</option>
                                                <option value="100000">100.000</option>
                                                <option value="200000">200.000</option>
                                                <option value="300000">300.000</option>
                                                <option value="500000">500.000</option>
                                                <option value="1000000">1.000.000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Seri</label>
                                            <input type="number" name="seri" id="seri" class="form-control" placeholder="Nhập đúng seri">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="" class="form-label">Mã thẻ</label>
                                            <input type="number" name="pin" id="pin" class="form-control" placeholder="Nhập đúng mã thẻ">
                                        </div>
                                    </div>
                                    <div class="form-group mr-auto ml-auto">
                                        <button type="submit" confirm="Bạn có chắc chắn nạp thẻ không?" class="btn btn-primary btn-block"><i class="fe fe-send"></i>Gửi thẻ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-closed -->
        <div class="card mt-3">
            <div class="card-header">
                <h4>Lịch sử nạp</h4>
            </div>
            <div class="card-body">

                <div class="table-responsive text-center">
                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">Họ tên</th>
                                <th class="wd-15p border-bottom-0">Số tiền</th>
                                <th class="wd-20p border-bottom-0">Cấp bậc</th>
                                <th class="wd-15p border-bottom-0">Trạng thái</th>
                                <th class="wd-10p border-bottom-0">Tổng nạp</th>
                                <th class="wd-25p border-bottom-0">code bank</th>
                                <th class="wd-25p border-bottom-0">Ngày tạo</th>
                                <th class="wd-25p border-bottom-0">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <td>
                               </td>
                           </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_thongbao">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Thông báo hệ thống</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3>Hiện tại nạp tiền bằng thẻ cào đang bảo trì vui lòng không nạp vào để tránh bị lỗi</h3>
            </div>
            <div class="modal-footer"> 
                <button class="btn btn-primary" data-bs-dismiss="modal">Tôi đã đọc</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once '../layouts/foot.php';
?>