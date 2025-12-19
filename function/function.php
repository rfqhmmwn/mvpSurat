<?php
require __DIR__. '/../inc/config.php';
include 'function_admin.php';
include 'function_user.php';

//session message
function session_message() {
    if(isset($_SESSION['message']) == TRUE)
        {
            // echo $_SESSION['message'];
            $message = $_SESSION['message'];
            
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    ' . $message . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
            unset($_SESSION['message']);
        }
}
?>