<?php
use PHPUnit\Framework\TestCase;
require_once '../Arithmetic.php';

class ArithmeticTest extends TestCase {
 
    /** 
     * @var Arithmetic 
     */
    protected $object;
 
    /** 
     * setUpは各テストメソッドが実行される前に実行する 
     */
    protected function setUp() { 
        // テストするオブジェクトを生成する
        $this->object = new Arithmetic();
    }
 
    /**
     * 足し算関数の検証
     */
    public function testAdd() {
        // 引数に3,5を渡すと8が返ってくることを確認する
        $this->assertEquals(8, $this->object->add(3, 5));
        // 引数に15,30を渡すと45が返ってくることを確認する
        $this->assertEquals(45, $this->object->add(15, 30));
    }
 
    /**
     * 引き算関数の検証
     */
    public function testSubtract() {
        // 引数に10,3を渡すと7が返ってくることを確認する
        $this->assertEquals(7, $this->object->subtract(10, 3));
        // 引数に3,9を渡すと-6が返ってくることを確認する
        $this->assertEquals(-6, $this->object->subtract(3, 9));
    }
 
    /**
     * 掛け算関数の検証
     */
    public function testMultiply() {
        // 引数に4,6を渡すと24が返ってくることを確認する
        $this->assertEquals(24, $this->object->multiply(4, 6));
        // 引数に4,-5を渡すと-20が返ってくることを確認する
        $this->assertEquals(-20, $this->object->multiply(4, -5));
    }
 
    /**
     * 割り算関数の検証
     */
    public function testDivide() {
        // 引数に6,2を渡すと3が返ってくることを確認する
        $this->assertEquals(3, $this->object->divide(6, 2));
        // 引数に6,6を渡すと1が返ってくることを確認する
        $this->assertEquals(1, $this->object->divide(6, 6));
    }
}
