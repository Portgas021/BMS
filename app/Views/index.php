<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book Management</title>
    <!-- Bootstrap 4 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background-color: #343a40;
            color: white;
        }
        /* Updated button styles */
        .btn-custom {
            background-color: #ffc107; /* Yellow */
            color: white;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #ffa000; /* Darker yellow */
        }

        .btn-success {
            background-color: #28a745; /* Green */
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838; /* Darker green */
            border-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545; /* Red */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #bd2130; /* Darker red */
            border-color: #bd2130;
        }

        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <p><?= session()->getFlashdata('success') ?></p>
            </div>
        <?php endif ?>
        <!-- Add New User Button -->
        <div class="mb-3">
            <a href="<?= site_url('add') ?>" class="btn btn-success">Add New Book</a>
        </div>
        
        <!-- User List Card -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Book List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Genre</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($listOfBooks as $book): ?>
                            <tr>
                                <td><?= htmlspecialchars($book['id']) ?></td>
                                <td><?= htmlspecialchars($book['title']) ?></td>
                                <td><?= htmlspecialchars($book['author']) ?></td>
                                <td><?= htmlspecialchars($book['genre']) ?></td>
                                <td><?= htmlspecialchars($book['created_at']) ?></td>
                                <td>
                                    <a href="<?= site_url('edit/'.$book['id']) ?>" class="btn btn-warning btn-sm btn-custom">Edit</a>
                                    <a href="<?= site_url('delete/'.$book['id']) ?>" class="btn btn-danger btn-sm btn-custom">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>