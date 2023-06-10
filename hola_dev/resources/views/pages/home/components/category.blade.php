<div class="category">
    <div class="container">
        <div class="category-header">
            <div class="row h-100">
                <div class="col-md-3 d-flex align-items-center p-1 h-100" style="background-color: #303132; color: #fff;">
                    <i class="las la-bars d-flex align-items-center justify-content-center" style="font-size: 1.5rem; border: 2px solid #fff; border-radius: 2px; margin:0 0.5rem 0 0.5rem;"></i>                                
                    <b><p class="d-flex align-items-center m-1">DANH MỤC SẢN PHẨM</p></b>
                </div>
                <div class="col-md-9 d-flex align-items-center policies">
                    <ul class="d-flex align-items-center">
                        <li>
                            <i class="las la-search"></i>
                            <a href="#">Tra cứu thời hạn bảo hành</a>    
                        </li>
                        <li>
                            <i class="las la-clipboard-list"></i>
                            <a href="#">Chính sách bảo hành</a>
                        </li>
                        <li>
                            <i class="las la-question-circle"></i>
                            <a href="#">Câu hỏi thường gặp</a>
                        </li>
                        <li>
                            <i class="las la-phone"></i>
                            <a href="#">Liên hệ kinh doanh</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="category-info">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center p-0" style="border: 1px solid rgba(0, 0, 0, 0.121); border-radius: 0 0 5px 5px;">
                    <ul class="w-100" style="position: relative; min-height: 340px">
                        <li class="sidebar-item">
                            <a href="#"><i class="las la-gift"></i></a>
                            <a href="#">Tổng hợp khuyến mãi</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#"><i class="las la-pen"></i></a>
                            <a href="#">Bút cảm ứng</a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <div class="h-100 d-flex align-items-center">
                                <a href="#"><i class="las la-tablet-alt"></i></a>
                                <a href="#">Phụ kiện Ipad</a>
                                    <div class="sub-menu">
                                    <a href="#" class="sub-menu-item">Dán màn hình Ipad</a>
                                    <a href="#" class="sub-menu-item">Bao da Ipad</a>
                                    <a href="#" class="sub-menu-item">Túi đựng Ipad</a>
                                    <a href="#" class="sub-menu-item">Đế dựng laptop, Ipad</a>
                                </div>
                            </div>
                            <i class="las la-angle-right d-flex-end" style="font-size: 1rem;"></i>
                        </li>
                        <li class="sidebar-item">
                            <a href="#"><i class="las la-desktop"></i></a>
                            <a href="#">Phụ kiện khác</a>
                        </li>            
                    </ul>
                </div>
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            @foreach ($slides as $key => $slide)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="slide-control {{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : '' }}" aria-label="Slide {{ $key }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($slides as $key => $slide)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('images/' . $slide) }}" class="d-block w-100">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" style="width: 4rem"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <div class="d-flex justify-content-center align-items-center p-1" style="border-radius: 50%; background-color: black;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>    
                            </div>
                        </button>
                        <button class="carousel-control-next" style="width: 4rem" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <div class="d-flex justify-content-center align-items-center p-1" style="border-radius: 50%; background-color: black;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>    
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>