@extends('layouts.front.app')

@section('meta_data')
<meta name="description" content="{{$blog->meta_description}}">
<meta name="keywords" content="{{$blog->meta_tag}}">
<title>{{$blog->meta_title}}</title>

<script>
    {!!$blog->custom_script!!}
</script>
<script type="application/ld+json">{
    
    "@context": "http://schema.org/",
    "@type": "NewsArticle",
    "headline": "{{$blog->name}}",
    "description": "{{$blog->short_description}}",
    "datePublished": "{{$blog->created_at}}",
    "dateModified": "{{$blog->updated_at}}",
    "author": {
        "@type": "Person",
        "@id": "#person-admin",
        "name": "{{$blog->user->name}}"
    },
    "image": "{{url('public/images/blog/'.$blog->image)}}",
    "interactionStatistic": [
        {
            "@type": "InteractionCounter",
            "interactionType": "http://schema.org/CommentAction",
            "userInteractionCount": "0"
        }
    ],
    "publisher": {
        "@id": "#organization"
    },
    "mainEntityOfPage": "{{ url($blog->slug.'.html') }}"
}</script>

@endsection

@section('content')
<main class="container">

<style>
    .author-about-heading:after {
    content: " ";
    display: block;
    position: absolute;
    width: 2px;
    height: 100%;
    left: 0px;
    bottom: -4px;
    background: linear-gradient(to top,#40e0d0 0%,#ff8c00 33%,#ff0080 100%) !important;
}

.author-about-heading:before {
    content: " ";
    display: block;
    position: absolute;
    width: 40px;
    height: 3px;
    left: 0px;
    bottom: -4px;
    background: linear-gradient(to right,#40e0d0 0%,#ff8c00 33%,#ff0080 100%) !important;
    z-index: -1;
}

.author-about-heading {
    font-size: 21px;
    line-height: 1.2;
    position: relative;
    padding-left: 10px;
    margin-bottom: 25px;
    font-weight: 600;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="row">
        @foreach($ads as $ad)
            @if($ad->name == 'Page Top')
            <div class="col-12">
                <img style="  width: 100%;height: 300px;background-size: 100% 100%;" class="" src="{{ url('public/images/ads/'.$ad->image) }}" alt="Patchworker Spotlight: Puneet’s story" aria-hidden="">
            </div>
            @endif
        @endforeach
        @if($blog->sidebar == 1)
        <div class="col-md-9">
            <div class="">
                
                    <div class="blog-content">
                        
                        <h1 class="title">{{$blog->name}}</h1>
                        <p class="sub-title">{{$blog->short_description}}</p>
                        <img src="{{url('public/images/blog/'.$blog->image)}}" class="top-radius-img card-img-top " alt="...">
                        <div class="content">
                            <p style="color:#2F8075;">Uploaded by {{$blog->user->name}}</p>
                            {!!$blog->description!!}
                        </div>
                    </div>
            
            </div>
        </div>
        <div class="col-md-3" style="">
          <h5 style="color:#3D867C;padding-left: 40px;">MOST VIEWED BLOGS</h5> 
            @foreach($blog_by_view as $blog)
                        <a href="{{route('blog-detail',$blog->slug)}}">
                            <div class="card border-0" >
                                <img  height="150px"  src="{{url('public/images/blog/'.$blog->image)}}" class="top-radius-img card-img-top " alt="...">
                                <div class="card-body">
                                
                                <p class="card-text">{{$blog->name}}</p>
                                </div>
                            </div>
                        </a>
                <!-- <img src="{{url("/")}}/public_html/nowgg/public/front/assets/img/poweredby.svg" /> -->
            @endforeach
            <h5 style="color:#3D867C;padding-left:40px;">RECENT BLOGS</h5> 
            @foreach($blog_by_time as $blog)
                        <a href="{{route('blog-detail',$blog->slug)}}">
                            <div class="card border-0" >
                                <img  height="150px" src="{{url('public/images/blog/'.$blog->image)}}" class="top-radius-img card-img-top " alt="...">
                                <div class="card-body">
                                <p class="card-text">{{$blog->name}}</p>
                                </div>
                            </div>
                        </a>
                <!-- <img src="{{url("/")}}/public_html/nowgg/public/front/assets/img/poweredby.svg" /> -->
            @endforeach
            
        @foreach($ads as $ad)
            @if($ad->name == 'Page Side')
                <div class="card border-0">
                    <img  height="400px"  src="{{ url('public/images/ads/'.$ad->image) }}" class="top-radius-img card-img-top " alt="...">
                </div>
             @endif
        @endforeach
           
        </div>
        @else
        <div class="col-md-12">
            <div class="">
               
                    <div class="blog-content">
                        <!--<span><i class="bx bx-show-alt" style="font-size:10px;"></i></span>-->
                        
                        <div class="author-about-heading">ABOUT THE AUTHOR</div>
                        <h1 class="title">{{$blog->name}}</h1>
                        <p class="sub-title">{{$blog->short_description}}</p>
                        <img src="{{url('public/images/blog/'.$blog->image)}}" class="top-radius-img card-img-top " alt="...">
                        <div class="content">
                            <p style="color:#2F8075;">Uploaded by {{$blog->user->name}}</p>
                            {!!$blog->description!!}
                        </div>
                    </div>
               
            </div>
        </div>
        

        
</div>
        @endif
        <div class="col-md-12">
            <div class="">
                    <div class="blog-content">
                        <div class="about-author">
                        <div class="author-about-heading">ABOUT THE AUTHOR</div>
                          @if($blog->user->profile_image !== null)
                          <img align="left" src="{{url('public/images/user/'.$blog->user->profile_image)}}">
                          @else
                          <img align="left" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png">
                          @endif
                          <a href="{{route('user.blogs',$blog->user->id)}}"><h4>{{ $blog->user->name }}</h4></a>
                          <p>Follow Me @ <a target="_blank" href="{{ $blog->user->facebook }}" rel="nofollow" target="_blank"><i class="fa-brands fa-facebook"></i></a>  <a target="_blank" href="{{ $blog->user->linkedin }}" rel="nofollow"> <i class="fa-brands fa-linkedin"></i> </a>  <a target="_blank" href="{{ $blog->user->instagram }}" rel="nofollow"> <i class="fa-brands fa-instagram"></i> </a>  <a target="_blank" href="{{ $blog->user->whatsapp }}" rel="nofollow"> <i class="fa-brands fa-whatsapp"></i> </a>
                          </p>
                          <p>{{ $blog->user->author_details }}</p>
                        </div>
                    </div>
            </div>
        </div>
        @foreach($ads as $ad)
            @if($ad->name == 'Page Bottom')
            <div class="col-12 pb-4">
                <img style="  width: 100%;height: 300px;background-size: 100% 100%;" class="" src="{{ url('public/images/ads/'.$ad->image) }}" alt="Patchworker Spotlight: Puneet’s story" aria-hidden="">
            </div>
            @endif
        @endforeach

</main>
@endsection