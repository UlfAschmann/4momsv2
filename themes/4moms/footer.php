    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright © 4MOMS 2016 by unusual-projects.com.mx</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scrolling-nav.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bootFolio.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
        $(document)
            .ready(function() {
                $("#second").bootFolio({
                    bfLayout: "bflayhover",
                    bfFullWidth: "full-width",
                    bfHover: "bfhover162",
                    bfAnimation: "scale",
                    bfSpace: "nospace",
                    bfAniDuration: 300,
                    bfCaptioncolor: "#977F66",
                    bfTextcolor: "#ffffff",
                    bfTextalign: "center",
                    bfNavalign: "center"
                });
                $("a[rel^='prettyPhoto']").prettyPhoto();
            });

    </script>
    <!-- // bootFolio footer-->


</body>

</html>