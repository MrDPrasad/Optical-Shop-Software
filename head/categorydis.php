<?php
include('header.php');
include('function.php'); // Include the file containing getAll() function
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Category</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $categories = getAll("category"); // Fetch categories using getAll() function
                            if ($categories) {
                                foreach ($categories as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['CategoryID']; ?></td>
                                        <td><?= $item['CategoryName']; ?></td>
                                        <td><?= $item['status']; ?></td>
                                        <td>
                                            <a href="edit-cate.php?id=<?= $item['CategoryID']; ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='4'>No categories found.</td></tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
