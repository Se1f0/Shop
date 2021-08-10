<div class="category-toggle-wrap">
    <div id="jump" class="category-toggle">
        category
        <div class="cat-icon">
            <i class="fa fa-angle-down"></i>
        </div>
    </div>
    @if (\Request::route()->getName() == 'home')
        <nav class="category-menu hm-1">
    @else
        <nav class="category-menu category-style-2">
    @endif
        <ul>
            @foreach ($categories as $category)
            <li><a href="{{route('product.category',['category_slug' => $category->slug])}}">{{$category->name}}</a></li>
            @endforeach
            {{-- <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-desktop"></i>
                    computer</a></li>
            <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i
                        class="fa fa-camera"></i> camera</a>
                <!-- Mega Category Menu Start -->
                <ul class="category-mega-menu">
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Samsome</a></li>
                            <li><a href="shop-grid-left-sidebar.html">GL Stylus</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Uawei</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Cherry Berry</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">headphone</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Wireless
                                    Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">accessories</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">headphone</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Wireless
                                    Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                        </ul>
                    </li>
                </ul><!-- Mega Category Menu End -->
            </li>
            <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i
                        class="fa fa-book"></i> smart phones</a>
                <!-- Mega Category Menu Start -->
                <ul class="category-mega-menu">
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Samsome</a></li>
                            <li><a href="shop-grid-left-sidebar.html">GL Stylus</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Uawei</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Cherry Berry</a></li>
                            <li><a href="shop-grid-left-sidebar.html">uPhone</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">headphone</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Wireless
                                    Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Over-ear</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">accessories</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                            <li><a href="shop-grid-left-sidebar.html">OTG Cable</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="shop-grid-left-sidebar.html">accessories</a>
                        <ul>
                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                            <li><a href="shop-grid-left-sidebar.html">OTG Cable</a></li>
                        </ul>
                    </li>
                </ul><!-- Mega Category Menu End -->
            </li>
            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-clock-o"></i>
                    watch</a></li>
            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-television"></i>
                    electronic</a></li>
            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-tablet"></i>
                    tablet</a></li>
            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> books</a></li>
            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-microchip"></i>
                    microchip</a></li>
            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-bullhorn"></i>
                    bullhorn</a></li> --}}
        </ul>
    </nav>
</div>
