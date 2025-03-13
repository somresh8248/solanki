<?php 
    define("TITLE", "Edit Post");
    include("Includes/Header.php");

    EditPost();

?>

    <!-- CK Editor -->
    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Posts</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="../Admin/">Dashboard</a></li>
                        <li class="active">Post</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php echo (isset($PostMsg)) ? $PostMsg : ""; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title"><i class="fa fa-plus"></i> Edit Post</h3>
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <?php echo (isset($PostTitleError)) ? $PostTitleError : ""; ?>
                                <input name="PostTitle" type="text" class="form-control rounded" placeholder="Post Title" required value="<?php echo (isset($PostTitle)) ? $PostTitle : ""; ?>">
                            </div>
                            <!-- Slug -->
                            <div class="form-group">
                                <?php echo (isset($PostSlugError)) ? $PostSlugError : ""; ?>
                                <input name="PostSlug" type="text" class="form-control rounded" placeholder="Post Slug" required value="<?php echo (isset($PostSlug)) ? $PostSlug : ""; ?>">
                            </div>
                            
                            <!-- Meta -->
                            <div class="form-group">
                                <?php echo (isset($MetaTitleError)) ? $MetaTitleError : ""; ?>
                                <input name="MetaTitle" type="text" class="form-control rounded" placeholder="Meta Title"  value="<?php echo (isset($MetaTitle)) ? $MetaTitle : ""; ?>">
                            </div>
                            <div class="form-group">
                                <?php echo (isset($MetaDescError)) ? $MetaDescError : ""; ?>
                                <input name="MetaDesc" type="text" class="form-control rounded" placeholder="Meta Desc"  value="<?php echo (isset($MetaDesc)) ? $MetaDesc : ""; ?>">
                            </div>
                            <div class="form-group">
                                <?php echo (isset($MetaTitleError)) ? $MetaTitleError : ""; ?>
                                <input name="MetaKey" type="text" class="form-control rounded" placeholder="Meta Key"  value="<?php echo (isset($MetaKey)) ? $MetaKey : ""; ?>">
                            </div>

                            <!-- Meta -->
                            <div class="form-group">
                                <?php echo (isset($PostContentError)) ? $PostContentError : ""; ?>
                                <textarea name="PostContent" class="form-group form-control rounded" id="Editor">
                                <?php echo (isset($PostContent)) ? $PostContent : ""; ?>
                                </textarea>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Feature Image">Feature Image:</label>
                                    <input name="FeatureImage" title="Feature Image" id="Feature Image" type="file" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo (isset($PostTagError)) ? $PostTagError : ""; ?>
                                    <label for="Post Tag">Select Category:</label>
                                    <select name="Tag" class="form-control" id="Post Tag" required>
                                        <?php DisplayPostTag(); #Edit.php?> 
                                        <?php DisplayTagOption(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                            <input type="date" class="form-control" id="custdate" name="custdate">

                            </div>

                            <div class="form-group">
                                <button name="UpdatePost" type="submit" class="input-md btn btn-success waves-effect">Update Post</button>
                            </div>

                        </form>

                        <script>
                            CKEDITOR.replace('Editor');
                        </script>

                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center">
            <?php echo date('Y'); ?> &copy; Travelmagica All Right Resorved </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->

<?php 

    include("Includes/Footer.php");

?>