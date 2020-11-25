<?php

namespace Tests\Unit\Product\Service;

use AppBundle\Common\ArrayToolkit;
use Biz\BaseTestCase;
use Biz\Common\CommonException;
use Biz\Product\Dao\ProductDao;
use Biz\Product\Service\ProductService;

class ProductServiceTest extends BaseTestCase
{
    public function testCreateProduct_whenMissingTargetType_thenThrowParamMissingException()
    {
        $this->expectException(CommonException::class);
        $this->expectExceptionMessage('exception.common_parameter_missing');
        $this->getProductService()->createProduct(['targetId' => 1, 'title' => 'testTitle']);
    }

    public function testCreateProduct_whenMissingTargetId_thenThrowParamMissingException()
    {
        $this->expectException(CommonException::class);
        $this->expectExceptionMessage('exception.common_parameter_missing');
        $this->getProductService()->createProduct(['targetType' => 'testType', 'title' => 'testTitle']);
    }

    public function testCreateProduct_whenMissingTitle_thenThrowParamMissingException()
    {
        $this->expectException(CommonException::class);
        $this->expectExceptionMessage('exception.common_parameter_missing');
        $this->getProductService()->createProduct(['targetType' => 'testType', 'targetId' => 1]);
    }

    public function testCreateProduct()
    {
        $result = $this->getProductService()->createProduct([
            'targetType' => 'testType',
            'targetId' => 1,
            'title' => 'testTitle',
        ]);

        $this->assertEquals('testType', $result['targetType']);
        $this->assertEquals(1, $result['targetId']);
        $this->assertEquals('testTitle', $result['title']);
        $this->assertEquals($this->getCurrentUser()->getId(), $result['owner']);
    }

    public function testGetProduct()
    {
        $expected = $this->createProduct();

        $result = $this->getProductService()->getProduct($expected['id']);

        $this->assertEquals($expected, $result);

        $result2 = $this->getProductService()->getProduct($expected['id'] + 100000);
        $this->assertNull($result2);
    }

    public function testUpdateProduct()
    {
        $product = $this->createProduct();

        $fields = [
            'targetType' => 'test update',
            'targetId' => 3,
            'title' => 'test update title',
        ];

        $result = $this->getProductService()->updateProduct($product['id'], $fields);
        $this->assertEquals($product['targetType'], $result['targetType']);
        $this->assertEquals($product['targetId'], $result['targetId']);
        $this->assertNotEquals($product['title'], $result['title']);
        $this->assertEquals($fields['title'], $result['title']);
    }

    public function testDeleteProduct()
    {
        $product = $this->createProduct();
        $before = $this->getProductDao()->get($product['id']);
        $this->assertNotEmpty($before);

        $this->getProductService()->deleteProduct($product['id']);

        $after = $this->getProductDao()->get($product['id']);
        $this->assertEmpty($after);
    }

    public function testSearchProducts_withDifferentConditions()
    {
        $product1 = $this->createProduct();
        $product2 = $this->createProduct(['targetType' => 'testType2']);
        $product3 = $this->createProduct(['targetType' => 'testType', 'targetId' => 2]);
        $product4 = $this->createProduct(['targetType' => 'testType', 'targetId' => 1, 'title' => 'testTitle2']);

        $conditions1 = ['titleLike' => 'test'];

        $result1 = $this->getProductService()->searchProducts($conditions1, ['id' => 'ASC'], 0, 10);
        $result1 = ArrayToolkit::index($result1, 'id');
        $expected1 = [$product1, $product2, $product3, $product4];

        $this->assertEquals(count($expected1), count($result1));
        $this->assertEmpty(array_diff(ArrayToolkit::column($expected1, 'id'), ArrayToolkit::column($result1, 'id')));
        $this->assertEquals($product1, $result1[$product1['id']]);

        $conditions2 = ['targetType' => 'testType'];
        $result2 = $this->getProductService()->searchProducts($conditions2, ['id' => 'ASC'], 0, 10);
        $result2 = ArrayToolkit::index($result2, 'id');

        $expected2 = [$product1, $product3, $product4];

        $this->assertEquals(count($expected2), count($result2));
        $this->assertEmpty(array_diff(ArrayToolkit::column($expected2, 'id'), ArrayToolkit::column($result2, 'id')));
        $this->assertEquals($product3, $result2[$product3['id']]);

        $conditions3 = ['targetType' => 'testType', 'title' => 'testTitle2'];
        $result3 = $this->getProductService()->searchProducts($conditions3, ['id' => 'ASC'], 0, 10);

        $result3 = ArrayToolkit::index($result3, 'id');

        $expected3 = [$product4];

        $this->assertEquals(count($expected3), count($result3));
        $this->assertEmpty(array_diff(ArrayToolkit::column($expected3, 'id'), ArrayToolkit::column($result3, 'id')));
        $this->assertEquals($product4, $result3[$product4['id']]);
    }

