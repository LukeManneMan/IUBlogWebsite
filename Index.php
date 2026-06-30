<!DOCTYPE html>
<html>

    <body>
        <header>
            <?php
                require 'Header.php'
            ?>
        </header>
        <div class="container-fluid text-center">
            <h2>Posts</h2>
        </div>

        <div id="posts-container">
        <?php
            require_once 'Db.php';
            $result = $conn->query('select * from lukeblog.posts LIMIT 3');
            $offset = 3;
   
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo "<div class='container'>";
                    echo "<div class='row mb-3 justify-content-center post-card'>";
                        echo "<div class='col-5 col-md-4'>";
                            echo "<a href='Post.php?id=".$row['ID']."'>";
                            echo "<img src=".$row['ImgPath'].">";
                        echo "</div>";
                        echo "<div class='col-4 col-md-4' id='post-desc'>";
                            echo "<h3>".$row['PostTitle']."</h3>";
                            echo "<p>".$row['ShortDesc']."</p>";
                            echo "</a>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";  
            }
        ?>
        </div>

        <div class="text-center mt-3">
            <button class="btn btn-primary" id="loadMore" data-offset="3">Load More</button>
        </div>
        <footer>
            <?php
                require 'Footer.php'
            ?>
        </footer>
    </body>

    <script>
        document.getElementById('loadMore').addEventListener('click', function() {
            let offset = this.getAttribute('data-offset');  
            
            fetch('LoadPosts.php?offset=' + offset)
                .then(response => response.json())
                .then(posts => {
                    if (posts.length === 0) {
                        this.style.display = 'none';
                        return;
                    }

                    posts.forEach(post => {
                        let html = `
                        <div class='container'>
                            <div class='row mb-3 justify-content-center post-card'>
                                <div class='col-5 col-md-4'>
                                    <a href='Post.php?id=${post.ID}'>
                                        <img src='${post.ImgPath}' class='img-fluid w-100' style='height:auto; object-fit:cover;'>
                                    </a>
                                </div>
                                <div class='col-4 col-md-4' id='post-desc'>
                                    <a href='Post.php?id=${post.ID}'>
                                        <h3>${post.PostTitle}</h3>
                                        <p>${post.ShortDesc}</p>
                                    </a>
                                </div>
                            </div>
                        </div>`;
                        document.getElementById('posts-container').insertAdjacentHTML('beforeend', html);
                    });

                    this.setAttribute('data-offset', parseInt(offset) + 3);
                });
        });
    </script>
