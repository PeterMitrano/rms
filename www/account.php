<?php
/**
 * Main user account page for RMS.
 *
 * Currently, the user account page is a placeholder page.
 *
 * @author     Russell Toris <rctoris@wpi.edu>
 * @copyright  2012 Russell Toris, Worcester Polytechnic Institute
 * @license    BSD -- see LICENSE file
 * @version    November, 3 2012
 * @link       http://ros.org/wiki/rms
 */

// start the session
session_start();

// check if a user is logged in
if (!isset($_SESSION['userid'])) {
  header('Location: login.php?goto='.substr($_SERVER['SCRIPT_NAME'], 1));
  return;
}

// load the include files
include_once(dirname(__FILE__).'/api/users/user_accounts/user_accounts.inc.php');
include_once(dirname(__FILE__).'/inc/head.inc.php');
include_once(dirname(__FILE__).'/inc/content.inc.php');

$pagename = 'Account Settings';

// grab the user info from the database
$session_user = get_user_account_by_id($_SESSION['userid']);
?>

<!DOCTYPE html>
<html>
<head>
<?php import_head()?>
<title><?php echo $title." :: ".$pagename?></title>

<script type="text/javascript">
	createMenuButtons();
</script>
</head>
<body>
  <?php create_header($session_user, $pagename)?>
  <section id="page">
    <section>
      <div class="line"></div>
      <article>
        <div class="line"></div>
        <div class="center">
          <h2>Coming Soon</h2>
        </div>
        <div class="line"></div>
      </article>
    </section>
    <?php create_footer()?>
  </section>
</body>
</html>