<!-- Page Heading
		================================================== -->
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h1 class="page-heading__title">Team <span class="highlight">All Stars</span></h1>
                <ol class="page-heading__breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    @for($i=0; $i <=count(Request::segments()); $i++)
                            <a href="{{'/'.Request::segment($i)}}">{{Request::segment($i)}}</a>&nbsp/&nbsp;
                    @endfor
                    {{--<li class="breadcrumb-item"><a href="index.html">Home</a>
                    <li class="breadcrumb-item"><a href="team-overview.html">Team</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Roster V1</li>--}}
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Page Heading / End -->