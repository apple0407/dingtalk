<?php
// +------------------------------------------------+
// |http://www.cjango.com                           |
// +------------------------------------------------+
// | 修复BUG不是一朝一夕的事情，等我喝醉了再说吧！  |
// +------------------------------------------------+
// | Author: 小陈叔叔 <Jason.Chen>                  |
// +------------------------------------------------+
namespace cjango\Dingtalk;

use cjango\Dingtalk;

/**
 * 管理多媒体文件
 */
class Media extends Dingtalk
{

    /**
     * 上传多媒体文件/ 接口未完成
     * @return [type] [description]
     */
    public static function upload()
    {
        $params = [
            'type'  => $type,
            'media' => $media,
        ];

        $result = Utils::post('media/upload', $params);

        if (false !== $result) {
            return $result['media_id'];
        } else {
            return false;
        }
    }

    /**
     * 获取媒体文件
     * @param  string $mediaId 媒体文件的唯一标示
     * @return [type]
     */
    public static function get($mediaId)
    {
        $params = [
            'media_id ' => $mediaId,
        ];

        $result = Utils::get('media/get', $params);

        if (false !== $result) {
            return $result;
        } else {
            return false;
        }
    }
}
