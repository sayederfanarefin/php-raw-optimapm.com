<?php include 'includes/adminheader.php';

?>
    <div id="wrapper">

       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            PUBLISH Experience 
                        </h1>
<?php
if (isset($_POST['publish'])) {

    $post_title = $_POST['title'];
      $post_tag = $_POST['tags'];
      $post_content = $_POST['content'];
if (isset($_SESSION['firstname'])) {
        $post_author = $_SESSION['firstname'];
    }
    $post_date = date('Y-m-d');
    $post_status = 'draft';
    

    $image = $_FILES['image']['name'];
    $ext = $_FILES['image']['type'];
    $validExt = array ("image/gif",  "image/jpeg",  "image/pjpeg", "image/png");
    if (empty($image)) {
echo "<script>alert('Attach an image');</script>";
    }
    else if ($_FILES['image']['size'] <= 0 || $_FILES['image']['size'] > 1024000000 )
    {
echo "<script>alert('Image size is not proper');</script>";
    }
    else if (!in_array($ext, $validExt)){
        echo "<script>alert('Not a valid image');</script>";

    }
    else {
        $folder  = '../allpostpics/';
        $imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
        $picture = rand(1000 , 1000000) .'.'.$imgext;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture)) {
            $query = "INSERT INTO experience (title,author,postdate,image,content,status,tag) VALUES ('$post_title' , '$post_author' , '$post_date' , '$picture' , '$post_content' , '$post_status', '$post_tag') ";
            $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
            if (mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('Experience posted successfully.It will be published after admin approves it');
                window.location.href='experiences.php';</script>";
            }
            else {
                "<script> alert('Error while posting..try again');</script>";
            }
        }
    
}
}
?>

<form role="form" action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_title">Experience Title</label>
        <input type="text" name="title" placeholder = "ENTER TITLE " value= "<?php if(isset($_POST['publish'])) { echo $post_title; } ?>"  class="form-control" required>
    </div>

    
    <div class="form-group">
        <label for="post_image">Experience Image </label> <font color='brown' > &nbsp;&nbsp;(Allowed image size: 1024 KB) </font> 
        <input type="file" name="image" >
    </div>
    <div class="form-group">
        <label for="post_tag">Experience Tags</label>
        <input type="text" name="tags" placeholder = "ENTER SOME TAGS SEPERATED BY COMMA (,)" value= "<?php if(isset($_POST['publish'])) { echo $post_tag; } ?>" class="form-control" >
    </div>
    <div class="form-group">
        <label for="post_content">Experience Content</label>
        <textarea class="form-control" name="content"  id="" cols="30" rows="15" ><?php if(isset($_POST['publish'])) { echo $post_content; } ?></textarea>
    </div>
<button type="submit" name="publish" class="btn btn-primary" value="Publish Post">Publish Experience</button>

</form>

 </div>
                </div>
                
            </div>

        </div>
        
   <?php 'includes/admin_footer.php';?> -->
    </div>
    
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
