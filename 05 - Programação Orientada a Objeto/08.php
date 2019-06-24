<?php
class myClass {
    public $member = "ABC";
    static function showMember(){
        var_dump($this->member);
    }
}
myClass::showMember();