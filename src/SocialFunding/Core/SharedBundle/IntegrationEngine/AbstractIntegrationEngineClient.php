<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 2/13/14
 * Time: 12:33 AM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine;

interface AbstractIntegrationEngineClient {

    public function findProductById($id);

    public function finalizeOrder($order);

    public function createOrder($order);

} 