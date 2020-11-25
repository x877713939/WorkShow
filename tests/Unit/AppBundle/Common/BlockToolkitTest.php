<?php

namespace Tests\Unit\AppBundle\Common;

use AppBundle\Common\BlockToolkit;
use Biz\BaseTestCase;
use Symfony\Component\Filesystem\Filesystem;

class BlockToolkitTest extends BaseTestCase
{
    /**
     * @expectedException \AppBundle\Common\Exception\InvalidArgumentException
     * @expectedExceptionMessage 插件元信息文件格式不符合JSON规范，解析失败，请检查元信息文件格式
     */
    public function testInitWithInvalidArgumentException()
    {
        $jsonFile = __DIR__.'/File/blockWithoutMeta.json';
        BlockToolkit::init($jsonFile, $this->getContainer());
    }

    public function testInitWithEmptyBlockTemplate()
    {
        $blockService = $this->mockBiz(
            'Content:BlockService',
            array(
                array(
                    'functionName' => 'getBlockTemplateByCode',
                    'returnValue' => array(),
                    'withParams' => array('default:home_top_banner'),
                ),
                array(
                    'functionName' => 'createBlockTemplate',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                    ),
                ),
                array(
                    'functionName' => 'updateTemplateContent',
                ),
                array(
                    'functionName' => 'updateBlockTemplate',
                ),
            )
        );

