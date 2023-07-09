<section class="container">
    <div class="search-results" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; align-content: center">
        <h4>Search results</h4>
        <p>Found: <?= count($posts)?></p>
    </div>
    <div>
        <article class="blog-posts">
            <div class="container">
                <?php foreach ($posts as $post) : ?>
                    <div class="card">
                        <div id="test-card" class="card-body" style="background-color: #f1f1f1; border-radius: 5px; padding: 20px;">
                            <h2><?= esc($post['title']) ?></h2>
                            <p><?= esc($post['body']) ?></p>
                            <p><a href="/blog/<?= esc($post['slug'], 'url') ?>">View article</a></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php if (empty($posts)) : ?>
                    <p>No posts found.</p>
                <?php endif ?>
            </div>
        </article>
    </div>
</section>

<style>
    #test-card {
        background-color: #f1f1f1;
        border-radius: 5px;
        padding: 20px;

    }
    .search-results {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        align-content: center;
    }
</style>