<div class="nav" id="nav_menu">
    <div class="nav-logo">
        <span>P</span>
        <a href="#">FPARKING</a>
    </div>
    <div class="nav-menu">
        <ul>
            <li>
                <a class="home" href="index.php">
                    TRANG CHỦ
                </a>
            </li>
            <li>
                <a class="find" href="find.php">ĐỊA ĐIỂM</a>
            </li>
            <li>
                <a class="about" href="#">
                    VỀ CHÚNG TÔI
                </a>
            </li>
            <li>
                <a class="contact" href="#">
                    LIÊN HỆ
                </a>
            </li>
            <li >
                <a  class="login authen" href="login.php">
                    ĐĂNG NHẬP
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    var home = document.querySelector('.home');
    var find = document.querySelector('.find');
    var about = document.querySelector('.about');
    var contact = document.querySelector('.contact');
    var login = document.querySelector('.login');
    const findHref = 'http://localhost/DoAn1/page/find.php';
    const windowHref = window.location.href;

    if ( windowHref.includes(findHref)) {
        find.classList.add('active_menu');
        home.classList.remove('active_menu');
        about.classList.remove('active_menu');
        contact.classList.remove('active_menu');
        login.classList.remove('active_menu');
    } else if (window.location.href == 'http://localhost/DoAn1/page/index.php' || window.location.href == 'http://localhost/DoAn1/page/') {
        find.classList.remove('active_menu');
        home.classList.add('active_menu');
        about.classList.remove('active_menu');
        contact.classList.remove('active_menu');
        login.classList.remove('active_menu');
    } else if (window.location.href == 'http://localhost/DoAn1/page/about.php') {
        find.classList.remove('active_menu');
        home.classList.remove('active_menu');
        about.classList.add('active_menu');
        contact.classList.remove('active_menu');
        login.classList.remove('active_menu');
    } else if (window.location.href == 'http://localhost/DoAn1/page/contact.php') {
        find.classList.remove('active_menu');
        home.classList.remove('active_menu');
        about.classList.remove('active_menu');
        contact.classList.add('active_menu');
        login.classList.remove('active_menu');
    }
</script>