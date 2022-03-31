<?php
require_once '../../database/config.php';
require_once '../../database/function.php';
if(!$getUser){
    header("location: $welecome");
}
$title = "Lịch sử giao dịch";
$showDatabase = true;
include_once '../layouts/head.php';
require_once 'simple_html_dom.php';
?>

<?php 
    
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://muasubsale.vn/service/facebook/sub-sale/list?btwaf=29070385');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Authority: muasubsale.vn';
$headers[] = 'Pragma: no-cache';
$headers[] = 'Cache-Control: no-cache';
$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"98\", \"Google Chrome\";v=\"98\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
$headers[] = 'Sec-Ch-Ua-Platform: \"Windows\"';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36';
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Referer: https://muasubsale.vn/service/facebook/sub-sale/list';
$headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
$headers[] = 'Cookie: __cf_bm=kF847LDUY4uPBvvLfZOAgjQn_OALoSx1bSOjrjieVLw-1645967933-0-AVhbgV12pjGfO+EuvFNkofTaBU1heXFI4LBFGOT+CXWLZzR5ipxoR6JJjfEOj+JkKttSduwfme5dbkvexBRbf+8vhoApKksrFg/tuZfdizkwjttOVIDEXkrv4Cv/YgurIw==; XSRF-TOKEN=eyJpdiI6Im04YTVvYzZncWRlUG5VQmVHN3lrRUE9PSIsInZhbHVlIjoiV082WUlpYjNBWjBaaU5IS2IxUmdsZy9wQi9jSVJrNS9Pa1Q2bkJkcjF5WjkvV0ViczZKWVZxd0gyQmIvSjdpVEFieUtxQmZIR0FPQ3hNV0MrOUQ3WitqQ05VbjY3VUZsRVFRL0JMVFZ2T1QybEk5aFRmcWVVZG1kK0g5alVjSGUiLCJtYWMiOiJmNWM5ODMxNzllZTY1YjQyOTY0MDBiMmUzOWYyY2IyOTUwMTUwMGYyMDgxNmU0YjFmYWFkNGQ4ZGJjN2FhMWQ3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Im1WMGtiVVcwcVU0M3lRUXJVMUJGRXc9PSIsInZhbHVlIjoiSjZnK3pKanlHeUd6bktsUG9zK3NzbG5QKzBnbFZabDJNbUxTenZEcXV2dnJzVmhzT2NCSHNwY0Zkd3dBR09sd0NPNXZ5YjlaaklsZk0vNWdqNFVueHhsQXJoZTJGNEl5MlZaYzJ2b3ZOUXJEU0ljZCtnZHQvSWpqeWl2VHdqbU8iLCJtYWMiOiIzODYzNzIyOWNmM2E5OTE4YTFhMmQ4YmZiOWI2ZWMzNTI1NDQ5MmFiMjU3NDYwZGFmNjczMWEwM2JkOGNjZjFjIiwidGFnIjoiIn0%3D';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$html = str_get_html($result);

foreach($html->find('tbody tr') as $data){
    $value = $data->innertext;
    //echo $value;

    $team = $data->find('td', 0)->outertext;
    $team = explode('<td>', $team)[1];
    $team = explode('</td>', $team)[0];
    //
    $id = $data->find('td', 3)->outertext;
    $id = explode('<td>', $id)[1];
    $id = explode('</td>', $id)[0];
    //
    $sl = $data->find('td', 7)->outertext;
    $sl = explode('<td><b class="text-danger">', $sl)[1];
    $sl = explode('</b> <sup>sub</sup> </td>', $sl)[0];

    $update = $DUONGSHADO->update('history_order',[
        'da_buff' => $sl
    ], "link_buff ='$id' ");
    if($update){
    }

    $arrayT[] = array(
        'type' => 'sub_sale',
        'his' => $team,
        'id' => $id,
        'amount' => $sl
    );
}

?>

<!--app-content open-->
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- container -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Lịch sử mua</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Client</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lịch sử mua</li>
                    </ol>
                </div>

            </div>
            <!-- PAGE-HEADER END -->
            <!-- Row -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lịch sử mua</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive text-center">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Dịch vụ</th>
                                            <th class="wd-15p border-bottom-0">Số lượng</th>
                                            <th class="wd-20p border-bottom-0">Tổng tiền</th>
                                            <th class="wd-15p border-bottom-0">Link buff</th>
                                            <th class="wd-15p border-bottom-0">Server</th>
                                            <th class="wd-10p border-bottom-0">Nội dung</th>
                                            <th class="wd-25p border-bottom-0">Trạng thái</th>
                                            <th class="wd-25p border-bottom-0">Đã buff</th>
                                            <th class="wd-25p border-bottom-0">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $order = $DUONGSHADO->get_list("SELECT * FROM history_order WHERE code_server = 'sub_sale' ");
                                        foreach ($order as $data) { ?>
                                            <tr>
                                                <td><?= $data['code_server'] ?></td>
                                                <td><?= $data['soluong'] ?></td>
                                                <td><?= $data['tongtien'] ?></td>
                                                <td><?= $data['link_buff'] ?></td>
                                                <td><?= $data['server'] ?></td>
                                                <td><?= $data['node'] ?></td>
                                                <td>
                                                    <?php if ($data['status'] == 'pending') { ?>
                                                        <span class="badge badge-warning bg-warning">Chờ duyệt</span>
                                                    <?php } elseif ($data['status'] == 'start') { ?>
                                                        <span class="badge badge-success bg-success">Đang chạy</span>
                                                    <?php } elseif ($data['status'] == 'cancel') { ?>
                                                        <span class="badge badge-danger bg-danger">Đã hủy</span>
                                                    <?php } ?>
                                                </td>
                                                <td><?= $data['da_buff'] ?></td>
                                                <td>
                                                    <?php if ($data['status'] == 'pending') { ?>
                                                        <a href="javascript:;" class="btn btn-danger" cancel="true" onclick="cancel('<?=$data['id']?>', 'can')">Hủy</a>
                                                    <?php } elseif ($data['status'] == 'start') { ?>
                                                        <a href="javascript:;" class="btn btn-danger" cancel="true" onclick="cancel('<?=$data['id']?>', 'can')">Hủy</a>
                                                    <?php } else {
                                                    } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- container-closed -->
    </div>
    <script> function cancel(id, type) { Swal.fire({ title: 'Bạn có chắc chắn?', text: "Bạn có muốn xóa đơn hàng này không?", icon: 'warning', showCancelButton: true, confirmButtonColor: '#3085d6', cancelButtonColor: '#d33', confirmButtonText: 'Xóa!' }).then((result) => { if (result.isConfirmed) { $.ajax({ url: "<?=BASE_URL('service/facebook/cancel/order')?>", type: "POST", data: { id: id, type: type }, dataType: "JSON", success: function(data) { if(data.code == 200){ Swal.fire('Thành công', data.message, 'success'); setTimeout(function(){ location.reload(); }, 2000); }else{ Swal.fire('Thất bại', data.message, 'error'); } }, }); } }); } </script>
</div>
<?php include_once '../layouts/foot.php'; ?>