<?php

/**
 * Moldova_Model_CompaniesSubcategories
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Moldova_Model_CompaniesSubcategories extends Moldova_Model_BaseCompaniesSubcategories
{
    public function setUp()
    {
        $this->hasOne('Moldova_Model_CompaniesCategories', array(
            'local' => 'category_id',
            'foreign' => 'category_id'
        )
        );

    }
}