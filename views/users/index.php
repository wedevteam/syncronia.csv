<?php
/**
 * Created by PhpStorm.
 * User: stefa
 * Date: 02/04/2019
 * Time: 16:51
 */

if (!isset($_SESSION['syncronia_csv_is_logged'])) {
    header('Location: ' . ROOT_URL . ROOT_PATH . 'users/login');
}
if ($_SESSION['syncronia_csv_is_logged'] == false) {
    header('Location: ' . ROOT_URL . ROOT_PATH . 'users/login');
}

