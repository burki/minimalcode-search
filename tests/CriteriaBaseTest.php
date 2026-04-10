<?php
namespace Minimalcode\Search\Tests;

use Minimalcode\Search\Criteria;

abstract class CriteriaBaseTest extends \PHPUnit\Framework\TestCase
{
    protected function getField(Criteria $criteria)
    {
        $field = new \ReflectionProperty('Minimalcode\Search\Criteria', 'field');
        $field->setAccessible(true);

        return $field->getValue($criteria);
    }

    protected function getPredicates(Criteria $criteria)
    {
        $field = new \ReflectionProperty('Minimalcode\Search\Criteria', 'predicates');
        $field->setAccessible(true);

        return $field->getValue($criteria);
    }
}
