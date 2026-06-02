<!DOCTYPE html>
<header>
    <?php
        require 'Header.php';
        if ($_SESSION['admin'] != true) {
            header("Location: login.php");
            exit();
        }
    ?>
</header>
<body>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    <form>
        <label>Enter post title</label>
        <input placeholder="Title">
        <label>Enter post description</label>
        <input placeholder="description">
        <label>Post Body</label>
        <div id="editor">
            <h2>Demo Content</h2>
            <p>Preset build with <code>snow</code> theme, and some common formats.</p>
        </div>
        <button>Submit</button>
    </form>

    <script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });
    </script>
</body>
<footer>
    <?php
        require 'Footer.php';
    ?>
</footer>