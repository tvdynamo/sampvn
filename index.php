<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>San Andreas Multiplayer Việt Nam - Coming Soon</title>
    <link rel="icon" type="image/png" href="img/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="img/android-chrome-512x512.png" sizes="512x512">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print"
          onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="css/main.css?ver=1.2.0" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body id="top">
    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
<!--                        <h3 class="masthead-brand">LOGO</h3>-->
                        <a class="masthead-brand" href="/">
                            <img class="logo-sampvn" src="img/logo.png">
                        </a>
                        <nav class="nav nav-masthead">
                            <a class="nav-link nav-social" target="_blank" href="https://www.facebook.com/www.samp.vn"
                               title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" target="_blank"
                               href="https://www.facebook.com/groups/www.samp.vn" title="Facebook"><i
                                        class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" href="/" title="Twitter"><i class="fab fa-twitter"
                                                                                       aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" href="/" title="Youtube"><i class="fab fa-youtube"
                                                                                       aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" href="/" title="Instagram"><i class="fab fa-instagram"
                                                                                         aria-hidden="true"></i></a>
                        </nav>
                    </div>
                </div>
                <div class="inner cover">
                    <h1 class="cover-heading">San Andreas Multiplayer Việt Nam</h1>
                    <p class="lead cover-copy">Máy chủ đang bảo trì để phát triển dự án, chúng tôi sẽ sớm quay trở lại.</p>
                    <p class="lead">
                        <button type="button" class="btn btn-lg btn-default btn-notify" data-toggle="modal"
                                data-target="#subscribeModal">Nhận thông báo
                        </button>
                    </p>
                </div>
                <div class="mastfoot">
                    <div class="inner">
                        <p>Copyright © 2014 - <?php echo date("Y"); ?> by <a href="/">SAMP.VN</a></p>
                    </div>
                </div>
                <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog"
                     aria-labelledby="subscribeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--              <h5 class="modal-title" id="subscribeModalLabel">Thông báo</h5>-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">Nhập Email của bạn để nhận
                                            thông báo từ chúng tôi</label>
                                        <input type="text" class="form-control" id="recipient-name"
                                               placeholder="abc@gmail.com">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default">Xác Nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/jquery.slim.min.js?ver=1.2.0"></script>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="scripts/main.js?ver=1.2.0"></script>
    <div></div>
    <script>
        $(document).ready(function () {
            $('body').children('div').last().remove();
        });
    </script>
</body>
</html>