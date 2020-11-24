<?php

namespace ApiBundle\Api\Resource\Classroom;

use ApiBundle\Api\Resource\Filter;
use ApiBundle\Api\Resource\User\UserFilter;

class ClassroomReviewFilter extends Filter
{
    protected $publicFields = array(
        'id', 'user', 'classroomId', 'content', 'rating', 'parentId', 'posts', 'updatedTime', 'createdTime',
    );

    protected function publicFields(&$data)
    {
        $userFilter = new UserFilter();
        $userFilter->setMode(Filter::PUBLIC_MODE);
        $userFilter->filter($data['user']);

        $postFilter = new ClassroomReviewPostFilter();
        $postFilter->setMode(Filter::PUBLIC_MODE);
        $postFilter->filters($data['posts']);
    }
}
