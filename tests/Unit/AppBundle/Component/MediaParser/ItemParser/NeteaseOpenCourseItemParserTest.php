<?php

namespace Tests\Unit\AppBundle\Component\MediaParser\ItemParser;

use Biz\BaseTestCase;
use AppBundle\Component\MediaParser\ItemParser\NeteaseOpenCourseItemParser;

class NeteaseOpenCourseItemParserTest extends BaseTestCase
{
    public function testParse()
    {
        // $video = $this->createParser()->parse('http://open.163.com/newview/movie/free?pid=MEM5RR44O&mid=MEM5RTLOA');

        // $this->assertEquals('video', $video['type']);
        // $this->assertEquals('NeteaseOpenCourse', $video['source']);
        // $this->assertArrayHasKey('uuid', $video);
        // $this->assertArrayHasKey('name', $video);
        // $this->assertArrayHasKey('page', $video);
        // $this->assertArrayHasKey('files', $video);

        // $file = empty($video['files']) ? array() : $video['files'][0];

        // $this->assertEquals('swf', $file['type']);
        // $this->assertStringStartsWith('//open.163.com/', $file['url']);
    }

    public function testDetect()
    {
        $this->assertEquals(1, $this->createParser()->detect('http://v.163.com/movie/abc.html'));
        $this->assertEquals(1, $this->createParser()->detect('http://open.163.com/movie/a.html'));
        $this->assertEquals(0, $this->createParser()->detect('http://open.164.com/movie/a.html'));
    }

    private function createParser()
    {
        return new NeteaseOpenCourseItemParser();
    }
}
