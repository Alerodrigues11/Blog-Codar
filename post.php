<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas nemo ipsum mollitia sunt quis laboriosam tempora optio, sapiente suscipit officia culpa amet ex unde aspernatur veniam excepturi. Adipisci, accusantium unde!
        Accusamus facere quia sit repellat quas illum maxime id ipsam impedit sint? Culpa laborum aperiam natus architecto at debitis impedit sed in suscipit aliquid non nemo, quod mollitia molestias dicta?
        Earum modi tempora ullam porro deleniti totam mollitia eius sunt minus, nulla rerum laborum eaque molestiae a nihil, atque facere illum iure nesciunt ex voluptate. Deserunt eos sit natus saepe.
        Iste eius est corrupti odio voluptatem odit, vero sint nihil sed, aut explicabo. Sed nostrum natus, sequi aliquam ex facere in exercitationem modi sit eum vel vitae pariatur aliquid minima.
        Ipsa placeat veniam minima soluta deserunt recusandae quas, eveniet nobis necessitatibus accusamus, dignissimos error! Quo praesentium vitae suscipit, nostrum veniam sed? Ea a iste ratione ducimus porro sapiente ullam culpa.</p>
        <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas nemo ipsum mollitia sunt quis laboriosam tempora optio, sapiente suscipit officia culpa amet ex unde aspernatur veniam excepturi. Adipisci, accusantium unde!
        Accusamus facere quia sit repellat quas illum maxime id ipsam impedit sint? Culpa laborum aperiam natus architecto at debitis impedit sed in suscipit aliquid non nemo, quod mollitia molestias dicta?
        Earum modi tempora ullam porro deleniti totam mollitia eius sunt minus, nulla rerum laborum eaque molestiae a nihil, atque facere illum iure nesciunt ex voluptate. Deserunt eos sit natus saepe.
        Iste eius est corrupti odio voluptatem odit, vero sint nihil sed, aut explicabo. Sed nostrum natus, sequi aliquam ex facere in exercitationem modi sit eum vel vitae pariatur aliquid minima.
        Ipsa placeat veniam minima soluta deserunt recusandae quas, eveniet nobis necessitatibus accusamus, dignissimos error! Quo praesentium vitae suscipit, nostrum veniam sed? Ea a iste ratione ducimus porro sapiente ullam culpa.</p>
    </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php Foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php Foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach ?>
            </ul>
        </aside>
    </div>   
</main>
<?php
    include_once("templates/footer.php");
?>  