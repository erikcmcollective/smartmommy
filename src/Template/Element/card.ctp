                <?php foreach($articles as $article) { ?>
                <div class="col s12 m4">
                    <div class="card small">
                        
                        
                        
                        
                        <div class="card-image">
                          
                            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                            <img src="<?php echo  'files/Articles/image/'.$article->image ?>"/></a>
                                  
                        
                        </div>
                        
                        
                        <div class="card-content">
                            <p><?= $article->body ?></p>
                        </div>
                        <div class="card-action">
                            <i class="red-text material-icons">favorite_border</i>
                            <i class="blue-text material-icons">share</i>
                            <button onclick="fbshare()">Click me</button>
                        </div>
                    </div>
                </div>


    
                <?php } ?>

