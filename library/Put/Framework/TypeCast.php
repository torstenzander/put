<?php
namespace Put\Framework;

class TypeCast
{

    /**
     * @param string $value
     * @return string
     */
    public function castToString($value)
    {
        switch ($value) {
            case is_object($value):
                $returnValue = get_class($value);
                break;
        }
        return $returnValue;
    }

}
