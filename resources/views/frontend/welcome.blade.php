<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Zone</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/media.css')}}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <!-- Column for the text -->
            <div class="col-12 col-lg-6">
                <a class="text-light" href="#">Nhận tư vấn - Giải pháp cho doanh nghiệp</a>
            </div>
            <!-- Column for the search container -->
            <div class="col-12 col-lg-6 d-flex justify-content-start">
                <div class="search-container d-flex align-items-center">
                    <input type="search" class="form-control" placeholder="Tìm kiếm" />
                    <i class="fa-solid fa-magnifying-glass ms-2"></i>
                </div>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sports Zone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GIẢI ĐẤU
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Thiện nguyện</a></li>
                            <li><a class="dropdown-item" href="#">Phong trào</a></li>
                            <li><a class="dropdown-item" href="#">Chuyên nghiệp</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ĐĂNG KÝ TỔ CHỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item py-1">
                        <a href="#" class="my-1"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-solid fa-envelope"></i></a>
                        <a href="#"><i class="fa-solid fa-phone-flip"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- sportzone banner -->
    <div class="hero-section">
        <div class="container-fluid position-relative">
            <!-- Hình ảnh -->
            <div class="img-container">
                <img src="{{asset('img/sportszone.png')}}" alt="SPORTSZONE" class="w-100 img-fluid object-fit-cover">
            </div>

            <!-- Văn bản mô tả -->
            <p class="text-white text-center fs-6 fs-sm-5 fs-md-4 mb-3 px-3">
                Website cung cấp nhiều thông tin về thế giới thể thao quy mô trên khắp cả nước
            </p>

            <!-- Nút tìm hiểu thêm -->
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary btn-sm btn-md-4">TÌM HIỂU THÊM</button>
            </div>
        </div>
        <div class="container-fluid position-relative"></div>
    </div>

    <!-- Sự kiện sắp diễn ra -->
    <div class="hero-section-event">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-8">
                    <h1>SỰ KIỆN SẮP DIỄN RA</h1>
                    <h2>GIẢI VIỆT DÃ VỀ NGUỒN</h2>
                    <p>Kỷ niệm 50 năm ngày giải phóng miền Nam, thống nhất đất nước (30/4/1975 - 30/4/2025) và chúc mừng đại hội Đảng các cấp, hướng tới đại hội, đại biểu toàn quốc lần thứ XIV và hưởng ứng ngày chạy Olympic vì sức khỏe toàn dân năm 2025.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Giả việt giã về nguồn -->
    <div class="hero-section-event-2">
        <div class="container-fluid col-8">
            <h2>GIẢI VIỆT DÃ VỀ NGUỒN</h2>
            <p>Kỷ niệm 50 năm ngày giải phóng miền Nam, thống nhất đất nước (30/4/1975 - 30/4/2025) và chúc mừng đại hội Đảng các cấp, hướng tới đại hội, đại biểu toàn quốc lần thứ XIV và hưởng ứng ngày chạy Olympic vì sức khỏe toàn dân năm 2025.</p>
            <button>Tham gia ngay</button>
        </div>
        <div class="container-fluid"></div>
    </div>
    <!-- Bộ đếm -->
    <div class="hero-section-timming text-center py-5">
        <h1 class="display-4">CÒN LẠI</h1>
        <div class="container-fluid">
            <ul class="list-unstyled d-flex">
                <li>
                    <span class="d-block fw-bold">01</span>
                    Ngày
                </li>
                <li>
                    <span class="d-block fw-bold">24</span>
                    Giờ
                </li>
                <li>
                    <span class="d-block fw-bold">350</span>
                    Phút
                </li>
                <li>
                    <span class="d-block fw-bold">96</span>
                    Giây
                </li>
            </ul>
        </div>
    </div>

    <!-- Tin tức -->
    <div class="container-section-news">
        <div class="container-fluid">
            <img src="https://stnmt.kontum.gov.vn/uploads/news/2022_05/04-05-2022-6.jpg" alt="">
            <div class="time-event">
                <div class="date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>01/01/2025</span>
                </div>
                <div class="by">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Nhật Kiên Văn</span>
                </div>
            </div>
            <h3>HÒA MÌNH VÀO KHÔNG KHÍ HÀO HÙNG, QUẬN & TỔ CHỨC GIẢI VIỆT DÃ VỀ NGUỒN</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat labore eum eius, est reprehenderit ullam libero blanditiis et molestias. Necessitatibus fugit molestiae culpa reiciendis blanditiis animi perferendis, reprehenderit obcaecati illum.</p>
            <a href="#">Đọc thêm >></a>
        </div>
        <div class="container-fluid">
            <img src="https://stnmt.kontum.gov.vn/uploads/news/2022_05/04-05-2022-6.jpg" alt="">
            <div class="time-event">
                <div class="date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>01/01/2025</span>
                </div>
                <div class="by">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Nhật Kiên Văn</span>
                </div>
            </div>
            <h3>HÒA MÌNH VÀO KHÔNG KHÍ HÀO HÙNG, QUẬN & TỔ CHỨC GIẢI VIỆT DÃ VỀ NGUỒN</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat labore eum eius, est reprehenderit ullam libero blanditiis et molestias. Necessitatibus fugit molestiae culpa reiciendis blanditiis animi perferendis, reprehenderit obcaecati illum.</p>
            <a href="#">Đọc thêm >></a>
        </div>
    </div>

    <div class="hero-section-timming">
        <h1>TỔ CHỨC SỰ KIỆN THỂ THAO CHUYÊN NGHIỆP</h1>
    </div>
    <!-- Tổ chức thể thao -->
    <div class="hero-section-3">
        <div class="container-fluid">
            <div class="img-event">
                <img src="https://img.cand.com.vn/resize/800x800/NewFiles/Images/2023/10/04/1-1696396716881.jpg" alt="">
            </div>
            <div class="info-img">
                <ul>
                    <h2>SỰ KIỆN KHU VỰC & CẤP ĐỘ CƠ SỞ</h2>
                    <li>
                        <p>Tổ chức các sự kiện quy mô phù hợp với từng tổ chức, khu vực</p>
                    </li>
                    <li>
                        <p>Tạo cơ hội cho vận động viên trẻ và tài năng thể hiện khả năng</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="img-event">
                <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2019/12/8/771087/Doi-Tuyen-Nu-4.jpg" alt="">
            </div>
            <div class="info-img">
                <ul>
                    <h2>SỰ KIỆN THỂ THAO CỘNG ĐỒNG</h2>
                    <li>
                        <p>Khuyến khích sự tham gia của người dân và nâng cao sức khỏe cộng đồng</p>
                    </li>
                    <li>
                        <p>Các sự kiện như ngày hội thể thao, giải chạy bộ từ thiện, giải đấu giao lưu</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="img-event">
                <img src="https://image.bnews.vn/MediaUpload/Org/2023/05/15/100520-sea-games-32-viet-nam-gianh-hcb-bong-chuyen-trong-nha-nu.jpg" alt="">
            </div>
            <div class="info-img">
                <ul>
                    <h2>SỰ KIỆN THỂ THAO - VĂN HÓA KHÁC</h2>
                    <li>
                        <p>Tổ chức các sự kiện thể thao, văn hóa, lễ hội có tính đặc thù riêng</p>
                    </li>
                    <li>
                        <p>Tổ chức các giải đấu theo môn thể thao mới hoặc các hình thức thi đấu đặc biệt theo yêu cầu.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hero-section-timming">
        <h1>QUY TRÌNH TỔ CHỨC</h1>
    </div>
    <!-- Quy trình tổ chức -->
    <div class="hero-section-4">
        <div class="container-fluid">
            <div class="img-procedure">
                <img src="{{asset('img/plan.png')}}" alt="">
            </div>
            <div class="info-procedure">
                <ul>
                    <h2>LẬP KẾ HOẠCH TỔ CHỨC (PLAN)</h2>
                    <li>
                        <p><b>Xác định rõ mục tiêu của sự kiện: </b>Bạn muốn đạt được điều gì? (Tăng nhận diện thương hiệu, gây quỹ, giao lưu kết nối,...)</p>
                    </li>
                    <li>
                        <p><b>Xác định phạm vi của sự kiện: </b>Đối tượng tham gia là ai? Quy mô sự kiện thế nào?</p>
                    </li>
                    <li>
                        <p><b>Lập kế hoạch chi tiết: </b>bao gồm lịch trình, địa điểm, ngân sách, nguồn lực cần thiết</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="line"></div>
        </div>

        <div class="container-fluid">
            <div class="info-procedure">
                <ul>
                    <h2>ĐIỀU PHỐI NHÂN SỰ VÀ TRIỂN KHAI, VẬN HÀNH (DO)</h2>
                    <li>
                        <p><b>Triển khai các công việc theo kế hoạch: </b>Dựa vào bảng kế hoạch đã được thông qua tiến hành thiết kế bộ nhân diện, lên kịch bản, tạo timeline chi tiết của sự kiện</p>
                    </li>
                    <li>
                        <p><b>Phân bố nguồn nhân lực hợp lí: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente natus sint magni, laudantium vel, dolore tenetur quam consectetur nihil alias quaerat libero doloribus beatae asperiores, inventore rem similique vitae. Similique!</p>
                    </li>
                </ul>
            </div>
            <div class="img-procedure">
                <img src="{{asset('img/do.png')}}" alt="">
            </div>
        </div>
        <div class="container-fluid">
            <div class="line"></div>
        </div>
        <div class="container-fluid">
            <div class="img-procedure">
                <img src="{{asset('img/pr.png')}}" alt="">
            </div>
            <div class="info-procedure">
                <ul>
                    <h2>TRUYỀN THÔNG SỰ KIỆN (PR)</h2>
                    <li>
                        <p><b>Xây dựng và thực hiện chiến lược truyền thông: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quos, sunt ex magni iusto doloremque beatae. Officia obcaecati illo est sed voluptate dignissimos quidem vitae. Ducimus minus repellendus optio? Fugiat!</p>
                    </li>
                    <li>
                        <p><b>Tiến hành truyền thông trước - Trong và sau sự kiện: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quo quidem itaque possimus nam? Exercitationem in nisi similique eveniet </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="line"></div>
        </div>
        <div class="container-fluid">
            <div class="info-procedure">
                <ul>
                    <h2>HẬU SỰ KIỆN & ĐÁNH GIÁ (CHECK & ACT)</h2>
                    <li>
                        <p><b>Hậu sự kiện: </b>Bạn muốn đạt được điều gì? (Tăng nhận diện thương hiệu, gây quỹ, giao lưu kết nối,...)</p>
                    </li>
                    <li>
                        <p><b>Đánh giá: </b>Đối tượng tham gia là ai? Quy mô sự kiện thế nào?</p>
                    </li>
                </ul>
            </div>
            <div class="img-procedure">
                <img src="{{asset('img/note.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="hero-section-timming">
        <h1>TIN TỨC</h1>
    </div>

    <!-- Tin tức -->

    <div class="container-section-news">
        <div class="container-fluid">
            <img src="https://ktmt.vnmediacdn.com/images/2022/09/18/66-1663519671-anh-nen-222222222222.jpg" alt="">
            <div class="time-event">
                <div class="date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>01/01/2025</span>
                </div>
                <div class="by">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Nhật Kiên Văn</span>
                </div>
            </div>
            <h3>GIẢI BÓNG ĐÁ CBSC MÙA 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat labore eum eius, est reprehenderit ullam libero blanditiis et molestias. Necessitatibus fugit molestiae culpa reiciendis blanditiis animi perferendis, reprehenderit obcaecati illum.</p>
            <a href="#">Đọc thêm >></a>
        </div>
        <div class="container-fluid">
            <img src="https://ktmt.vnmediacdn.com/images/2022/09/18/66-1663519671-anh-nen-222222222222.jpg" alt="">
            <div class="time-event">
                <div class="date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>01/01/2025</span>
                </div>
                <div class="by">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Nhật Kiên Văn</span>
                </div>
            </div>
            <h3>GIẢI BÓNG ĐÁ CBSC MÙA 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat labore eum eius, est reprehenderit ullam libero blanditiis et molestias. Necessitatibus fugit molestiae culpa reiciendis blanditiis animi perferendis, reprehenderit obcaecati illum.</p>
            <a href="#">Đọc thêm >></a>
        </div>
        <div class="container-fluid">
            <img src="https://ktmt.vnmediacdn.com/images/2022/09/18/66-1663519671-anh-nen-222222222222.jpg" alt="">
            <div class="time-event">
                <div class="date">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>01/01/2025</span>
                </div>
                <div class="by">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Nhật Kiên Văn</span>
                </div>
            </div>
            <h3>GIẢI BÓNG ĐÁ CBSC MÙA 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat labore eum eius, est reprehenderit ullam libero blanditiis et molestias. Necessitatibus fugit molestiae culpa reiciendis blanditiis animi perferendis, reprehenderit obcaecati illum.</p>
            <a href="#">Đọc thêm >></a>
        </div>
    </div>
    <div class="hero-section-timming">
        <h1>LIÊN HỆ VỚI CHÚNG TÔI</h1>
    </div>
    <!-- Liên hệ -->

    <div class="hero-section-5">
        <div class="container-fluid">
            <h3>Tổ chức các giải đấu thể thao uy tín, chuyên nghiệp và sáng tạo để phù hợp với đơn vị của bạn</h3>
            <p><b>Hotline:</b>0989.266.467</p>
            <h4>Đăng kí nhận thông tin mới nhất</h4>
            <div class="input-container">
                <input type="text" placeholder="Enter mail here">
                <a href="#" class="send-icon"><i class="fa-solid fa-paper-plane"></i></a>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="hero-footer">
        <div class="container-fluid">
            <img src="{{asset('img/logo.png')}}" alt="" width="200px">
            <div class="social">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <p>529/13 Huỳnh Văn Bánh, Phường 14, Quận Phú Nhuận, TP Hồ Chí Minh</p>
        </div>
        <div class="container-fluid">
            <ul>
                <h3>SPORTZONE</h3>
                <li>Nhật Kiên Văn</li>
                <li>Giới thiệu</li>
                <li>Thỏa thuận</li>
                <li>Liên hệ</li>
            </ul>
        </div>
        <div class="container-fluid">
            <ul>
                <h3>DỊCH VỤ</h3>
                <li>Tư vấn tổ chức và sự kiện thể thao</li>
                <li>Thiết kế bộ nhận diện thể thao</li>
                <li>Sự kiện thể thao công đồng</li>
                <li>Sự kiện thể thao thiện nguyện</li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.navbar-nav').classList.toggle('show');
        });
    </script>
</body>

</html>
