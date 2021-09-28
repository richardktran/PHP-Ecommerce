<!DOCTYPE html>
<html lang="en">

<?php

$title = "Trang chủ";
include_once('components/import_header.php');

?>

<body>
    <?php include_once('components/header.php');  ?>
    <section>
        <div class="container-fluid px-2">
            <div class="row">
                <div class="col-lg-2 border-right  pt-2">
                    <div class="row border-bottom pl-0">
                        <div class="col-md-6 col-lg-12 py-3 pl-5">
                            <strong class="mb-5">Loại sản phẩm</strong>

                            <div class="custom-control custom-checkbox mt-2 mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheckBox1" name="checkbox1">
                                <label class="custom-control-label" for="customCheckBox1">
                                    Custom checkbox
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2 mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheckBox2" name="checkbox2">
                                <label class="custom-control-label" for="customCheckBox2">
                                    Custom checkbox
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2 mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheckBox3" name="checkbox3">
                                <label class="custom-control-label" for="customCheckBox3">
                                    Custom checkbox
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2 mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheckBox4" name="checkbox4">
                                <label class="custom-control-label" for="customCheckBox4">
                                    Custom checkbox
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2 mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheckBox5" name="checkbox5">
                                <label class="custom-control-label" for="customCheckBox5">
                                    Custom checkbox
                                </label>
                            </div>

                            <div class="form-group ml-4 mt-2">
                                <label for="radio100" class="form-check-label dark-grey-text">Khác</label>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom pl-0">
                        <div class="col-md-6 col-lg-12 py-3 pl-5 pr-5">
                            <strong class="mb-5">Khoảng giá</strong>
                            <form class="mt-3">
                                <div class="form-row">
                                    <div class="col mr-3 ">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-rounded" placeholder="Min">
                                        </div>

                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control input-rounded" placeholder="Max">
                                    </div>
                                </div>
                            </form>
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <button type="button" class="btn medium-primary-btn btn-block">Áp dụng</button>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- main content -->
                <div class="col-lg-9 mx-5">
                    <!-- Search input -->
                    <div class="row px-4 pb-2">
                        <div class="col-md-6 col-lg-12 py-3 px-4">
                            <form class="mt-3">
                                <div class="form-row">
                                    <div class="col-lg-6 mr-3 ">
                                        <div class="input-group search-group">
                                            <span class="input-group-append prefix-search-icon" style="background-color: var(--secondary-color);">
                                                <div class="input-group-text bg-transparent border-0  pl-4 py-2">
                                                    <i class="bi bi-search"></i>
                                                </div>
                                            </span>
                                            <input class="form-control py-2 border-0 shadow-none input-search py-4" type="text" placeholder="Search..." id="example-search-input" />
                                            <span class="input-group-append suffix-search-icon" style="background-color: var(--secondary-color);">
                                                <div class="input-group-text bg-transparent border-0  px-4 py-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </span>

                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-md-6 col-lg-12  px-4">
                            Kết quả tìm kiếm cho: <strong>Khoa</strong>
                        </div>

                    </div>
                    <!-- End Search input -->

                    <!-- Sort type  -->
                    <div class="row px-4 pb-4">
                        <div class="d-flex flex-row px-4">
                            <div class="py-3 pr-4">Sắp xếp theo: </div>
                            <div class="mt-2">
                                <div class="col-lg-12">
                                    <button type="button" class="btn medium-secondary-btn active">Phổ biến</button>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="col-lg-12">
                                    <button type="button" class="btn medium-secondary-btn">Bán chạy</button>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="col-lg-12">
                                    <button type="button" class="btn medium-secondary-btn">Giá giảm dần</button>
                                </div>
                            </div>
                            <div class="mt-2">
                                <div class="col-lg-12">
                                    <button type="button" class="btn medium-secondary-btn">Giá tăng dần</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End sort type  -->

                    <!-- Show products  -->
                    <div class="row row-col-4 px-4 pt-2">
                        <div class="col-lg-3 col-md-12 mb-4">
                            <div class="card card-ecommerce">
                                <div class="view overlay">
                                    <img src="<?php echo $host; ?>assets/images/products/product-detail-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-1"><strong><a href="<?php echo $host; ?>detail_product.php" class="dark-grey-text">Apple Watch 10 Pro 2021</a></strong></h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <!-- <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul> -->
                                    <div class="card-footer pb-0">
                                        <div class="d-flex align-items-center justify-content-around row mb-0">
                                            <strong>18.691 đ</strong>
                                            <button type="button" class="btn medium-secondary-btn" style="background-color: var(--primary-color) !important; color: white">
                                                Add to cart
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Show products  -->

                    <div class="row justify-content-center mb-4">
                        <!--Pagination -->
                        <nav class="mb-4">
                            <ul class="pagination pagination-circle pg-blue mb-0">

                                <!--First-->
                                <li class="page-item disabled clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">First</a></li>

                                <!--Arrow left-->
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active"><a class="page-link waves-effect ">1</a></li>
                                <li class="page-item "><a class="page-link  waves-effect">2</a></li>
                                <li class="page-item"><a class="page-link waves-effect ">3</a></li>
                                <li class="page-item"><a class="page-link waves-effect ">4</a></li>
                                <li class="page-item"><a class="page-link waves-effect ">5</a></li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

                                <!--First-->
                                <li class="page-item clearfix d-none d-md-block"><a class="page-link waves-effect waves-effect">Last</a></li>

                            </ul>
                        </nav>
                        <!--/Pagination -->

                    </div>

                </div>
                <!-- main content -->
            </div>
        </div>
    </section>







    <?php include_once('components/import_footer.php');  ?>
</body>

</html>