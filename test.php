<?php

class service
{
    public function multiget($product_ids)
    {
        if (empty($product_ids)) {
            return [];
        }

        foreach ($urls as $url) {
            if (null === $url) {
                continue;
            }
            $argLists[] = [$url->to_string()];
        }

        foreach ($urls as $url) {
            if (null === $url) {
                $result[] = null;
            } else {
                $result[] = \webcore\arrays::each_value($values);
            }
        }

        return $result;
    }
}
