<div class="blog-grid-top">
    <div class="b-grid-top">
        <div class="blog_info_left_grid">
            <a href="peter.php">
                <img src="images/Peter1.jpg" class="img-fluid" alt="">
            </a>
        </div>
        <div class="blog-info-middle">
            <ul>
                <li>
                    <a href="#">
                        <i class="far fa-calendar-alt"></i> OCT 30,2023</a>
                </li>
                <li class="mx-2">
                    <a href="form_like_peter.php">
                    <?php include "connection.php";
                        // comment adalah nama tabel di database
                        $tampil_comment = mysqli_query($koneksi, "SELECT*FROM like_peter");
                        $like = mysqli_num_rows($tampil_comment);
                        ?>
                        <i class="far fa-thumbs-up"></i> <?php echo $like?> Likes</a>
                </li>
                <li>
                    <a href="form_comment_peter.php">
                        <i class="far fa-comment"></i> 0 Comments</a>
                </li>

            </ul>
        </div>
    </div>

    <h3>
        <a href="single.html">Amet consectetur adipisicing </a>
    </h3>
    <p> Last dinner with Peter Hou (70), my travel buddy.</p>
    <!-- <a href="single.html" class="btn btn-primary read-m">Read More</a> -->
</div>