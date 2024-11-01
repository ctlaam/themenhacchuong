jQuery(document).ready(function ($) {
    $('.carousel-wrap').each(function (index) {
        const $carousel = $(this); // Lấy carousel hiện tại
        $carousel.attr('data-index', index); // Gán data-index cho carousel
        $(this).slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,         // Tắt nút điều hướng previous và next
            autoplaySpeed: 2000,
            adaptiveHeight: true,   // Tự động điều chỉnh độ cao theo slide hiện tại
            responsive: [
                {
                    breakpoint: 992,  // Khi màn hình nhỏ hơn hoặc bằng 992px
                    settings: {
                        slidesToShow: 4, // Hiển thị 4 slide
                    }
                },
                {
                    breakpoint: 789,  // Khi màn hình nhỏ hơn hoặc bằng 789px
                    settings: {
                        slidesToShow: 2, // Hiển thị 2 slide
                    }
                }
            ]
        });
        $(`.arrow-btn-next[data-index="${index}"]`).on('click', function () {
            $carousel.slick('slickNext'); // Chuyển sang slide kế tiếp của carousel hiện tại
        });

        // Sự kiện click cho nút Previous chỉ áp dụng cho carousel hiện tại
        $(`.arrow-btn-prev[data-index="${index}"]`).on('click', function () {
            $carousel.slick('slickPrev'); // Quay về slide trước đó của carousel hiện tại
        });
    });
    $('.sb-tab-nav li').on('click', function () {
        // Loại bỏ lớp active từ tất cả các tab
        $('.sb-tab-nav li').removeClass('active');

        // Thêm lớp active cho tab được nhấn
        $(this).addClass('active');


        // Lấy ID của tab nội dung từ thuộc tính data-tab
        const tabId = $(this).data('tab');

        // Ẩn tất cả các nội dung tab
        $('.sb-tab-item').removeClass('active').hide();

        // Hiển thị nội dung của tab được chọn và thêm lớp active
        $(tabId).addClass('active').show();
    });
    var audio = null;

    $('.icon-play').click(function () {
        if ($(this).hasClass('fa-play-circle')) {
            if (!audio) {
                audio = new Audio($(this).data('link'));
                audio.play();
            } else {
                audio.pause();
                audio = new Audio($(this).data('link'));
                audio.play();
                $('.fa-pause-circle').removeClass('fa-pause-circle').addClass('fa-play-circle');
            }
            $(this).removeClass('fa-play-circle').addClass('fa-pause-circle');
        } else {
            $(this).removeClass('fa-pause-circle').addClass('fa-play-circle');
            if (audio) {
                audio.pause();
            }
        }
    });
    // $(document).on('click', '.download-button', function () {
    //     console.log(123123123);
    //     $('#wait-for').html('Proszę czekać <span id="countdown">10</span> sekund na pobranie!');
    //     $('#wait-for').removeClass('d-none');
    //     $('.download-box').addClass('d-none');
    //     var timeleft = 9;
    //     var downloadTimer = setInterval(function () {
    //         if (timeleft <= 0) {
    //             clearInterval(downloadTimer);
    //             $('#wait-for').html('');
    //             $('.download-box').removeClass('d-none');
    //             $('#wait-for').addClass('d-none');
    //         } else {
    //             document.getElementById("wait-for").innerHTML = 'Proszę czekać <span id="countdown">' + timeleft + '</span> sekund na pobranie!';
    //         }
    //         timeleft -= 1;
    //     }, 1000);
    // });
    // Open modal when .download-button is clicked
    // Open modal when .download-button is clicked
    $('.download-button').on('click', function () {
        $('#myModal').fadeIn().addClass('show'); // Show modal with fade-in effect
        startCountdown(); // Start countdown
    });

    // Close modal when .close is clicked
    $('.close').on('click', function () {
        $('#myModal').fadeOut().removeClass('show'); // Hide modal
    });

    // Close modal when clicking outside of modal content
    $(window).on('click', function (event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').fadeOut().removeClass('show');
        }
    });

    // Countdown function
    function startCountdown() {
        let countdown = 5; // Set countdown to 5 seconds
        $('#wait-for').text(countdown);

        const timer = setInterval(function () {
            countdown--;
            $('#wait-for').text(countdown);

            if (countdown <= 0) {
                clearInterval(timer); // Stop the timer
                $('#wait-for').addClass('d-none'); // Hide countdown text
                $('.download-box').removeClass('d-none'); // Show download options
            }
        }, 1000);
    }
});