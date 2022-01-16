<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function send_sms($to, $msg) {
    $msg = urlencode($msg);
    $to = $to;
    $url = "http://sms.bulk24sms.com/api/sendhttp.php?authkey=1887AMkJaQHJkhF5d5427a3&mobiles=" . $to . "&message=" . $msg . "&sender=CLICKS&route=4";
    $rsponse = file_get_contents($url);
    return true;
}

function send_sms_international($to, $msg) {
    $msg = urlencode($msg);
    $to = $to;
//    $url = "http://sms.bulk24sms.com/api/sendhttp.php?authkey=1887AMkJaQHJkhF5d5427a3&mobiles=" . $to . "&message=" . $msg . "&sender=CLICKS&route=4";
//    $rsponse = file_get_contents($url);
    return true;
}

function send_mail($to, $sub, $msg) {
    $sub = urlencode($sub);
    $msg = urlencode($msg);
    $to = $to;
    $mail = "http://api.crisil.xyz/mail/mail.php?id=9&to=$to&msg=$msg&subject=$sub";
    $rsponse = file_get_contents($mail);
    return true;
}

function get_pages($per_page) {
    $CI = get_instance();
    $CI->load->library('session');
    if ($CI->session->userdata('per_page') != "") {
        $per_page = $CI->session->userdata('per_page');
    }
    $CI->session->unset_userdata('per_page');
    return $per_page;
}

function custom_validation($values, $status = TRUE) {
    $CI = get_instance();
    $CI->load->library('session');
    $CI->load->library('form_validation');
    $count = count($values);
    $err = [];
    if ($count > 0) {
        foreach ($values as $value) {
            $CI->form_validation->set_rules($value[0], $value[1], $value[2]);
        }
        if ($CI->form_validation->run() == FALSE || $status == FALSE) {
            // echo validation_errors();
            foreach ($values as $value) {
                if (strpos(form_error($value[0]), 'Unable') !== false) {
                    $err[$value[0]] = ['value' => set_value($value[0]), 'error' => ''];
                } else {
                    $err[$value[0]] = ['value' => set_value($value[0]), 'error' => form_error($value[0], '<div class="error clearfix">', '</div>')];
                }
            }
            $CI->session->set_flashdata('validation_errors', $err);
            return FALSE;
        } else {
            return TRUE;
        }
    } else {
        return TRUE;
    }
}

function set_msg($msg, $type = 'E') {
    if ($type == 'S') {
        $type = 'Success';
    } elseif ($type == 'E') {
        $type = 'Error';
    }
    $CI = get_instance();
    $CI->load->library('session');
    $CI->session->set_flashdata('msg', array($type, $msg));
}

function school_aa_id() {
    $CI = get_instance();
    $CI->load->library('session');
    return 1; //$CI->session->userdata('newschool_id');
}

function site_ab_id() {
    $CI = get_instance();
    $CI->load->library('session');
    return 1;
    //$CI->session->userdata('newschool_id');
}

function admin() {
    $CI = get_instance();
    $CI->load->library('session');
    return $CI->session->userdata('newschool_id');
}

function refer($link = '') {
    $CI = get_instance();
    $CI->load->library('user_agent');
    if ($link == '') {
        redirect($CI->agent->referrer());
    } else {
        redirect(base_url($link));
    }
}

function convert_date($date = '') {
    $date = explode('-', $date);
    if (count($date) == 3) {
        return $ndate = $date[2] . '-' . $date[1] . '-' . $date[0];
    } else {
        return null;
    }
}

