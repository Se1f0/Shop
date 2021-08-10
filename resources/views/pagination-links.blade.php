<div class="paginatoin-area text-center pt-28">
    <div class="row">
        <div class="col-12">
            @if ($paginator->hasPages())
                <ul class="pagination-box">
                    @if (!$paginator->onFirstPage())
                        <li wire:click="previousPage"><a class="Previous" href="#temp">Previous</a></li>
                    @endif

                    @foreach ($elements as $element)
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li wire:click="gotoPage({{$page}})" class="active"><a href="#temp" >{{$page}}</a></li>
                                @else
                                <li wire:click="gotoPage({{$page}})"><a href="#temp">{{$page}}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    @if ($paginator->hasMorePages())
                        <li wire:click="nextPage"> <a class="Next" href="#temp"> Next </a></li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
</div>
