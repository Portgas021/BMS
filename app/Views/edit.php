<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Book</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Edit Book</h4>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <p><?= session()->getFlashdata('success') ?></p>
                </div>
            <?php endif ?>
            <form action="<?= site_url('update/'.$book['id']) ?>" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($book['title']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" name="author" class="form-control" value="<?= htmlspecialchars($book['author']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="genre">Genre:</label>
                    <input type="text" name="genre" class="form-control" value="<?= htmlspecialchars($book['genre']) ?>" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
