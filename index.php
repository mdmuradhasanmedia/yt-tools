<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Details Extractor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
        }
        #result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>YouTube Details Extractor</h1>
    <form action="extract.php" method="POST">
        <input type="text" name="url" placeholder="Enter YouTube Video URL" style="width: 300px;" required>
        <button type="submit">Extract Details</button>
    </form>

    <?php if (isset($_GET['error'])): ?>
        <p style="color: red;"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>

    <?php if (isset($_GET['title'])): ?>
        <div id="result">
            <h2>Results:</h2>
            <p><strong>Title:</strong> <?php echo htmlspecialchars($_GET['title']); ?></p>
            <p><strong>Description:</strong> <?php echo htmlspecialchars($_GET['description']); ?></p>
            <p><strong>Image:</strong> <img src="<?php echo htmlspecialchars($_GET['image']); ?>" alt="Video Thumbnail" style="max-width: 100%;"></p>
            <p><strong>Tags:</strong> <?php echo htmlspecialchars($_GET['tags']); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
