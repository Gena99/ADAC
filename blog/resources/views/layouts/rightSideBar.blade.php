<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><a class="" href="#"><img src="/images/LogoADACLiveFinalBD3.png"
                                                          width="30%" height="30%"></a></h3>
    </div>
    <div class="panel-body">
        @inject('News', 'App\News')
        <ul>
            @foreach (\App\News::all() as $news)
                <li>{{ $news->titre }}</li>
            @endforeach
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">FaceBook</h3>
    </div>
    <div class="panel-body">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FADACLiive%2F&amp;tabs=timeline&amp;width=450&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1752301448432852"
                width="100%" height="500" style="border:none;overflow:hidden" scrolling="no"
                frameborder="0" allowtransparency="true"></iframe>
    </div>
</div>