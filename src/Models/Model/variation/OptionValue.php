<?php
/**
 * Created by PhpStorm.
 * User: wangxionghao
 * Date: 2016/12/3
 * Time: 下午7:48
 */

namespace Horus\Models\Model\Variation;


class OptionValue implements OptionValueInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * 属性值的描述信息
     * @var string
     */
    protected $value;

    /**
     * 删除时间
     * @var \DateTime
     */
    protected $deleteAt;

    /**
     * 属性的优先级
     * @var int
     */
    protected $priority;

    /**
     * 属性的品类
     * @var Option
     */
    protected $option;
    
    public function __construct()
    {
        $this->deleteAt = NULL;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return \DateTime
     */
    public function getDeleteAt()
    {
        return $this->deleteAt;
    }

    /**
     * @param \DateTime $deleteAt
     */
    public function setDeleteAt($deleteAt)
    {
        $this->deleteAt = $deleteAt;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return Option
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param OptionInterface $option
     */
    public function setOption(OptionInterface $option)
    {
        $this->option = $option;
    }

}