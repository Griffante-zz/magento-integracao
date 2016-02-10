<?php

namespace Proxies\Rest\SalesOrders;

use Proxies\Rest\RestProxyBase;

final class OrderCommentsRestProxy extends RestProxyBase {
    
    private $order_id;
    
    public function GetResourceName() {
        if (!isset($this->order_id)) {
            throw new Exception('The order ID was not specified.');
        }
        
        return "orders/{$this->order_id}/comments";
    }
    
    public function SetOrderId($order_id) {
        $this->order_id = $order_id;
    }

}
