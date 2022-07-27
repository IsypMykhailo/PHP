<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($items as $menu_item)
                    @php
                    $listItemClass = null;
                    $linkAttributes = null;
                    $caret = null;
                    $styles = null;
                    $icon = null;
                    $link = $menu_item->link();

                    if(url($menu_item->link()) == url()->current()){
                        $listItemClass = 'nav-link active';
                    } else{
                        $listItemClass = 'nav-link';
                    }
                    if(!$menu_item->children->isEmpty()){
                        $linkAttributes = 'class="dropdown-toggle" data-toggle="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"';
                        $caret = '<span class="caret"></span>';
                        $link = "#";
                    }
                    @endphp

                    <li class="nav-item"><a href="{{ $menu_item->link() }}" {!! $linkAttributes ?? '' !!}> {{ $menu_item->title }} </a> {!! $caret !!}</li>
                @endforeach
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
