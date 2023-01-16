<?php
function is_logged_in() //membatasi akses ke halaman admin
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    } else {
        $role = $ci->session->userdata('role');
        if ($role != "admin") {
            redirect('Guest');
        }
    }
}
?>