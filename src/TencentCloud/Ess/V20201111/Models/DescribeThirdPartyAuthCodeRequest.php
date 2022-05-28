<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeThirdPartyAuthCode请求参数结构体
 *
 * @method string getAuthCode() 获取AuthCode 值
 * @method void setAuthCode(string $AuthCode) 设置AuthCode 值
 */
class DescribeThirdPartyAuthCodeRequest extends AbstractModel
{
    /**
     * @var string AuthCode 值
     */
    public $AuthCode;

    /**
     * @param string $AuthCode AuthCode 值
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuthCode",$param) and $param["AuthCode"] !== null) {
            $this->AuthCode = $param["AuthCode"];
        }
    }
}
