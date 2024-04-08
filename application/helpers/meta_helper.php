<?php
if (!function_exists('getMetaTags')) {
    function getMetaTags($lastSegment) {
        $CI =& get_instance(); // Get the CodeIgniter instance

        $metaData = $CI->data->get_meta_details(); // Fetch meta details from the database

        foreach ($metaData as $metaVal) {
            if ($lastSegment == $metaVal->meta_source_name) {
                $data['meta_description'] = $metaVal->meta_description;
                $data['meta_keywords'] = $metaVal->meta_keyword;
                $data['meta_title'] = $metaVal->meta_title;
            }
        }

        return $data;
    }
}