<div class="container">
    <h1>Create new Post</h1>
    <?php if($_POST): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form class="" action="/blog/create" method="post">
        <div class="form-group">
            <label for="title"><strong>Title:</strong></label>
            <input class="form-control" type="text" name="title" id="title" value="" />
        </div>
        <div class="form-group">
            <label for="title"><strong>Body:</strong></label>
            <textarea class="form-control" name="body" id="body"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="button">Create</button>
    </form>
</div>
