<?php

namespace App\Http\Controllers\FCM;

use Edujugon\PushNotification\PushNotification;
use App\Http\Controllers\Controller;

class PushNotificationsController extends Controller
{
    public function sendNotification($employee, $visitor, $deviceToken)
    {
        $push = new PushNotification('fcm');
        $push->setMessage(['data' => [
            'body' => 'Hi ' . $employee->name . ', you have a new visitor by the name ' . $visitor->fname . ' ' . $visitor->lname,
            "title" => 'You have a visitor',
          "flag" => 2]
        ])
            ->setDevicesToken($deviceToken)
            ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
            ->setConfig(['dry_run' => false])
            ->sendByTopic('visitor')
            ->setDevicesToken([$deviceToken])
            ->send();


    }

      public function getNotification($applicant, $reliever, $deviceToken)
    {
        $push = new PushNotification('fcm');
        $push->setMessage(
          ['data' =>
           [
            'body' => 'Hi ' . $applicant->employee_no . ' ' . $reliever . 'approved your reliever request' ,
            "title" => 'Leave approval report',
            "flag" => 3
        ]
        ])
            ->setDevicesToken($deviceToken)
            ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
            ->setConfig(['dry_run' => false])
            ->sendByTopic('visitor')
            ->setDevicesToken([$deviceToken])
            ->send();
    }

    public function relvr2Notification($reliever2noti ,$applicant, $deviceToken)
      {
      $push = new PushNotification('fcm');
      $push->setMessage(['data' => [
          'body' => 'Hi ' . $reliever2noti->employee_no . ' ' . $applicant->name . 'is requesting your reliever leaveApproval' ,
          "title" => 'Leave approval report',
          "flag" => 3]
      ])
          ->setDevicesToken($deviceToken)
          ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
          ->setConfig(['dry_run' => false])
          ->sendByTopic('visitor')
          ->setDevicesToken([$deviceToken])
          ->send();
       }





    public function test()
    {

        $push = new PushNotification('fcm');
        $push->setMessage(['data' => [
            "body" => "Api backend",
            "title" => "Backend says bye",
            "flag" => 3],
            'notification' => [
            "body" => "Api backend",
            "title" => "Backend says bye"]
        ])
            ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
            ->setConfig(['dry_run' => false])
            ->sendByTopic('dogs')
            ->setDevicesToken(['e6HN0cwq6fo:APA91bH3xrSLFp4LdC8pGkQeh_56xAKvJPEoykOEtIsRnwq3NUBI6RDGYrtpKhosHl_fif7cn2yxemp6kyQ_JUtd73qNWEh-iN0B79Hh1TkXZ9m865e1ov7he6B1DRrI-8Y2wrZYlNKP'])
            ->send();
    return "success";
    }
    
        public function reliever1Notification($usersId, $reliever1notif, $deviceToken)
    {
        $push = new PushNotification('fcm');
        $push->setMessage(['data' => [
            'body' => 'Hi '. $usersId->name . ' has requested you as a reliever',
            "title" => 'Reliever Request',
          "flag" => 3]
        ])
            ->setDevicesToken($deviceToken)
            ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
            ->setConfig(['dry_run' => false])
            ->sendByTopic('Leave Request')
            ->setDevicesToken([$deviceToken])
            ->send();
    }

    public function relieiver2Notification($usersId, $reliever2notif, $deviceToken)
    {
        $push = new PushNotification('fcm');
        $push->setMessage(['data' => [
            'body' => 'Hi '. $usersId->name .' has requested you as a reliever',
            "title" => 'Reliever Request',
          "flag" => 3]
        ])
            ->setDevicesToken($deviceToken)
            ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
            ->setConfig(['dry_run' => false])
            ->sendByTopic('Leave Request')
            ->setDevicesToken([$deviceToken])
            ->send();
    }
    public function relieiver3Notification($usersId, $reliever2notif, $deviceToken)
    {
        $push = new PushNotification('fcm');
        $push->setMessage(['data' => [
            'body' => 'Hi ' . $usersId->name . ' has requested you as a reliever ' ,
            "title" => 'Reliever Request',
          "flag" => 3]
        ])
            ->setDevicesToken($deviceToken)
            ->setApiKey('AAAA6Jrh4p0:APA91bHIMDaoYucdId8_eJs6rumKpsVFAQQ3q4IiU4tvfSJn2DX2d1Stw9cUc8vZPufuBF75UWI2M1mha2zgEACMs06x_x3uYOjTeCjGoerGnX5kXBp3Fy0YvVKfo4FFaEk5_xSutkAG')
            ->setConfig(['dry_run' => false])
            ->sendByTopic('Leave Request')
            ->setDevicesToken([$deviceToken])
            ->send();
    }
}
