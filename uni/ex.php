<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" required>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
    </div>
    <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" name="category" required>
    </div>
    <div class="form-group">
        <label for="review">Review:</label>
        <input type="text" name="review" required>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" required>
    </div>
    <button type="submit" name="submit">Add Course</button>
</form>