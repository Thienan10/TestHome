<style>
    .navbar-brand,
.nav-link {
    font-weight: bold;
}

.navbar a {
    text-decoration: none;
}

.hero-section {
    background-color: #f8f9fa;
    padding: 100px 0;
    text-align: center;
    background-image: url('https://c.wallhere.com/photos/84/0c/baseball_smoke_photo_manipulation_ball_black_background_digital_art-113135.jpg!d');
    background-size: cover;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
}

.hero-section .container-fluid {
    width: 50%;
    text-align: left;
    padding-left: 120px;
    margin-left: auto;
    position: relative;
    z-index: 2;
}

.hero-section .img-container {
    position: relative;
    height: 290px;
    margin-bottom: -30px;
}

.hero-section .img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    margin-top: -30px;
}

.hero-section p,
.hero-section button {
    position: relative;
    z-index: 3;
    margin-top: 10px;
    text-align: left;
}

.event-section {
    padding: 50px 0;
}

.event-card {
    margin-bottom: 20px;
}

.search-container {
    position: relative;
    width: 100%;
}

.search-container input {
    width: 100%;
    padding-right: 30px;
    border: none;
    border-bottom: 1px solid #ccc;
    color: white;
    background-color: transparent;
}

.search-container .fa-magnifying-glass {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: white;
}

.navbar {
    max-width: 1296px;
    margin: 0 auto;
}

.container-fluid {
    justify-content: space-between;
    align-items: center;
}

