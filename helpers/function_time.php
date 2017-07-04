<?php
if (!function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'năm',
            'm' => 'tháng',
            'w' => 'tuần',
            'd' => 'ngày',
            'h' => 'giờ',
            'i' => 'phút',
            's' => 'giây',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' trước' : 'mới';
    }
}

if (!function_exists('get_day_weekday')) {
        function get_day_weekday($datetime) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = strtotime($datetime);
            $weekday = date('l',$time);
            $weekday = strtolower($weekday);
            switch ($weekday) {
                case 'monday':
                    $weekday = 'Thứ 2';
                    break;
                case 'tuesday':
                    $weekday = 'Thứ 3';
                    break;
                case 'wednesday':
                    $weekday = 'Thứ 4';
                    break;
                case 'thursday':
                    $weekday = 'Thứ 5';
                    break;
                case 'friday':
                    $weekday = 'Thứ 6';
                    break;
                case 'saturday':
                    $weekday = 'Thứ 7';
                    break;
                default:
                    $weekday = 'Chủ nhật';
                    break;
            }
            return date('H:i:s',$time).' - '.$weekday .', '. date('d/m/Y',$time);
        }
}