        $jsonFile = __DIR__.'/File/block.json';
        BlockToolkit::init($jsonFile, self::getContainer());
        $blockService->shouldHaveReceived('createBlockTemplate')->times(1);
        $blockService->shouldNotHaveReceived('updateBlockTemplate');
        $blockService->shouldHaveReceived('updateTemplateContent')->times(1);
    }

    public function testInit()
    {
        $this->mockBiz(
            'Content:BlockService',
            array(
                array(
                    'functionName' => 'getBlockTemplateByCode',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                    ),
                    'withParams' => array('default:home_top_banner'),
                ),
                array(
                    'functionName' => 'updateBlockTemplate',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                    ),
                ),
                array(
                    'functionName' => 'createBlockTemplate',
                ),
                array(
                    'functionName' => 'updateTemplateContent',
                ),
            )
        );
        $jsonFile = __DIR__.'/File/block.json';
        $container = self::getContainer();
        BlockToolkit::init($jsonFile, $container);
        $this->getBlockService()->shouldHaveReceived('updateTemplateContent')->times(1);
        $this->getBlockService()->shouldHaveReceived('updateBlockTemplate')->times(1);
        $this->getBlockService()->shouldNotHaveReceived('createBlockTemplate');
    }

    public function testInitWithBocksFolder()
    {
        $this->mockBiz(
            'Content:BlockService',
            array(
                array(
                    'functionName' => 'getBlockTemplateByCode',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                    ),
                    'withParams' => array('default:home_top_banner'),
                ),
                array(
                    'functionName' => 'updateBlockTemplate',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                    ),
                ),
                array(
                    'functionName' => 'createBlockTemplate',
                ),
                array(
                    'functionName' => 'updateTemplateContent',
                ),
            )
        );
        $jsonFile = __DIR__.'/File/block.json';
        $container = self::getContainer();
        BlockToolkit::init($jsonFile, $container, __DIR__.'/File/test');
        $this->getBlockService()->shouldHaveReceived('updateTemplateContent')->times(1);
        $this->getBlockService()->shouldHaveReceived('updateBlockTemplate')->times(1);
        $this->getBlockService()->shouldNotHaveReceived('createBlockTemplate');

        BlockToolkit::init($jsonFile, $container, __DIR__.'/File/testNotExist');
        $this->getBlockService()->shouldHaveReceived('updateTemplateContent')->times(2);
        $this->getBlockService()->shouldHaveReceived('updateBlockTemplate')->times(2);
        $this->getBlockService()->shouldNotHaveReceived('createBlockTemplate');
    }

    public function testGenerateBlockContent()
    {
        $jsonFile = __DIR__.'/File/block.json';
        $container = self::getContainer();
        $distDir = __DIR__.'/blocks';
        BlockToolkit::generateBlockContent($jsonFile, $distDir, $container);
        $hasDistFile = count(scandir($distDir)) > 2 ? true : false;
        $this->assertTrue($hasDistFile);
        $filesystem = new Filesystem();
        $filesystem->remove($distDir);
    }

    public function testUpdateCarousel()
    {
        $data = array(
            'carousel' => array(
                    array(
                        'src' => '/files/default/2015/04-11/112830e24e8d363209.jpg',
                        'alt' => 'test',
                        'href' => '/page/advantage',
                        'target' => '_blank',
                    ),
                ),
        );

        $this->mockBiz(
            'Content:BlockService',
            array(
                array(
                    'functionName' => 'getBlockTemplateByCode',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                        'content' => '<a href="/page/advantage" target="_blank"><img src="/files/default/2015/04-11/112830e24e8d363209.jpg"></a>
                        <img src="/files/default/2015/02-26/1733448c7d09508424.jpg" alt="test">',
                    ),
                    'withParams' => array('default:home_top_banner'),
                ),
                array(
                    'functionName' => 'updateBlockTemplate',
                    'withParams' => array(1, array('data' => $data)),
                ),
            )
        );
        BlockToolkit::updateCarousel('default:home_top_banner');
        $this->getBlockService()->shouldHaveReceived('updateBlockTemplate')->times(1);
    }

    public function testUpdateCarouselWithImgEmpty()
    {
        $data = array('carousel' => array());

        $this->mockBiz(
            'Content:BlockService',
            array(
                array(
                    'functionName' => 'getBlockTemplateByCode',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"carousel":[{"src":"http:\/\/edusoho-demo.b0.upaiyun.com\/files\/system\/block_picture_1432177042.jpg","alt":"\u8f6e\u64ad\u56fe\uff11\u63cf\u8ff0","href":"#","target":"_blank"}]}', true),
                        'content' => '<a href="/page/advantage" target="_blank"></a><img src="">
                        <img src="/files/default/2015/02-26/1733448c7d09508424.jpg" alt="test">',
                    ),
                    'withParams' => array('default:home_top_banner'),
                ),
                array(
                    'functionName' => 'updateBlockTemplate',
                    'withParams' => array(1, array('data' => $data)),
                ),
            )
        );
        BlockToolkit::updateCarousel('default:home_top_banner');
        $this->getBlockService()->shouldHaveReceived('updateBlockTemplate')->times(1);
    }

    public function testUpdateLinks()
    {
        $this->mockBiz(
            'Content:BlockService',
            array(
                array(
                    'functionName' => 'getBlockTemplateByCode',
                    'returnValue' => array(
                        'id' => '1',
                        'title' => '默认主题：首页头部图片轮播',
                        'templateName' => '@theme/default-b/block/home_top_banner.template.html.twig',
                        'data' => json_decode('{"firstColumnText":[{"value":"\u6211\u662f\u5b66\u751f"}],"firstColumnLinks":[{"value":"\u5982\u4f55\u6ce8\u518c","href":"#","target":"_self"},{"value":"\u5982\u4f55\u5b66\u4e60","href":"#","target":"_self"},{"value":"\u5982\u4f55\u4e92\u52a8","href":"#","target":"_self"}]}', true),
                        'content' => '<div class="width-20">
                        <h6><em>我是学生</em></h6>
                            <dl>
                                <dt>
                                    <a href="#" target="_self">如何注册-1</a>
                                </dt>
                                <dt>
                                    <a href="#" target="_self">如何学习-2</a>
                                </dt>
                                <dt>
                                    <a href="#" target="_self">如何互动-3</a>
                                </dt>
                            </dl>
                      </div>',
                    ),
                    'withParams' => array('default:home_top_banner'),
                ),
                array(
                    'functionName' => 'updateBlockTemplate',
                ),
            )
        );
        BlockToolkit::updateLinks('default:home_top_banner');
        $this->getBlockService()->shouldHaveReceived('updateBlockTemplate')->times(1);
    }

    protected function getBlockService()
    {
        return $this->createService('Content:BlockService');
    }
}
