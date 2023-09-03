<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("template/_header.php",$data);?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("template/_navbar.php",$data);?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
        <?php $this->load->view("template/_sidebar.php",$data);?>
                
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?php $this->load->view($content.".php",$data);?>
                </main>
                
                <?php $this->load->view("template/_footer.php",$data);?>
            </div>
        </div>

        <?php $this->load->view("template/_script.php",$data);?>
    <div class="modal fade text-left" id="OneModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">{{_title_}}</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times-circle"></i>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
        </div>
    </div>

    </body>
</html>
