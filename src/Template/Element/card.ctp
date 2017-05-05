<div class="card small">
    <div class="card-image">
        <a href="<?php echo $article->url ?>"><img src="<?php echo 'files/Articles/image/'.$article->image ?>"/></a>
    </div>
        <div class="card-content">
            <p><?php echo $article->title ?></p>
        </div>
            <div class="card-action">
                <i class="red-text material-icons">favorite_border</i>
                <i class="right blue-text fa fa-facebook-square fa-2x"></i>
            </div>
</div>