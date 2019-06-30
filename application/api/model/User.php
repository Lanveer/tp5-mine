<?php

namespace app\api\model;

use think\Model;

class User extends Model
{
    protected $type = [
        'create_time' => 'datetime',
    ];

    protected $field = [
        'id',
        'js_uid',
        'nick_name',
        'header',
        'name',
        'tel',
        'openid',
        'create_time',
        'status',
        'identity',
        'tags',
        'customer_number',
        'qrcode',
        'validated',
        'company_info',
        'card_num',
        'person_card_image_url',
        'company_licence_url',
    ];


    /**
     * 筛选
     */
    protected function scopeFilter($query, $request)
    {
        
    }

    /**
     * 展位的酒店/展馆
     */
    public function booth()
    {
        return $this->hasMany('BoothV2', 'tel', 'tel');
    }

    /**
     * 标签的修改器
     */
    protected function setTagsAttr($value)
    {
        return json_encode(array_filter((array)$value), JSON_UNESCAPED_UNICODE);
    }

    /**
     * 标签的获取器
     */
    public function getTagsAttr($value)
    {
        return json_decode($value);
    }
}

//                       _oo0oo_
//                      o8888888o
//                      88" . "88
//                      (| -_- |)
//                      0\  =  /0
//                    ___/`---'\___
//                  .' \\|     |// '.
//                 / \\|||  :  |||// \
//                / _||||| -:- |||||- \
//               |   | \\\  -  /// |   |
//               | \_|  ''\---/''  |_/ |
//               \  .-\__  '-'  ___/-. /
//             ___'. .'  /--.--\  `. .'___
//          ."" '<  `.___\_<|>_/___.' >' "".
//         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
//         \  \ `_.   \_ __\ /__ _/   .-` /  /
//     =====`-.____`.___ \_____/___.-`___.-'=====
//                       `=---='
//
//               佛祖保佑         永无BUG
//


/*

		                       ::
		                      :;J7, :,                        ::;7:
		                      ,ivYi, ,                       ;LLLFS:
		                      :iv7Yi                       :7ri;j5PL
		                     ,:ivYLvr                    ,ivrrirrY2X,
		                     :;r@Wwz.7r:                :ivu@kexianli.
		                    :iL7::,:::iiirii:ii;::::,,irvF7rvvLujL7ur
		                   ri::,:,::i:iiiiiii:i:irrv177JX7rYXqZEkvv17
		                ;i:, , ::::iirrririi:i:::iiir2XXvii;L8OGJr71i
		              :,, ,,:   ,::ir@mingyi.irii:i:::j1jri7ZBOS7ivv,
		                 ,::,    ::rv77iiiriii:iii:i::,rvLq@huhao.Li
		             ,,      ,, ,:ir7ir::,:::i;ir:::i:i::rSGGYri712:
		           :::  ,v7r:: ::rrv77:, ,, ,:i7rrii:::::, ir7ri7Lri
		          ,     2OBBOi,iiir;r::        ,irriiii::,, ,iv7Luur:
		        ,,     i78MBBi,:,:::,:,  :7FSL: ,iriii:::i::,,:rLqXv::
		        :      iuMMP: :,:::,:ii;2GY7OBB0viiii:i:iii:i:::iJqL;::
		       ,     ::::i   ,,,,, ::LuBBu BBBBBErii:i:i:i:i:i:i:r77ii
		      ,       :       , ,,:::rruBZ1MBBqi, :,,,:::,::::::iiriri:
		     ,               ,,,,::::i:  @arqiao.       ,:,, ,:::ii;i7:
		    :,       rjujLYLi   ,,:::::,:::::::::,,   ,:i,:,,,,,::i:iii
		    ::      BBBBBBBBB0,    ,,::: , ,:::::: ,      ,,,, ,,:::::::
		    i,  ,  ,8BMMBBBBBBi     ,,:,,     ,,, , ,   , , , :,::ii::i::
		    :      iZMOMOMBBM2::::::::::,,,,     ,,,,,,:,,,::::i:irr:i:::,
		    i   ,,:;u0MBMOG1L:::i::::::  ,,,::,   ,,, ::::::i:i:iirii:i:i:
		    :    ,iuUuuXUkFu7i:iii:i:::, :,:,: ::::::::i:i:::::iirr7iiri::
		    :     :rk@Yizero.i:::::, ,:ii:::::::i:::::i::,::::iirrriiiri::,
		     :      5BMBBBBBBSr:,::rv2kuii:::iii::,:i:,, , ,,:,:i@petermu.,
		          , :r50EZ8MBBBBGOBBBZP7::::i::,:::::,: :,:,::i;rrririiii::
		              :jujYY7LS0ujJL7r::,::i::,::::::::::::::iirirrrrrrr:ii:
		           ,:  :@kevensun.:,:,,,::::i:i:::::,,::::::iir;ii;7v77;ii;i,
		           ,,,     ,,:,::::::i:iiiii:i::::,, ::::iiiir@xingjief.r;7:i,
		        , , ,,,:,,::::::::iiiiiiiiii:,:,:::::::::iiir;ri7vL77rrirri::
		         :,, , ::::::::i:::i:::i:i::,,,,,:,::i:i:::iir;@Secbone.ii:::


*/
