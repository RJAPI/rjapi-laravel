<?php
class MenuCest 
{
    public function _before(FunctionalTester $I) 
    {
    }

    public function _after(FunctionalTester $I) 
    {
    }

    // >>>methods>>>
    public function tryMenuCreate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu create');
        $I->sendPOST('/v3/menu', '{"data":{"type":"menu","attributes":{"title":"ortiz.emiliano","rfc":"mac30","parent_id":0}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ortiz.emiliano',
    ),
  ),
));
    }

    public function tryMenuIndex(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu index');
        $I->sendGET('/v3/menu');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ortiz.emiliano',
    ),
  ),
));
    }

    public function tryMenuView(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu view');
        $I->sendGET('/v3/menu/1');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ortiz.emiliano',
    ),
  ),
));
    }

    public function tryMenuUpdate(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu update');
        $I->sendPATCH('/v3/menu/1', '{"data":{"type":"menu","attributes":{"title":"ortiz.emiliano","rfc":"mac30","parent_id":0}}}');
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(array (
  'data' => 
  array (
    'type' => 'menu',
    'id' => 1,
    'attributes' => 
    array (
      'title' => 'ortiz.emiliano',
    ),
  ),
));
    }

    public function tryMenuDelete(FunctionalTester $I) 
    {
        $I->amGoingTo('test Menu delete');
        $I->sendDELETE('/v3/menu/1');
    }

    // <<<methods<<<
}
