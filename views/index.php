
<?php
require_once '../library/config.php';
require_once '../library/functions.php';

checkFDUser();

$view = (isset($_GET['v']) && $_GET['v'] != '') ? $_GET['v'] : '';

switch ($view) {
	case 'LIST' :
		$content 	= 'eventlist.php';		
		$pageTitle 	= 'View Event Details';
		break;

	case 'USERS' :
		$content 	= 'userlist.php';		
		$pageTitle 	= 'View User Details';
		break;
		
	case 'CREATE' :
		$content 	= 'userform.php';		
		$pageTitle 	= 'Create New User';
		break;

	case 'CREATECLASS' :
		$content 	= 'classform.php';		
		$pageTitle 	= 'Create New Class';
		break;		
	case 'CREATEHOCKY' :
		$content 	= 'hockyform.php';		
		$pageTitle 	= 'Create New HocKy';
		break;
	case 'CREATEHOCPHAN' :
		$content 	= 'hocphanform.php';		
		$pageTitle 	= 'Create New HocPhan';
		break;	
	case 'USER' :
		$content 	= 'user.php';		
		$pageTitle 	= 'View User Details';
		break;
	
	case 'HOLY' :
		$content 	= 'holidays.php';		
		$pageTitle 	= 'Holidays';
		break;	
	case 'CLASS' :
		$content 	= 'class.php';		
		$pageTitle 	= 'Class';
		break;
	case 'HOCKY' :
		$content 	= 'hocky.php';		
		$pageTitle 	= 'Học kỳ';
		break;
	case 'HOCPHAN' :
		$content 	= 'hocphan.php';		
		$pageTitle 	= 'Học Phần';
		break;		
	case 'STUDENT' :
		$content 	= '../admin/student.php';		
		$pageTitle 	= 'Class';
		break;
	case 'LTT' :
		$content 	= 'lichtheotuan.php';		
		$pageTitle 	= 'Lịch theo tuần';
		break;
	case 'kehoach' :
		$content 	= 'kehoach.php';		
		$pageTitle 	= 'Kế Hoạch';
		break;
	
	default :
		$content 	= 'dashboard.php';		
		$pageTitle 	= 'Calendar Dashboard';
}

require_once '../include/template.php';
?>