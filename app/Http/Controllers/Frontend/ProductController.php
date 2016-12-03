<?php
/**
 * Created by PhpStorm.
 * User: wangxionghao
 * Date: 2016/11/8
 * Time: 下午10:10
 */

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\ApiController;
use Horus\Application\Components\HSPropertyComponent\HsBuilder as HsCrud;
use Horus\Models\Entity\Product\ProductRepositoryInterface;


class ProductController extends ApiController
{

    public function buildPropertyCollection()
    {
        $formProperty = new HsCrud();
        $formProperty->setProperty('id', 'ID');
        $formProperty->setProperty('name', '名称');
        $formProperty->setProperty('description', '描述');
        $formProperty->setProperty('label', '标签');
        $formProperty->setProperty('brand.name', '品牌名称');
        $formProperty->setProperty('photo', '商品图片');
        $formProperty->setProperty('remark', '商品备注');
        $formProperty->setProperty('enable', '是否开启', HsCrud::MAST_IS_SWITCH);
        $formProperty->setProperty('createOn', '创建时间');
        $this->formatService->setFormatEntity(ProductRepositoryInterface::class);
        $this->formatService->setHsBuilder($formProperty);
    }
}