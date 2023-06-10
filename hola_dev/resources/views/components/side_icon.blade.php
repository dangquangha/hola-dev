<div class="side-icons">
    <div id="go-to-top" class="hide mb-1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Lên đầu trang" style="background-color: black; border-radius: 50%; height: 40px; width: 40px;" onclick="window.scrollTo(0, 0)">
        <i class="las la-angle-up" style="color: #fff;"></i>
    </div>
    <div class="mb-1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Gọi ngay cho chúng tôi">
        <img src="./icons/addthis-phone.svg" alt="">
    </div>
    <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Chat với chúng tôi qua Zalo">
        <img src="./icons/addthis-zalo.svg" alt="">
    </div>     
</div>

<script>
    window.addEventListener("scroll", function () {
        var position = this.pageYOffset;
        if (position > 100) {
            document.getElementById('go-to-top').classList.remove('hide')
        } else {
            document.getElementById('go-to-top').classList.add('hide')
        }
    })

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>