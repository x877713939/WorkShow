<?php

namespace Tests\Unit\Component\Export\Invite;

use AppBundle\Component\Export\Course\OverviewTestpaperTaskDetailExporter;
use Biz\BaseTestCase;

class OverviewTestpaperTaskDetailExporterTest extends BaseTestCase
{
    public function testgetContent()
    {
        self::$appKernel->getContainer()->set('biz', $this->getBiz());
        $this->mockBiz(
            'User:UserService',
            [
                [
                    'functionName' => 'findUsersByIds',
                    'returnValue' => [
                        1 => [
                            'id' => 1,
                            'nickname' => 'lalala',
                        ],
                    ],
                ],
            ]
        );
        $this->mockBiz(
            'Testpaper:TestpaperService',
            [
                [
                    'functionName' => 'findTestResultsByTestpaperIdAndUserIds',
                    'returnValue' => [
                        1 => [
                            'id' => '1',
                            'userId' => 1,
                            'usedTime' => 41,
                            'firstScore' => 1,
                            'maxScore' => 14,
                        ],
                    ],
                ],
                [
                    'functionName' => 'getTestpaperByIdAndType',
                    'returnValue' => [
                        'id' => 1,
                    ],
                ],
            ]
        );

        $this->mockBiz(
            'ItemBank:Answer:AnswerReportService',
            [
                [
                    'functionName' => 'search',
                    'returnValue' => [
                       ['id' => 1, 'answer_record_id' => 1, 'score' => 1, 'user_id' => 1],
                       ['id' => 2, 'answer_record_id' => 2, 'score' => 41, 'user_id' => 1],
                    ],
                ],
                [
                    'functionName' => 'count',
                    'returnValue' => [
                        'id' => 1,
                    ],
                ],
            ]
        );

        $this->mockBiz(
            'ItemBank:Answer:AnswerRecordService',
            [
                [
                    'functionName' => 'search',
                    'returnValue' => [
                       ['id' => 1, 'user_id' => 1, 'used_time' => 60],
                       ['id' => 2, 'user_id' => 1, 'used_time' => 60],
                    ],
                ],
                [
                    'functionName' => 'count',
                    'returnValue' => 1,
                ],
            ]
        );

        $this->mockBiz(
            'Task:TaskResultService',
            [
                [
                    'functionName' => 'searchTaskResults',
                    'returnValue' => [
                        [
                            'id' => '1',
                            'userId' => 1,
                            'createdTime' => 12,
                            'finishedTime' => 1341,
                        ],
                    ],
                ],
            ]
        );
        $expoter = new OverviewTestpaperTaskDetailExporter(self::$appKernel->getContainer(), [
            'courseTaskId' => 1,
        ]);

        $result = $expoter->getContent(0, 100);

        $this->assertArrayEquals([
            'lalala',
            '1970-01-01 08:00:12',
            '1970-01-01 08:22:21',
            '1',
            '1',
            '41',
        ], $result[0]);
    }

    public function testBuildCondition()
    {
        $expoter = new OverviewTestpaperTaskDetailExporter(self::$appKernel->getContainer(), [
            'courseTaskId' => 1,
        ]);
        $result = $expoter->buildCondition([
            'courseTaskId' => 1,
            'alal' => '1123',
            'titleLike' => '1123',
        ]);

        $this->assertArrayEquals([
            'courseTaskId' => 1,
        ], $result);
    }

    public function testBuildParameter()
    {
        $expoter = new OverviewTestpaperTaskDetailExporter(self::$appKernel->getContainer(), [
            'courseTaskId' => 1,
        ]);
        $result = $expoter->buildParameter([
            'courseTaskId' => 1,
        ]);

        $this->assertArrayEquals([
            'start' => 0,
            'fileName' => '',
            'courseTaskId' => 1,
        ], $result);
    }

    public function testGetTitles()
    {
        $expoter = new OverviewTestpaperTaskDetailExporter(self::$appKernel->getContainer(), [
            'courseTaskId' => 1,
        ]);

        $title = [
            'task.learn_data_detail.nickname',
            'task.learn_data_detail.createdTime',
            'course.task.finish_time',
            'task.learn_data_detail.testpaper_firstUsedTime',
            'task.learn_data_detail.testpaper_firstScore',
            'task.learn_data_detail.testpaper_maxScore',
        ];

        $this->assertArrayEquals($title, $expoter->getTitles());
    }

    public function testGetCount()
    {
        self::$appKernel->getContainer()->set('biz', $this->getBiz());
        $this->mockBiz(
            'Task:TaskResultService',
            [
                [
                    'functionName' => 'countTaskResults',
                    'returnValue' => 51,
                ],
            ]
        );
        $expoter = new OverviewTestpaperTaskDetailExporter(self::$appKernel->getContainer(), [
            'courseTaskId' => 1,
        ]);

        $this->assertEquals(51, $expoter->getCount());
    }

    public function testCanExport()
    {
        self::$appKernel->getContainer()->set('biz', $this->getBiz());
        $this->mockBiz(
            'Course:CourseService',
            [
                [
                    'functionName' => 'tryManageCourse',
                    'returnValue' => false,
                ],
            ]
        );
        $expoter = new OverviewTestpaperTaskDetailExporter(self::$appKernel->getContainer(), [
            'courseTaskId' => 1,
        ]);

        $result = $expoter->canExport();
        $this->assertTrue($result);

        $biz = $this->getBiz();
        $user = $biz['user'];
        $user->setPermissions([]);
        $result = $expoter->canExport();
        $this->assertNotTrue($result);

        $this->mockBiz(
            'Course:CourseService',
            [
                [
                    'functionName' => 'tryManageCourse',
                    'returnValue' => true,
                ],
            ]
        );
        $result = $expoter->canExport();
        $this->assertTrue($result);
    }
}
