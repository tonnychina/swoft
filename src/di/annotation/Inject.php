<?php

namespace swoft\di\annotation;

/**
 * inject注解
 *
 * @Annotation
 * @Target({"PROPERTY"})
 *
 * @uses      Inject
 * @version   2017年08月18日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Inject
{
    /**
     * @var string 注入bean名称
     */
    private $name = "";

    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->name = $values['value'];
        }
        if (isset($values['name'])) {
            $this->name = $values['name'];
        }
    }

    /**
     * 获取bean名称
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}