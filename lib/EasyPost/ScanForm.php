<?php

namespace EasyPost;

class ScanForm extends ObjectResource
{
    /**
     * retrieve a scan form
     *
     * @param string $id
     * @param string $apiKey
     * @return mixed
     */
    public static function retrieve($id, $apiKey = null)
    {
        return self::_retrieve(get_class(), $id, $apiKey);
    }

    /**
     * retrieve all scan forms
     *
     * @param mixed  $params
     * @param string $apiKey
     * @return mixed
     */
    public static function all($params = null, $apiKey = null)
    {
        return self::_all(get_class(), $params, $apiKey);
    }

    /**
     * save a scan form
     *
     * @return $this
     */
    public function save()
    {
        return self::_save(get_class());
    }

    /**
     * create a scan form
     *
     * @param mixed  $params
     * @param string $apiKey
     * @return mixed
     */
    public static function create($params = null, $apiKey = null)
    {
        if (!isset($params['scan_form']) || !is_array($params['scan_form'])) {
            $clone = $params;
            unset($params);
            $params['scan_form'] = $clone;
        }

        return self::_create(get_class(), $params, $apiKey);
    }
}

