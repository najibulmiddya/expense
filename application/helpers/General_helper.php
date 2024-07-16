<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Helpers General_helper
 *
 * This Helpers for ...
 * 
 * @package   CodeIgniter
 * @category  Helpers
 * @author    
 *
 */

// ------------------------------------------------------------------------

if (!function_exists('view')) {
  /**
   * view
   *
   * This view helpers for auto add heder and footer
   *
   * @param   string $body_path
   * @param   array $body_data
   * @param   string $title
   * @return  ...
   */
  function view($body_path, $body_data = [], $title = "Portal")
  {
    $ci = get_instance();
    $ci->load->view("include/header", ["title" => $title]);
    $ci->load->view($body_path, $body_data);
    $ci->load->view("include/footer");
  }
}



if (!function_exists('pp')) {
  /**
   * pp - data show for development purposesss
   *  @param any $data -- required
   *  @return mixed
   */
  function pp($data = null)
  {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit;
  }

  if (!function_exists('alert')) {
    /**
     * alert
     *
     * This alert for flash message
     *
     * @param   string $type - success/danger/warning/info
     * @param   array $message
     * @return  ...
     */
    function alert($type, $message)
    {
      $ci = get_instance();
      $ci->session->set_flashdata('type', $type);
      $ci->session->set_flashdata('message', $message);
    }
  }

  if (!function_exists('bs_alert')) {
    /**
     * bs_alert
     *
     * This bs_alert for bootstrap alert message show
     *
     * @return  string
     */
    function bs_alert()
    {
      $ci = get_instance();
      $type = $ci->session->flashdata('type');
      $message = $ci->session->flashdata('message');
      if (!empty($type) && !empty($message)) {
        return "<div class='alert alert-{$type}' role='alert'>{$message}</div>";
      } else {
        return "";
      }
    }
  }

  if (!function_exists('has_loggedIn')) {
    /**
     * has_loggedIn
     *
     * This has_loggedIn for Has logged id or not
     *
     * @return  array
     */
    function has_loggedIn()
    {
      $ci = get_instance();
      $type = $ci->session->flashdata('type');
      $message = $ci->session->flashdata('message');
      if ($ci->session->has_userdata('loggedIn')) {
        if ($data = $ci->session->userdata('loggedIn')) {
          return $data;
        } else {
          redirect(base_url('user/index'));
        }
      } else {
        redirect(base_url('user/index'));
      }
    }
  }

  if (!function_exists('adminArea')) {
    /**
     * adminArea
     *
     * This adminArea for Has logged User or Admin
     *
     * @return  array
     */
    function adminArea()
    {
      if ($_SESSION['role'] = 'Admin') {
        redirect('category');
      }
    }
  }

  if (!function_exists('userArea')) {
    /**
     * userArea
     *
     * This userArea for Has logged User or Admin
     *
     * @return  array
     */
    function userArea()
    {
      if ($_SESSION['role'] = 'User') {
        redirect('dashboard');
      }
    }
  }

  function getDashboardExpense($type)
  {
    $today = date('Y-m-d');
    if ($type == 'today') {
      $sub_sql = " and expense_date='$today'";
      $from = $today;
      $to = $today;
    } elseif ($type == 'yesterday') {
      $yesterday = date('Y-m-d', strtotime('yesterday'));
      $sub_sql = " and expense_date='$yesterday'";
      $from = $yesterday;
      $to = $yesterday;
    } elseif ($type == 'week' || $type == 'month' || $type == 'year') {
      $from = date('Y-m-d', strtotime("-1 $type"));
      $sub_sql = " and expense_date between '$from' and '$today'";
      $to = $today;
    } else {
      $sub_sql = " ";
      $from = '';
      $to = '';
    }

    $u_id = $_SESSION['loggedIn']['id'];
    $CI = get_instance();
    $CI->load->model('expense_model');
    $row = $CI->expense_model->all_get($u_id, $sub_sql);
    $p = 0;
    $link = "";
    if ($row->price > 0) {
      $p = $row->price;
      $link = "&nbsp;<a href='dashboard_report?from=" . $from . "&to=" . $to . "' target='_blank' >details</a>";
    }
    return $p . $link."</br></br>";
  }

  if (!function_exists('is_active')) {
    function is_active($controller, $method = '')
    {
      $CI = &get_instance();
      $current_controller = $CI->router->fetch_class();
      $current_method = $CI->router->fetch_method();

      if ($controller == $current_controller && ($method == '' || $method == $current_method)) {
        return 'active';
      }
      return '';
    }
  }
}


// ------------------------------------------------------------------------

/* End of file General_helper.php */
/* Location: ./application/helpers/General_helper.php */