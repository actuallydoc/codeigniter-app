

<div class="container">
    <?php
    $session = \Config\Services::session();
    ?>
    <?php
        if ($session->getFlashdata('success')): ?>
        <div class="alert alert-success text-center alert-dismissible show fade mb-0">
            <?= $session->getFlashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="alert alert-primary" role="alert">
        Blog Page
    </div>
</div>


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
