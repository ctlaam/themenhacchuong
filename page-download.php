<?php
    /* Template Name: download */

    $file = get_attached_file($_GET['id']);

    if (file_exists($file) ) {
        $postId = isset($_GET['post']) ? (int) $_GET['post'] : null;
        if ($postId) {
            $downloadCount = (int) get_field('download_count', $postId);
            $downloadCount++;
            update_field('download_count', $downloadCount, $postId);
        }

        $filename = basename($file);

        if (isset($_GET['type']) && $_GET['type'] == 'm4r') {
            $filename = explode('.', basename($file))[0] . '.m4r';
        }

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
    } else {
        header('Location: ' . get_bloginfo('wpurl'));
    }

    exit;
?>