.navbar-nav {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.navbar-nav .nav-item i {
    margin-right: 10px;
    vertical-align: middle;
}



/* Phần 2 */
.hero-section-event {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 50%;
    margin: 0 auto;
    padding: 50px 0;
}

.hero-section-event h1,
.hero-section-event h2,
.hero-section-event p {
    margin: 10px 0;
}

.hero-section-event h1 {
    color: blue;
    font-weight: bold;
}

.hero-section-event h2 {
    color: green;
    font-weight: bold;
    position: relative;
}

.hero-section-event p {
    font-weight: bold;
}

.hero-section-event h2::after {
    content: '';
    display: block;
    width: 100%;
    height: 2px;
    background-color: green;
    margin-top: 10px;
}

/* Phần 3 */
.hero-section-event-2 {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: left;
    width: calc(100% - 280px);
    margin: 0 140px;
    padding: 50px 0;
    background-color: #f8f9fa;
    background-image: url('https://img.freepik.com/premium-photo/composition-male-athlete-hurdle-jumping-with-green-globe_1134-9383.jpg?w=1800');
    background-size: cover;
    background-position: center;
    height: 50vh;
}

.hero-section-event-2 h2,
.hero-section-event-2 p,
.hero-section-event-2 button {
    text-align: left;
    margin-left: 30px;
}

.hero-section-event-2 h2 {
    color: black;
    font-weight: bold;
    position: relative;
}

.hero-section-event-2 p {
    color: black;
    font-weight: bold;
}

.hero-section-event-2 button {
    color: white;
    font-weight: bold;
    background-color: blue;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.hero-section-timming {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 50px 0;
}

.hero-section-timming h1 {
    color: blue;
    font-weight: bold;
    margin-bottom: 20px;
}

.hero-section-timming ul {
    display: flex;
    list-style: none;
    padding: 0;
    justify-content: center;
}

.hero-section-timming ul li {
    background: linear-gradient(to right, rgb(79, 160, 241), rgb(33, 33, 235));
    color: white;
    padding: 30px;
    margin: 0 20px;
    border-radius: 10px;
    width: 100px;
    text-align: center;
    font-weight: bold;
}

.container-section-news {
    display: flex;
    justify-content: space-between;
    margin: 0 140px;
}

.container-section-news .container-fluid {
    width: calc(50% - 70px);
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.container-section-news img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.container-section-news .time-event {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.container-section-news .time-event .date,
.container-section-news .time-event .by {
    display: flex;
    align-items: center;
}

.container-section-news .time-event i {
    margin-right: 5px;
}

.container-section-news h3 {
    margin-top: 10px;
    font-size: 18px;
    font-weight: bold;
}

.container-section-news p {
    margin-top: 10px;
    font-size: 14px;
}

.container-section-news a {
    display: inline-block;
    margin-top: 10px;
    color: blue;
    text-decoration: none;
}

.hero-section-3 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 50px 30px;
}

.hero-section-3 .container-fluid {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin-bottom: 20px;
}

.hero-section-3 .img-event {
    flex: 1;
    margin-right: 20px;
}

.hero-section-3 .img-event img {
    width: 100%;
    height: 50vh;
    border-radius: 10px;
}

.hero-section-3 .info-img {
    flex: 1;
    margin-left: 20px;
    margin-top: -80px;
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.hero-section-3 .info-img ul {
    padding: 0;
}

.hero-section-3 .info-img h2 {
    color: blue;
    font-weight: bold;
}

.hero-section-3 .info-img ul li {
    margin-bottom: 10px;
    font-size: 24px;
    margin-left: 60px;
}

/* 4 */
.hero-section-4 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 50px 30px;
}

.hero-section-4 .container-fluid {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin-bottom: 20px;
}

.hero-section-4 .img-procedure {
    flex: 1;
    margin-right: 20px;
}

.hero-section-4 .img-procedure img {
    width: 100%;
    height: 50vh;
    border-radius: 10px;
}

.hero-section-4 .info-procedure {
    flex: 1;
    margin-left: 20px;
    margin-top: -60px;
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.hero-section-4 .info-procedure ul {
    padding: 0;
}

.hero-section-4 .info-procedure h2 {
    color: blue;
    font-size: 28px;
    font-weight: bold;
}

.hero-section-4 .info-procedure ul li {
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 60px;
}

.line {
    width: 100%;
    height: 3px;
    background-color: blue;
    margin: 30px 0;
}

.hero-section-5 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 50px 30px;
}

.hero-section-5 .container-fluid {
    background-color: rgb(187, 183, 183);
    padding: 50px 50px;
    width: 80%;
    margin-bottom: 20px;
    border-radius: 5px;
    position: relative;
}

.hero-section-5 h3 {
    color: black;
    font-weight: bold;
}

.hero-section-5 h4 {
    color: blue;
    font-weight: bold;
}

.input-container {
    position: relative;
    width: 100%;
}

.input-container input {
    width: 100%;
    padding-right: 40px;
    padding: 10px 30px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 25px;
}

.input-container .send-icon {
    position: absolute;
    right: 40px;
    top: 50%;
    transform: translateY(-50%);
    color: #007bff;
    font-size: 20px;
    cursor: pointer;
}

.input-container .send-icon:hover {
    color: #0056b3;
}

.hero-footer {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 50px 120px; /* Add equal spacing on both sides */
    background-color: #5b5959; /* Set background color to gray */
    color: white; /* Set text color to white */
}

.hero-footer .container-fluid {
    flex: 1;
    margin: 0 20px;
}

.hero-footer .social {
    display: flex;
    gap: 10px;
    margin-left: 50px;
    margin-top: -30px;
}

.hero-footer .social i {
    color: blue; /* Set icon color to blue */
    font-size: 24px;
    padding: 20px 20px; /* Increase icon size */
}

.hero-footer img {
    margin-top: -50px;
    width: 300px; /* Increase logo size */
}

.hero-footer ul {
    list-style: none;
    padding: 0;
}

.hero-footer ul h3 {
    margin-bottom: 10px;
    color: white; /* Set text color to white */
}

.hero-footer ul li {
    margin-bottom: 5px;
    color: white; /* Set text color to white */
}



</style>
    <!-- Hero Section -->
    <div class="hero-section">
        <h1>SPORTS ZONE</h1>
        <p>Wechatung cập nhật thông tin về các giá trị kế hoạch mô Xin khác sản nước</p>
        <p>TV Nhóm Phút</p>
    </div>

    <!-- Event Section -->
    <div class="container event-section">
        <h2>SỰ KIỆN SẮP DIỄN RA</h2>
        <div class="row">
            <div class="col-md-6 event-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">GIẢI VIỆT DÃ VỀ NGUỒN</h5>
                        <p class="card-text">Ký niệm bị sắm Ngày gồi phòng miễn Nam, thống nhất đặt nước CIDW1975 – 30/6/2023 và chào
                            mừng Đại Hội Đảng các cụp, hướng tới Đại Hội đại biểu toàn quốc Em thứ XIV của Đảng và hướng
                            đưa ngày cùng Olympic at Một khóa hoàn dân năm 2023.</p>
                        <a href="#" class="btn btn-primary">Tham gia ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 event-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">GIẢI VIỆT DÃ VỀ NGUỒN</h5>
                        <p class="card-text">Ký niệm bị nằm Ngày gồi phòng miễn Nam, thống nhất đặt nước CIDW1975 - 30/6/2023
                            và chào mừng Đại Hội Đảng các cụp, hướng tới Đại Hội đại biểu toàn quốc Em thứ XIV của
                            Đảng và hướng đưa ngày cùng Olympic at Một khóa hoàn dân năm 2023.</p>
                        <a href="#" class="btn btn-primary">Tham gia ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