function encrypt($password) {
    $CI = get_instance();
    $encryption_key = base64_decode("ShowCrisil#@2020");
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($password, 'aes-256-cbc', $encryption_key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function decrypt($password) {
    $CI = get_instance();
    $encryption_key = base64_decode("ShowCrisil#@2020");
    list($encrypted_data, $iv) = explode('::', base64_decode($password), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $iv);
}

//should be changed on user based permissions
function chk($module_id, $permit) {
    $CI = get_instance();
    $CI->load->library('session', 'database');
    if ($CI->session->userdata('newsite_usertype') != '2') {
        $usertype = $CI->Query->select('*', 'role_aa_usertype', ['role_aa_usertype_name' => $CI->session->userdata('newsite_usertype')], 'row');
        if ($permit[0] == 'view' || $permit[0] == 'add' || $permit[0] == 'edit' || $permit[0] == 'delete' || $permit[0] == 'print') {
            $module = $CI->Query->select('*', 'role_bb_module', ['role_bb_module_status' => 'Enabled', 'role_bb_module_id' => $module_id], 'row');
            if (count($module) == 1) {
                $qry = "select *  from role_bc_permission where ";
                $where = 'role_aa_usertype_id="' . $usertype->role_aa_usertype_id . '" and role_bb_module_id="' . $module_id . '" and (role_bc_permission_' . $permit[0] . '=1';
                foreach ($permit as $per) {
                    $where .= ' or role_bc_permission_' . $per . '=1';
                }
                $where .= ')';

                $chk = $CI->Query->query_build($qry . $where, 'row');
                if (count($chk) == 1) {
                    return $array = [
                        'view' => $chk->role_bc_permission_view,
                        'add' => $chk->role_bc_permission_add,
                        'edit' => $chk->role_bc_permission_edit,
                        'delete' => $chk->role_bc_permission_delete,
                        'print' => $chk->role_bc_permission_print
                    ];
                } else {
                    redirect(base_url('Error/unauthorized'));
                }
            } else {
                redirect(base_url('Error/unauthorized'));
            }
        } else {
            redirect(base_url('Error/unauthorized'));
        }
    } else {
        return $array = [
            'view' => '1',
            'add' => '1',
            'edit' => '1',
            'delete' => '1',
            'print' => '1'
        ];
    }
}

function menu_builder($active_module_id = "0", $sub_cat_id = "") {
    $CI = get_instance();
    $CI->load->library('session', 'database');
    $array = [];
    if ($sub_cat_id == "") {
        $array['Dashboard'][] = [
            'id' => 0,
            'name' => 'Dashboard',
            'link' => 'Auth/Dashboard',
            'active' => $active_module_id == 0 ? 'active' : ''
        ];
    }
    $categorys = $CI->Query->select('*', 'role_ba_category', ['role_ba_category_type' => 'main_category', 'role_ba_category_status' => 'Enabled'], 'result', ['role_ba_category_ordering' => 'asc']);

    if (count($categorys) > 0) {
        foreach ($categorys as $category) {

            if ($sub_cat_id != "") {
                $sub_categorys = $CI->Query->select('*', 'role_ba_category', ['role_ba_category_main_id' => $category->role_ba_category_id, 'role_ba_category_id' => $sub_cat_id, 'role_ba_category_type' => 'sub_category', 'role_ba_category_status' => 'Enabled'], 'result', ['role_ba_category_ordering' => 'asc']);
            } else {
                $sub_categorys = $CI->Query->select('*', 'role_ba_category', ['role_ba_category_main_id' => $category->role_ba_category_id, 'role_ba_category_type' => 'sub_category', 'role_ba_category_status' => 'Enabled'], 'result', ['role_ba_category_ordering' => 'asc']);
            }

            if (count($sub_categorys) > 0) {
                foreach ($sub_categorys as $sub_category) {
                    $modules = $CI->Query->select('*', 'role_bb_module', ['role_ba_category_id' => $sub_category->role_ba_category_id, 'role_bb_module_status' => 'Enabled'], 'result', ['role_bb_module_ordering' => 'asc']);
                    if (count($modules) > 0) {
                        foreach ($modules as $module) {
                            $array[$sub_category->role_ba_category_name][] = [
                                'id' => $module->role_bb_module_id,
                                'name' => $module->role_bb_module_name,
                                'link' => $module->role_bb_module_link,
                                'active' => $module->role_bb_module_id == $active_module_id ? 'active' : ''
                            ];
                        }
                    }
                }
            }
        }
    }
    return $array;
}

function get_vendor($product_id) {
    $CI = get_instance();
    $CI->load->library('session', 'database');
    $array = [
        'vendor_id' => 0
    ];
    $vendors = $CI->Query->select('*', 'ecom_acc_vendor_product', ['ecom_ac_product_id' => $product_id, 'ecom_acc_product_status' => 'Enabled'], 'result', ['ecom_acc_product_vendor_id' => 'asc']);
    if (count($vendors) > 0) {
        $count = $CI->Query->select('*', 'ecom_acc_vendor_product', ['ecom_ac_product_id' => $product_id, 'ecom_acc_product_status' => 'Enabled'], 'result', ['ecom_acc_product_vendor_id' => 'asc']);
        for ($j = 0; $j <= 1000; $j++) {
            foreach ($vendors as $vendor) {
                $count_vendor = $CI->Query->select('ecom_ae_vendor_id', 'ecom_bc_order_detail', ['ecom_ac_product_id' => $product_id, 'ecom_ae_vendor_id' => $vendor->ecom_ae_vendor_id], 'count');
                if ($count_vendor == $j) {
                    $array = [
                        'vendor_id' => $vendor->ecom_ae_vendor_id,
                        'product_id' => $product_id,
                        'product_vendor_id' => $vendor->ecom_acc_product_vendor_id,
                        'product_price' => $vendor->ecom_acc_product_price,
                        'product_discount' => $vendor->ecom_acc_product_discount,
                        'product_selling_price' => $vendor->ecom_acc_product_selling_price,
                        'product_shipping' => $vendor->ecom_acc_product_shipping
                    ];
                    break 2;
                }
            }
        }
    } else {
        $product = $CI->Query->select('*', 'ecom_ac_product', ['ecom_ac_product_id' => $product_id], 'row');
        $array = [
            'vendor_id' => '',
            'product_id' => $product_id,
            'product_vendor_id' => '',
            'product_price' => $product->ecom_ac_product_price,
            'product_discount' => $product->ecom_ac_product_discount,
            'product_selling_price' => $product->ecom_ac_product_selling_price,
            'product_shipping' => $product->ecom_ac_product_shipping
        ];
    }
    return $array;
}

function generateSeoURL($string, $wordLimit = 0){
    $separator = '-';
    if($wordLimit != 0){
        $wordArr = explode(' ', $string);
        $string = implode(' ', array_slice($wordArr, 0, $wordLimit));
    }
    $quoteSeparator = preg_quote($separator, '#');
    $trans = array(
        '&.+?;'                    => '',
        '[^\w\d _-]'            => '',
        '\s+'                    => $separator,
        '('.$quoteSeparator.')+'=> $separator
    );
    $string = strip_tags($string);
    foreach ($trans as $key => $val){
        $string = preg_replace('#'.$key.'#i'.(UTF8_ENABLED ? 'u' : ''), $val, $string);
    }
    $string = strtolower($string);
    return trim(trim($string, $separator));
}

