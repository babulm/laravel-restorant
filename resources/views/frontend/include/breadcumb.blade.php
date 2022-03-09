                        
<?php $link = ""; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown" style="text-transform: capitalize;">
                @foreach(Request::segments() as $segment)
                    {{str_replace(array('-','pages'),' ',$segment)}}
                @endforeach
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">                  
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>           
                    @for($i = 1; $i <= count(Request::segments()); $i++)
                    <li class="breadcrumb-item text-white active" aria-current="page">
                        @if($i < count(Request::segments()) & $i > 0)
                        <?php $link .= "/" . Request::segment($i); ?>
                        <a href="<?= $link ?>">
                        {{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
                        @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                        @endif
                    </li>    
                    @endfor                        
                </ol>
            </nav>
        </div>
    </div>
</div>