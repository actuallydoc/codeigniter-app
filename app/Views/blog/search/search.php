<section class="blog-section">
    <div class="container">
        <h2>All posts</h2>
        <?php if($news): ?>
            <?php foreach ($news as $news_item): ?>
                <h3><a class="no-underline" href="/blog/<?=$news_item["slug"]?>"><?= $news_item['title'] ?></a></h3>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No Posts have been found</p>
        <?php endif; ?>

    </div>

</section>