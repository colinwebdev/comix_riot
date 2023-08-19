<?php 
include('includes/header.inc.php');

$errorBucket = [];
$comicId = '';
$title = '';
$slug = '';
$images = [];
$thumb = '';
$chapter = '';
$order = '';
$postDate = '';
$inPageFlow = '';
$caption = '';
$tags = [];
$transcript = '';
$blogTitle = '';
$blog = '';

// if(!isset($_SESSION['username'])) {
//     header("Location: access.php");
// }

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $caption = $_POST['caption'];
    $transcript = $_POST['transcript'];
    $blogTitle = $_POST['blogTitle'];
    $blog = $_POST['blog'];
}

?>
    <aside>
            <ul class="importantLinks">
                <li>New Comic</li>
                <li>New Blog</li>
            </ul>
            <ul class="recentPages">
                <li>List 10 pages here</li>
            </ul>
            <ul class="blogPosts">
                <li>If separate blogs, list here</li>
            </ul>
            
        </aside>

        <main>
            <form action="cmx_new.php" method="POST" enctype="multipart/form-data">
                <div class="formL">
                    <div class="formLine">
                    <?php print_r($_POST) ?>
                        <label for="pages">Comic Images</label>
                        <input type="file" id="pages" name="pages[]" accept='image/*' multiple >
                    </div>
                    <div class="formLine">
                        <!-- Hide this if thumbnails disabled in settings -->
                        <label for="thumb">Thumbnail</label>
                        <input type="file" id="thumb" name="thumb" accept='image/*' multiple>
                        <p>Optional. If no thumbnail is uploaded, the whole page or first image will be used.</p>
                    </div>
                    <div class="formLine">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="">
                    </div>
                    <div class="formLine">
                        select chapter + number order
                    </div>
                    <div class="formLine">
                        In page flow?
                    </div>
                    <div class="formLine">
                        <!-- Include checkmark for "immediately" that disables date -->
                        <label for="date">Post Date</label>
                        <!-- Default to next expected post date based on most recent comic or current date -->
                        <input type="date" name="date" id="date" value="">
                    </div>
                    
                    <div class="formLine">
                        <label for="caption">Caption</label>
                        <textarea name="caption" id="caption" rows="5">Caption Here</textarea>
                    </div>
                    <div class="formLine">
                        <label for="transcript">Transcript</label>
                        <textarea name="transcript" id="transcript" rows="10">Transcript here</textarea>
                    </div>
                    <div class="formLine">
                        <label for="tags">Tags</label>
                        <textarea name="tags" id="tags">Tags Here</textarea>
                        <!-- Pop up with used tags -->
                        <p>Separate tags with commas</p>
                    </div>
                    <div class="formLine blogBox">
                        <label for="blogTitle">Blog Title</label>
                        <input type="text" name="blogTitle" id="blogTitle" value="">
                        <label for="blog">Blog</label>
                        <textarea name="blog" id="blog" rows="17">Blog</textarea>
                    </div>
                    <input type="submit" value="Submit">
                </div>
                <div class="formR">
                    <h1>Text Preview</h1>
                    <h2 id="showTitle">[Title]</h2>
                    <div id="showCaption">
                        <p>Caption</p>
                    </div>
                    <div id="showTranscript">
                        <p>Transcript</p>
                    </div>
                    <h2 id="showBlogTitle">[Blog Title]</h2>
                    <div id="showBlogText">
                        <p>Blog text</p>
                    </div>
                   
                </div>
            </form>
        </main>

<?php include('includes/footer.inc.php');