    public function testSearchProducts_withDifferentOrderBysAndLimits()
    {
        $product1 = $this->createProduct();
        $product2 = $this->createProduct(['targetType' => 'testType2']);
        $product3 = $this->createProduct(['targetType' => 'testType', 'targetId' => 2]);
        $product4 = $this->createProduct(['targetType' => 'testType', 'targetId' => 1, 'title' => 'testTitle2']);

        $result1 = $this->getProductService()->searchProducts(['targetType' => 'testType'], ['id' => 'ASC'], 0, 10);
        $this->assertEquals([$product1, $product3, $product4], $result1);

        $result2 = $this->getProductService()->searchProducts(['targetType' => 'testType'], ['id' => 'DESC'], 0, 10);
        $this->assertEquals([$product4, $product3, $product1], $result2);

        $result3 = $this->getProductService()->searchProducts(['targetType' => 'testType'], ['id' => 'ASC'], 0, 2);
        $this->assertEquals([$product1, $product3], $result3);
    }

    public function testSearchProducts_withDifferentColumns()
    {
        $product1 = $this->createProduct();
        $product2 = $this->createProduct(['targetType' => 'testType2']);
        $product3 = $this->createProduct(['targetType' => 'testType', 'targetId' => 2]);
        $product4 = $this->createProduct(['targetType' => 'testType', 'targetId' => 1, 'title' => 'testTitle2']);

        $expected1 = [
            ['targetType' => $product1['targetType'], 'targetId' => $product1['targetId']],
            ['targetType' => $product3['targetType'], 'targetId' => $product3['targetId']],
            ['targetType' => $product4['targetType'], 'targetId' => $product4['targetId']],
        ];

        $result1 = $this->getProductService()->searchProducts(['targetType' => 'testType'], ['id' => 'ASC'], 0, 10, ['targetId', 'targetType']);
        $this->assertEquals($expected1, $result1);

        $expected2 = [
            ['targetType' => $product1['targetType'], 'title' => $product1['title']],
            ['targetType' => $product3['targetType'], 'title' => $product3['title']],
            ['targetType' => $product4['targetType'], 'title' => $product4['title']],
        ];

        $result2 = $this->getProductService()->searchProducts(['targetType' => 'testType'], ['id' => 'ASC'], 0, 10, ['targetType', 'title']);
        $this->assertEquals($expected2, $result2);
    }

    public function testGetProductByTargetIdAndType()
    {
        $product1 = $this->createProduct();
        $product2 = $this->createProduct(['targetType' => 'testType2']);

        $result = $this->getProductService()->getProductByTargetIdAndType($product1['targetId'], $product1['targetType']);
        $this->assertEquals($product1, $result);
    }

    public function testFindProductsByIds()
    {
        $product1 = $this->createProduct();
        $product2 = $this->createProduct(['targetType' => 'testType2']);
        $product3 = $this->createProduct(['targetType' => 'testType', 'targetId' => 2]);
        $product4 = $this->createProduct(['targetType' => 'testType', 'targetId' => 1, 'title' => 'testTitle2']);

        $result = $this->getProductService()->findProductsByIds([$product1['id'], $product2['id'], $product3['id']]);
        $expected = [
            $product1['id'] => $product1,
            $product2['id'] => $product2,
            $product3['id'] => $product3,
        ];

        $this->assertEquals(count($expected), count($result));
        $this->assertEmpty(array_diff(array_keys($expected), array_keys($result)));
        $this->assertEquals($product1, $result[$product1['id']]);
    }

    protected function createProduct($product = [])
    {
        $default = [
            'targetType' => 'testType',
            'targetId' => 1,
            'title' => 'testTitle',
            'owner' => (int) $this->getCurrentUser()->getId(),
        ];

        $product = array_merge($default, $product);

        return $this->getProductDao()->create($product);
    }

    /**
     * @return ProductDao
     */
    protected function getProductDao()
    {
        return $this->createDao('Product:ProductDao');
    }

    /**
     * @return ProductService
     */
    protected function getProductService()
    {
        return $this->createService('Product:ProductService');
    }
}
