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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音鉴别涉及令人不适宜的信息的任务控制参数
 *
 * @method string getSwitch() 获取语音鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启语音鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭语音鉴别的涉及令人不适宜的信息的任务。</li>
 * @method void setSwitch(string $Switch) 设置语音鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启语音鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭语音鉴别的涉及令人不适宜的信息的任务。</li>
 * @method integer getReviewConfidence() 获取判定需人工复核是否违规的分数阈值，当智能识别达到该分数以上，认为需人工复核，不填默认为 75 分。取值范围：0~100。
 * @method void setReviewConfidence(integer $ReviewConfidence) 设置判定需人工复核是否违规的分数阈值，当智能识别达到该分数以上，认为需人工复核，不填默认为 75 分。取值范围：0~100。
 * @method integer getBlockConfidence() 获取判定涉嫌违规的分数阈值，当智能识别达到该分数以上，认为涉嫌违规，不填默认为 100 分。取值范围：0~100。
 * @method void setBlockConfidence(integer $BlockConfidence) 设置判定涉嫌违规的分数阈值，当智能识别达到该分数以上，认为涉嫌违规，不填默认为 100 分。取值范围：0~100。
 */
class PoliticalAsrReviewTemplateInfo extends AbstractModel
{
    /**
     * @var string 语音鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启语音鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭语音鉴别的涉及令人不适宜的信息的任务。</li>
     */
    public $Switch;

    /**
     * @var integer 判定需人工复核是否违规的分数阈值，当智能识别达到该分数以上，认为需人工复核，不填默认为 75 分。取值范围：0~100。
     */
    public $ReviewConfidence;

    /**
     * @var integer 判定涉嫌违规的分数阈值，当智能识别达到该分数以上，认为涉嫌违规，不填默认为 100 分。取值范围：0~100。
     */
    public $BlockConfidence;

    /**
     * @param string $Switch 语音鉴别涉及令人不适宜的信息的任务开关，可选值：
<li>ON：开启语音鉴别涉及令人不适宜的信息的任务；</li>
<li>OFF：关闭语音鉴别的涉及令人不适宜的信息的任务。</li>
     * @param integer $ReviewConfidence 判定需人工复核是否违规的分数阈值，当智能识别达到该分数以上，认为需人工复核，不填默认为 75 分。取值范围：0~100。
     * @param integer $BlockConfidence 判定涉嫌违规的分数阈值，当智能识别达到该分数以上，认为涉嫌违规，不填默认为 100 分。取值范围：0~100。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ReviewConfidence",$param) and $param["ReviewConfidence"] !== null) {
            $this->ReviewConfidence = $param["ReviewConfidence"];
        }

        if (array_key_exists("BlockConfidence",$param) and $param["BlockConfidence"] !== null) {
            $this->BlockConfidence = $param["BlockConfidence"];
        }
    }
}
