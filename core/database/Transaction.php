<?php
/**
 * @copyright (C)2016-2099 Hnaoyun Inc.
 * @author gzu-liyujiang
 * @email gzu-liyujiang@foxmail.com
 * @date 2026年4月23日
 */
namespace core\database;

/**
 * 数据库事务接口
 */
interface Transaction
{
    /**
     * 事务开始
     */
    public function begin();

    /**
     * 事务提交
     */
    public function commit();

    /**
     * 事务回滚
     */
    public function rollback();

}